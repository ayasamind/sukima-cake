<?php
use Migrations\AbstractMigration;

class CreateCompanies extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('companies');
        $table->addColumn('name', 'string', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('introduce', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('industry_id', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('prefecture', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('website', 'text', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('sns', 'text', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('photo', 'string', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('photo_url', 'string', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('admin_id', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
