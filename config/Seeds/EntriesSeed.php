<?php
use Migrations\AbstractSeed;

/**
 * Entries seed.
 */
class EntriesSeed extends AbstractSeed
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
                'title' => 'インターンがしたい',
                'body' => 'インターンがしたいです。',
                'industry_id' => 1,
                'category_id' => 1,
                'prefecture' => '福岡',
                'created' => date('Y-m-d H:i:s'),
                'user_id' => 1
            ],
            [
                'title' => 'インターンシップがしたい',
                'body' => 'インターンシップがしたいです。',
                'industry_id' => 2,
                'category_id' => 2,
                'prefecture' => '福岡',
                'created' => date('Y-m-d H:i:s'),
                'user_id' => 2
            ],
            [
                'title' => 'インターンがしたい',
                'body' => 'インターンがしたいです。',
                'industry_id' => 3,
                'category_id' => 3,
                'prefecture' => '福岡',
                'created' => date('Y-m-d H:i:s'),
                'user_id' => 3
            ]
        ];

        $table = $this->table('entries');
        $table->insert($data)->save();
    }
}
