<?php

namespace App\Message;

use Symfony\Component\Messenger\Attribute\AsMessage;

#[AsMessage('async')]
final class GenerateReportMessage
{
    public function __construct(
        private string $reportType
    ) {}

    public function getReportType(): string
    {
        return $this->reportType;
    }
}
