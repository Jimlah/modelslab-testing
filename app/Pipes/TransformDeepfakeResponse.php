<?php

namespace App\Pipes;

use Illuminate\Http\Client\Response;

class TransformDeepfakeResponse
{
    public function handle(Response $data, \Closure $next)
    {
        $data->collect()->dd();

        return $next($data);
    }
}
