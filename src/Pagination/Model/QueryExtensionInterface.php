<?php

declare(strict_types=1);

namespace Alpabit\ApiSkeleton\Pagination\Model;

use Doctrine\ORM\QueryBuilder;
use Symfony\Component\HttpFoundation\Request;

/**
 * @author Muhamad Surya Iksanudin<surya.iksanudin@alpabit.com>
 */
interface QueryExtensionInterface
{
    public function apply(QueryBuilder $queryBuilder, Request $request): void;

    public function support(string $class): bool;
}
