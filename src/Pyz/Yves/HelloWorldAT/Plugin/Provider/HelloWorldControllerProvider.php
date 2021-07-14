<?php

namespace Pyz\Yves\HelloWorldAT\Plugin\Provider;

use Spryker\Yves\Router\Plugin\RouteProvider\AbstractRouteProviderPlugin;
use Spryker\Yves\Router\Route\RouteCollection;

class HelloWorldControllerProvider extends AbstractRouteProviderPlugin
{
    const HELLO_WORLD_INDEX = 'hello-world-at-index';

    public function addRoutes(RouteCollection $routeCollection): RouteCollection
    {
        $routeCollection->add(self::HELLO_WORLD_INDEX, $this->buildGetRoute(
            'hello-world',
            'HelloWorldAT',
            'Index',
            'indexAction'
        ));

        return $routeCollection;
    }

}
