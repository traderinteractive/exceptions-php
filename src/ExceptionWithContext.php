<?php

namespace TraderInteractive\Exceptions;

use Throwable;

/**
 * Exception with variable context.
 */
class ExceptionWithContext extends \Exception
{
    /**
     * @var array
     */
    private $context;

    /**
     * Construct a new instance of the exception.
     *
     * @param string $message The exception message.
     * @param array  $context Any local context information.
     */
    public function __construct(string $message, array $context = [], int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->context = $context;
    }

    /**
     * Returns the specified context array associated with this exception.
     *
     * @return array
     */
    public function getContext() : array
    {
        return $this->context;
    }
}
