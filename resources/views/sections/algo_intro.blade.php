@extends('layouts.app')
@section('content')
@include('algoprog')
<div id="main" class="main">
    <h3><b>What is an Algorithm ?</b></h3>
    <p>
      Algorithm is a step by step set of instruction that we use to solve a specific problem. 
      The instruction can varies from steps to make a peanut butter sandwich to a guide for our morning daily routine.
      In computer science, algorithm will be used to solve the specific problem that our program are being made for.
      For example, here is a C program to show the result of 2 + 5 written in C language.</p>
      <object data= "{{ asset('/images/introduction to algoprog.jpg') }}" width="700" height="170" style="padding-left: 150px;"></object>
      <figcaption style ="text-align: center;">program written in C to show addition operation.</figcaption>
    
    <br><br>
    <h3><b>Representing Algorithm</b></h3>
    <p>
      We can develop our algorithm by writing and drawing. 
      The conventional ways to write our algorithm are using either structured english or the pseudocode and 
      flowchart on the other hand are good to visualize the flow of the algorithm.<br><br>
    
      Pseudocode is an artificial and informal language to help us develop our algorithm. 
      It is similar to conventional english and user friendly compared to other technique.
      Some keywords that are used to control the structure are:<br>
      if, else, print, set, add, while, etc.</p>
      <!-- <object data= "{{ asset('/images/pseudocode.png') }}" width="700" height="170" style="padding-left: 150px;"></object>
      <figcaption style ="text-align: center;">algorithm to sum values.</figcaption> -->
      <div style="width: 500px; margin: 0 auto;">
        <object data="{{ asset('/images/pseudocode.png') }}" width="100%" height="300" style="display: block; margin: 0 auto;"></object>
        <figcaption style ="text-align: center;">Algorithm to sum vales.</figcaption>
      </div>
      <br>
    <p>  
      Flowchart utilize symbol to represent intended function in the algorithm. 
      In computer science, it help us to visualize and design out programs, clearly replesenting the flow of control in a program
      which includes decision points (conditional statements) and looping. 
      it can also be used to helps us designing our user interface as it can outine the navigation and interaction pathways of our intended user.</p>
      <div style="width: 500px; margin: 0 auto;">
        <object data="{{ asset('/images/flowchart symbols.jpeg') }}" width="350" height="400" style="display: block; margin: 0 auto;"></object>
        <figcaption style ="text-align: center;">Flowchart symbols.</figcaption>
      </div><br>
      <div style="width: 500px; margin: 0 auto;">
        <object data="{{ asset('/images/Flowchart example.jpeg') }}" width="350" height="400" style="display: block; margin: 0 auto;"></object>
        <figcaption style ="text-align: center;">Flowchart example.</figcaption>
      </div>

    <h3><b>C language</b></h3>
    <p>
      C, developed in the early 1970s by Dennis Ritchie is one of the most widely used and influential programming languages. 
      it is a high-level programming language that is highly portable which allow the programs that is written in C can be easily adapted to different systems.
      C is also supported by a large number of libraries and is close to low-level machine language yet it is still easy to understand.<br>
      </p>
    <div style="width: 500px; margin: 0 auto;">
      <object data="{{ asset('/images/standard library.png') }}" width="500" height="300" style="display: block; margin: 0 auto;"></object>
      <figcaption style ="text-align: center;">Frequently used C library.</figcaption>
    </div><br>
    <div style="width: 500px; margin: 0 auto;">
      <object data="{{ asset('/images/C structure.png') }}" width="300" height="200" style="display: block; margin: 0 auto;"></object>
      <figcaption style ="text-align: center;">Standard C structure.</figcaption>
    </div><br>
    <p>
      in a standard C structure, the program will always use the standard input output library as it is used to receive input and display outpur to the user.
      Every line must have a semicolon sign at the end of each statement and the program must always return 0 at the end of the program.
      you can also use "#" at the begining of the statement to comment it meaning the statement would not be processed by the program.</p>
    <br><div style="width: 500px; margin: 0 auto;">
      <object data="{{ asset('/images/comment line.png') }}" width="300" height="200" style="display: block; margin: 0 auto;"></object>
      <figcaption style ="text-align: center;">Comment line example.</figcaption>
    </div>
</div>
@endsection
