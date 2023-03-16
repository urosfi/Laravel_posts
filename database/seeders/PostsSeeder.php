<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
   
    public function run(): void
    {
        $post1=new Post();
        $post1->title="Automobil";
        $post1->body="Na prodaju najbolji auto do sada";
        $post1->author="Uros";
        $post1->save();
        $post2=new Post();
        $post2->title="Kamion";
        $post2->body="Na prodaju najbolji kamion do sada";
        $post2->author="Marko";
        $post2->save();
    }
}
