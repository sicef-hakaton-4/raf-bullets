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
                <div class="col-sm-4"><button class="btn btn-primary" type="submit">Filter</button></div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-3 text-center">
        <div class="row">
            <div class="col-sm-4">
                <table class="table">
                    <tr>
                        <td><p style="font-family:verdana;font-size:160%;"><b>Senior Software Engineer</b></p></td>
                    </tr>
                    <tr>
                        <td><p style="font-family:courier;font-size:120%;">Software Engineering</p></td>
                    </tr>
                    <tr>
                        <td>Microsoft</td>
                    </tr>
                    <tr>
                        <td><button class="btn btn-primary" type="submit">Read more</button></td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-4">
                <table class="table">
                    <tr>
                        <td><p style="font-family:verdana;font-size:160%;"><b>Web Developer</b></p></td>
                    </tr>
                    <tr>
                        <td><p style="font-family:courier;font-size:120%;">Senior PHP Development</p></td>
                    </tr>
                    <tr>
                        <td>Quantox Technology</td>
                    </tr>
                    <tr>
                        <td><button class="btn btn-primary" type="submit">Read more</button></td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-4">
                <table class="table">
                    <tr>
                        <td><p style="font-family:verdana;font-size:160%;"><b>Rendering Engineer</b></p></td>
                    </tr>
                    <tr>
                        <td><p style="font-family:courier;font-size:120%;">Engineering</p></td>
                    </tr>
                    <tr>
                        <td>Nordeus</td>
                    </tr>
                    <tr>
                        <td><button class="btn btn-primary" type="submit">Read more</button></td>
                    </tr>
                </table>
            </div>

        </div>
    </div><br>


    </div><br><br>

    <footer class="container-fluid text-center">
        <p>RAF Bullets - SICEF Hakaton 2017</p>
    </footer>

@endsection
