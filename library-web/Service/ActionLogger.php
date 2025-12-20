<?php

namespace App\Service;

use App\Entity\ActionLog;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class ActionLogger
{
    public function __construct(
        private EntityManagerInterface $em,
        private RequestStack $requestStack,
        private ?TokenStorageInterface $tokenStorage = null
    ) {}

    public function log(
        string $action,
        string $entityType,
        ?int $entityId = null,
        ?array $oldData = null,
        ?array $newData = null,
        ?string $description = null,
        ?string $username = null
    ): void {
        $request = $this->requestStack->getCurrentRequest();

        if ($username === null && $this->tokenStorage) {
            $token = $this->tokenStorage->getToken();
            if ($token && $token->getUser()) {
                $user = $token->getUser();
                $username = is_string($user) ? $user : $user->getUserIdentifier();
            }
        }

        $log = new ActionLog();
        $log->setAction($action);
        $log->setEntityType($entityType);
        $log->setEntityId($entityId);
        $log->setOldData($oldData);
        $log->setNewData($newData);
        $log->setDescription($description);
        $log->setIpAddress($request?->getClientIp() ?? 'cli');
        $log->setUserAgent($request?->headers->get('User-Agent'));
        $log->setUsername($username ?? 'system');
        $log->setUserId(null);

        $this->em->persist($log);
        $this->em->flush();
    }
}
