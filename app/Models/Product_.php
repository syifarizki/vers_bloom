<?php

namespace App\Models;

class Product 
{
   private static $post_products = [
        [
            "product_name" => "Cat Palm",
            "common_name" => "Cat Palm, Cascade Palm, Cataract Palm",
            "kode" => "TM0001",
            "price" => "Rp.300.000",
            "description" => "The Cat Palm offers a vibrant tropical flair without all the maintenance. The long wispy green leaves arch from compact trunks giving it a luxuriant appearance. This Palm grows fuller and bushier as it ages, making it ideal for open spaces. The Cat Palm is low maintenance, which makes for the perfect living room-ready addition or striking office decor. Unlike most palms, the Cat Palm does not need direct sunlight and will thrive in the filtered, indirect bright light found in most homes."
            ],
            [
                "product_name" => "Bamboo Palm",
                "common_name" => "Bamboo Palm, Reed Palm, Clustered Parlor Palm, Cane Palm",
                "kode" => "TM0002",
                "price" => "Rp.400.000",
                "description" => "The Bamboo Palm is a tropical indoor houseplant that compliments any space. Not to be confused with real bamboo, this plant is low maintenance and easy to care for."
            ],
            
            
    
            ];


            public static function all() {
                return collect(self::$post_products);
            }

            public static function find($kode) {

                $product = static::all();
                return $product->firstWhere('kode', $kode);
            }
}
