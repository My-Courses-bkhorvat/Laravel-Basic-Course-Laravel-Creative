<?php
namespace Database\Seeders;

use App\Model\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::factory(10)->make();
        dd($posts);
        // $this->call(UsersTableSeeder::class);
    }
}
