<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYYN5x2z\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYYN5x2z/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerYYN5x2z.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerYYN5x2z\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerYYN5x2z\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'YYN5x2z',
    'container.build_id' => '278ab3b9',
    'container.build_time' => 1518016780,
));
