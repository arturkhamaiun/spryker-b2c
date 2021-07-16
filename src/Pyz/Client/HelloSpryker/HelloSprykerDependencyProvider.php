<?php

namespace Pyz\Client\HelloSpryker;

use Spryker\Client\Kernel\AbstractDependencyProvider;
use Spryker\Client\Kernel\Container;

class HelloSprykerDependencyProvider extends    AbstractDependencyProvider
{
    const CLIENT_ZED_REQUEST = 'CLIENT_ZED_REQUEST';

    public function provideServiceLayerDependencies(Container $container): Container
    {
	    $container = $this->addZedRequestClient($container);

	    return $container;
    }

    protected function addZedRequestClient(Container $container): Container
    {
	    $container[static::CLIENT_ZED_REQUEST] = function (Container    $container) {
		    return $container->getLocator()->zedRequest()->client();
	    };

	    return $container;
    }
}
