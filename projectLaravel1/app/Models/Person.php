<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model   //our created model by php artisan make:model Person
{
    use HasFactory;

    private static $listFriends = [
        ["name" => "Vlad", "age" => 19, "country" => "Ukraine", "image" => "https://firstthings.org/wp-content/uploads/2020/09/2434484-1030x687.jpg"],
        ["name" => "Oleg", "age" => 19, "country" => "Norway", "image" => "https://firstthings.org/wp-content/uploads/2020/09/2434484-1030x687.jpg"],
        ["name" => "Katya", "age" => 21, "country" => "Ukraine", "image" => "https://firstthings.org/wp-content/uploads/2020/09/2434484-1030x687.jpg"]
    ];

    public static function getAllFriends()
    {
        return self::$listFriends;
    }

    public static function getFriendByName($name)
    {
        foreach (self::$listFriends as $friend) {
            if ($friend['name'] === $name) {
                return $friend;
            }
        }

        return null;
    }

}
