<?php

namespace SmartPos\Bundle\DocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
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


        $resources = $this->render('@Doc/Resources/resources.json.twig')->getContent();

        $response = new Response($resources);
        $response->headers->set('Content-type', 'application/json');

        return $response;
    }
}
