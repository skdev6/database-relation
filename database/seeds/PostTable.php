<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::insert([
            'title'=>'Hello World',
            'user_id'=>1,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo',
            'status'=>1
        ]);
        Post::insert([
            'title'=>'Allah help me',
            'user_id'=>1,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo',
            'status'=>1
        ]);
        Post::insert([
            'title'=>'I am proud of islam',
            'user_id'=>1,
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo',
            'status'=>1
        ]);
    }
}  
