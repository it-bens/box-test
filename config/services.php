<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return function (ContainerConfigurator $containerConfigurator) {
    // default configuration for services in *this* file
    $services = $containerConfigurator->services()
        ->defaults()
        ->autowire()      // Automatically injects dependencies in your services.
        ->autoconfigure() // Automatically registers your services as commands, event subscribers, etc.
    ;

    if ('prod' === $containerConfigurator->env()) {
        $containerConfigurator->parameters()->set('container.dumper.inline_factories', true);
    }
};
