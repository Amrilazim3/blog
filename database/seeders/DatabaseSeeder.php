<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if (! Storage::exists('thumbnails/dummy.png')) 
            Storage::disk('local')->copy('dummy.jpg', 'public/thumbnails/dummy.png');

        Post::factory(30)->create();
    }
}
