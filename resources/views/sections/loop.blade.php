@extends('layouts.app')
@section('content')
@include('algoprog')
<div id="main" class="main">
    <h3><b>Looping statements</b></h2>
    <p>Looping statements in C are used to execute a block of code repeatedly as long as a certain condition is true.</p>
    <p>There are three main types of loops in C: <li>for loop</li><li>while</li><li>do while</li></p>
    <div style="width: 500px; margin: 0 auto;">
        <object data="{{ asset('/images/loop flow chart.jpeg') }}" width="100%" height="300" style="display: block; margin: 0 auto;"></object>
        <figcaption style ="text-align: center;">Flowchart showing while and do while loop.</figcaption>
    </div>
    <br>
    <div class="row" style="margin-left: 150px;">
            <div class="column">
                  <object data="{{ asset('/images/for loop.png') }}" width="200" height="150" style="display: block; margin: 0 auto;"></object>
                  <figcaption style ="text-align: center;">For loop.</figcaption>
            </div>
            <div class="column">
                  <object data="{{ asset('/images/while loop.png') }}" width="200" height="150" style="display: block; margin: 0 auto;"></object>
                  <figcaption style ="text-align: center;">While loop.</figcaption>
            </div>
            <div class="column">
                  <object data="{{ asset('/images/do while loop.png') }}" width="200" height="150" style="display: block; margin: 0 auto;"></object>
                  <figcaption style ="text-align: center;">Do while loop.</figcaption>
            </div>
      </div>
      <p>
            In those 3 looping examples, we use the variable "i" as the initializer for our condition. 
            We set the initial value of "i" as 0, and then as the loop progress, we increment the i value by 1 until it meet the 
            condition less than 5 which is 4 to stop the loop causing the statement "this is a loop" will be printed out 5 times.<br><br>
            Similar to conditional statement, there are also a form of nested loop which as the name implied, there is a loop within our loop.
      </p><br>
      <div style="width: 500px; margin: 0 auto;">
        <object data="{{ asset('/images/nested loop.png') }}" width="100%" height="300" style="display: block; margin: 0 auto;"></object>
        <figcaption style ="text-align: center;">Nested loop example.</figcaption>
      </div><br>
      <p>
            In the example above, the statement "this loop happend once" will be printed out 5 times but the stream_get_contents   
            "this loop happend twice" will be printed out 25 times because every once the first loop occur, the second loop will occur 5 times.
      </p>
</div>
@endsection