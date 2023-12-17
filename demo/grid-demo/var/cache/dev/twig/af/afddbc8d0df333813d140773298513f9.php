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

/* @SurvosMaker/skeleton/crud/controller/Controller.tpl.php */
class __TwigTemplate_57de9721acdda10b1eb3a5ea5f9a3e62 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosMaker/skeleton/crud/controller/Controller.tpl.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosMaker/skeleton/crud/controller/Controller.tpl.php"));

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
use Symfony\\Component\\Workflow\\WorkflowInterface;

#[Route('<?= \$route_path ?>/{<?= \$entity_identifier ?>}')]
class <?= \$class_name ?> extends AbstractController <?= \"\\n\" ?>
{

public function __construct(private EntityManagerInterface \$entityManager) {

}

#[Route(path: '/transition/{transition}', name: '<?= \$entity_var_singular?>_transition')]
public function transition(Request \$request, WorkflowInterface \$<?= \$entity_var_singular ?>StateMachine, string \$transition, <?= \$entity_class_name ?> \$<?= \$entity_var_singular ?>): Response
{
if (\$transition === '_') {
\$transition = \$request->request->get('transition'); // the _ is a hack to display the form, @todo: cleanup
}

\$this->handleTransitionButtons(\$<?= \$entity_twig_var_singular ?>StateMachine, \$transition, \$<?= \$entity_twig_var_singular ?>);
\$this->entityManager->flush(); // to save the marking
return \$this->redirectToRoute('<?= \$entity_twig_var_singular ?>_show', \$<?= \$entity_twig_var_singular ?>->getRP());
}

#[Route('/', name: '<?= \$route_name ?>_show', options: ['expose' => true])]
    public function show(<?= \$entity_class_name ?> \$<?= \$entity_var_singular ?>): Response
    {
        return \$this->render('<?= \$templates_path ?>/show.html.twig', [
            '<?= \$entity_twig_var_singular ?>' => \$<?= \$entity_var_singular ?>,
        ]);
    }

#[Route('/edit', name: '<?= \$route_name ?>_edit', options: ['expose' => true])]
    public function edit(Request \$request, <?= \$entity_class_name ?> \$<?= \$entity_var_singular ?>): Response
    {
        \$form = \$this->createForm(<?= \$form_class_name ?>::class, \$<?= \$entity_var_singular ?>);
        \$form->handleRequest(\$request);

        if (\$form->isSubmitted() && \$form->isValid()) {
            \$this->entityManager->flush();

            return \$this->redirectToRoute('<?= \$route_name ?>_index');
        }

        return \$this->render('<?= \$templates_path ?>/edit.html.twig', [
            '<?= \$entity_twig_var_singular ?>' => \$<?= \$entity_var_singular ?>,
            'form' => \$form->createView(),
        ]);
    }

#[Route('/delete', name: '<?= \$route_name ?>_delete', methods:['DELETE'])]
    public function delete(Request \$request, <?= \$entity_class_name ?> \$<?= \$entity_var_singular ?>): Response
    {
        // hard-coded to getId, should be get parameter of uniqueIdentifiers()
        if (\$this->isCsrfTokenValid('delete'.\$<?= \$entity_var_singular ?>->getId(), \$request->request->get('_token'))) {
            \$entityManager = \$this->entityManager;
            \$entityManager->remove(\$<?= \$entity_var_singular ?>);
            \$entityManager->flush();
        }

        return \$this->redirectToRoute('<?= \$route_name ?>_index');
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosMaker/skeleton/crud/controller/Controller.tpl.php";
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
use Symfony\\Component\\Workflow\\WorkflowInterface;

#[Route('<?= \$route_path ?>/{<?= \$entity_identifier ?>}')]
class <?= \$class_name ?> extends AbstractController <?= \"\\n\" ?>
{

public function __construct(private EntityManagerInterface \$entityManager) {

}

#[Route(path: '/transition/{transition}', name: '<?= \$entity_var_singular?>_transition')]
public function transition(Request \$request, WorkflowInterface \$<?= \$entity_var_singular ?>StateMachine, string \$transition, <?= \$entity_class_name ?> \$<?= \$entity_var_singular ?>): Response
{
if (\$transition === '_') {
\$transition = \$request->request->get('transition'); // the _ is a hack to display the form, @todo: cleanup
}

\$this->handleTransitionButtons(\$<?= \$entity_twig_var_singular ?>StateMachine, \$transition, \$<?= \$entity_twig_var_singular ?>);
\$this->entityManager->flush(); // to save the marking
return \$this->redirectToRoute('<?= \$entity_twig_var_singular ?>_show', \$<?= \$entity_twig_var_singular ?>->getRP());
}

#[Route('/', name: '<?= \$route_name ?>_show', options: ['expose' => true])]
    public function show(<?= \$entity_class_name ?> \$<?= \$entity_var_singular ?>): Response
    {
        return \$this->render('<?= \$templates_path ?>/show.html.twig', [
            '<?= \$entity_twig_var_singular ?>' => \$<?= \$entity_var_singular ?>,
        ]);
    }

#[Route('/edit', name: '<?= \$route_name ?>_edit', options: ['expose' => true])]
    public function edit(Request \$request, <?= \$entity_class_name ?> \$<?= \$entity_var_singular ?>): Response
    {
        \$form = \$this->createForm(<?= \$form_class_name ?>::class, \$<?= \$entity_var_singular ?>);
        \$form->handleRequest(\$request);

        if (\$form->isSubmitted() && \$form->isValid()) {
            \$this->entityManager->flush();

            return \$this->redirectToRoute('<?= \$route_name ?>_index');
        }

        return \$this->render('<?= \$templates_path ?>/edit.html.twig', [
            '<?= \$entity_twig_var_singular ?>' => \$<?= \$entity_var_singular ?>,
            'form' => \$form->createView(),
        ]);
    }

#[Route('/delete', name: '<?= \$route_name ?>_delete', methods:['DELETE'])]
    public function delete(Request \$request, <?= \$entity_class_name ?> \$<?= \$entity_var_singular ?>): Response
    {
        // hard-coded to getId, should be get parameter of uniqueIdentifiers()
        if (\$this->isCsrfTokenValid('delete'.\$<?= \$entity_var_singular ?>->getId(), \$request->request->get('_token'))) {
            \$entityManager = \$this->entityManager;
            \$entityManager->remove(\$<?= \$entity_var_singular ?>);
            \$entityManager->flush();
        }

        return \$this->redirectToRoute('<?= \$route_name ?>_index');
    }
}
", "@SurvosMaker/skeleton/crud/controller/Controller.tpl.php", "/home/tac/g/survos/survos/demo/grid-demo/vendor/survos/maker-bundle/templates/skeleton/crud/controller/Controller.tpl.php");
    }
}
