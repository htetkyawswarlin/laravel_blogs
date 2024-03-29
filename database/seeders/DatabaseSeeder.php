<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        $tj = User::factory()->create(['name'=>'tj' , 'username'=>'tj']);
        $jisoo = User::factory()->create(['name'=> 'jisoo', 'username' =>'jisoo']);
        $frontend = Category::factory()->create(['name' => 'frontend' , 'slug' => 'front-end']);
        $backend  = Category::factory()->create(['name' => 'backend', 'slug' => 'back-end']);


        Blog::factory(2)->create(['category_id' => $frontend->id, 'user_id' => $tj->id ]);
        Blog::factory(2)->create(['category_id' => $backend->id , 'user_id' => $jisoo->id]);

    }
}
