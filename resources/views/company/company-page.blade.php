@extends('layouts.app')

@section('content')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>


<div class="jumbotron">
    <div class="container text-center">
        <img src="https://media-exp1.licdn.com/media/AAEAAQAAAAAAAApzAAAAJDUzMDE2N2VkLWJhODgtNDkyNS1hZTgxLTQwOTEyZWRiYjZmZg.png" alt="Nordeus image" style="width:70%;">
        <h1 style="font-size:92px">Nordeus</h1>
        <p style="font-size:32px">Make it happen.</p>
        <p><a href="#"><span class="glyphicon glyphicon-map-marker"></span></a>Belgrade</p>
        <table class="table">
            <tr>
                <td>Filter</td>
                <td>

                </td>
            </tr>
        </table>
    </div>
</div>

<div class="container-fluid bg-3 text-center">
    <div class="row">
        <div class="col-sm-4">
            <table class="table">
                <tr>
                    <td><p style="font-family:verdana;font-size:160%;"><b>Test Automation Engineer</b></p></td>
                </tr>
                <tr>
                    <td><p style="font-family:courier;font-size:120%;">Engineering</p></td>
                </tr>
                <tr>
                    <td><p><span class="glyphicon glyphicon-map-marker"></span>Belgrade</p></td>
                </tr>
                <tr>
                    <td><button class="btn btn-primary" type="submit">Read more</button></td>
                </tr>
            </table>
        </div>
        <div class="col-sm-4">
            <table class="table">
                <tr>
                    <td><p style="font-family:verdana;font-size:160%;"><b>Lead Game Designer</b></p></td>
                </tr>
                <tr>
                    <td><p style="font-family:courier;font-size:120%;">Game Design</p></td>
                </tr>
                <tr>
                    <td><p><span class="glyphicon glyphicon-map-marker"></span>Belgrade</p></td>
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
                    <td><p><span class="glyphicon glyphicon-map-marker"></span>Belgrade</p></td>
                </tr>
                <tr>
                    <td><button class="btn btn-primary" type="submit">Read more</button></td>
                </tr>
            </table>
        </div>

    </div>
</div><br>

<div class="container-fluid bg-3 text-center">
    <div class="col-sm-4">
        <table class="table">
            <tr>
                <td><p style="font-family:verdana;font-size:160%;"><b>System Designer</b></p></td>
            </tr>
            <tr>
                <td><p style="font-family:courier;font-size:120%;">Game Design</p></td>
            </tr>
            <tr>
                <td><p><span class="glyphicon glyphicon-map-marker"></span>Belgrade</p></td>
            </tr>
            <tr>
                <td><button class="btn btn-primary" type="submit">Read more</button></td>
            </tr>
        </table>
    </div>


    </div>
</div><br><br>

<footer class="container-fluid text-center">
    <p>RAF Bullets - SICEF Hakaton 2017</p>
</footer>

@endsection
