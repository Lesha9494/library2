<?php

namespace App\Service;

use App\Entity\ActionLog;
use App\Enum\ActionType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class ActionLogger
{
    public function __construct(
        private EntityManagerInterface $em,
        private RequestStack $requestStack
    ) {}

    public function log(
        ActionType $action,
        string $entityType,
        ?int $entityId = null,
        ?array $oldData = null,
        ?array $newData = null,
        ?string $description = null,
        ?string $username = 'system'
    ): void {
        $request = $this->requestStack->getCurrentRequest();

        $log = new ActionLog();
        $log->setAction($action->value);
        $log->setEntityType($entityType);
        $log->setEntityId($entityId);
        $log->setOldData($oldData);
        $log->setNewData($newData);
        $log->setDescription($description);
        $log->setIpAddress($request?->getClientIp() ?? 'cli');
        $log->setUserAgent($request?->headers->get('User-Agent'));
        $log->setUsername($username);
        $log->setUserId(null); 

        $this->em->persist($log);
        $this->em->flush();
    }
}