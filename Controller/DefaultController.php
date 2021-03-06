<?php

namespace Ux\Bundle\AdminBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{

    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('@UxAdmin/index.html.twig');
    }

    /**
     * @Route("/pages/{name}")
     */
    public function pagesAction($name, Request $request)
    {
        //return $this->render("@UxAdmin/pages/$name");
        return new Response($name);
    }

}
