<?php

namespace Survos\AuthBundle\Command;

use Doctrine\ORM\EntityManagerInterface;
use Survos\AuthBundle\Event\UserCreatedEvent;
use Symfony\Component\Cache\CacheItem;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\Exception\UserNotFoundException;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\EventDispatcher\Event;

#[AsCommand(
    name: 'survos:user:create', description: 'create a new user with a password'
)]
class UserCreateCommand extends Command
{
    public function __construct(
        private UserPasswordHasherInterface $passwordEncoder,
        private UserProviderInterface $userProvider,
        private EventDispatcherInterface $eventDispatcher,
        private EntityManagerInterface $entityManager,
        private CacheInterface $cache,
        //                                private AuthService                 $baseService,
        //                                private  $baseBundleConfig,
        ?string $name = null
    ) {
        parent::__construct($name);
    }

    protected function configure(): void
    {
        $this
            ->addArgument('email', InputArgument::REQUIRED, 'email address of account')
            ->addArgument('password', InputArgument::OPTIONAL, 'Plain text password')
            ->addOption('roles', null, InputOption::VALUE_OPTIONAL, 'comma-delimited list of roles')
            ->addOption('password', null, InputOption::VALUE_NONE, 'Update password')
            ->addOption('username', null, InputOption::VALUE_OPTIONAL, 'username (defaults to email)')
            ->addOption('userclass', null, InputOption::VALUE_OPTIONAL, 'user class', 'App\\Entity\\User')
            ->addOption('extra', null, InputOption::VALUE_OPTIONAL, 'extra string passed to event dispatcher')
            ->addOption('force', null, InputOption::VALUE_NONE, 'Change password/roles if account exists.');
    }

    private function hashPassword(string $plainTextPassword, $user): string
    {
        return $this->cache->get($plainTextPassword, fn(CacheItem $item) => $this->passwordEncoder->hashPassword($user, $plainTextPassword));

    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $action = 'no-action';
        $force = $input->getOption('force');
        $password = $input->getOption('password');
        $email = $input->getArgument('email');
        $username = $input->getOption('username') ?: $email;

        //        throw new \Exception($this->baseBundleConfig->)

        try {
            // security.yaml defines what field this is!
            $user = $this->userProvider->loadUserByIdentifier($username);
            if (! $password && ! $input->getOption('roles')) {
                $io->warning("$email already exists, use --password to overwrite the existing password");
            //                return self::SUCCESS;
            } else {
                $action = 'updated';
            }
        } catch (UserNotFoundException $usernameNotFoundException) {
            $action = 'created';
            $userClass = ($input->getOption('userclass'));
            $user = new $userClass();
            // quite hackish!

            if ($input->getOption('username')) {
                $user->setUsername($email);
            } else {
                $user->setEmail($email);
            }
            //            if ($input->getOption('username')) {
            //                $user->setUsername($username);
            //            }
            $this->entityManager->persist($user);
        }

//        if ( (!$plainTextPassword = $input->getArgument('password')) || $password) {
//            // password prompt
//                $question = new Question('Please choose a password:');
//                $question->setValidator(function ($password) {
//                    if (empty($password)) {
//                        throw new \Exception('Password can not be empty');
//                    }
//
//                    return $password;
//                });
//                $question->setHidden(true);
//                $plainTextPassword = $this->getHelper('question')->ask($input, $output, $question);
//        }

        if ($roleString = $input->getOption('roles')) {
            $user->setRoles(explode(',', $roleString));
        }

        if ($plainTextPassword = $input->getArgument('password')) {
            $user
                ->setPassword($this->hashPassword($plainTextPassword, $user));
        }

        $this->eventDispatcher->dispatch(new UserCreatedEvent($user, $input->getOption('extra')));

        $this->entityManager->flush();

        if ($output->isVerbose()) {
            // could do a cool table here.
            $table = new Table($output);
            $table
                ->setHeaders(['Field', 'Value'])
                ->setRows([
                    ['email', $user->getEmail()],
                    ['roles', join(',', $user->getRoles())],
                ]);
            $table->render();
        }

        $io->success("User $email $action");
        return self::SUCCESS;
    }
}
