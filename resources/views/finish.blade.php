@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>You passed the test! Your score 3 of 4 (min: {{ $job->min }})</h1>
        <h3>Your profile is sent to {{ $job->company->name }}.</h3>
        <div class="text-center">
            <img src="http://clipartix.com/wp-content/uploads/2016/12/Your-awesome-clipart.jpg">
        </div>
    </div>
@endsection
