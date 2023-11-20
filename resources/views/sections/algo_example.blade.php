@extends('layouts.app')
@section('content')
@include('algoprog')
<div id="main" class="main">
    <h3><b>Example Question</b></h3>
    <br>
    <p><b>Format Input</b></p>
    <p>2 inputs, a number (Num) and a word (Str).</p>
    <p><b>Format Output</b></p>
    <p>You need to print Str as many times as Num. You need to print Str in the following format: 
        <li>If current index is an even number, print with the format “x (Even)” continued with the word (Str) inputted.</li>
        <li>If current index is an odd number, print with the format “x (Odd) ” continued with the word (Str) inputted.</li>
        <p>*x is Str.</p>
        <p>Note that each output should be in a new line</p>
    </p>
    <p><b>Constraints</b></p>
    <p><li>1 <= Num <= 100 </li>
       <li>1 <= |Str| <= 100 where |Str| is the length of Str</li>
    </p>
    <br>
    <p><b>Solution</b></p>
    <div style="width: 500px; margin: 0 auto;">
        <object data="{{ asset('/images/example.png') }}" width="100%" style="display: block; margin: 0 auto;"></object>
    </div>
    <br>
    <p>We use a for loop to determine how many times 'str' should be printed (according to 'num')</p>
    <p>Within the for loop, we use conditional statements to determine if the current index (int i) is even or odd and format the output accordingly.</p>
</div>
@endsection