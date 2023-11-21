@extends('layouts.app')
@section('content')
@include('ui')

<div id="main" class="main">
<h3><b>Figma Components</b></h3>
<br>
<div style="width: 700px; margin: 0 auto;">
        <object data="{{ asset('/images/ui_3.png') }}" width="100%" style="display: block; margin: 0 auto;"></object>
       
    </div>
    <br>
    <div style="width: 700px; margin: 0 auto;">
        <object data="{{ asset('/images/ui_4.png') }}" width="100%" style="display: block; margin: 0 auto;"></object>
       
    </div>
    <br>
    <div style="width: 700px; margin: 0 auto;">
        <object data="{{ asset('/images/ui_5.png') }}" width="100%" style="display: block; margin: 0 auto;"></object>
        
    </div>
    <br>
    <div style="width: 700px; margin: 0 auto;">
        <object data="{{ asset('/images/ui_6.png') }}" width="100%" style="display: block; margin: 0 auto;"></object>
        
    </div>
</div>
@endsection