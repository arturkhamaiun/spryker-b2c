<?php

namespace Pyz\Client\HelloSpryker\Zed;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Spryker\Shared\Kernel\Transfer\TransferInterface;

interface HelloSprykerStubInterface
{
    public function reverseString(HelloSprykerTransfer $helloSprykerTransfer): TransferInterface;
}