<?php

use Illuminate\Database\Seeder;
use App\BlogPost;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(BlogPost::class, 10)->create();
    }
}
