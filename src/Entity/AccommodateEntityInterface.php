<?php
declare(strict_types=1);

namespace App\Entity;

interface AccommodateEntityInterface
{
    public function isRented(): bool;

    public function rentedUntil(): \DateTimeImmutable;
}