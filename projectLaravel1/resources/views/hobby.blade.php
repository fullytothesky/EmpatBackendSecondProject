@extends('layouts.layout')

<link href="/css/hobby.css" rel="stylesheet">

@section('container')

    <div class="container">
        <div class="content">
            <div class="hobby">
                <h1>
                    Interest: {{$interest->interestName}}
                </h1>
                <h2>
                    Field: {{$interest->interestField}}
                </h2>
            </div>
            <div class="friends-with-interests">
                <h3>Friends with the same interests:</h3>
                @foreach($friends as $friend)
                    <p><a href={{route('personal_page', ['friend'=>$friend->id])}}>{{$friend->name}}</a></p>
                @endforeach
            </div>
        </div>
    </div>

@endsection
