<?php

namespace TraderInteractiveTest\Exceptions;

use PHPUnit\Framework\TestCase;
use TraderInteractive\Exceptions\ConfigurationException;

/**
 * @coversDefaultClass \TraderInteractive\Exceptions\ConfigurationException
 */
final class ConfigurationExceptionTest extends TestCase
{
    /**
     * @test
     *
     * @return void
     */
    public function basicUsage()
    {
        $expected = 'There is something wrong here...';
        $exception = new ConfigurationException($expected);

        $actual = $exception->getMessage();
        $this->assertSame($expected, $actual);
    }
}
