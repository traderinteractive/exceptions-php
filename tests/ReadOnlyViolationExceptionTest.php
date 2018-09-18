<?php

namespace TraderInteractiveTest\Exceptions;

use PHPUnit\Framework\TestCase;
use TraderInteractive\Exceptions\ReadOnlyViolationException;

/**
 * @coversDefaultClass \TraderInteractive\Exceptions\ReadOnlyViolationException
 */
final class ReadOnlyViolationExceptionTest extends TestCase
{
    /**
     * @test
     *
     * @return void
     */
    public function basicUsage()
    {
        $expected = 'You cannot do that.';
        $exception = new ReadOnlyViolationException($expected);

        $actual = $exception->getMessage();
        $this->assertSame($expected, $actual);
    }
}
