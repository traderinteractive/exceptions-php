<?php

namespace TraderInteractiveTest\Exceptions;

use PHPUnit\Framework\TestCase;
use TraderInteractive\Exceptions\ExceptionWithContext;

/**
 * @coversDefaultClass \TraderInteractive\Exceptions\ExceptionWithContext
 */
final class ExceptionWithContextTest extends TestCase
{
    /**
     * @test
     * @covers ::getContext
     *
     * @return void
     */
    public function contextIsOptional()
    {
        $this->assertSame([], (new ExceptionWithContext('a message'))->getContext());
    }

    /**
     * @test
     * @covers ::getContext
     *
     * @return void
     */
    public function getContextReturnsExpectedValues()
    {
        $context = ['foo' => 'bar'];
        $this->assertSame($context, (new ExceptionWithContext('a message', $context))->getContext());
    }

    /**
     * @test
     * @covers ::__construct
     *
     * @return void
     */
    public function exceptionInheritsParentProperties()
    {
        $this->assertSame(2, (new ExceptionWithContext('a message', [], 2))->getCode());
    }
}
