<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" =>"Maulana Yusup",
            "content" =>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit inventore incidunt similique eum alias accusamus excepturi provident molestiae dolorum cumque minus quos itaque sapiente maiores veniam ipsa rerum, repellat omnis. Cumque, quae molestiae ex odit ratione dolores commodi placeat dolorum provident in accusantium officiis rerum, nemo aspernatur harum asperiores ipsum sed dolor delectus dicta debitis autem earum nobis architecto. Tempore dicta repellendus dolorum excepturi deleniti ea fuga ipsum, placeat porro hic vitae possimus cumque illo quis tenetur, dolor nulla labore."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" =>"Maulana Yusup",
            "content" =>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit inventore incidunt similique eum alias accusamus excepturi provident molestiae dolorum cumque minus quos itaque sapiente maiores veniam ipsa rerum, repellat omnis. Cumque, quae molestiae ex odit ratione dolores commodi placeat dolorum provident in accusantium officiis rerum, nemo aspernatur harum asperiores ipsum sed dolor delectus dicta debitis autem earum nobis architecto. Tempore dicta repellendus dolorum excepturi deleniti ea fuga ipsum, placeat porro hic vitae possimus cumque illo quis tenetur, dolor nulla labore molestiae ex odit ratione dolores commodi placeat dolorum provident in accusantium officiis rerum, nemo aspernatur harum asperiores ipsum sed dolor delectus dicta debitis autem earum nobis architecto. Tempore dicta repellendus dolorum excepturi deleniti ea fuga ipsum, placeat porro hic vitae possimus cumque illo quis tenetur, dolor nulla labore."
        ]
        ];

    public static function all()
        {
            return collect(self::$blog_posts);
        }

    public static function find($slug){
        
        $posts = static::all();
        // $post=[];
        // foreach ($posts as $p) {
        //     if($p["slug"] === $slug){
        //         $post= $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
