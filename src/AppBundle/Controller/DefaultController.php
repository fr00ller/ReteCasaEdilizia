<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Categoria;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }

   /**
     * @Route("/servizi", name="servizi")
     */
    public function showServiziAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/servizi.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }

	 /**
     * @Route("/admin")
     */
    public function adminAction()
    {
        return new Response('Pagina admin!');
    }



      /**
     * @Route("/categoria", name="categoria")
     */
    public function createCategorieAction(Request $request)
    {




        $cate = new Categoria();

        $form = $this->createFormBuilder($cate)
         ->add('nome', 'text')
         ->add('save', 'submit', array('label' => 'Aggiungi Categoria'))
         ->getForm();

         return $this->render('default/categorie.html.twig', array(
            'form' => $form->createView(),
        ));

        $form->handleRequest($request);

        if ($form->isValid()) {
        
        // esegue alcune azioni, come ad esempio salvare il task nella base dati

        $em = $this->getDoctrine()->getManager();
        $em->persist($cate);
        $em->flush();
        
        return $this->redirect($this->generateUrl('task_success'));



        }

       
    }
}
