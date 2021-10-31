<?php
namespace Ux\Bundle\AdminBundle\EventListener;

use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Http\SecurityEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Stores the locale of the user in the session after the
 * login. This can be used by the LocaleListener afterwards.
 */
class UserLocaleListener implements EventSubscriberInterface
{
    /**
     * @var Session
     */
    private $session;

    public function __construct(RequestStack $requestStack)
    {
        $this->session = $requestStack->getSession();
    }

    /**
     * @param InteractiveLoginEvent $event
     */
    public function onInteractiveLogin(InteractiveLoginEvent $event)
    {
        $user = $event->getAuthenticationToken()->getUser();

        if (method_exists($user, 'getLocale') && null !== $user->getLocale()) {
            $this->session->set('_locale', $user->getLocale());
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            // must be registered after the default Locale listener
            SecurityEvents::INTERACTIVE_LOGIN => [['onInteractiveLogin']],
        ];
    }
}
