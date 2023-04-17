<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ContentController extends FrontendController
{
    /**
     * @Template
     */
    public function defaultAction(Request $request)
    {
        return [];
    }

    public function productAction(Request $request)
    {
        return $this->render('content/default.html.twig');
    }
    public function testAction(Request $request)
    {
       return $this->render('content/test.html.twig');
    }

}