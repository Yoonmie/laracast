<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        User::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $family =Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        $hobbies = Category::create([
            'name' => 'Hobbies',
            'slug' => 'hobbies'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet consectetur</p>',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam, tempore exercitationem, facere nisi unde perspiciatis consequuntur atque amet ex quod dolore quo asperiores sapiente omnis dolores nam! Cum, repellat qui.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet consectetur</p>',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam, tempore exercitationem, facere nisi unde perspiciatis consequuntur atque amet ex quod dolore quo asperiores sapiente omnis dolores nam! Cum, repellat qui.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $hobbies->id,
            'title' => 'My Hobbies Post',
            'slug' => 'my-hobbies-post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet consectetur</p>',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam, tempore exercitationem, facere nisi unde perspiciatis consequuntur atque amet ex quod dolore quo asperiores sapiente omnis dolores nam! Cum, repellat qui.</p>'
        ]);
    }
}
