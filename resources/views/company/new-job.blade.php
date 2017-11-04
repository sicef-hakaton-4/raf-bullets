@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>New Job</h1>
        <br>
        <h2>Informations</h2>
        <table class="table">
            <tr>
                <td>Required position</td>
                <td><select name="positions" class="form-control">
                        <option value="" disabled selected>Choose position..</option>
                        <option value="junior">Junior Developer</option>
                        <option value="senior">Senior Developer</option>
                    </select></td>
            </tr>
            <tr>
                <td>Category</td>
                <td><select name="jobs" class="form-control">
                        <option value="" disabled selected>Choose category..</option>
                        <option value="cs">Computer Science</option>
                        <option value="ee">Electrical Engineering</option>
                        <option value="m">Mathematics</option>
                        <option value="se">Software Engineering</option>
                        <option value="wb">Web Development</option>
                    </select></td>
            </tr>
            <tr>
                <td>What is the title of the job?</td>
                <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
                <td>Job description</td>
                <td><input type="text-area" style="height: 150px;" class="form-control"></td>
            </tr>
            <tr>
                <td>Determine minimum grade for:</td>
                <table class="table">
                    <tr>
                        <div class="panel panel-default" style="width: 115px; border: hidden" >
                            <div class="panel-body">
                                C<input type="text-area" style="width: 70px;"class="form-control"></td>
                                <br>
                                C++<input type="text-area" style="width: 70px;"class="form-control"></td>
                                <br>
                                Java<input type="text-area" style="width: 70px;"class="form-control"></td>
                                <br>
                                JavaScript<input type="text-area" style="width: 70px;"class="form-control"></td>
                                <br>
                                HTML<input type="text-area" style="width: 70px;"class="form-control"></td>
                                <br>
                                Python<input type="text-area" style="width: 70px;"class="form-control"></td>
                            </div>
                        </div>
                        <!--<td> <button type="button" class="btn btn-default" style="width: 125px;">Make test</button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-success" style="width: 125px;">Create job</button></td>
                        </td>-->
                    </tr>
                </table>
                <br>
            </tr>
        </table>
        <table class="table">
            <tr>
                <td>
                    <button type="button" class="btn btn-default" style="width: 125px;">Make test</button>
                </td>
            </tr>

            <table class="table">
                <tr>
                    <td>
                        <button type="button" class="btn btn-success" style="width: 125px;">Create job</button>
                    </td>
                </tr>
            </table>
    </div>
@endsection
