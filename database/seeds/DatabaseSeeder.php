<?php

use Illuminate\Database\Seeder;
use \App\Models\Reply;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class,10)->create();
        factory(\App\Models\Category::class,5)->create();
        factory(\App\Models\Question::class,10)->create();

        factory(Reply::class, 50)->create()->each(function ($reply) {
            return $reply->like()->save(factory(\App\Models\Like::class)->make());
        });
    }
}
