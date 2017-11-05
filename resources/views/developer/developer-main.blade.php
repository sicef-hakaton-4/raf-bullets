@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Home</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Nordeus</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="well">

                    <p>Nordeus</p>
                    <img src="bird.jpg" class="img-circle" height="55" width="55" alt="Avatar">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="well">
                    <p>Quantox Technology</p>
                    <img src="https://media-exp1.licdn.com/mpr/mpr/shrinknp_400_400/AAIA_wDGAAAAAQAAAAAAAAwiAAAAJGM3MTU5NjEwLWExZTAtNGNmNS05YjMwLTFjNThiM2U4ODgzYg.jpg" class="img-circle" height="100" width="100" alt="Avatar">
                </div>
            </div>
        </div>

    </div>

    <footer class="container-fluid text-center">
        <p>RAF Bullets - SICEF Hakaton 2017</p>
    </footer>
@endsection