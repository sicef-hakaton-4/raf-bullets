@extends('layouts.app')

@section('content')



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