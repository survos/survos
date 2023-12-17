<?php

namespace Container57M1xJi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGajusIndenterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'gajus_indenter' shared autowired service.
     *
     * @return \Gajus\Dindent\Indenter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/gajus/dindent/src/Indenter.php';

        return $container->services['gajus_indenter'] = new \Gajus\Dindent\Indenter(['indentation_character' => '    ']);
    }
}