@extends('layouts.app')

@section('content')
    <div class="text-center images-slider" style="display: none; position: absolute; top:0; width: 100%; height: 100%; background-color: #3b3c3d;">
        <img class="slide-img" src="{{ $companies[0]->image }}">
        <button class="like" onclick="nextImageTrue({{ $companies }})">Like</button>
        <button class="dislike" onclick="nextImageFalse({{ $companies }})">No</button>
        <button class="love" onclick="love({{ $companies }})">Love</button>

        <button class="close-slider" onclick="closeSlider()"> X </button>
    </div>


    <div class="images-slider text-center" style="width: 100%; height: 100%; position: absolute; top: 0; ; background-color: #3b3c3d">
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

@endsection
