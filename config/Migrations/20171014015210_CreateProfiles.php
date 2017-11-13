<?php
use Migrations\AbstractMigration;

class CreateProfiles extends AbstractMigration
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
        $table = $this->table('profiles');
        $table->addColumn('name', 'string', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('sex', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('university', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('department', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('prefecture', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('skill', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('introduce', 'text', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('photo', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('photo_url', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('user_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->create();
    }
}
