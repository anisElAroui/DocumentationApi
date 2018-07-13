<?php

namespace SmartPos\Bundle\DocBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @author Bez Hermoso <bez@activelamp.com>
 */
class SwaggerController extends Controller
{
    /**
     * @Route("/", name="api_doc_index")
     *
     * @Template("@Doc/index.html.twig")
     */
    public function indexAction()
    {
        $jsConfig = $this->get('service_container')->getParameter('js_config');

        return array('js_config' => $jsConfig);
    }
}
