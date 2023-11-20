@extends('layouts.app')
@section('content')
@include('algoprog')
<div id="main" class="main">
    <h3><b>Conditional Statements</b></h2>
    <p>Conditional statements are a type of control structure that allows a program to make decisions based on a condition.</p>
    <p>The program will execute different blocks of code based on which condition is met.</p>
    <p>Syntax used: <li>if (condition) {statement} </li><li>if else (alternate condition) {statement}</li><li>else {statement}</li></p>
    <div style="width: 500px; margin: 0 auto;">
        <object data="{{ asset('/images/if flowchart.png') }}" width="100%" height="300" style="display: block; margin: 0 auto;"></object>
        <figcaption style ="text-align: center;">Flowchart showing an 'if' conditional statement.</figcaption>
    </div>
    <br>
    <p></p>
    <div style="width: 500px; margin: 0 auto;">
        <object data="{{ asset('/images/if example.png') }}" width="100%" height="300" style="display: block; margin: 0 auto;"></object>
        <figcaption style ="text-align: center;">Simple program with conditional statement.</figcaption>
    </div>
    <br>
    <p>An alternative method to 'if' statements are switch-case statements. This method can be used instead of multiple 'if else' statements.
    <div style="width: 350px; margin: 0 auto;">
        <object data="{{ asset('/images/if switch.png') }}" width="100%" height="300" style="display: block; margin: 0 auto;"></object>
        <figcaption style ="text-align: center;">Using switch-case method.</figcaption>
    </div>
    <br>
    <p>Nested conditional statements use multiple 'if' statements for more complex decision-making based on multiple conditions.</p>
    <p>For example: nested conditional statements can be used to determine whether an integer is positive and even.</p>
    <div style="width: 850px; margin: 0 auto;">
        <object data="{{ asset('/images/if example2.png') }}" width="100%" height="300" style="display: block; margin: 0 auto;"></object>
        <figcaption style ="text-align: center;">Example of nested if statement.</figcaption>
    </div>
</div>
@endsection