<?php

namespace App\Enums\Task;

enum StatusEnum: int
{
    case New = 1;
    case InProgress = 2;
    case Done = 3;
    case Canceled = 4;
}
