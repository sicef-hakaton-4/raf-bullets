@extends('layouts.app')

@section('content')
    <div class="text-center" style="position: absolute; top:0; width: 100%; height: 100%; background-color: #3b3c3d;">
        <img class="slide-img" src="{{ $companies[0]->image }}">
        <button class="like" onclick="nextTrue({{ $companies }})">Like</button>
        <button class="dislike" onclick="nextFalse({{ $companies }})">No</button>
        <button class="love" onclick="love({{ $companies }})">Love</button>
    </div>
@endsection
