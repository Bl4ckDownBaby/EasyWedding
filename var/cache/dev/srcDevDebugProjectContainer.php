<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerL6E31Z0\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerL6E31Z0/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerL6E31Z0.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerL6E31Z0\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerL6E31Z0\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'L6E31Z0',
    'container.build_id' => '037c6ada',
    'container.build_time' => 1526629363,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerL6E31Z0');
