<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }


//ajouté par David

    /**
     * @Route("/hello", name="hello",)

    *public function helloAction(Request $request)
    {

        return new Response('Bonjour');
    }
     */



//ajouté par David2

    /**
     * @Route("/hello/{name}", name="hello",)
     */
    public function helloAction($name)
    {

        return
            $this->render('default/hello.html.twig', array("name"=>$name)
            );
    }
}
