<?php

namespace App\Models;

class Artikel
{
    private static $blog_posts = [
        [
            "tittle" => "Judul Artikel Pertama",
            "slug" => "judul-artikel-pertama",
            "author" => "M. Kahfi",
            "body" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo animi quia vero? Cum natus eligendi quaerat, placeat veniam debitis nesciunt rerum culpa consectetur asperiores repellat nostrum. Cum eveniet rem quia placeat in totam dignissimos, modi voluptates fugit labore molestiae? Reiciendis, velit aliquam nisi pariatur molestias eaque ipsa odit non dolores nemo repellat vitae officiis magnam ex perferendis recusandae vero voluptas iure assumenda? Iure error quasi numquam exercitationem ex quibusdam odit molestiae accusamus explicabo. Ducimus sint ad ratione quam possimus! Dolorum ipsam numquam at eum consequatur nulla excepturi possimus ab nemo qui nihil nostrum error perspiciatis voluptatem, similique modi! Provident, asperiores?"
        ],
        [
            "tittle" => "Judul Artikel Kedua",
            "slug" => "judul-artikel-kedua",
            "author" => "Wikan",
            "body" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo animi quia vero? Cum natus eligendi quaerat, placeat veniam debitis nesciunt rerum culpa consectetur asperiores repellat nostrum. Cum eveniet rem quia placeat in totam dignissimos, modi voluptates fugit labore molestiae? Reiciendis, velit aliquam nisi pariatur molestias eaque"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $artikels = static::all();
        return $artikels->firstWhere('slug', $slug);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
