<?php

namespace TraderInteractive\Exceptions;

use RuntimeException;

/**
 * Exception thrown when trying to write to a read-only value.
 */
class ReadOnlyViolationException extends RuntimeException
{
}
