<?php

namespace App\Pipes;

use Illuminate\Http\Client\Response;

class SendWebhook
{
    public function handle(Response $data, \Closure $next)
    {
        $data->collect()->dd();

        return $next($data);
    }
}
