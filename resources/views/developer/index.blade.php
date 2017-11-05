@extends('layouts.app')

@section('content')
    <div class="text-center images-slider" style="display: none; position: absolute; top:0; width: 100%; height: 100%; background-color: #3b3c3d;">
        <img class="slide-img" src="{{ $companies[0]->image }}">
        <button class="like" onclick="nextImageTrue({{ $companies }})">Like</button>
        <button class="dislike" onclick="nextImageFalse({{ $companies }})">No</button>
        <button class="love" onclick="love({{ $companies }})">Love</button>

        <button class="close-slider" onclick="closeSlider()"> X </button>
    </div>


    <div class="images-slider text-center" style="display: none; width: 100%; height: 100%; position: absolute; top: 0; ; background-color: #3b3c3d">
        <div style="color: white; position: absolute; top: 40%; height: 300px; width: 100%;" class="text-center moto-text">
            {{ $companies[0]->moto }}
        </div>
        <button class="like" onclick="nextMotoTrue({{ $companies }})">Like</button>
        <button class="dislike" onclick="nextMotoFalse({{ $companies }})">No</button>
        <div class="text-center">
            <button class="love" onclick="love({{ $companies }})">Love</button>

        </div>

        <button class="close-slider" onclick="closeSlider()"> X </button>
    </div>

    <div class="images-slider text-center" style="; width: 100%; height: 100%; position: absolute; top: 0; ; background-color: #3b3c3d">
        <div style="color: white; position: absolute; top: 40%; height: 300px; width: 100%;" class="text-center moto-text">
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
            <img src="http://clipartix.com/wp-content/uploads/2016/12/Awesome-clipart-free-download-clip-art-on.png" class="love" onclick="love({{ $jobs }})">

        </div>

        <button class="close-slider" onclick="closeSlider()"> X </button>
    </div>

@endsection
