@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Home</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Marina Ivanovic</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1>Edit Profile</h1>
-            <h2>Personal information</h2>
                <table class="table">
                    <tr>
                        <td>Full name</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" class="btn btn-success" style="width: 125px;">Upload picture</button>
                        </td>
                    </tr>
                </table>

            <h2>Links</h2>
            <table class="table">
                <tr>
                    <td>Linkedin</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>GitHub</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>CodeForces</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
            </table>

            <h2>Education</h2>
            <table class="table">
                <tr>
                    <td>University</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>Faculty</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>Major</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Choose
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Computer Science</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Electrical Engineering</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mathematics</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Software Engineering</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Other</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Degree</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Choose
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">High school</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Bachelor's</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Master's</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">PhD</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Other</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Expected graduation</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Choose
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2017</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2018</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2019</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2020</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2021</a></li>


                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">I graduated</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </table>

            <h2>Experience</h2>
            <table class="table">
                <tr>
                    <td>Title</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>Company</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>From</td>
                    <td>To</td>
                </tr>
                <tr>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Choose
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Jan</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Feb</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mar</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Apr</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">May</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Jun</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Jul</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Aug</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sep</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Oct</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Nov</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Dec</a></li>
                            </ul>
                        </div>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Choose
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2017</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2016</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2015</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2014</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2013</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2012</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2011</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2010</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Choose
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Jan</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Feb</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mar</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Apr</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">May</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Jun</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Jul</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Aug</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sep</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Oct</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Nov</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Dec</a></li>
                            </ul>
                        </div>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Choose
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2017</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2016</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2015</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2014</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2013</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2012</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2011</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2010</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="checkbox">
                            <label><input type="checkbox" value="">I work here now</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><input type="text" class="form-control" rows="5"></td>
                </tr>
            </table>

        <h2>Programming Language Skills</h2>
        <table class="table">
            <tr>
                <td>Additional programming languages</td>
            </tr>
            <tr>
                <td>
                    <form>
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
                    </form>
                </td>
            </tr>
        </table>

        <h2>Skills and Experience</h2>
        <table class="table">
            <tr>
                <td>Areas with skills or experience</td>
            </tr>
            <tr>
                <td>
                    <form>
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
                    </form>
                </td>
            </tr>
        </table>

        <h2>Preferences</h2>
        <table class="table">
            <tr>
                <td>Prefered location</td>
            </tr>
            <tr>
                <td>
                    <form>
                        <div class="checkbox">
                            <label><input type="checkbox" value="">Belgrade</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="">Nis</label>
                        </div>
                        <div class="checkbox disabled">
                            <label><input type="checkbox" value="">Krusevac</label>
                        </div>
                        <div class="checkbox disabled">
                            <label><input type="checkbox" value="">Kragujevac</label>
                        </div>
                        <div class="checkbox disabled">
                            <label><input type="checkbox" value="">Cacak</label>
                        </div>
                    </form>
                </td>
            </tr>
            <tr>
                <td>Prefered start date</td>
            </tr>
            <tr>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Choose
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Spring 2018</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Summer 2018</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Fall 2018</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Winter 2018</a></li>

                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">As soon as possible</a></li>
                        </ul>
                    </div>
                </td>
            </tr>

            <tr>
                <td>Prefered programming language</td>
            </tr>
            <tr>
                <td>
                    <form>
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
                    </form>
                </td>
            </tr>
            <tr>
                <td>Prefered work area</td>
            </tr>
            <tr>
                <td>
                    <form>
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
                    </form>
                </td>
            </tr>
        </table>
        <table class="table">
            <tr>
                <td>
                    <button type="button" class="btn btn-success" style="width: 125px;">Save</button>
                </td>
            </tr>
        </table>
    </div>

    <footer class="container-fluid text-center">
        <p>RAF Bullets - SICEF Hakaton 2017</p>
    </footer>

@endsection