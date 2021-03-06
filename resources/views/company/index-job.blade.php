@extends('layouts.app')

@section('content')

    <div class="jumbotron">
        <div class="container text-center">
            <img src="{{ $job->company->image }}" alt="Nordeus image" style="width:70%;">
            <h1 style="font-size:92px">{{ $job->company->name }}</h1>
            <p style="font-size:32px">{{ $job->company->moto }}</p>
            <p><span class="glyphicon glyphicon-map-marker"></span>{{ App\Job::parseLocation($job->location) }}</p>
            <table class="table">
            </table>
        </div>
    </div>

    <div class="container">
        <h3>{{ $job->title }}</h3>
        <p><em>Engineering</em></p>
        <p>{{ $job->description }}</p>
        <br>
        <table class="table">
            <tr>
                <td><strong>Position</strong></td>
                <td>Senior Developer</td>
            </tr>
            <tr>
                <td><strong>Type</strong></td>
                <td>Full Time</td>
            </tr>
            <tr>
                <td><strong>Location</strong></td>
                <td>Belgrade</td>
            </tr>
            <tr>
                <td><strong>Programming Languages Skills</strong></td>
                <td>
                    <table>
                        <tr>
                            <td>HTML: 3</td>
                        </tr>
                        <tr>
                            <td>Python: 4</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td><strong>Areas of the job</strong></td>
                <td>
                    <table>
                        <tr>
                            <td>Front-end</td>
                        </tr>
                        <tr>
                            <td>Mobile Systems</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <table class="table">
            <tr>
                <td>
                    <a href="{{url('company/job/'.$job->id.'/test')}}" type="button" class="btn btn-success" style="width: 125px;">Complete test</a>
                </td>
            </tr>
        </table>
    </div>

    <footer class="container-fluid text-center">
        <p>RAF Bullets - SICEF Hakaton 2017</p>
    </footer>
@endsection
