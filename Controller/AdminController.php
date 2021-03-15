<?php

namespace Ux\Bundle\AdminBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
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
        //return $this->render("@UxAdmin/color-admin/pages/$name");
        return new Response('');
    }

	/**
	 * @Route("/login_v2")
     */
    public function loginAction(Request $request, AuthenticationUtils $authenticationUtils)
	{
		return $this->render('@UxAdmin/color-admin/login_v2.html.twig', [
			// last username entered by the user (if any)
			'username' => $authenticationUtils->getLastUsername(),
			// last authentication error (if any)
			'error' => $authenticationUtils->getLastAuthenticationError(),
			'target_path' => $request->getSession()->get('_security.secured_area.target_path'),
		]);
	}
}
