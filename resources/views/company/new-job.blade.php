@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>New Job</h1>
        <br>
        <h2>Information</h2>
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
                <td>Type of the job</td>
                <td><select name="type" class="form-control">
                        <option value="" disabled selected>Choose type..</option>
                        <option value="internship">Internship</option>
                        <option value="part-time">Part time</option>
                        <option value="full-time">Full time</option>
                    </select></td>
            </tr>
            <tr>
                <td>Job location</td>
                <td><select name="jobs" class="form-control">
                        <option value="" disabled selected>Choose location...</option>
                        <option value="bg">Belgrade</option>
                        <option value="ni">Nis</option>
                        <option value="ks">Krusevac</option>
                        <option value="kg">Kragujevac</option>
                        <option value="ca">Cacak</option>
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
            </tr>
            <tr>
                <td>C</td>
                <td>
                    <select name="grades" class="form-control">
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
                    <select name="grades" class="form-control">
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
                    <select name="grades" class="form-control">
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
                    <select name="grades" class="form-control">
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
                    <select name="grades" class="form-control">
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
                    <select name="grades" class="form-control">
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
        </table>
    </div>
@endsection
