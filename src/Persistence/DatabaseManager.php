<?php
declare(strict_types=1);

namespace App\Persistence;


class DatabaseManager
{

    public function exec(string $sql): array
    {
        return [1, $sql];
    }

}