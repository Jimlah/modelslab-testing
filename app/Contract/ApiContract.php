<?php

namespace App\Contract;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Traits\ForwardsCalls;

abstract class ApiContract
{
    use ForwardsCalls;

    protected PendingRequest $request;

    public function __construct()
    {
        $this->request = $this->initialize();
    }

    public function __call($method, $parameters)
    {
        return $this->forwardCallTo($this->request, $method, $parameters);
    }

    abstract public function initialize(): PendingRequest;
}
