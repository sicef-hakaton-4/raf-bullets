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
                    <li><a href="#">Nordeus</a></li>
                </ul>
            </div>
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
        </div>
    </div>

    <footer class="container-fluid text-center">
        <p>RAF Bullets - SICEF Hakaton 2017</p>
    </footer>
@endsection