<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use App\Message\GenerateReportMessage;
use Symfony\Component\Messenger\MessageBusInterface;

#[AsCommand(
    name: 'GenerateNightlyReports',
    description: 'Add a short description for your command',
)]
class GenerateNightlyReportsCommand extends Command
{
    public function __construct(
        private MessageBusInterface $messageBus
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Запуск ночного обновления отчетов');

        $reportTypes = ['popular_books', 'debtors', 'author_ranking'];

        foreach ($reportTypes as $type) {
            $this->messageBus->dispatch(new GenerateReportMessage($type));
            $output->writeln("Отчет '{$type}' отправлен в очередь");
        }

        $output->writeln('Все отчеты отправлены в Redis очередь');

        return Command::SUCCESS;
    }
}
