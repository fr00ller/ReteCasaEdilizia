<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\Ditte;

/**
 * Ditte controller.
 *
 * @Route("/ditte")
 */
class DitteController extends Controller
{

    /**
     * Lists all Ditte entities.
     *
     * @Route("/", name="ditte")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Ditte')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Ditte entity.
     *
     * @Route("/{id}", name="ditte_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Ditte')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ditte entity.');
        }

        return array(
            'entity'      => $entity,
        );
    }
}
