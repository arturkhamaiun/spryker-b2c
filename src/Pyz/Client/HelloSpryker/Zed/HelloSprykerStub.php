<?php

namespace Pyz\Client\HelloSpryker\Zed;

use Generated\Shared\Transfer\HelloSprykerTransfer;
use Spryker\Client\ZedRequest\Stub\ZedRequestStub;
use Spryker\Shared\Kernel\Transfer\TransferInterface;

class HelloSprykerStub extends ZedRequestStub implements HelloSprykerStubInterface
{
    public function reverseString(HelloSprykerTransfer $helloSprykerTransfer): TransferInterface
    {
        return $this->zedStub->call(
            '/hello-spryker/gateway/reverse-string',
            $helloSprykerTransfer
        );
    }
}