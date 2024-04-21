<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Friend;
use App\Models\Interest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CreatedController extends Controller
{
    public function firstView()
    {
        $listFriends = DB::table('friends')->get(); //отримати всіх друзів
        return view("about", ['listFriends' => $listFriends]);
        //Here I will pass some additional data to the view as the second argument using key-value array with friend info
    }


    public function secondView()
    {
        return view("connect");
    }

    public function store(Request $request)
    {
        $photoPath = $request->file('image')->store('uploads', 'public');
        $friend = new Friend();
        $friend->name = $request->input('name');
        $friend->surname = $request->input('surname');
        $friend->age = $request->input('age');
        $friend->city = $request->input('city');
        $friend->photo_path = $photoPath;
        $friend->save();

        return redirect()->route('interests', ['friend' => $friend]);
    }

    public function interestsView(Friend $friend)
    {
        return view('interests', ['friend' => $friend]);
    }

    public function storeInterests(Request $request, Friend $friend)
    {
        $interests = Interest::query();
        $selectedInterests = $request->input('interests');
        $matchingInterests = $interests->whereIn('interestName', $selectedInterests)->get();
        $friend->interests()->sync($matchingInterests);
        return redirect()->route('events', ['friend' => $friend]);

    }

    public function eventView(Friend $friend)
    {
        return view('events', ['friend' => $friend]);
    }

    public function storeEvent(Request $request, Friend $friend)
    {
        $friend->events()->create([
            'meetingPlace' => $request->input('location'),
            'date' => $request->input('date'),
        ]);

        return redirect('friends');

    }





}

