<?php
use Migrations\AbstractSeed;

/**
 * Companies seed.
 */
class CompaniesSeed extends AbstractSeed
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
                'name' => 'sample1株式会社',
                'introduce' => '会社紹介',
                'industry_id' => 1,
                'prefecture' => '福岡',
                'website' => 'https://google.com',
                'sns' => 'https://twitter.com',
                'photo' => 'sample.jpg',
                'photo_url' => 'files/aaa',
                'admin_id' => 1
            ],
            [
                'name' => 'sample2株式会社',
                'introduce' => '会社紹介',
                'industry_id' => 2,
                'prefecture' => '福岡',
                'website' => 'https://google.com',
                'sns' => 'https://twitter.com',
                'photo' => 'sample.jpg',
                'photo_url' => 'files/aaa',
                'admin_id' => 2
            ],
            [
                'name' => 'sample3株式会社',
                'introduce' => '会社紹介',
                'industry_id' => 3,
                'prefecture' => '福岡',
                'website' => 'https://google.com',
                'sns' => 'https://twitter.com',
                'photo' => 'sample.jpg',
                'photo_url' => 'files/aaa',
                'admin_id' => 3
            ]
        ];

        $table = $this->table('companies');
        $table->insert($data)->save();
    }
}
