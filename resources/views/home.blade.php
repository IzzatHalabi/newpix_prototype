@extends('layouts.app')

@section('style')
<style>
    select {width: 100px}
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="alert alert-primary" role="alert">
                        This is a primary alert—check it out!
                    </div>

                    {{ __('You are logged in!') }}

                    <a id="login" class="navbar-button" href="#login-modal" data-toggle="modal"> LOGIN </a>
                    <br>
                    <a id="test"> 
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear-wide" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8.932.727c-.243-.97-1.62-.97-1.864 0l-.071.286a.96.96 0 0 1-1.622.434l-.205-.211c-.695-.719-1.888-.03-1.613.931l.08.284a.96.96 0 0 1-1.186 1.187l-.284-.081c-.96-.275-1.65.918-.931 1.613l.211.205a.96.96 0 0 1-.434 1.622l-.286.071c-.97.243-.97 1.62 0 1.864l.286.071a.96.96 0 0 1 .434 1.622l-.211.205c-.719.695-.03 1.888.931 1.613l.284-.08a.96.96 0 0 1 1.187 1.187l-.081.283c-.275.96.918 1.65 1.613.931l.205-.211a.96.96 0 0 1 1.622.434l.071.286c.243.97 1.62.97 1.864 0l.071-.286a.96.96 0 0 1 1.622-.434l.205.211c.695.719 1.888.03 1.613-.931l-.08-.284a.96.96 0 0 1 1.187-1.187l.283.081c.96.275 1.65-.918.931-1.613l-.211-.205a.96.96 0 0 1 .434-1.622l.286-.071c.97-.243.97-1.62 0-1.864l-.286-.071a.96.96 0 0 1-.434-1.622l.211-.205c.719-.695.03-1.888-.931-1.613l-.284.08a.96.96 0 0 1-1.187-1.186l.081-.284c.275-.96-.918-1.65-1.613-.931l-.205.211a.96.96 0 0 1-1.622-.434L8.932.727zM8 12.997a4.998 4.998 0 1 0 0-9.995 4.998 4.998 0 0 0 0 9.996z"/>
                        </svg>
                    </a>

                    <select name="select" id="select">
                        <option value="1">one</option>
                        <option value="2">two</option>
                    </select>



                </div>
            </div>
        </div>
    </div>
</div>

<div class='modal fade' id="login-modal">
    <div class="modal-dialog" style="max-width: 30%">
        <div class="modal-content"> 
            <form id="login-form" class="form-horizontal" method="POST" action="">
                <div class="modal-body" style="padding-top: 40px">
                    <div class="form-group m-t-20">
                        <div class="col-md-12">
                            <input type="text" name="handphone_no" class="form-control" placeholder="Phone number" style="width: 100%" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" name="password" class="form-control" placeholder="Password" style="width: 100%" required>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')

<script>


$(document).ready(function(){

    alert(moment().format('[today] dddd'));

    $('#select').select2({
        tags: true
    });
    
    $("#test").click(function() {
        $.ajax({
            url: '/jquery',
            method: "GET",
            success: function (result) {
                alert(result);
            },
            error: function (error) {
                console.log(error.responseText);
            },
        });
    });
    
});
</script>
@endsection
