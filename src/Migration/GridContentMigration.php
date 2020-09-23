<?php

namespace Heartbits\ContaoGrid\Migration;

use Contao\CoreBundle\Migration\AbstractMigration;
use Contao\CoreBundle\Migration\MigrationResult;
use Doctrine\DBAL\Connection;

class GridContentMigration extends AbstractMigration
{
    /**
     * @var Connection
     */
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function shouldRun(): bool
    {
        $schemaManager = $this->connection->getSchemaManager();

        // If the database table itself does not exist we should do nothing
        if (!$schemaManager->tablesExist(['tl_content'])) {
            return false;
        }

        $columns = $schemaManager->listTableColumns('tl_content');

        return
            isset($columns['element_column_small']) &&
            isset($columns['element_column_medium']) &&
            isset($columns['element_column_large']) &&
            !isset($columns['element_cell_small']) &&
            !isset($columns['element_cell_medium']) &&
            !isset($columns['element_cell_large']);
    }

    public function run(): MigrationResult
    {
        $this->connection->query('ALTER TABLE tl_content ADD element_cell_small varchar(12) NOT NULL default ""');
        $this->connection->query('ALTER TABLE tl_content ADD element_cell_medium varchar(12) NOT NULL default ""');
        $this->connection->query('ALTER TABLE tl_content ADD element_cell_large varchar(12) NOT NULL default ""');

        // Set old company as new pid
        $this->connection->executeUpdate('UPDATE tl_content SET element_cell_small = element_column_small');
        $this->connection->executeUpdate('UPDATE tl_content SET element_cell_medium = element_column_medium');
        $this->connection->executeUpdate('UPDATE tl_content SET element_cell_large = element_column_large');

        return new MigrationResult(
            true,
            'Migrated grid.'
        );
    }
}