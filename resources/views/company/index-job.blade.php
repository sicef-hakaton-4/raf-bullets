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
                    <li><a href="#">Marina Ivanovic</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron">
        <div class="container text-center">
            <img src="https://media-exp1.licdn.com/media/AAEAAQAAAAAAAApzAAAAJDUzMDE2N2VkLWJhODgtNDkyNS1hZTgxLTQwOTEyZWRiYjZmZg.png" alt="Nordeus image" style="width:70%;">
            <h1 style="font-size:92px">Nordeus</h1>
            <p style="font-size:32px">Make it happen.</p>
            <p><span class="glyphicon glyphicon-map-marker"></span>Belgrade</p>
            <table class="table">
            </table>
        </div>
    </div>

    <div class="container">
        <h3>Rendering Engineer</h3>
        <p><em>Engineering</em></p>
        <p>As a senior rendering engineer, you will collaborate with other technical leaders and content creators to design and lead implementation of innovative new rendering features that will push the level of visual fidelity of our mobile games to console quality.</p>
        <br>
    </div>

    <footer class="container-fluid text-center">
        <p>RAF Bullets - SICEF Hakaton 2017</p>
    </footer>
@endsection
