<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
			[
                'user_id' => '1',
                'body' => 'this is body of posts'
            ],
            [
                'user_id' => '1',
                'body' => 'this is body of posts'
            ],
            [
                'user_id' => '1',
                'body' => 'this is body of posts'
            ],
            [
                'user_id' => '1',
                'body' => 'this is body of posts'
            ],
            [
                'user_id' => '1',
                'body' => 'this is body of posts'
            ]
		
		]);
    }
}
