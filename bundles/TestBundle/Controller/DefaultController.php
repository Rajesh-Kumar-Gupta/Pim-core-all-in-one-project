<?php

namespace TestBundle\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends FrontendController
{
    /**
     * @Route("/test")
     */
    public function indexAction(Request $request)
    {
        //return new Response('Hello world from test');
        return $this->render('@TestBundle/home.html.twig');
    }

    public function footerAction(Request $request)
    {
        return $this->render('@TestBundle/includes/footer.html.twig');
    }

}
