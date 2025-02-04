<?php

use WonderWp\Component\PluginSkeleton\Exception\ServiceNotFoundException;
use WonderWp\Component\Service\ServiceInterface;
use WonderWp\Component\PluginSkeleton\ManagerInterface;
use WonderWp\Component\DependencyInjection\Container;
use WonderWp\Component\Shortcode\ShortcodeServiceInterface;

add_action('wwp.abstract_manager.run', 'wwp_register_shortcode_service_towards_manager', 10, 2);

function wwp_register_shortcode_service_towards_manager(ManagerInterface $manager, Container $container)
{
    // ShortCode
    try {
        $shortCodeService = $manager->getService(ServiceInterface::SHORT_CODE_SERVICE_NAME);
        if ($shortCodeService instanceof ShortcodeServiceInterface) {
            $shortCodeService->register();
        }
    } catch (ServiceNotFoundException $e) {
        if ($e->getServiceType() === ServiceInterface::SHORT_CODE_SERVICE_NAME) {
            //No shortcode service found, nothing to do here for now
        } else {
            throw $e;
        }
    }
}
