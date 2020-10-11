<?php

declare (strict_types = 1);

namespace tpr\server\swoole;

use tpr\server\ServerHandler;

class HttpServer extends ServerHandler
{
    protected function cgi(): void
    {
        throw new \Exception('starting the swoole server on CGI mode is not supported.');
    }

    protected function cli(string $command_name = null): void
    {
        // TODO: Implement cli() method.
    }

    protected function begin(): void
    {
        // TODO: Implement begin() method.
    }

    protected function end(): void
    {
        // TODO: Implement end() method.
    }
}