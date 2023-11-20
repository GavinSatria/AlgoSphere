@extends('layouts.app')
@section('content')
@include('algoprog')
<div id="main" class="main">
    <h3><b>Arrays</b></h3>
    <p>Arrays are fundamental data structures in programming that allow you to store and manipulate a collection of elements under a single name.</p>
    <p>An array stores a fixed-size sequence of elements of the same data type. The elements are identified by index or key, which represents their position in the array.</p>
    <p><b>Array vs Variables:</b></p>
    <p>A variable stores a single element, while an array store multiple elements in the same container.</p>
    <p>Arrays are declared similarly to variables, only they need a pair of square braces [x] at the end of the variable name. x represents the size of the array.</p>
    <p>Initialization of an integer array named 'numbers': </p>
    <p>int numbers[5] = {1, 2, 3, 4, 5};</p>
    <p>Note that there are 5 elements inside this array with a size of 5. There can be less elements than the size, but not more.</p>
    <br>
    <div style="width: 700px; margin: 0 auto;">
        <object data="{{ asset('/images/array position1.png') }}" width="100%" height="250" style="display: block; margin: 0 auto;"></object>
        <object data="{{ asset('/images/array position2.png') }}" width="80%" style="display: block; margin: 0 auto;"></object>
        <figcaption style ="text-align: center;">A simple example of an array.</figcaption>
    </div>
    <br>
    <p><b>Array Operations</b></p>
    <li>Array Traversal: Uses repetition (usually for loops) to traverse the array, one element at a time.</li>
    <li>Replace Elements: Elements in an array can be replaced by assigning a new value.
        <p>Example: numbers[2] = 10;</p>
    </li> 
    <br>
    <div style="width: 700px; margin: 0 auto;">
        <object data="{{ asset('/images/array iteration1.png') }}" width="100%" height="450" style="display: block; margin: 0 auto;"></object>
        <object data="{{ asset('/images/array iteration2.png') }}" width="80%" style="display: block; margin: 0 auto;"></object>
        <figcaption style ="text-align: center;">Traversing an array.</figcaption>
    </div>
</div>
@endsection