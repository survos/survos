<?php

namespace PhenxBundle\Controller;

use PhenxBundle\Entity\Variable;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Variable controller.
 *
 * @Route("variable")
 */
class VariableController extends Controller
{
    /**
     * Lists all variable entities.
     *
     * @Route("/", name="variable_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $variables = $em->getRepository('PhenxBundle:Variable')->findBy([], [], 20);

        return $this->render('variable/index.html.twig', array(
            'variables' => $variables,
        ));
    }

    /**
     * Finds and displays a variable entity.
     *
     * @Route("/{id}", name="variable_show")
     * @Method("GET")
     */
    public function showAction(Variable $variable)
    {

        return $this->render('variable/show.html.twig', array(
            'variable' => $variable,
        ));
    }
}
