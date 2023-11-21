@extends('layouts.app')
@section('content')
@include('ui')

<div id="main" class="main">
<h3><b>Design Principles</b></h3>
<br>
<div style="width: 700px; margin: 0 auto;">
        <object data="{{ asset('/images/ui_7.png') }}" width="100%" style="display: block; margin: 0 auto;"></object>
        
    </div>
    <br>
    <div style="width: 700px; margin: 0 auto;">
        <object data="{{ asset('/images/ui_8.png') }}" width="100%" style="display: block; margin: 0 auto;"></object>
        
    </div>
    <br>
    <div style="width: 700px; margin: 0 auto;">
        <object data="{{ asset('/images/ui_9.png') }}" width="100%" style="display: block; margin: 0 auto;"></object>
        
    </div>
</div>
@endsection