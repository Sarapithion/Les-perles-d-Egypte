<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZKOihSZ\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZKOihSZ/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerZKOihSZ.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerZKOihSZ\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerZKOihSZ\App_KernelProdContainer([
    'container.build_hash' => 'ZKOihSZ',
    'container.build_id' => 'ddf97719',
    'container.build_time' => 1728168927,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZKOihSZ');