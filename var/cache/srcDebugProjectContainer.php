<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTjqUjnE\srcDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTjqUjnE/srcDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerTjqUjnE.legacy');

    return;
}

if (!\class_exists(srcDebugProjectContainer::class, false)) {
    \class_alias(\ContainerTjqUjnE\srcDebugProjectContainer::class, srcDebugProjectContainer::class, false);
}

return new \ContainerTjqUjnE\srcDebugProjectContainer(array(
    'container.build_hash' => 'TjqUjnE',
    'container.build_id' => '3f256535',
    'container.build_time' => 1517487201,
));
