@extends('layouts.layout')
<style>
    .content {
        display: flex;
        flex-direction: column;
    }
</style>

@section('container')

    <div class="container">
        <h2 style="margin: 20px">Events Section</h2>
        <div class="content">
            @if(isset($events)&&count($events)>0)
                @foreach($events as $event)
                    <p> {{$loop->index+1}} event is planned with {{$event->user->name}} in {{$event->meetingPlace}}
                        on {{$event->date}} </p>
                @endforeach

            @else
                <p style="font-weight: bold">There aren't any planned events with pupsiks:(</p>
            @endif
        </div>
    </div>

@endsection
