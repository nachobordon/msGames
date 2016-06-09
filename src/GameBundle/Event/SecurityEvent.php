<?php

namespace GameBundle\Event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;

class SecurityEvent implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            KernelEvents::REQUEST => array(
                array('processRequest', 10),
            )
        );
    }

    public function processRequest(GetResponseEvent $event)
    {
        throw new AccessDeniedException();
    }
}