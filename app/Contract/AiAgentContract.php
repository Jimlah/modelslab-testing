<?php

namespace App\Contract;

interface AiAgentContract
{
    public function aiAgent(array $data);

    public function fetch(mixed $id);
}
