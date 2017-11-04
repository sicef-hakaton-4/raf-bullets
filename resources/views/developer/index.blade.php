@extends('layouts.app')

@section('content')
    <div class="text-center" style="position: absolute; top:0; width: 100%; height: 100%; background-color: red;">
        <img class="slide-img" src="https://www.w3schools.com/bootstrap/ny.jpg">
        <button class="like" onclick="next()">Dislike</button>
        <button class="dislike">Like</button>
    </div>
@endsection
