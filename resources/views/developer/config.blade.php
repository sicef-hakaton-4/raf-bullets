@extends('layouts.app')

@section('content')
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

            <h2>Expirience</h2>
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
                    <td><input type="text" class="form-control">
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
                    </td></td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
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

    </div>

@endsection