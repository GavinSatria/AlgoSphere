@extends('layouts.app')
@section('content')
@include('algoprog')
<div id="main" class="main">
      <h3><b>Operators in C language</b></h3>
      <p>
        In C language, operators are used as symbols to represent either computation or operations in our program.
        These operator come in different categories that can be classified by their functionality. 
        Some of them are arithmatic operators, conditional operators, logical operators, increment/decrement operators, etc.</p>
    
      <div class="row" style="margin-left: 150px;">
            <div class="column">
                  <object data="{{ asset('/images/conditional operator.png') }}" width="350" height="275" style="display: block; margin: 0 auto;"></object>
                  <figcaption style ="text-align: center;">List of conditional operator.</figcaption>
            </div>
            <div class="column">
                  <object data="{{ asset('/images/logical operator.png') }}" width="350" height="275" style="display: block; margin: 0 auto;"></object>
                  <figcaption style ="text-align: center;">List of logical operator.</figcaption>
            </div>
      </div>
      <div style="width: 500px; margin: 0 auto;">
            <video width="640" height="360" controls>
                  <source src="{{ asset('videos/operators.mp4') }}" type="video/mp4">
                  Your browser does not support the video tag.
            </video>
      </div>
</div>
@endsection