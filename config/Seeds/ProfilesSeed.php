<?php
use Migrations\AbstractSeed;

/**
 * Profiles seed.
 */
class ProfilesSeed extends AbstractSeed
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
                'name' => '名前1',
                'sex' => 0,
                'university' => '大学1',
                'department' => '学部1',
                'prefecture' => '福岡',
                'skill' => 'スキル1',
                'introduce' => '自己紹介',
                'photo' => 'sample.jpg',
                'photo_url' => 'files/',
                'user_id' => 1
            ],
            [
                'name' => '名前2',
                'sex' => 0,
                'university' => '大学2',
                'department' => '学部2',
                'prefecture' => '福岡',
                'skill' => 'スキル2',
                'introduce' => '自己紹介',
                'photo' => 'sample.jpg',
                'photo_url' => 'files/',
                'user_id' => 2
            ],
            [
                'name' => '名前3',
                'sex' => 0,
                'university' => '大学3',
                'department' => '学部3',
                'prefecture' => '福岡',
                'skill' => 'スキル3',
                'introduce' => '自己紹介',
                'photo' => 'sample.jpg',
                'photo_url' => 'files/',
                'user_id' => 3
            ],
        ];

        $table = $this->table('profiles');
        $table->insert($data)->save();
    }
}
