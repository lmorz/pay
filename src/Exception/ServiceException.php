<?php

namespace Yansongda\Pay\Exception;

use Throwable;

class ServiceException extends Exception
{
    /**
     * Bootstrap.
     *
     * @param string $message
     * @param array  $extra
     * @param int    $code
     */
    public function __construct(
        $message = 'Service Error',
        $extra = [],
        $code = self::SERVICE_EXCEPTION,
        Throwable $previous = null
    ) {
        parent::__construct($message, $extra, $code, $previous);
    }
}
