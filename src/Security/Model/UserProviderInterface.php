<?php

declare(strict_types=1);

namespace Alpabit\ApiSkeleton\Security\Model;

/**
 * @author Muhamad Surya Iksanudin<surya.iksanudin@alpabit.com>
 */
interface UserProviderInterface
{
    public function findUsername(string $username): ?UserInterface;

    public function support(string $class): bool;
}
