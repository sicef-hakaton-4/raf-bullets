@extends('layouts.app')

@section('content')
    <a href="{{ url('company/job/'.$job->id.'/test-finish') }}" class="btn btn-primary" style="position: fixed; bottom: 40px; right: 450px">Submit</a>
    {!! $job->test_link !!}
@endsection
