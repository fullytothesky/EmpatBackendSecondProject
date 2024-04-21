@extends('layouts.layout')

<link rel="stylesheet" href="/css/personal.css">

@section('container')

    <div class="container">
        <div class="content">
            <div class="info-block">
                <img src={{ asset('storage/' . $friend->photo_path) }}>
                <h3>{{$friend->name}} {{$friend->surname}}</h3>
                <h5>{{$friend->city}}</h5>
            </div>

            <div class="preferences-block">
                <div class="interests-block">
                    <h4>Interests</h4>
                    @foreach($interests as $interest)
                        <p><a href={{route('hobby', ['id' => $interest->id])}}>{{$interest->interestName}}</a></p>
                    @endforeach
                </div>
                <div class="events-block">
                    <h4>Events</h4>
                    @foreach($events as $event)
                        <p>{{$event->meetingPlace}}</p>
                        <p>{{$event->date}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
