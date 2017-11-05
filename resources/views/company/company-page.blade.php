@extends('layouts.app')

@section('content')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>



<div class="jumbotron">
    <div class="container text-center">
        <img src="{{ $company->image }}" alt="Nordeus image" style="width:70%;">
        <h1 style="font-size:92px">{{ $company->name }}</h1>
        <p style="font-size:32px">{{ $company->moto }}</p>
        <p><a href="#"><span class="glyphicon glyphicon-map-marker"></span></a>Belgrade</p>

    </div>
</div>

<div class="container-fluid bg-3 text-center">
    <div class="row">
        @foreach($jobs as $job)
            <div class="col-sm-4">
                <table class="table">
                    <tr>
                        <td><p style="font-family:verdana;font-size:160%;"><b>{{ $job->title }}</b></p></td>
                    </tr>
                    <tr>
                        <td><p><span class="glyphicon glyphicon-map-marker"></span>Belgrade</p></td>
                    </tr>
                    <tr>
                        <td><a href="{{ url('/company/job/'.$job->id) }}" class="btn btn-primary" type="submit">Read more</a></td>
                    </tr>
                </table>
            </div>
        @endforeach

    </div>
</div><br><br>

<footer class="container-fluid text-center">
    <p>RAF Bullets - SICEF Hakaton 2017</p>
</footer>

@endsection
