<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SurvosCrawlerConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $users;
    private $routesToIgnore;
    private $maxPerRoute;
    private $baseUrl;
    private $initialPath;
    private $user;
    private $loginPath;
    private $usernameFormVariable;
    private $passwordFormVariable;
    private $plaintextPassword;
    private $submitButton;
    private $userClass;
    private $maxDepth;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function users(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['users'] = true;
        $this->users = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function routesToIgnore(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['routesToIgnore'] = true;
        $this->routesToIgnore = $value;

        return $this;
    }

    /**
     * @default 3
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function maxPerRoute($value): static
    {
        $this->_usedProperties['maxPerRoute'] = true;
        $this->maxPerRoute = $value;

        return $this;
    }

    /**
     * @default 'https://127.0.0.1:8000'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function baseUrl($value): static
    {
        $this->_usedProperties['baseUrl'] = true;
        $this->baseUrl = $value;

        return $this;
    }

    /**
     * @default '/'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function initialPath($value): static
    {
        $this->_usedProperties['initialPath'] = true;
        $this->initialPath = $value;

        return $this;
    }

    /**
     * @default 'juan@tt.com'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function user($value): static
    {
        $this->_usedProperties['user'] = true;
        $this->user = $value;

        return $this;
    }

    /**
     * @default '/login'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function loginPath($value): static
    {
        $this->_usedProperties['loginPath'] = true;
        $this->loginPath = $value;

        return $this;
    }

    /**
     * @default '_username'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function usernameFormVariable($value): static
    {
        $this->_usedProperties['usernameFormVariable'] = true;
        $this->usernameFormVariable = $value;

        return $this;
    }

    /**
     * @default '_password'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function passwordFormVariable($value): static
    {
        $this->_usedProperties['passwordFormVariable'] = true;
        $this->passwordFormVariable = $value;

        return $this;
    }

    /**
     * @default 'password'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function plaintextPassword($value): static
    {
        $this->_usedProperties['plaintextPassword'] = true;
        $this->plaintextPassword = $value;

        return $this;
    }

    /**
     * @default '.btn'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function submitButton($value): static
    {
        $this->_usedProperties['submitButton'] = true;
        $this->submitButton = $value;

        return $this;
    }

    /**
     * @default 'App\\Entity\\User'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function userClass($value): static
    {
        $this->_usedProperties['userClass'] = true;
        $this->userClass = $value;

        return $this;
    }

    /**
     * @default 1
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function maxDepth($value): static
    {
        $this->_usedProperties['maxDepth'] = true;
        $this->maxDepth = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'survos_crawler';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('users', $value)) {
            $this->_usedProperties['users'] = true;
            $this->users = $value['users'];
            unset($value['users']);
        }

        if (array_key_exists('routes_to_ignore', $value)) {
            $this->_usedProperties['routesToIgnore'] = true;
            $this->routesToIgnore = $value['routes_to_ignore'];
            unset($value['routes_to_ignore']);
        }

        if (array_key_exists('max_per_route', $value)) {
            $this->_usedProperties['maxPerRoute'] = true;
            $this->maxPerRoute = $value['max_per_route'];
            unset($value['max_per_route']);
        }

        if (array_key_exists('base_url', $value)) {
            $this->_usedProperties['baseUrl'] = true;
            $this->baseUrl = $value['base_url'];
            unset($value['base_url']);
        }

        if (array_key_exists('initial_path', $value)) {
            $this->_usedProperties['initialPath'] = true;
            $this->initialPath = $value['initial_path'];
            unset($value['initial_path']);
        }

        if (array_key_exists('user', $value)) {
            $this->_usedProperties['user'] = true;
            $this->user = $value['user'];
            unset($value['user']);
        }

        if (array_key_exists('login_path', $value)) {
            $this->_usedProperties['loginPath'] = true;
            $this->loginPath = $value['login_path'];
            unset($value['login_path']);
        }

        if (array_key_exists('username_form_variable', $value)) {
            $this->_usedProperties['usernameFormVariable'] = true;
            $this->usernameFormVariable = $value['username_form_variable'];
            unset($value['username_form_variable']);
        }

        if (array_key_exists('password_form_variable', $value)) {
            $this->_usedProperties['passwordFormVariable'] = true;
            $this->passwordFormVariable = $value['password_form_variable'];
            unset($value['password_form_variable']);
        }

        if (array_key_exists('plaintext_password', $value)) {
            $this->_usedProperties['plaintextPassword'] = true;
            $this->plaintextPassword = $value['plaintext_password'];
            unset($value['plaintext_password']);
        }

        if (array_key_exists('submit_button', $value)) {
            $this->_usedProperties['submitButton'] = true;
            $this->submitButton = $value['submit_button'];
            unset($value['submit_button']);
        }

        if (array_key_exists('user_class', $value)) {
            $this->_usedProperties['userClass'] = true;
            $this->userClass = $value['user_class'];
            unset($value['user_class']);
        }

        if (array_key_exists('max_depth', $value)) {
            $this->_usedProperties['maxDepth'] = true;
            $this->maxDepth = $value['max_depth'];
            unset($value['max_depth']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['users'])) {
            $output['users'] = $this->users;
        }
        if (isset($this->_usedProperties['routesToIgnore'])) {
            $output['routes_to_ignore'] = $this->routesToIgnore;
        }
        if (isset($this->_usedProperties['maxPerRoute'])) {
            $output['max_per_route'] = $this->maxPerRoute;
        }
        if (isset($this->_usedProperties['baseUrl'])) {
            $output['base_url'] = $this->baseUrl;
        }
        if (isset($this->_usedProperties['initialPath'])) {
            $output['initial_path'] = $this->initialPath;
        }
        if (isset($this->_usedProperties['user'])) {
            $output['user'] = $this->user;
        }
        if (isset($this->_usedProperties['loginPath'])) {
            $output['login_path'] = $this->loginPath;
        }
        if (isset($this->_usedProperties['usernameFormVariable'])) {
            $output['username_form_variable'] = $this->usernameFormVariable;
        }
        if (isset($this->_usedProperties['passwordFormVariable'])) {
            $output['password_form_variable'] = $this->passwordFormVariable;
        }
        if (isset($this->_usedProperties['plaintextPassword'])) {
            $output['plaintext_password'] = $this->plaintextPassword;
        }
        if (isset($this->_usedProperties['submitButton'])) {
            $output['submit_button'] = $this->submitButton;
        }
        if (isset($this->_usedProperties['userClass'])) {
            $output['user_class'] = $this->userClass;
        }
        if (isset($this->_usedProperties['maxDepth'])) {
            $output['max_depth'] = $this->maxDepth;
        }

        return $output;
    }

}
