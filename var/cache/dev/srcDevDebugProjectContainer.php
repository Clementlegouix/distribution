<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYM9tN6H\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYM9tN6H/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerYM9tN6H.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerYM9tN6H\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerYM9tN6H\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'YM9tN6H',
    'container.build_id' => 'e1cc50c7',
    'container.build_time' => 1517274064,
));