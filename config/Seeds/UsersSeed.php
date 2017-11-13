<?php
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'email' => 'sample@gmail.com',
                'password' => 'sample',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'email' => 'sample2@gmail.com',
                'password' => 'sample2',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'email' => 'sample3@gmail.com',
                'password' => 'sample3',
                'created' => date('Y-m-d H:i:s'),
            ]
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
