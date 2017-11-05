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
            <img src="{{ $job->company->image }}" alt="Nordeus image" style="width:70%;">
            <h1 style="font-size:92px">{{ $job->company->name }}</h1>
            <p style="font-size:32px">{{ $job->company->moto }}</p>
            <p><span class="glyphicon glyphicon-map-marker"></span>{{ App\Job::parseLocation($job->location) }}</p>
            <table class="table">
            </table>
        </div>
    </div>

    <div class="container">
        <h3>{{ $job->title }}</h3>
        <p><em>Engineering</em></p>
        <p>{{ $job->description }}</p>
        <br>
        <table class="table">
            <tr>
                <td><strong>Position</strong></td>
                <td>Senior Developer</td>
            </tr>
            <tr>
                <td><strong>Type</strong></td>
                <td>Full Time</td>
            </tr>
            <tr>
                <td><strong>Location</strong></td>
                <td>Belgrade</td>
            </tr>
            <tr>
                <td><strong>Programming Languages Skills</strong></td>
                <td>
                    <table>
                        <tr>
                            <td>HTML: 3</td>
                        </tr>
                        <tr>
                            <td>Python: 4</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td><strong>Areas of the job</strong></td>
                <td>
                    <table>
                        <tr>
                            <td>Front-end</td>
                        </tr>
                        <tr>
                            <td>Mobile Systems</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <table class="table">
            <tr>
                <td>
                    <button type="button" class="btn btn-success" style="width: 125px;">Complete test</button>
                </td>
            </tr>
        </table>
    </div>

    <footer class="container-fluid text-center">
        <p>RAF Bullets - SICEF Hakaton 2017</p>
    </footer>
@endsection
