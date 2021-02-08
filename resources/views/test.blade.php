@extends('layouts.test_app')

<link href="./css/cart.css" rel="stylesheet">

@section('content')

<section class=" text-center">
    <div class="container">
        <h3 class="">
            {{-- <button id="api">API</button> --}}
            <button id="mcdm">MCDM</button>
        </h3>
        <hr class="">
        <br class="">
        {{-- <h3 id="api_display">
            {{ $respond }}
        </h3> --}}
        <h3 id="mcdm_display">
            NA
        </h3>

        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Room Number</th>
                    <th>Gender</th>
                    <th>Student ID</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rooms as $room)
                    <tr>
                        <td>{{ $room->name }}</td>
                        <td>{{ $room->gender }}</td>
                        <td>{{ $room->student_id }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $rooms->links() }}

     </div>
</section>

<div class="container">

</div>
@endsection

@section('script')
<script>
/**
    $(document).on('click', '#api', function() {                                                                                                                     

        $.ajax({
            url: "/api/api",
            method: "GET"
            })
            .done(function( data ) {
                console.log(data);
                $("#api_display").text(data.respond);

            });
    });
**/

    $(document).on('click', '#mcdm', function() {                                                                                                                     

        $.ajax({
            url: "/api/mcdm",
            method: "GET"
            })
            .done(function( data ) {
                console.log(data);
                $("#mcdm_display").text(data.respond);
            });
    });
</script>
@endsection