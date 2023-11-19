@extends('layouts.app')

@section('content')
<div id="sidenav_algo" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#intro">Introduction</a>
  <a href="#C-standard"> C Standard Library</a>
  <a href="#variables">Variables and Data Types</a>
  <a href="#operators">Operators</a>
  <a href="#conditional">Conditional Statements</a>
  <a href="#loop">Looping Statements</a>
  <a href="#array">Arrays</a>
  <a href="#function">Functions</a>
  <a href="#recursion">Recursion</a>
  <a href="#examples">Examples</a>
</div>

<button class="open-button" onclick="openNav()">Lessons</button>

<div id ="main" class="main">
  <h2>Sidebar</h2>
  <p>This sidebar is of full height (100%) and always shown.</p>
  <p>Scroll down the page to see the result.</p>
  <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
  <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
  <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
  <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
</div>
@endsection