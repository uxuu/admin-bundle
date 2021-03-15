<?php

/*
 *
 */

namespace Ux\Bundle\AdminBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Controller used to manage the application security.
 */
class SecurityController extends AbstractController
{
	/**
	 * @Route("/login", methods={"GET"})
	 */
	public function loginAction(Request $request, AuthenticationUtils $authenticationUtils)
	{
		if ($this->getUser()) {
			return $this->redirectToRoute("ux_admin_admin_index");
		}
		return $this->render('@UxAdmin/security/login_v2.html.twig', [
			// last username entered by the user (if any)
			'last_username' => $authenticationUtils->getLastUsername(),
			// last authentication error (if any)
			'error' => $authenticationUtils->getLastAuthenticationError(),
			'target_path' => $request->getSession()->get('_security.secured_area.target_path'),
		]);
	}

	/**
	 * This is the route the login form submits to.
	 *
	 * But, this will never be executed. Symfony will intercept this first
	 * and handle the login automatically. See form_login in app/config/security.yml
	 *
	 * @Route("/login_check")
	 */
	public function loginCheckAction()
	{
		throw new \Exception('This should never be reached!');
	}

	/**
	 * This is the route the user can use to logout.
	 *
	 * But, this will never be executed. Symfony will intercept this first
	 * and handle the logout automatically. See logout in app/config/security.yml
	 *
	 * @Route("/logout")
	 */
	public function logoutAction()
	{
		throw new \Exception('This should never be reached!');
	}
}
