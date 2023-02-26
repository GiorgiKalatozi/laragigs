<?php
namespace App\Models;

class Listing {
     public static function all() 
     {
          return [
            [
                "id" => 1,
                "title" => "Listing One",
                "description" => "I will fight like a lion"
            ],
            [
                "id" => 2,
                "title" => "Listing Two",
                "description" => "I will fight like a man"
            ],
          ];
     }
};

