<?php

namespace App\Models;



class post 
{
    private static $home_post = [
        [
            "title" => "Judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ilham Dwi Kurniawan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam eaque atque corporis, reiciendis, 
            praesentium ut illo fugit commodi error tempora enim libero obcaecati sunt natus voluptas? Voluptas enim error quibusdam quia? 
            Necessitatibus culpa qui, dignissimos quaerat adipisci itaque alias ut perspiciatis iusto, 
            velit doloremque quibusdam ea pariatur sit eius consectetur 
            enim voluptas harum maiores ipsam doloribus nostrum vitae voluptatibus. Quibusdam, consequatur? 
            Cumque, minima. Amet deleniti quaerat eaque officiis quos atque, laborum exercitationem nam at dolore 
            praesentium quas vitae vel quo veniam labore laboriosam nesciunt itaque illo enim tempore fugit. 
            Minus velit commodi facere enim dignissimos quidem. Sint sequi sed laborum."
        ],
        [
            "title" => "Judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Hamimma Talita Aulia",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam eaque atque corporis, reiciendis, 
            praesentium ut illo fugit commodi error tempora enim libero obcaecati sunt natus voluptas? Voluptas enim error quibusdam quia? 
            Necessitatibus culpa qui, dignissimos quaerat adipisci itaque alias ut perspiciatis iusto, 
            velit doloremque quibusdam ea pariatur sit eius consectetur 
            enim voluptas harum maiores ipsam doloribus nostrum vitae voluptatibus. Quibusdam, consequatur? 
            Cumque, minima. Amet deleniti quaerat eaque officiis quos atque, laborum exercitationem nam at dolore 
            praesentium quas vitae vel quo veniam labore laboriosam nesciunt itaque illo enim tempore fugit. 
            Minus velit commodi facere enim dignissimos quidem. Sint sequi sed laborum."
        ],
    ];


public static function all(){
    return collect(self::$home_post);
}


public static function find($slug){

    $posts = static::all();
    return $posts->firstWhere('slug', $slug);
}




}
