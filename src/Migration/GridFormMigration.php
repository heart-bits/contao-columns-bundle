<?php

namespace Heartbits\ContaoGrid\Migration;

use Contao\CoreBundle\Migration\AbstractMigration;
use Contao\CoreBundle\Migration\MigrationResult;
use Doctrine\DBAL\Connection;

class GridFormMigration extends AbstractMigration
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
        if (!$schemaManager->tablesExist(['tl_form_field'])) {
            return false;
        }

        $columns = $schemaManager->listTableColumns('tl_form_field');

        return
            isset($columns['form_column_small']) &&
            isset($columns['form_column_medium']) &&
            isset($columns['form_column_large']) &&
            !isset($columns['form_cell_small']) &&
            !isset($columns['form_cell_medium']) &&
            !isset($columns['form_cell_large']);
    }

    public function run(): MigrationResult
    {
        $this->connection->query('ALTER TABLE tl_form_field ADD form_cell_small varchar(12) NOT NULL default ""');
        $this->connection->query('ALTER TABLE tl_form_field ADD form_cell_medium varchar(12) NOT NULL default ""');
        $this->connection->query('ALTER TABLE tl_form_field ADD form_cell_large varchar(12) NOT NULL default ""');

        // Set old company as new pid
        $this->connection->executeUpdate('UPDATE tl_form_field SET form_cell_small = form_column_small');
        $this->connection->executeUpdate('UPDATE tl_form_field SET form_cell_medium = form_column_medium');
        $this->connection->executeUpdate('UPDATE tl_form_field SET form_cell_large = form_column_large');

        return new MigrationResult(
            true,
            'Migrated form grids.'
        );
    }
}