<?php

namespace Pyz\Zed\HelloSpryker\Communication\Controller;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Spryker\Zed\Application\Communication\Controller\IndexController as SprykerIndexController;

/**
 * @method \Pyz\Zed\HelloSpryker\Business\HelloSprykerFacadeInterface getFacade
 */
class GatewayController extends SprykerIndexController
{
    public function reverseStringAction(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer
    {
	    return $this->getFacade()->reverseString($helloSprykerTransfer);
    }
}