<?php

namespace App\MessageHandler;

use App\Message\SendReminderMessage;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class SendReminderMessageHandler
{
    public function __invoke(SendReminderMessage $message): void
    {
        error_log(sprintf(
            'Напоминание для выдачи #%d (тип: %s)',
            $message->getLoanId(),
            $message->getType()
        ));
    }
}
