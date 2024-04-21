@extends('layouts.layout')

 <link  href="/css/about.css"  rel="stylesheet" >
@section('container')


    <div class="container">
        <h2  style="margin: 20px">About Section</h2>
        <div class="content">
            <!-- We can also work with a blade if statement-->
            @if(isset($listFriends)&&count($listFriends)>0)
                @foreach($listFriends as $friend)
                    <div class="friend-block" > <img src="{{ asset('storage/' . $friend->photo_path) }} ">
                        <p>My {{$loop->index+1}} friend <a href={{route('personal_page',['friend' => $friend->id])}}>{{$friend->name}}</a> {{$friend->surname}} is {{$friend->age}} years old and that friend
                            lives in {{$friend->city}} </p>
                    </div>
                @endforeach
                <!-- Upper we reach the local service variable $loop which can track our current index -->
            @elseif(isset($friend))
                <div class="friend-block" >
                    <p>My friend {{$friend['name']}} is {{$friend['surname']}} years old and that friend
                        lives in {{$friend['country']}} </p>
                </div>
                @else
                    <p style="font-weight: bold">Nothing to show:(</p>
            @endif
        </div>

    </div>
@endsection
