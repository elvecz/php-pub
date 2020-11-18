<?php
declare(strict_types=1);

namespace App\Entity;

class FlatEntity implements AccommodateEntityInterface
{

    public function isRented(): bool
    {
        // todo
    }

    public function rentedUntil(): \DateTimeImmutable
    {
        // todo
    }
}