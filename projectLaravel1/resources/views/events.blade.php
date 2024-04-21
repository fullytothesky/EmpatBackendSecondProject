@extends('layouts/layout')

<link href="/css/events.css" rel="stylesheet">

@section('container')
    <div class="container">
        <div class="content">
            <h2>Pupsik {{$friend->name}}, where will we meet?:)</h2>
            <form  class="form" method="post" >
                @csrf  {{--  adding a simple blade command to avoid possibillity csrf attack--}}
                <div class="form__input" ><h3>Place:</h3> <input class="text-zone" type="text" name="location"></div>
                <div class="form__input"><h3>When:</h3> <input type="date" name="date"></div>
                <button type="submit">See you soon!</button>
            </form>
        </div>
    </div>

@endsection
