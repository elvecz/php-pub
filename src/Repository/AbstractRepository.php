<?php
declare(strict_types=1);

namespace App\Repository;

use App\Exceptions\EntityNotFoundException;
use App\Persistence\DatabaseManager;

abstract class AbstractRepository
{


    public function __construct(private DatabaseManager $databaseManager)
    {
    }

    abstract public function save(): int;

    /**
     * @throws EntityNotFoundException
     */
    protected function getId(): int
    {
        $result = $this->databaseManager->exec("SELECT ...");
        if (isset($result[0])) {
            return $result[0];
        } else {
            throw new EntityNotFoundException("Entity xx not found.");
        }

    }

}