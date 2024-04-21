@extends('layouts.layout')

<link href="css/connect.css" rel="stylesheet">
@section('container')
<div class="container">
    <div class="content" style="display: flex; flex-direction: column; align-items: center" >
        <h2>Let's connect!</h2>
       <form  class="form" method="post" enctype="multipart/form-data" >
{{--           >--}}
          @csrf  {{--  adding a simple blade command to avoid possibillity csrf attack--}}
        <div class="form__input"><h3>Your Name:</h3> <input type="text" name="name"></div>
           <div class="form__input"><h3>Your Surname:</h3> <input type="text" name="surname"></div>
           <div class="form__input"><h3>Your Age:</h3> <input type="text" name="age"></div>
           <div class="form__input"><h3>Your City:</h3> <input type="text" name="city"></div>
           <div class="form__input"><h3>Your Image:</h3> <input class="input_img" type="file" name="image"></div>
           <button type="submit">Connect</button>
       </form>
    </div>
</div>
@endsection
