<?php
use Migrations\AbstractSeed;

/**
 * Categories seed.
 */
class CategoriesSeed extends AbstractSeed
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
                'name' => '営業'
            ],
            [
                'name' => '企画'
            ],
            [
                'name' => '事務'
            ],
            [
                'name' => 'サービス'
            ],
            [
                'name' => '制作'
            ],
            [
                'name' => 'ITエンジニア'
            ],
            [
                'name' => '教育'
            ],
            [
                'name' => '医療'
            ]
        ];

        $table = $this->table('categories');
        $table->insert($data)->save();
    }
}
