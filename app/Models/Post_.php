<?php

namespace App\Models;

class Post
{
   public static $blog_post = [
    [
        "title" => "Judul Tulisan Pertama",
        "slug" => "judul-tulisan-pertama",
        "author" => "Salis Nizar Qomaruzaman",
        "body" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae sapiente rerum sed ex repellat at? Temporibus aperiam beatae, ducimus perferendis magnam quae fugiat nisi nulla consectetur natus repellendus similique consequuntur, maxime, sapiente reiciendis adipisci fugit illum iste et ipsa. In debitis, dolor nihil reprehenderit, explicabo repudiandae officiis animi placeat repellendus fugiat voluptates dicta culpa, corporis facere rem repellat doloribus corrupti voluptatibus ea. Placeat voluptates nemo dolor, iusto fugit, ab cupiditate quis fuga explicabo quibusdam, ullam ad sed? Unde ex, harum eveniet animi amet officiis maiores. Facilis veritatis voluptate voluptas cumque reiciendis fugit, ipsum enim quibusdam sequi consectetur pariatur esse tempore!"
    ],
    [
        "title" => "Judul Tulisan Kedua",
        "slug" => "judul-tulisan-kedua",
        "author" => "Al Ghifari",
        "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam eos at distinctio! Reprehenderit neque praesentium quis nesciunt tempora saepe, impedit harum vitae, nisi, omnis corporis! Dolores quaerat iure amet commodi culpa perspiciatis! Rem facilis molestias magni repellendus debitis natus enim quos fugiat? Ipsum quia dicta blanditiis voluptates vel aliquid hic maxime deserunt facilis totam et facere laboriosam alias saepe quidem sit repellendus voluptas aspernatur, recusandae id corporis explicabo eaque nobis consequuntur? Excepturi est provident voluptas blanditiis magni, culpa porro doloribus corrupti ullam non, praesentium optio numquam fugit, quibusdam recusandae exercitationem quas reprehenderit deserunt labore maiores impedit eum sapiente neque! Amet dicta ipsum suscipit! Aperiam architecto odit dolores atque, veritatis cumque animi recusandae amet eligendi repellendus placeat ex blanditiis ab facilis in laborum voluptatem, optio unde eveniet facere quisquam nesciunt eum commodi laudantium? Sunt exercitationem voluptatibus ea sint voluptatum! Corporis, animi!"
    ]
    ];

    public static function all(){
        return collect(self::$blog_post);
    }
    public static function find ($slug){
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     # code...
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
