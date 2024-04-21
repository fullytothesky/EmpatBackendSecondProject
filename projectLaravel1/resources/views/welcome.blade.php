@extends('layouts.layout')
<style>
    .content{
        display: flex;
        flex-direction: column;
    }
    .navigation-block{
      width: 100px;
        background-color: black;
        display: flex;
        justify-content: center;
        margin-top:25px ;
    }
    a{

        text-decoration: none;
        color: white;
    }

</style>
@section('container')
    <div class="container">
        <div class="content">
            <h2>Pupsiki and Vlad</h2>
            <div class="navigation-block "><a href={{route('friends')}}>Friends</a></div>
            <div class="navigation-block "><a href={{route('saved_events')}}>Events</a></div>
        </div>
    </div>
@endsection
