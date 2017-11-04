@extends('layouts.app')

@section('content')
    <div class="text-center" style="position: absolute; top:0; width: 100%; height: 100%; background-color: #3b3c3d;">
        <img class="slide-img" src="https://www.w3schools.com/bootstrap/ny.jpg">
        <button class="like" onclick="nextTrue({{App\Company::all()}})">Like</button>
        <button class="dislike" onclick="nextFalse({{App\Company::all()}})">No</button>
    </div>
@endsection
