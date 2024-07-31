<?php

namespace App\Contract;

use Illuminate\Support\Collection;

interface DeepfakeContract
{
    public function fetch(mixed $id):Collection;

    public function swapFaceSingle(array $data):Collection;

    public function swapFaceMultiple(array $data):Collection;

    public function swapImageToVideo(array $data):Collection;

    public function swapVideoToSpecific(array $data):Collection;
}
