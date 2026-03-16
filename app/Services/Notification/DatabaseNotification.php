<?php

namespace App\Services\Notification;

class DatabaseNotification implements NotificationStrategy
{
    public function send(int $userId, string $message): void
    {
        echo "Notification stored for user $userId: $message";
    }
}