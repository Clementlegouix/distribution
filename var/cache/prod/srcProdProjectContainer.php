<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZZ1zncC\srcProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZZ1zncC/srcProdProjectContainer.php') {
    touch(__DIR__.'/ContainerZZ1zncC.legacy');

    return;
}

if (!\class_exists(srcProdProjectContainer::class, false)) {
    \class_alias(\ContainerZZ1zncC\srcProdProjectContainer::class, srcProdProjectContainer::class, false);
}

return new \ContainerZZ1zncC\srcProdProjectContainer(array(
    'container.build_hash' => 'ZZ1zncC',
    'container.build_id' => 'aff8361a',
    'container.build_time' => 1517223075,
));