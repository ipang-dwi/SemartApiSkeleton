<?php

declare(strict_types=1);

namespace Alpabit\ApiSkeleton\Cron\Model;

/**
 * @author Muhamad Surya Iksanudin<surya.iksanudin@alpabit.com>
 */
interface CronReportInterface
{
    public function getCron(): ?CronInterface;

    public function getRunAt(): \DateTime;

    public function getRuntime(): float;

    public function getOutput(): ?string;

    public function getExitCode(): int;

    public function isSuccessful(): bool;

    public function isError(): bool;
}
