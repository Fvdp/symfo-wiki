<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerELS8ZUx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerELS8ZUx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerELS8ZUx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerELS8ZUx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerELS8ZUx\App_KernelDevDebugContainer([
    'container.build_hash' => 'ELS8ZUx',
    'container.build_id' => '224ce8c1',
    'container.build_time' => 1635780220,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerELS8ZUx');