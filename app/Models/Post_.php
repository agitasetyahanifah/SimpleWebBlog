<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Agita Setya Hanifah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor officiis ratione reiciendis numquam placeat 
            quibusdam quidem repellat dolorem non voluptatibus quae, labore possimus blanditiis obcaecati aperiam. Reprehenderit nihil 
            laudantium porro nemo ea, qui dicta recusandae inventore quod optio voluptas, autem dolorum excepturi illo. Officia asperiores 
            laudantium, quod distinctio magnam cum quas fugit accusamus, eveniet totam ea. Officia voluptas tempora iure ipsa velit deleniti 
            aliquid odio quasi illum nisi id unde laborum praesentium qui perferendis, eius eveniet. Cumque dicta odit inventore?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Agita Setya H",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor officiis ratione reiciendis numquam placeat 
            quibusdam quidem repellat dolorem non voluptatibus quae, labore possimus blanditiis obcaecati aperiam. Reprehenderit nihil 
            laudantium porro nemo ea, qui dicta recusandae inventore quod optio voluptas, autem dolorum excepturi illo. Officia asperiores 
            laudantium, quod distinctio magnam cum quas fugit accusamus, eveniet totam ea. Officia voluptas tempora iure ipsa velit deleniti 
            aliquid odio quasi illum nisi id unde laborum praesentium qui perferendis, eius eveniet. Cumque dicta odit inventore?"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
    
}
