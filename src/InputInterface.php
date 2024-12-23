<?php

namespace Minormous\Adr;

use Psr\Http\Message\ServerRequestInterface;

interface InputInterface
{
    /**
     * Extract domain input from the request.
     *
     * @param  ServerRequestInterface $request
     * @return array
     */
    public function __invoke(
        ServerRequestInterface $request
    );
}
