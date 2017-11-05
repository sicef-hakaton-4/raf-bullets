@extends('layouts.app')

@section('content')
    <div class="text-center slider images-slider" style="display: none; position: absolute; top:0; width: 100%; height: 100%; background-color: #3b3c3d;">
        <img class="slide-img" src="{{ $companies[0]->image }}">

        <span class="like glyphicon glyphicon-ok" onclick="nextImageTrue({{ $companies }})"></span>
        <span class="dislike glyphicon glyphicon-remove-circle" onclick="nextImageFalse({{ $companies }})"></span>

        <div class="text-center">
            <span  style="position: absolute; bottom: 122px;">
                <span class="love glyphicon glyphicon-heart-empty" onclick="loveImage({{ $companies }})"></span>
            </span>
        </div>



        <span class="close-slider glyphicon glyphicon-remove" onclick="closeSlider()"></span>
    </div>


    <div class="slider moto-slider text-center" style="display: none; width: 100%; height: 100%; position: absolute; top: 0; ; background-color: #3b3c3d">
        <div style="color: white; position: absolute; top: 40%; height: 300px; width: 100%;" class="text-center moto-text">
            {{ $companies[0]->moto }}
        </div>

        <span class="like glyphicon glyphicon-ok" onclick="nextMotoTrue({{ $companies }})"></span>
        <span class="dislike glyphicon glyphicon-remove-circle" onclick="nextMotoFalse({{ $companies }})"></span>


        <div class="text-center">
            <span  style="position: absolute; bottom: 122px;">
                <span class="love glyphicon glyphicon-heart-empty" onclick="loveMoto({{ $companies }})"></span>
            </span>
        </div>

        <span class="close-slider glyphicon glyphicon-remove" onclick="closeSlider()"></span>
    </div>

    <div class="slider jobs-slider text-center" style="display: none; width: 100%; height: 100%; position: absolute; top: 0; ; background-color: #3b3c3d">
        <div style="color: white; position: absolute; top: 40%; height: 300px; width: 100%;" class="text-center">
            <span class="job-title" style="font-size: 44px; font-weight: 600">{{ $jobs[0]->title }}</span><br><br>
            <div class="areas">
                @foreach((explode(',',$jobs[0]->areas)) as $area)
                    <span style="font-size: 34px">{{ App\Job::parseArea($area) }}</span><br>
                @endforeach
            </div>
        </div>
        <span class="like glyphicon glyphicon-ok" onclick="nextJobTrue({{ $jobs }})"></span>
        <span class="dislike glyphicon glyphicon-remove-circle" onclick="nextJobFalse({{ $jobs }})"></span>


        <div class="text-center">
            <span  style="position: absolute; bottom: 122px;">
                <span class="love glyphicon glyphicon-heart-empty" onclick="loveJob({{ $companies }})"></span>
            </span>
        </div>

        <span class="close-slider glyphicon glyphicon-remove" onclick="closeSlider()"></span>
    </div>



    <div>
        <div class="col-md-3 col-md-border" style="height: 200vh;">
            <h1 style="font-size:30px; color:DodgerBlue; margin-left: 20px" align="left">Swipe through</h1>
            <br>
            <div style="margin-left: 20px;">
                <button onclick="$('.moto-slider').show()" type="button" class="btn btn-primary btn-block btn-lg" style="width: 200px;">Moto</button>
                <br>
                <button onclick="$('.images-slider').show()" type="button" class="btn btn-primary btn-block btn-lg" style="width: 200px;">Workplace</button>
                <br>
                <button onclick="$('.jobs-slider').show()" type="button" class="btn btn-primary btn-block btn-lg" style="width: 200px;">Projects</button>
            </div>
        </div>
        <div class="col-dm-9">
            <div class="text-center">
                <h1 style="font-size:30px; color:DodgerBlue;" align="left">Companies</h1>
                <br>
                <div class="container">
                    <div class="row">
                        @foreach($companies as $company)
                            <div class="col-md-4">
                                <div class="thumbnail" style="height: 250px; width: 350px;">
                                    <a  href="{{ url('company/'.$company->id) }}">
                                        <img src="{{ $company->image }}" alt="Nordeus" style="width: 50%; height: 50%" class="img-rounded">
                                        <div class="caption">
                                            <p><em><strong>{{  $company->name }}</strong></em></p>
                                        </div>
                                    </a>
                                    <a href="{{ url('company/'.$company->id) }}" class="btn btn-primary" style="width: 125px; margin-top: 60px;">Read more</a>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
