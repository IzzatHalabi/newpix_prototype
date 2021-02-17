@extends('layouts.test_app')

<link href="./css/cart.css" rel="stylesheet">

@section('content')
<div class="container">
    <h4> Room Placement Registeration </h4>
    <form action="">
        <hr>
        <div class="col-9"><label for="" class="col-2">Student ID: </label> <input type="text"></div>
        <div class="col-9"><label for="" class="col-2">Name: </label> <input type="text"></div>
        <div class="col-9">
            <label for="" class="col-2">Gender: </label> 
            <select name="gender" id="gender">
                <option value="m">Male</option>
                <option value="f">Female</option>
            </select>
        </div>
        <hr>
        <div class="col-12" style="margin-bottom:20px">
            Please key-in your desired room preferences and rate its importancy starting from 
            the <b>least desired(1)</b> to the <b>most desired(10)</b>. The system will assign the students to the suitable 
            room based on the input given.
        </div>
        <div class="col-9">
            <label for="" class="col-5">Desired Room:</label>
            {{-- <input type="text" class="col-2"> --}}
            <select name="desired_room" id="desired_room" class="col-4">
                <option value="0">V1A-L1-1-1</option>
                <option value="1">V1A-L1-1-2</option>
                <option value="2">V1A-L1-1-3</option>
                <option value="3">V1A-L1-1-4</option>
                <option value="4">V1A-L1-1-5</option>

                <option value="5">V1D-L1-1-1</option>
                <option value="6">V1D-L1-1-2</option>
                <option value="7">V1D-L1-1-3</option>
                <option value="8">V1D-L1-1-4</option>
                <option value="9">V1D-L1-1-5</option>

                <option value="10">V5A-L1-1-1</option>
                <option value="11">V5A-L1-1-2</option>
                <option value="12">V5A-L1-1-3</option>
                <option value="13">V5A-L1-1-4</option>
                <option value="14">V5A-L1-1-5</option>

                <option value="15">V5H-L1-1-1</option>
                <option value="16">V5H-L1-1-2</option>
                <option value="17">V5H-L1-1-3</option>
                <option value="18">V5H-L1-1-4</option>
                <option value="19">V5H-L1-1-5</option>

                <option value="20">V6D-L1-1-1</option>
                <option value="21">V6D-L1-1-2</option>
                <option value="22">V6D-L1-1-3</option>
                <option value="23">V6D-L1-1-4</option>
                <option value="24">V6D-L1-1-5</option>

                <option value="25">SIBC Block A L1 Room 1</option>
                <option value="26">SIBC Block A L1 Room 2</option>
                <option value="27">SIBC Block A L1 Room 3</option>
                <option value="28">SIBC Block A L1 Room 4</option>
                <option value="29">SIBC Block A L1 Room 5</option>

                <option value="30">SIBC Block D L1 Room 1</option>
                <option value="31">SIBC Block D L1 Room 2</option>
                <option value="32">SIBC Block D L1 Room 3</option>
                <option value="33">SIBC Block D L1 Room 4</option>
                <option value="34">SIBC Block D L1 Room 5</option>
            </select>
            <input type="range" min="1" max="10" value="5" style="margin-left:30px;width: 150px;">
        </div>
        <div class="col-9">
            <label for="" class="col-5">Do you want to have a roommate?</label>
            <select name="roommate" id="roommate">
                <option value="y">Yes</option>
                <option value="n">No</option>
            </select>
            <input type="range" min="1" max="10" value="5" style="margin-left:30px;width: 150px;">
        </div>
        <hr>
        <div class="col-9">Please rate the list of preferences below:</div>
        <br>
        <div class="col-9"><label for="" class="col-3"> Cheaper room </label><input type="range" min="1" max="10" value="5" style="width: 150px;"></div>
        <br>
        <div class="col-12">
            <div class="col-9"><label for=""> Accessible Facilities: </label></div>
            <div class="col-9">
                <div class="col-9"><label for="" class="col-4"> Oval Park </label><input type="range" min="1" max="10" value="5" style="width: 150px;"></div>
                <div class="col-9"><label for="" class="col-4"> Parking </label><input type="range" min="1" max="10" value="5" style="width: 150px;"></div>
                <div class="col-9"><label for="" class="col-4"> Sport Complex </label><input type="range" min="1" max="10" value="5" style="width: 150px;"></div>
                <div class="col-9"><label for="" class="col-4"> Masjid An-Nur </label><input type="range" min="1" max="10" value="5" style="width: 150px;"> </div> 
            </div>
        </div>
        <br><br>
        <div class="col-12 text-center"><input type="submit" class=""></div>
    </form>
</div>
@endsection

@section('script')
<script>
</script>
@endsection