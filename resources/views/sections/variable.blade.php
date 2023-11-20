@extends('layouts.app')
@section('content')
@include('algoprog')
<div id="main" class="main">
    <h3><b>Variables and Data Types in C Programming Language</b></h3>
    <p>Variables are named storage locations usually determined by the user to store and manipulate data locally. 
    <p>Variables have to be declared first. Variable declaration depends on its data type. Commonly used data types include: int (integers) float (decimal numbers), char (characters).</p>
    <p>For example: 'int age;' declares an integer variable named age.</p>
    <br>
    <div style="width: 500px; margin: 0 auto;">
        <object data="{{ asset('/images/variable table.jpg') }}" width="100%" height="300" style="display: block; margin: 0 auto;"></object>
        <figcaption style ="text-align: center;">List of different data types.</figcaption>
    </div>
    
    
</div>
@endsection