<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container0Fu2fbS\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container0Fu2fbS/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container0Fu2fbS.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container0Fu2fbS\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container0Fu2fbS\App_KernelDevDebugContainer([
    'container.build_hash' => '0Fu2fbS',
    'container.build_id' => '8664992f',
    'container.build_time' => 1588083910,
], __DIR__.\DIRECTORY_SEPARATOR.'Container0Fu2fbS');
