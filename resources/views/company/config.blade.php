@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Company Profile</h1>
        <br>
        <h2>Personal information</h2>
        <table class="table">
            <tr>
                <td>Full company name</td>
                <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
                <td>Company moto</td>
                <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
                <td>Address</td>
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

        <h2>Workplace</h2>
        <table class="table">
            <tr>
                <td>Location description</td>
                <td><input type="text-area" class="form-control"></td>
            </tr>
            <br>
            <tr>
                <td>Pictures</td>
            </tr>
            <tr>
                <td>
                    <button type="button" class="btn btn-success" style="width: 125px;">Upload picture</button>
                </td>
            </tr>
            <tr>
                <img src="" alt="Image" width="139" height="150" class="form-control">
            </tr>

                <!-- <br>
                <td><img src="" alt="First picture" width="139" height="150" style="margin: 0 10px 10px 0;" />
                <button type="button" name="kreiraj" class="form-control">Upload picture
                </td>
                <td>
                    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default" href="#tab1" data-toggle="tab">
                                <div class="hidden-xs">Upload picture 1</div>
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default" href="#tab2" data-toggle="tab">
                                <div class="hidden-xs">Upload picture 2</div>
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default" href="#tab3" data-toggle="tab">
                                <div class="hidden-xs">Upload picture 3</div>
                            </button>
                        </div>
                </td>
            </tr> -->

        </table>

        <h2>Jobs</h2>
        <h4>New job</h4>
        <table class="table">
            <table class="table">
                <tr>
                    <td>
                        <button type="button" class="btn btn-success" style="width: 125px;">Create new job</button>
                    </td>
                </tr>
            </table>
        </table>

        <table class="table">
            <tr>
                <td>
                    <button type="button" class="btn btn-success" style="width: 125px;">Save</button>
                </td>
            </tr>
        </table>





@endsection