<?php

namespace App\Controller;

use Pimcore\Model\DataObject;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use \Pimcore\Controller\FrontendController;


class CustomRestController extends FrontendController
{
    /**
     * @Route("/hello")
     */
    public function defaultAction(Request $request)
    {
        // do some authorization here ...
        return new response('test');
    }
    /**
     * @Route("/TestMe")
     */
    public function testAction()
    {
        # code...
        $data[] = array(
            "title" => 'Test Title',
            "description" => 'Test Description',
            "tags" => 'Test Tags');

    return $this->json(["success" => true,"data" => $data]);
    }
}
