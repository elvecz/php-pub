<?php
declare(strict_types=1);

namespace App\Entity;

use DateTimeImmutable;

interface AccommodateEntityInterface
{
    public function isRented(): bool;

    public function rentedUntil(): DateTimeImmutable;
}