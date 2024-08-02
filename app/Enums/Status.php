<?php

namespace App\Enums;

enum Status: string
{
    case PROCESSING = 'processing';

    case SUCCESS = 'success';

    case FAILED = 'failed';
}
