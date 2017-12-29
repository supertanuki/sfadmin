<?php

namespace App\Infrastructure\Doctrine\Repository;

use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

abstract class AbstractRepository
{
    protected $modelClass;

    /** @var ManagerRegistry */
    private $managerRegistry;

    public function __construct(ManagerRegistry $managerRegistry)
    {
        $this->managerRegistry = $managerRegistry;
    }

    protected function getEntityManager(): ObjectManager
    {
        return $this->managerRegistry->getManagerForClass($this->modelClass);
    }

    protected function getRepository(): ObjectRepository
    {
        return $this->getEntityManager()->getRepository($this->modelClass);
    }

    protected function getQueryBuilder(string $alias): QueryBuilder
    {
        $repository = $this->getRepository();

        if (!$repository instanceof EntityRepository) {
            throw new \LogicException('Repository is not an instance of EntityRepository');
        }

        return $repository->createQueryBuilder($alias);
    }
}
