@extends('layouts.app')

@section('content')

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <table class="table">
        <tr><td>

    <div class="jumbotron">
        <div class="container text-center">
            <h1 style="font-size:70px" align="left">Todor Mihajlović</h1>
            <div>
                <img src="https://scontent-vie1-1.xx.fbcdn.net/v/t34.0-12/22709914_1455688974500906_1166385459_n.jpg?oh=bd6646a6b8f1df1d49acf04df2e2cdd0&oe=5A00A4EA"
                     style="width: 300px; height: 300px; margin-right: 50px;"  alt="Tole" align="left">
                <p></p>
                <p style="font-size:22px;"align="left" >Location: Belgrade</p>
                <p style="font-size:22px;"align="left" >Email: tole@raf.edu.rs</p>
                <p style="font-size:22px;"align="left" >Phone: +381 65 4563 943</p>
                <p style="font-size:20px;"align="left" ><a href="https://www.linkedin.com/in/todor-mihajlovic-9a6656144/">Linkedin profile</a></p>
                <p style="font-size:20px;"align="left" ><a href="https://www.linkedin.com/in/todor-mihajlovic-9a6656144/">Github profile</a></p>
                <p style="font-size:20px;"align="left" ><a href="https://www.linkedin.com/in/todor-mihajlovic-9a6656144/">Codeforces profile</a></p>
            </div>
        </div>

        <div class="container text-center">
            <h1 style="font-size:30px" align="left">Experience</h1>
            <div>
                <p style="font-size:24px;"align="left" ><strong>Google, Junior Software Developer</strong> <span>(June 2017 - October 2017)</span></p>
                <p style="font-size:18px;"align="left" >Opis</p>
            </div>
        </div>
        <hr>
        <div class="container text-center">
            <h1 style="font-size:30px" align="left">Education</h1>
            <div>
                <p style="font-size:24px;"align="left" ><strong>Union University, Faculty of computing</strong> (October 2016 - )</p>
                <p style="font-size:18px;"align="left" >Major: Computer science</p>
                <p style="font-size:18px;"align="left" >Degree: Bachelor's</p>
                <p style="font-size:18px;"align="left" >Expected graduation: 2020</p>
                <ul class="delimiter">
                </ul>
            </div>
        </div>
        <hr width="600px;" align="left" style="color: #5bc0de">
        <div class="container text-center">
            <h1 style="font-size:30px" align="left">Programming Language Skills</h1>
            <div>
                <ul>
                    <li><p style="font-size:18px;"align="left" >C</p></li>
                    <li><p style="font-size:18px;"align="left" >Java</p></li>
                    <li><p style="font-size:18px;"align="left" >PHP</p></li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="container text-center">
            <h1 style="font-size:30px" align="left">Skills and Experience</h1>
            <div>
                <ul>
                    <li><p style="font-size:18px;"align="left" >Algorithms</p></li>
                    <li><p style="font-size:18px;"align="left" >Back-end</p></li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="container text-center">
            <h1 style="font-size:30px" align="left">Favorites</h1>
<br>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="http://www.nordeus.com/" target="_blank">
                                <img src="https://pbs.twimg.com/media/DJmnX1cXoAA0OZL.jpg" alt="Nordeus" style="width: 300px; height: 200px">
                                <div class="caption">
                                    <p><em><strong>Make it happen.</strong></em></p>
                                </div>
                            </a>
                            <button type="button" class="btn btn-default" style="width: 125px;">Unfavorite</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="https://www.apexsql.com/" target="_blank">
                                <img src="https://pbs.twimg.com/profile_images/876712863632691200/E12HpH3s_400x400.jpg" alt="Apex SQL" style="width: 300px; height: 200px">
                                <div class="caption">
                                    <p><em><strong>Work naked.</strong></em></p>
                                </div>
                            </a>
                            <button type="button" class="btn btn-default" style="width: 125px;">Unfavorite</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="https://quantox.com/" target="_blank">
                                <img src="https://pbs.twimg.com/profile_images/677260375222525952/6sFpzQUk.jpg" alt="Quantox Technology" style="width: 300px; height: 170px">
                                <div class="caption">
                                    <p><em><strong>Invest in yourself, become part of our team.</strong></em></p>
                                </div>
                            </a>
                            <button type="button" class="btn btn-default" style="width: 125px;">Unfavorite</button>
                        </div>
                    </div>
                </div>
            </div>


            <div>
            </div>
        </div>

    </div>

    </table>

    <footer class="container-fluid text-center">
        <p>RAF Bullets - SICEF Hakaton 2017</p>
    </footer>

@endsection