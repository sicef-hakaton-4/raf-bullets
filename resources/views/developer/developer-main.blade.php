@extends('layouts.app')

@section('content')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            nav {
                float: left;
                max-width: 160px;
                margin: 0;
                padding: 1em;
            }
            #search {
                background-image: url('/css/searchicon.png');
                background-position: 10px 12px;
            }
            article {
                margin-left: 170px;
                border-left: 1px solid gray;
                padding: 1em;
                overflow: hidden;
            }
        </style>
    </head>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">My Profile</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <span class="glyphicon glyphicon-search"></span>
                    <input type="text" id="search" placeholder="Search.." style="position: relative; width: 80px; height: auto;">
                </ul>
            </div>
        </div>
    </nav>

   <!-- <nav>
        <div style="margin-left: 20px;">
        <button type="button" class="btn btn-primary btn-block btn-lg" style="width: 125px;">Moto</button>
            <br>
        <button type="button" class="btn btn-primary btn-block btn-lg" style="width: 125px;">Workplace</button>
            <br>
        <button type="button" class="btn btn-primary btn-block btn-lg" style="width: 125px;">Projects</button>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="table">
                    <tr>
                        <td><img src="https://pbs.twimg.com/media/DJmnX1cXoAA0OZL.jpg" alt="Nordeus" class="img-circle" style="width: 100px; height: 100px"></td>
                        <td>

                        </td>


                    </tr>
                    <tr>
                        <td><button type="button" class="btn btn-primary" style="width: 125px;">Read more</button></td>
                    </tr>
                </div>
            </div>
            <article>
            <div class="col-md-6">
                <div class="thumbnail">
                    <a href="https://www.apexsql.com/" target="_blank">
                        <img src="https://pbs.twimg.com/profile_images/876712863632691200/E12HpH3s_400x400.jpg" alt="Apex SQL" class="img-circle" style="width: 100px; height: 100px">
                        <div class="caption">
                            <p><em><strong>Work naked.</strong></em></p>
                        </div>
                    </a>
                    <button type="button" class="btn btn-primary" style="width: 125px;">Read more</button>
                </div>
            </div>
            </article>
        </div>
    </div>-->


        <div class="row">
            <div class="col-sm-2 col-md-border">
                <h1 style="font-size:30px; color:DodgerBlue; margin-left: 20px" align="left">Find:</h1>
                <br>
                <div style="margin-left: 20px;">
                    <button type="button" class="btn btn-primary btn-block btn-lg" style="width: 200px;">Moto</button>
                    <br>
                    <button type="button" class="btn btn-primary btn-block btn-lg" style="width: 200px;">Workplace</button>
                    <br>
                    <button type="button" class="btn btn-primary btn-block btn-lg" style="width: 200px;">Projects</button>
                </div>
            </div>
            <div class="col-sm-8">
    <div class="container text-center">
        <h1 style="font-size:30px; color:DodgerBlue;" align="left">Companies:</h1>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="thumbnail" style="height: 250px; width: 350px;">
                        <a href="http://www.nordeus.com/" target="_blank">
                            <img src="https://pbs.twimg.com/media/DJmnX1cXoAA0OZL.jpg" alt="Nordeus" style="width: 50%; height: 50%" class="img-rounded">
                            <div class="caption">
                                <p><em><strong>Make it happen.</strong></em></p>
                            </div>
                        </a>
                        <button type="button" class="btn btn-primary" style="width: 125px; margin-top: 60px;">Read more</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail" style="height: 250px; width: 350px;">
                        <a href="https://www.apexsql.com/" target="_blank">
                            <img src="https://pbs.twimg.com/profile_images/876712863632691200/E12HpH3s_400x400.jpg" alt="Apex SQL" style="width: 50%; height: 50%" class="img-rounded">
                            <div class="caption">
                                <p><em><strong>Work naked.</strong></em></p>
                            </div>
                        </a>
                        <button type="button" class="btn btn-primary" style="width: 125px; margin-top: 60px;">Read more</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail" style="height: 250px; width: 350px;">
                        <a href="https://quantox.com/" target="_blank">
                            <img src="https://pbs.twimg.com/profile_images/677260375222525952/6sFpzQUk.jpg" alt="Quantox" style="width: 40%; height: 40%" class="img-rounded">
                            <div class="caption">
                                <p><em><strong>Invest in yourself, become part of our team.</strong></em></p>
                            </div>
                        </a>
                        <button type="button" class="btn btn-primary" style="width: 125px; margin-top: 60px;">Read more</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
                <footer class="container-fluid text-center">
                    <p>RAF Bullets - SICEF Hakaton 2017</p>
                </footer>
    </div>

@endsection