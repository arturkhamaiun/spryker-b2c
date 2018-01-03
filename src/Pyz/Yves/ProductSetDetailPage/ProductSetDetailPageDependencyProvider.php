<?php

/**
 * This file is part of the Spryker Demoshop.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Yves\ProductSetDetailPage;

use Spryker\Yves\Kernel\Container;
use SprykerShop\Yves\ProductSetDetailPage\ProductSetDetailPageDependencyProvider as SprykerShopProductSetDetailPageDependencyProvider;
use SprykerShop\Yves\ProductSetWidget\Plugin\ProductSetDetailPage\ProductSetWidgetPlugin;

class ProductSetDetailPageDependencyProvider extends SprykerShopProductSetDetailPageDependencyProvider
{
    /**
     * @return string[]
     */
    protected function getProductSetDetailPageWidgetPlugins(): array
    {
        return [
            ProductSetWidgetPlugin::class,
        ];
    }
}