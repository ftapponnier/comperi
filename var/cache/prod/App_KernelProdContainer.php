<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZJpDcdE\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZJpDcdE/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerZJpDcdE.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerZJpDcdE\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerZJpDcdE\App_KernelProdContainer([
    'container.build_hash' => 'ZJpDcdE',
    'container.build_id' => '36e21953',
    'container.build_time' => 1652720710,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZJpDcdE');
