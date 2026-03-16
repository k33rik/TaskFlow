<?php

namespace App\Services\Notification;

class EmailNotification implements NotificationStrategy
{
    public function send(int $userId, string $message): void
    {
        echo "Email sent to user $userId: $message";
    }
}