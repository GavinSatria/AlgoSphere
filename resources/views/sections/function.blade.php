@extends('layouts.app')
@section('content')
@include('algoprog')
<div id="main" class="main">
    <h3><b>Function in C language</b></h2>
    <p>
        In programming, function is a block of code outside our main function that we create to perform a specific task. 
        The purpose of this method is that so we don't have to rewrite a code that we have used before or in other words, it enables reuseability in our program.
        There are crucial components in making a function such as:
        <li>return type</li>
        <li>funtion name</li>
        <li>parameter list</li>
        <li>return type</li>
        <li>return type</li>
    </p>
    <div style="width: 500px; margin: 0 auto;">
        <object data="{{ asset('/images/function.png') }}" width="100%" height="300" style="display: block; margin: 0 auto;"></object>
        <figcaption style ="text-align: center;">Function structure.</figcaption>
    </div><br>

    <p>
        To call a function, we simply input the function name along with its parameters.
    </p>
    <div style="width: 500px; margin: 0 auto;">
        <object data="{{ asset('/images/function in C.png') }}" width="250" height="300" style="display: block; margin: 0 auto;"></object>
        <figcaption style ="text-align: center;">Function example in C.</figcaption>
    </div><br>
    <p>
        In the example above, "int" is the return type which signify that the return value will be an integer 
        therefore our "result" variables need to be declared as an integer as well. the function name is "sum" which requiere 2 parameters 
        integer a and b so in order to call it, we will input "sum" with 4 and 5 as the parameters. 
        Since the return value is an addition, the output of this program will be 9.
    </p>

    <br><br>

    <h3><b>Recursion</b></h2>
    <p>
        Recursion is a concept within a function in which instead of simply returning a value, the function will call itself again.
        This technique is widely used to solve problems by breaking them down into smaller instances then concisely solving them.
        A popular problem solved using recursion is a program to calculate the factorial of a number.
        Factorial value is gained by multiplying a value with its decrement until it reach 1. 
        By using recursion, we can divide those calculations 
        so that each value will return the multiplication of its decrement and itself unless those value is 0 or 1 then it will return 1
        marking it as the breakpoint. 
    </p><br>
    <div style="width: 500px; margin: 0 auto;">
        <object data="{{ asset('/images/factorial visualization.png') }}" width="100%" height="300" style="display: block; margin: 0 auto;"></object>
        <figcaption style ="text-align: center;">Factorial visualization.</figcaption>
    </div><br>
    <div style="width: 500px; margin: 0 auto;">
        <object data="{{ asset('/images/factorial.png') }}" width="100%" height="450" style="display: block; margin: 0 auto;"></object>
        <figcaption style ="text-align: center;">Factorial program example in C.</figcaption>
    </div><br>
</div>
@endsection