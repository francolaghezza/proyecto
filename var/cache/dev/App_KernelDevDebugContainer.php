<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDnTE6sU\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDnTE6sU/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDnTE6sU.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDnTE6sU\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDnTE6sU\App_KernelDevDebugContainer([
    'container.build_hash' => 'DnTE6sU',
    'container.build_id' => '69ac73b2',
    'container.build_time' => 1589799174,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDnTE6sU');
