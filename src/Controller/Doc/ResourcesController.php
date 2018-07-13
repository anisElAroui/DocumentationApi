<?php

namespace App\Controller\Doc;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ResourcesController
 * @package SmartPos\Bundle\DocBundle\Controller
 */
class ResourcesController extends Controller
{
    /**
     *
     * @Route("/resources", name="api_docs_resources")
     *
     * @return Response
     */
    public function resourcesAction()
    {
        $resources = $this->render('Resources/resources.json.twig')->getContent();

        $response = new Response($resources);
        $response->headers->set('Content-type', 'application/json');

        return $response;
    }
}
