<?php
namespace App\Http\Controllers;

use App\Models\Friend;
use App\Models\Event;
use App\Models\Interest;
use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function getPersonalView($friendId)
    {
        $friend = Friend::find($friendId);
        $interests = $friend->interests;
        $events = $friend->events;
        return view('personal_page', ['friend' => $friend, 'interests' => $interests, 'events' => $events]);
    }

    public function getHobbyView($id)
    {
        $interest = Interest::find($id);

        $friends = Friend::whereHas('interests', function ($query) use ($interest) {
            $query->where('interest_id', $interest->id);
        })->get();

        return view('hobby', ['friends' => $friends, 'interest' => $interest]);
    }

    public function getEventsView(){

        $events = Event::with('user')->get();

        return view('saved_events', ['events' => $events]);
    }
}
