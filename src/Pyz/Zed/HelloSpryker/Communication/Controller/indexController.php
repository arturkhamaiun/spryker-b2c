<?php

namespace Pyz\Zed\HelloSpryker\Communication\Controller;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \Pyz\Zed\HelloSpryker\Business\HelloSprykerFacadeInterface getFacade()
 */

class IndexController extends AbstractController
{
    /**
    * @param Request $request
    *
    * @return array
    */
    public function indexAction(Request $request)
    {
        $transfer = new HelloSprykerTransfer();
        $transfer->setOriginalString("Hello Spryker!");

        $this->getFacade()->reverseString($transfer);

        return ['string' => $transfer->getReversedString()];
    }
}
