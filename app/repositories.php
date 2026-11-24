<?php

declare(strict_types=1);

use function DI\autowire;

use DI\ContainerBuilder;

return function (ContainerBuilder $containerBuilder) {
    // Repository-mappningar
    $containerBuilder->addDefinitions([
 //       UserRepository::class => autowire(DbalUserRepository::class),
    ]);
};
