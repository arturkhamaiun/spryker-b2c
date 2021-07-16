<?php

namespace Pyz\Yves\HelloSpryker\Controller;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Spryker\Yves\Kernel\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
* @method \Pyz\Client\HelloSpryker\HelloSprykerClientInterface getClient()
*/
class IndexController extends AbstractController
{
    public function indexAction(Request $request)
    {
        $helloSprykerTransfer = new HelloSprykerTransfer();
        $helloSprykerTransfer->setOriginalString('Hello Spryker!');

        $helloSprykerTransfer = $this->getClient()->reverseString($helloSprykerTransfer);

        return ['reversedString' => $helloSprykerTransfer->getReversedString()];
    }
}
