<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    public function run()
    {
       $posts = [
        [
            'title' => 'Post One',
            'excerpt' => 'Summary of Post One',
            'body' => 'Body of Post One',
            'image_path' => 'Empty',
        ],
        [
            'title' => 'Post Two',
            'excerpt' => 'Summary of Post Two',
            'body' => 'Body of Post Two',
            'image_path' => 'Empty',
        ]
       ];

       foreach($posts as $key => $value) {
        Post::create($value);
       }
       
    }
}