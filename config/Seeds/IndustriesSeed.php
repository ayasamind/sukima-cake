<?php
use Migrations\AbstractSeed;

/**
 * Industries seed.
 */
class IndustriesSeed extends AbstractSeed
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
                'name' => '人材'
            ],
            [
                'name' => 'IT'
            ],
            [
                'name' => '製造業'
            ],
            [
                'name' => 'コンサル'
            ],
            [
                'name' => 'サービス'
            ],
            [
                'name' => '教育'
            ],
            [
                'name' => '出版'
            ],
            [
                'name' => '医療'
            ]
        ];

        $table = $this->table('industries');
        $table->insert($data)->save();
    }
}
