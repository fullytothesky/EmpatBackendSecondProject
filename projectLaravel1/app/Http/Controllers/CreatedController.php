<?php

namespace App\Http\Controllers;
use App\Models\Person;
use Illuminate\Http\Request;

class CreatedController extends Controller
{
    public function firstView()
    {
//        $listFriends=Person::all();
        $listFriends = Person::getAllFriends();
        return view("about", ['listFriends' => $listFriends]);
        //Here I will pass some additional data to the view as the second argument using key-value array with friend info
    }

    public function personView($name)
    {
        $person = Person::getFriendByName($name);
        return view("about", ['friend' => $person]);
    }

    public function secondView()
    {
        return view("connect");
    }


    public function store(Request $request)
    {
        // We can retrieve some data
        $name = $request->input('name');
        $surname = $request->input('surname');
        $city = $request->input('city');
        return "Received: Name - {$name}, Surname - {$surname}, City - {$city}";
    }
}
