<?php

namespace App\Message;

use Symfony\Component\Messenger\Attribute\AsMessage;

#[AsMessage('async')]
final class SendReminderMessage
{

    public function __construct(
        private int $loanId,
        private string $type
    ) {}

    public function getLoanId(): int
    {
        return $this->loanId;
    }
    public function getType(): string
    {
        return $this->type;
    }
}
