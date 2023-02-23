<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. At, incidunt consequatur dignissimos nemo voluptates velit blanditiis possimus soluta, tempora debitis repellendus officiis assumenda praesentium odio eveniet iste libero nisi totam autem molestiae adipisci inventore! Corporis odit reiciendis repellat, minima in obcaecati laborum tenetur sunt soluta quaerat culpa atque velit modi animi blanditiis sapiente corrupti labore officiis eveniet ipsum commodi quo! Earum praesentium ullam beatae deleniti reiciendis veritatis nulla minus quia corrupti temporibus debitis dolorum eum, aspernatur architecto quibusdam omnis? Excepturi."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Muhammad Fauzan",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. At, incidunt consequatur dignissimos nemo voluptates velit blanditiis possimus soluta, tempora debitis repellendus officiis assumenda praesentium odio eveniet iste libero nisi totam autem molestiae adipisci inventore! Corporis odit reiciendis repellat, minima in obcaecati laborum tenetur sunt soluta quaerat culpa atque velit modi animi blanditiis sapiente corrupti labore officiis eveniet ipsum commodi quo! Earum praesentium ullam beatae deleniti reiciendis veritatis nulla minus quia corrupti temporibus debitis dolorum eum, aspernatur architecto quibusdam omnis? Excepturi."
    
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
            
        $posts =  static::all();
    

        return $posts->firstWhere('slug', $slug);
        
    }
}
