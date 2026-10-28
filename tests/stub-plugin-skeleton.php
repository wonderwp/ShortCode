<?php

declare(strict_types=1);

/**
 * Minimal PluginSkeleton stubs so AbstractService (wonderwp/service) can load in
 * isolated CI without installing the full plugin-skeleton dependency tree.
 */
namespace WonderWp\Component\PluginSkeleton {
    if (!interface_exists(ManagerInterface::class)) {
        interface ManagerInterface
        {
        }
    }

    if (!interface_exists(ManagerAwareInterface::class)) {
        interface ManagerAwareInterface
        {
            public function getManager(): ManagerInterface;

            public function setManager(ManagerInterface $manager): static;
        }
    }

    if (!class_exists(AbstractManager::class)) {
        abstract class AbstractManager implements ManagerInterface
        {
        }
    }

    if (!trait_exists(ManagerAwareTrait::class)) {
        trait ManagerAwareTrait
        {
            /** @var AbstractManager|null */
            protected $manager;

            public function getManager(): ManagerInterface
            {
                return $this->manager;
            }

            public function setManager(ManagerInterface $manager): static
            {
                $this->manager = $manager;

                return $this;
            }
        }
    }
}

namespace WonderWp\Component\PluginSkeleton\Service {
    if (!interface_exists(RegistrableInterface::class)) {
        interface RegistrableInterface
        {
            public function register();
        }
    }
}
