@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-center">
            <a class="btn btn-default btn-lg" style="color:#ff1d0e; width: 200px; position: relative;
                    " href="{{url('register-company')}}">As company</a>
            <br>
            <br>
            <a class="btn btn-default btn-lg" style="color:DodgerBlue; width: 200px; position: relative;" href="{{url('register-developer')}}">As developer</a>

        </div>
    </div>


@endsection