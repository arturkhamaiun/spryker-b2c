<?php

namespace Pyz\Zed\HelloSpryker\Business\Model;

use Generated\Shared\Transfer\HelloSprykerTransfer;

class StringReverser
{
    public function reverseString(HelloSprykerTransfer $helloSprykerTransfer): HelloSprykerTransfer
    {
        $helloSprykerTransfer->setReversedString(strrev($helloSprykerTransfer->getOriginalString()));

        return $helloSprykerTransfer;
    }
}