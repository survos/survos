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

/* @SurvosMaker/skeleton/Menu/MenuEventSubscriber.tpl.twig */
class __TwigTemplate_ecadfbc61a52ac91be7e513a896bcd7f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosMaker/skeleton/Menu/MenuEventSubscriber.tpl.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosMaker/skeleton/Menu/MenuEventSubscriber.tpl.twig"));

        // line 1
        echo "<?= \"<?php\\n\" ?>

namespace <?= \$namespace ?>;

<?= \$use_statements; ?>


<?php

namespace App\\EventListener;

use Survos\\BootstrapBundle\\Event\\KnpMenuEvent;
use Survos\\BootstrapBundle\\Traits\\KnpMenuHelperTrait;
use Symfony\\Component\\EventDispatcher\\Attribute\\AsEventListener;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface;

#[AsEventListener(event: KnpMenuEvent::SIDEBAR_MENU_EVENT, method: 'appSidebarMenu')]
#[AsEventListener(event: KnpMenuEvent::SIDEBAR_MENU_EVENT, method: 'coreMenu')]
#[AsEventListener(event: KnpMenuEvent::PAGE_MENU_EVENT, method: 'coreMenu')]
final class AppMenuEventListener
{
    use KnpMenuHelperTrait;

    public function __construct(
        private ProfileService \$profileService,
        private ?AuthorizationCheckerInterface \$security=null)
    {
        \$this->setAuthorizationChecker(\$this->security);
}

public function coreMenu(KnpMenuEvent \$event): void
{

class <?= \$class_name ?> implements EventSubscriberInterface <?= \"\\n\" ?>
{
    use KnpMenuHelperTrait;

    public function __construct(private ?AuthorizationCheckerInterface \$security=null)
    {
    }

    public function onMenuEvent(KnpMenuEvent \$event): void
    {
        \$menu = \$event->getMenu();
        \$options = \$event->getOptions();

        \$this->addMenuItem(\$menu, ['route' => 'app_homepage']);
        // for nested menus, don't add a route, just a label, then use it for the argument to addMenuItem
        \$nestedMenu = \$this->addMenuItem(\$menu, ['label' => 'Credits']);
        foreach (['bundles', 'javascript'] as \$type) {
            // \$this->addMenuItem(\$nestedMenu, ['route' => 'survos_base_credits', 'rp' => ['type' => \$type], 'label' => ucfirst(\$type)]);
            \$this->addMenuItem(\$nestedMenu, ['uri' => \"#\$type\" , 'label' => ucfirst(\$type)]);
        }

    }

    /*
    * @return array The event names to listen to
    */
    public static function getSubscribedEvents()
    {
        return [
            KnpMenuEvent::MENU_EVENT => 'onMenuEvent',
        ];
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosMaker/skeleton/Menu/MenuEventSubscriber.tpl.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?= \"<?php\\n\" ?>

namespace <?= \$namespace ?>;

<?= \$use_statements; ?>


<?php

namespace App\\EventListener;

use Survos\\BootstrapBundle\\Event\\KnpMenuEvent;
use Survos\\BootstrapBundle\\Traits\\KnpMenuHelperTrait;
use Symfony\\Component\\EventDispatcher\\Attribute\\AsEventListener;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface;

#[AsEventListener(event: KnpMenuEvent::SIDEBAR_MENU_EVENT, method: 'appSidebarMenu')]
#[AsEventListener(event: KnpMenuEvent::SIDEBAR_MENU_EVENT, method: 'coreMenu')]
#[AsEventListener(event: KnpMenuEvent::PAGE_MENU_EVENT, method: 'coreMenu')]
final class AppMenuEventListener
{
    use KnpMenuHelperTrait;

    public function __construct(
        private ProfileService \$profileService,
        private ?AuthorizationCheckerInterface \$security=null)
    {
        \$this->setAuthorizationChecker(\$this->security);
}

public function coreMenu(KnpMenuEvent \$event): void
{

class <?= \$class_name ?> implements EventSubscriberInterface <?= \"\\n\" ?>
{
    use KnpMenuHelperTrait;

    public function __construct(private ?AuthorizationCheckerInterface \$security=null)
    {
    }

    public function onMenuEvent(KnpMenuEvent \$event): void
    {
        \$menu = \$event->getMenu();
        \$options = \$event->getOptions();

        \$this->addMenuItem(\$menu, ['route' => 'app_homepage']);
        // for nested menus, don't add a route, just a label, then use it for the argument to addMenuItem
        \$nestedMenu = \$this->addMenuItem(\$menu, ['label' => 'Credits']);
        foreach (['bundles', 'javascript'] as \$type) {
            // \$this->addMenuItem(\$nestedMenu, ['route' => 'survos_base_credits', 'rp' => ['type' => \$type], 'label' => ucfirst(\$type)]);
            \$this->addMenuItem(\$nestedMenu, ['uri' => \"#\$type\" , 'label' => ucfirst(\$type)]);
        }

    }

    /*
    * @return array The event names to listen to
    */
    public static function getSubscribedEvents()
    {
        return [
            KnpMenuEvent::MENU_EVENT => 'onMenuEvent',
        ];
    }
}
", "@SurvosMaker/skeleton/Menu/MenuEventSubscriber.tpl.twig", "/home/tac/g/survos/survos/demo/grid-demo/vendor/survos/maker-bundle/templates/skeleton/Menu/MenuEventSubscriber.tpl.twig");
    }
}
