<?php

namespace Pdir\SocialFeedBundle\Controller;

use Pdir\SocialFeedBundle\EventListener\SocialFeedListener;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

/**
 * @Route("/auth", defaults={"_scope" = "backend", "_token_check" = false})
 */
class LinkedinController
{
    /**
     * @Route("/linkedin", name="linkedin_auth", methods={"GET"})
     */
    public function authAction(Request $request): Response
    {
        $sessionData = $this->session->get(SocialFeedListener::SESSION_KEY);

        return new RedirectResponse($sessionData['backUrl']);
    }
}
