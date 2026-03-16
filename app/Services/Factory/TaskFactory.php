<?php

namespace App\Services\Factory;

use App\Enums\Task\PriorityEnum;
use App\Enums\Task\StatusEnum;
use App\Models\Task;

class TaskFactory
{
    public static function createBugTask(string $title, string $description, int $projectId): Task
    {
        $task = new Task();
        $task->title = $title;
        $task->description = $description;
        $task->project_id = $projectId;
        $task->priority = PriorityEnum::High;
        $task->status = StatusEnum::New;

        return $task;
    }

    public static function createFeatureTask(string $title, string $description, int $projectId): Task
    {
        $task = new Task();
        $task->title = $title;
        $task->description = $description;
        $task->project_id = $projectId;
        $task->priority = PriorityEnum::High;
        $task->status = StatusEnum::New;

        return $task;
    }
}