@extends('layouts.app')

@section('content')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>


    <div class="jumbotron">
        <div class="container-fluid bg-3 text-center">
            <div class="row">
                <div class="col-sm-4">
                    <table class="table">
                        <tr><tr><b>Position</b></tr></td>
                        <tr>
                            <td><form>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Senior Developer</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Intermediate Developer</label>
                                    </div>
                                    <div class="checkbox disabled">
                                        <label><input type="checkbox" value="">Junior Developer</label>
                                    </div>
                                </form></td>
                        </tr>
                    </table>
                </div>

                <div class="col-sm-4">
                    <table class="table">
                        <tr><tr><b>Type of the job</b></tr></td>
                        <tr>
                            <td><form>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Internship</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Part Time</label>
                                    </div>
                                    <div class="checkbox disabled">
                                        <label><input type="checkbox" value="">Full Time</label>
                                    </div>
                                </form></td>
                        </tr>
                    </table>
                </div>

                <div class="col-sm-4">
                    <table class="table">
                        <tr><tr><b>Location</b></tr></td>
                        <tr>
                            <td><form>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Belgrade</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Nis</label>
                                    </div>
                                    <div class="checkbox disabled">
                                        <label><input type="checkbox" value="">Krusevac</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Kragujevac</label>
                                    </div>
                                    <div class="checkbox disabled">
                                        <label><input type="checkbox" value="">Cacak</label>
                                    </div>
                                </form></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <table class="table">
                        <tr><tr><b>Languages</b></tr></td>
                        <tr>
                            <td><form>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">C</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">C++</label>
                                    </div>
                                    <div class="checkbox disabled">
                                        <label><input type="checkbox" value="">Java</label>
                                    </div>
                                    <div class="checkbox disabled">
                                        <label><input type="checkbox" value="">JavaScript</label>
                                    </div>
                                    <div class="checkbox disabled">
                                        <label><input type="checkbox" value="">HTML</label>
                                    </div>
                                    <div class="checkbox disabled">
                                        <label><input type="checkbox" value="">Python</label>
                                    </div>
                                </form></td>
                        </tr>
                    </table>
                </div>

                <div class="col-sm-4">
                    <table class="table">
                        <tr><tr><b>Type of the job</b></tr></td>
                        <tr>
                            <td>                    <form>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Algorithms</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Web Development</label>
                                    </div>
                                    <div class="checkbox disabled">
                                        <label><input type="checkbox" value="">Front-end</label>
                                    </div>
                                    <div class="checkbox disabled">
                                        <label><input type="checkbox" value="">Back-end</label>
                                    </div>
                                    <div class="checkbox disabled">
                                        <label><input type="checkbox" value="">Machine Learning</label>
                                    </div>
                                    <div class="checkbox disabled">
                                        <label><input type="checkbox" value="">Mobile Systems</label>
                                    </div>
                                    <div class="checkbox disabled">
                                        <label><input type="checkbox" value="">Data Bases</label>
                                    </div>
                                </form></td>
                        </tr>
                    </table>
                </div>
                <div class="col-sm-4"><button class="btn btn-primary" type="submit" onclick="$('.filtered-jobs').show()">Filter</button></div>
            </div>
        </div>
    </div>

    <div class="filtered-jobs container-fluid bg-3 text-center" style="display: none">
        <div class="row">
            @foreach($jobs as $job)
                <div class="col-sm-4">
                    <table class="table">
                        <tr>
                            <td><p style="font-family:verdana;font-size:160%;"><b>{{ $job->title }}</b></p></td>
                        </tr>
                        <tr>
                            <td><p style="font-family:courier;font-size:120%;">{{ $job->description }}</p></td>
                        </tr>
                        <tr>
                            <td>{{ $job->company->name }}</td>
                        </tr>
                        <tr>
                            <td><a href="{{ url('company/job/'.$job->id) }}" class="btn btn-primary" type="submit">Read more</a></td>
                        </tr>
                    </table>
                </div>
            @endforeach

        </div>
    </div><br>


    </div><br><br>

    <footer class="container-fluid text-center">
        <p>RAF Bullets - SICEF Hakaton 2017</p>
    </footer>

@endsection
