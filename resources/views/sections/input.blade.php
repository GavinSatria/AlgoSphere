@extends('layouts.app')
@section('content')
@include('algoprog')
<div id="main" class="main">
    <h3><b>Input and Output</b></h3>
    <p><b>Output</b></p>
    <p>Output in C programming is the data that will be displayed onto the screen.</p>
    <p>The standard C library has multiple ways of formatting output: 
        <li>printf()</li>
        <li>puts()</li>
        <li>putchar()</li>
        <li>fprintf()</li>
    </p>
    <p>printf() is the most commonly used output method. It is used for formatted output, allowing you to print values with various formatting options.</p>
    <p>puts() is used for printing out a string, without worrying about formatting.</p>
    <p>putchar() is used for printing out a single character.</p>
    <p>fprintf() is similar to printf(), but allows you to write formatted output to a specified file.</p>
    <br>
    <div style="width: 550px; margin: 0 auto;">
        <object data="{{ asset('/images/output1.png') }}" width="100%" style="display: block; margin: 0 auto;"></object>
        <object data="{{ asset('/images/output1R.png') }}" width="100%" style="display: block; margin: 0 auto;"></object>
        <figcaption style ="text-align: center;">Using printf() to show formatting by newline.</figcaption>
    </div>
    <br>
    <p>When using printf() to print a variable, we use a format specifier appropriate to the data type of the variable.</p>
    <br>
    <div style="width: 500px; margin: 0 auto;">
        <object data="{{ asset('/images/variable table.jpg') }}" width="100%" height="300" style="display: block; margin: 0 auto;"></object>
        <figcaption style ="text-align: center;">List of different data types and their format specifiers.</figcaption>
    </div>
    <br>
    <p>To print an integer using printf, we put the format specifier in the quotation marks, and the variable name outside.</p>
    <p>Example: printf("The number is %d", number);</p>
    <br>
    <div style="width: 550px; margin: 0 auto;">
        <object data="{{ asset('/images/output2.png') }}" width="100%" style="display: block; margin: 0 auto;"></object>
        <figcaption style ="text-align: center;">Format specifiers in printf().</figcaption>
    </div>
    <br>
    <p><b>Input</b></p>
    <p>Input in C programming prompts the user to provide data for the program.</p>
    <p>The standard C library has multiple ways of requesting input: 
        <li>scanf()</li>
        <li>gets()</li>
        <li>fscanf()</li>
    </p>
    <p>scanf() is the most commonly used input method. scanf() is used for formatted input, allowing the program to read user input using format specifiers.</p>
    <p>gets() is used for reading a string input.</p>
    <p>fscanf() is similar to scanf(), but reads from a file instead of the user.</p>
    <br>
    <p>Input Formatting:</p>
    <p>When scanning any data type, except for string, use ‘&’ symbol.</p>
    <p>After the user inputs the data, they will hit ‘enter’, causing a newline to be part of the next input (if any).</p>
    <p>Add “getchar()” at the end of the “scanf()” function to catch this newline, so that it does not interfere with other input functions.</p>
    <br>
    <div style="width: 550px; margin: 0 auto;">
        <object data="{{ asset('/images/input.png') }}" width="100%" style="display: block; margin: 0 auto;"></object>
        <figcaption style ="text-align: center;">Reading inputs with formatting.</figcaption>
    </div>
    <br>
    <p>Note that getchar() is only required when there are multiple inputs of different data types: integer, string, character.</p>
</div>
@endsection