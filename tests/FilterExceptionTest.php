<?php

namespace TraderInteractiveTest\Exceptions;

use PHPUnit\Framework\TestCase;
use TraderInteractive\Exceptions\FilterException;

/**
 * @coversDefaultClass TraderInteractive\Exceptions\FilterException
 */
final class ExceptionTest extends TestCase
{
    /**
     * @test
     * @coversNothing
     *
     * @return void
     */
    public function basicUsage()
    {
        $this->assertSame('the message', (new FilterException('the message'))->getMessage());
    }
}
