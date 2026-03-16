<?php

namespace App\Services\Task;

use App\Enums\Task\StatusEnum;
use App\Events\TaskStatusChanged;
use App\Models\Task;
use App\Services\Factory\TaskFactory;

class TaskService
{
    public function createBugTask(
        string $title,
        string $description,
        int $projectId
    ): Task {

        $task = TaskFactory::createBugTask(
            $title,
            $description,
            $projectId
        );

        $task->save();

        return $task;
    }

    public function changeStatus(Task $task, StatusEnum $status): Task
    {
        $task->status = $status->value;
        $task->save();

        event(new TaskStatusChanged($task));

        return $task;
    }

}