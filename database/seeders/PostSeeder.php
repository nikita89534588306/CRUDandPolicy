<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $valuePosts = 100;
        for($numbeCurrentPost=1; $numbeCurrentPost<$valuePosts; $numbeCurrentPost++) Post::factory()->create();
    }
}
