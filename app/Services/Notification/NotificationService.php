<?php

namespace App\Services\Notification;

class NotificationService
{
    private NotificationStrategy $strategy;

    public function __construct(NotificationStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function notify(int $userId, string $message): void
    {
        $this->strategy->send($userId, $message);
    }
}