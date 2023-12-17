<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @SurvosMaker/skeleton/crud/controller/CollectionController.tpl.php */
class __TwigTemplate_843001c4e7d70aec35779f100deceae0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosMaker/skeleton/crud/controller/CollectionController.tpl.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosMaker/skeleton/crud/controller/CollectionController.tpl.php"));

        // line 1
        echo "<?= \"<?php\\n\" ?>

<?php \$entity_identifier = \$entity_var_singular . 'Id'; ?>

// uses Survos Param Converter, from the UniqueIdentifiers method of the entity.

namespace <?= \$namespace ?>;

use <?= \$entity_full_class_name ?>;
use <?= \$form_full_class_name ?>;
use Doctrine\\ORM\\EntityManagerInterface;
<?php if (isset(\$repository_full_class_name)): ?>
use <?= \$repository_full_class_name ?>;
<?php endif ?>
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\Annotation\\Route;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController;
use Survos\\WorkflowBundle\\Traits\\HandleTransitionsTrait;

#[Route('<?= \$route_path ?>')]
class <?= \$class_name ?> extends AbstractController<?= \"\\n\" ?>
{

use HandleTransitionsTrait;

const PLACE_NEW = 'new';

public function __construct(private EntityManagerInterface \$entityManager) {
   \$this->marking = self::PLACE_NEW;

}

#[Route(path: '/list/{marking}', name: '<?= \$route_name ?>_browse', methods: ['GET'])]
public function browse(string \$marking=<?= \$entity_class_name ?>::PLACE_NEW): Response
{
\$class = <?= \$entity_class_name ?>::class;
// WorkflowInterface \$projectStateMachine
\$markingData = []; // \$this->workflowHelperService->getMarkingData(\$projectStateMachine, \$class);

return \$this->render('<?= \$templates_path ?>/browse.html.twig', [
'class' => \$class,
'marking' => \$marking,
'filter' => [],
//            'owner' => \$owner,
]);
}

#[Route('/index', name: '<?= \$route_name ?>_index')]
    public function index(<?= \$repository_class_name ?> \$<?= \$repository_var ?>): Response
    {
        return \$this->render('<?= \$templates_path ?>/index.html.twig', [
            '<?= \$entity_twig_var_plural ?>' => \$<?= \$repository_var ?>->findBy([], [], 30),
        ]);
    }

#[Route('<?= \$route_name ?>/new', name: '<?= \$route_name ?>_new')]
    public function new(Request \$request): Response
    {
        \$<?= \$entity_var_singular ?> = new <?= \$entity_class_name ?>();
        \$form = \$this->createForm(<?= \$form_class_name ?>::class, \$<?= \$entity_var_singular ?>);
        \$form->handleRequest(\$request);

        if (\$form->isSubmitted() && \$form->isValid()) {
            \$entityManager = \$this->entityManager;
            \$entityManager->persist(\$<?= \$entity_var_singular ?>);
            \$entityManager->flush();

            return \$this->redirectToRoute('<?= \$route_name ?>_index');
        }

        return \$this->render('<?= \$templates_path ?>/new.html.twig', [
            '<?= \$entity_twig_var_singular ?>' => \$<?= \$entity_var_singular ?>,
            'form' => \$form->createView(),
        ]);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosMaker/skeleton/crud/controller/CollectionController.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?= \"<?php\\n\" ?>

<?php \$entity_identifier = \$entity_var_singular . 'Id'; ?>

// uses Survos Param Converter, from the UniqueIdentifiers method of the entity.

namespace <?= \$namespace ?>;

use <?= \$entity_full_class_name ?>;
use <?= \$form_full_class_name ?>;
use Doctrine\\ORM\\EntityManagerInterface;
<?php if (isset(\$repository_full_class_name)): ?>
use <?= \$repository_full_class_name ?>;
<?php endif ?>
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\Annotation\\Route;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController;
use Survos\\WorkflowBundle\\Traits\\HandleTransitionsTrait;

#[Route('<?= \$route_path ?>')]
class <?= \$class_name ?> extends AbstractController<?= \"\\n\" ?>
{

use HandleTransitionsTrait;

const PLACE_NEW = 'new';

public function __construct(private EntityManagerInterface \$entityManager) {
   \$this->marking = self::PLACE_NEW;

}

#[Route(path: '/list/{marking}', name: '<?= \$route_name ?>_browse', methods: ['GET'])]
public function browse(string \$marking=<?= \$entity_class_name ?>::PLACE_NEW): Response
{
\$class = <?= \$entity_class_name ?>::class;
// WorkflowInterface \$projectStateMachine
\$markingData = []; // \$this->workflowHelperService->getMarkingData(\$projectStateMachine, \$class);

return \$this->render('<?= \$templates_path ?>/browse.html.twig', [
'class' => \$class,
'marking' => \$marking,
'filter' => [],
//            'owner' => \$owner,
]);
}

#[Route('/index', name: '<?= \$route_name ?>_index')]
    public function index(<?= \$repository_class_name ?> \$<?= \$repository_var ?>): Response
    {
        return \$this->render('<?= \$templates_path ?>/index.html.twig', [
            '<?= \$entity_twig_var_plural ?>' => \$<?= \$repository_var ?>->findBy([], [], 30),
        ]);
    }

#[Route('<?= \$route_name ?>/new', name: '<?= \$route_name ?>_new')]
    public function new(Request \$request): Response
    {
        \$<?= \$entity_var_singular ?> = new <?= \$entity_class_name ?>();
        \$form = \$this->createForm(<?= \$form_class_name ?>::class, \$<?= \$entity_var_singular ?>);
        \$form->handleRequest(\$request);

        if (\$form->isSubmitted() && \$form->isValid()) {
            \$entityManager = \$this->entityManager;
            \$entityManager->persist(\$<?= \$entity_var_singular ?>);
            \$entityManager->flush();

            return \$this->redirectToRoute('<?= \$route_name ?>_index');
        }

        return \$this->render('<?= \$templates_path ?>/new.html.twig', [
            '<?= \$entity_twig_var_singular ?>' => \$<?= \$entity_var_singular ?>,
            'form' => \$form->createView(),
        ]);
    }
}
", "@SurvosMaker/skeleton/crud/controller/CollectionController.tpl.php", "/home/tac/g/survos/survos/demo/grid-demo/vendor/survos/maker-bundle/templates/skeleton/crud/controller/CollectionController.tpl.php");
    }
}
