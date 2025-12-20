<?php

namespace App\MessageHandler;

use App\Message\GenerateReportMessage;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;
use Symfony\Contracts\Cache\CacheInterface;
use App\Repository\BookRepository;
use App\Repository\ReaderRepository;
use App\Repository\AuthorRepository;
use Symfony\Contracts\Cache\ItemInterface;

#[AsMessageHandler]
class GenerateReportMessageHandler
{
    public function __construct(
        private CacheInterface $cache,
        private BookRepository $bookRepository,
        private ReaderRepository $readerRepository,
        private AuthorRepository $authorRepository
    ) {}

    public function __invoke(GenerateReportMessage $message): void
    {
        $reportType = $message->getReportType();

        switch ($reportType) {
            case 'popular_books':
                $data = $this->bookRepository->getMostPopularBooks(10);
                break;
            case 'debtors':
                $data = $this->readerRepository->getDebtors();
                break;
            case 'author_ranking':
                $data = $this->authorRepository->getAuthorRanking();
                break;
            default:
                $data = ['error' => 'Неизвестный тип отчета'];
        }

        $this->cache->get('report_' . $reportType, function (ItemInterface $item) use ($data) {
            $item->expiresAfter(86400);
            return [
                'data' => $data,
                'generated_at' => date('Y-m-d H:i:s'),
                'source' => 'nightly_job'
            ];
        });

        error_log(sprintf('📊 Отчет "%s" сгенерирован и сохранен в кэш', $reportType));
    }
}
