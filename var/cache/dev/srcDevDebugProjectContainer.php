<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJZxeZE0\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJZxeZE0/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerJZxeZE0.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerJZxeZE0\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerJZxeZE0\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'JZxeZE0',
    'container.build_id' => '7b2f8413',
    'container.build_time' => 1544017767,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerJZxeZE0');
