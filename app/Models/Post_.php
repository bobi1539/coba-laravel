<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ucup Surucup",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum doloribus aspernatur unde eius explicabo officiis voluptatibus facere consequatur quo distinctio similique asperiores error sapiente expedita pariatur, temporibus alias sed nam voluptatem totam dolorem eaque natus sequi omnis? Voluptatibus veritatis ullam suscipit tempore, hic dolorem cumque ipsa aut illo beatae doloremque sed similique ea incidunt provident commodi neque quaerat saepe nihil repudiandae inventore! Explicabo, ullam sit autem illo velit voluptatibus natus beatae numquam accusantium minus iure? Repellendus consectetur in quisquam illo?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Otong Surotong",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum omnis aut quidem nam suscipit tenetur nulla illum. Quia blanditiis totam nihil aliquam ipsa, cumque minus voluptatibus dolor molestias voluptate nesciunt minima repellat labore consequuntur, ullam esse veritatis sapiente quo. Maxime ducimus voluptate libero soluta voluptates? Exercitationem, quae tenetur culpa, eum labore facere officia rem sint totam, provident corrupti beatae ratione? Iure dolores illum, quibusdam minima iusto temporibus! Aspernatur cum maxime ipsa, consectetur molestiae dolore distinctio facilis consequatur explicabo suscipit illum iste aperiam aliquam voluptatum. Harum fugiat, est minima, quos voluptas aperiam magni ipsam non quas aliquam officiis eveniet iure qui! Delectus unde eligendi facilis blanditiis eius consequatur excepturi cupiditate neque doloribus possimus, temporibus incidunt molestiae inventore, obcaecati impedit! Dolor rem et inventore, saepe quaerat neque qui quisquam voluptate earum ad ullam ratione laboriosam harum a possimus, placeat similique quam illum exercitationem. Suscipit, ab nisi libero dolorum sapiente eaque eveniet magnam."
        ]
    ];

    /**
     * jika property atau variable biasa keyword this
     * $this->blog_posts;
     * jika propertya atau variable static keyword self
     */
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
