<?php

namespace App\Listeners;

use App\Events\TaskStatusChanged;
use App\Services\Notification\EmailNotification;
use App\Services\Notification\NotificationService;

class SendTaskNotification
{
    public function handle(TaskStatusChanged $event): void
    {
        $notificationService = new NotificationService(
            new EmailNotification()
        );

        $notificationService->notify(
            $event->task->user_id,
            "Task status changed"
        );
    }
}
