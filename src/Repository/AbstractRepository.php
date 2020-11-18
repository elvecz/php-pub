<?php
declare(strict_types=1);

namespace App\Repository;

use App\Exceptions\EntityNotFoundException;
use App\Persistence\DatabaseManager;

abstract class AbstractRepository
{

    private DatabaseManager $databaseManager; // skvela vec u php7.4 <- typed properties :)

    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
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