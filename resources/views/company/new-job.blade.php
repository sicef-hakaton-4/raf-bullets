@extends('layouts.app')

@section('content')
    <form method="POST", action="{{url('company/job/new')}}">
        {{ csrf_field() }}
        <div class="container">
            <h1>New Job</h1>
            <br>
            <h2>Information</h2>
            <table class="table">
                <tr>
                    <td>Required position</td>
                    <td><select name="positions" class="form-control">
                            <option value="" disabled selected>Choose position..</option>
                            <option value="0">Junior Developer</option>
                            <option value="1">intermediate Developer</option>
                            <option value="2">Senior Developer</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Type of the job</td>
                    <td><select name="type" class="form-control">
                            <option value="" disabled selected>Choose type..</option>
                            <option value="0">Internship</option>
                            <option value="1">Part time</option>
                            <option value="2">Full time</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Job location</td>
                    <td><select name="location" class="form-control">
                            <option value="" disabled selected>Choose location...</option>
                            <option value="0">Belgrade</option>
                            <option value="1">Nis</option>
                            <option value="2">Krusevac</option>
                            <option value="3">Kragujevac</option>
                            <option value="4">Cacak</option>
                        </select></td>
                </tr>
                <tr>
                    <td>What is the title of the job?</td>
                    <td><input name="title" type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>Job description</td>
                    <td><textarea type="text-area" name="description" style="height: 150px;" class="form-control"></textarea></td>
                </tr>
                <tr>
                    <td>Determine minimum grade for:</td>
                </tr>
                <tr>
                    <td>C</td>
                    <td>
                        <select name="c" class="form-control">
                            <option value="" disabled selected>Choose category..</option>
                            <option value="5">5</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="1">1</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>C++</td>
                    <td>
                        <select name="cpp" class="form-control">
                            <option value="" disabled selected>Choose category..</option>
                            <option value="5">5</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="1">1</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Java</td>
                    <td>
                        <select name="java" class="form-control">
                            <option value="" disabled selected>Choose category..</option>
                            <option value="5">5</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="1">1</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>JavaScript</td>
                    <td>
                        <select name="javascript" class="form-control">
                            <option value="" disabled selected>Choose category..</option>
                            <option value="5">5</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="1">1</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>HTML</td>
                    <td>
                        <select name="html" class="form-control">
                            <option value="" disabled selected>Choose category..</option>
                            <option value="5">5</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="1">1</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Python</td>
                    <td>
                        <select name="python" class="form-control">
                            <option value="" disabled selected>Choose category..</option>
                            <option value="5">5</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="1">1</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Areas of the job</td>
                </tr>
                <tr>
                    <td>
                        <form>
                            <div class="checkbox">
                                <label><input name="algorithms" type="checkbox" value="0">Algorithms</label>
                            </div>
                            <div class="checkbox">
                                <label><input name="web" type="checkbox" value="1">Web Development</label>
                            </div>
                            <div class="checkbox">
                                <label><input name="front" type="checkbox" value="2">Front-end</label>
                            </div>
                            <div class="checkbox">
                                <label><input name="back" type="checkbox" value="3">Back-end</label>
                            </div>
                            <div class="checkbox">
                                <label><input name="machine" type="checkbox" value="4">Machine Learning</label>
                            </div>
                            <div class="checkbox">
                                <label><input name="mobile" type="checkbox" value="5">Mobile Systems</label>
                            </div>
                            <div class="checkbox">
                                <label><input name="data" type="checkbox" value="6">Data Bases</label>
                            </div>
                        </form>
                    </td>
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
                            <button type="submit" class="btn btn-success" style="width: 125px;">Create job</button>
                        </td>
                    </tr>
                </table>
            </table>
        </div>
    </form>
@endsection
