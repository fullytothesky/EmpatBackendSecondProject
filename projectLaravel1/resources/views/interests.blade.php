@extends('layouts/layout')

<script>
    function showOptions() {
        let activity = document.getElementById("menu").value;
        let sportsOptions = document.getElementById("sports");
        let chillOutOptions = document.getElementById("chill-out");

        if (activity === "sports") {
            sportsOptions.style.display = "block";
            chillOutOptions.style.display = "none";
        } else if (activity === "chill-out") {
            sportsOptions.style.display = "none";
            chillOutOptions.style.display = "block";
        }
    }

    window.onload = showOptions;
</script>

<style>
    .choose-field {
        padding: 10px 0px;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    .choose-field label {
        padding-right: 20px;

    }

    ul {
        padding: 0px;
    }

    button {
        margin-top: 10px;
        background-color: #bb1b1b;
        border-style: none;
        padding: 15px;
        /*width: 90px;*/
        border-radius: 20px;
        color: white;
        font-weight: bold;
        font-size: 25px;
    }
</style>

@section('container')
    <div class="container">
        <div class="content" style="display: flex; flex-direction: column; align-items: center">
            <h2 style="text-align:center; padding-bottom: 20px ">{{$friend->name}}, Any interests?</h2>
            <form class="form" method="post"
                  style="display: flex; align-items: center; flex-direction: column; justify-content: center">
                @csrf {{--  adding a simple blade command to avoid possibillity csrf attack--}}
                <div>
                    <label for="menu" style="padding-right: 20px">Choose field:</label>
                    <select id="menu" name="menu" onchange="showOptions()">
                        <option value="chill-out">Chill Out</option>
                        <option value="sports">Sports</option>
                    </select>
                </div>


                <div id="sports" style="display: flex; flex-direction: column">
                    <ul style="display:flex; flex-direction: column">
                        <div class="choose-field">
                            <label for="basketball">Basketball</label>
                            <input style="display: block" name="interests[]" type="checkbox" id="Basketball"
                                   value="Basketball">
                        </div>
                        <div class="choose-field">
                            <label for="tennis">Tennis</label>
                            <input style="display: block" name="interests[]" type="checkbox" id="Tennis" value="Tennis">
                        </div>
                        <div class="choose-field">
                            <label for="ice-skating">Swimming</label>
                            <input style="display: block" name="interests[]" type="checkbox" id="Swimming"
                                   value="Swimming">
                        </div>

                    </ul>

                </div>
                <div id="chill-out" style="display:none;">
                    <ul style="display:flex;  flex-direction: column">
                        <div class="choose-field">
                            <label for="centre">Go to the center</label>
                            <input style="display: block" name="interests[]" type="checkbox" id="centre"
                                   value="Go to the centre">

                        </div>

                        <div class="choose-field">
                            <label for="centre">Chill at home</label>
                            <input style="display: block" name="interests[]" type="checkbox" id="HomeChill"
                                   value="Chill at home">

                        </div>

                        <div class="choose-field">
                            <label for="centre">Explore new Places</label>
                            <input style="display: block" type="checkbox" id="newPlaces" value="Explore new Places">

                        </div>

                    </ul>

                </div>
                <button type="submit">Continue</button>
            </form>
        </div>
    </div>

@endsection
