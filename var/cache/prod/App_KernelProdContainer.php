<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCF7Y3NX\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCF7Y3NX/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerCF7Y3NX.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerCF7Y3NX\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerCF7Y3NX\App_KernelProdContainer([
    'container.build_hash' => 'CF7Y3NX',
    'container.build_id' => 'f55a8cfc',
    'container.build_time' => 1721717693,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCF7Y3NX');
