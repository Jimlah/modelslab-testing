<?php

namespace App\Pipes;

use Closure;
use Illuminate\Http\Client\Response;

class RecordImageResponse
{
    public function handle(Response $data, Closure $next)
    {
        $data->collect()->dd();

        return $next($data);
    }
}
