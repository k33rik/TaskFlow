<?php

namespace App\Services\Notification;

interface NotificationStrategy
{
    public function send(int $userId, string $message): void;
}