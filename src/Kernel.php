<?php

namespace ITB\BoxTest;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\Routing\RouteCollection;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    /**
     * @return string
     */
    public function getProjectDir(): string
    {
        return __DIR__ . '/../';
    }

    /**
     * @param LoaderInterface $loader
     * @return RouteCollection
     */
    public function loadRoutes(LoaderInterface $loader): RouteCollection
    {
        return new RouteCollection();
    }
}
