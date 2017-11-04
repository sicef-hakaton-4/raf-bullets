@extends('layouts.app')

@section('content')
    <div class="container">
        <h2></h2>
        <div class="panel panel-default">
            <div class="panel-heading">Current Buffer <span>(saved locally, editable)</span></div>
            <div class="panel-body">
                <p>
                    <pre>
                    public class Solution {

                    public static void main(String[] args) {
                    /* Enter your code here. Print output to STDOUT. Your class should be named Solution. */
                    }
                    }
                    </pre>
                </p>
                <div class="container">
                    <!-- <button type="button" class="btn btn-default">Run Code</button> -->
                    <button type="button" class="btn btn-success">Submit Code</button>
                </div>

            </div>
        </div>

@endsection
