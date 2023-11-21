@extends('layouts.app')
@section('content')
@include('ui')

<div id="main" class="main">
<h3><b>Prototyping</b></h3>
<br>
    <div style="width: 700px; margin: 0 auto;">
        <object data="{{ asset('/images/ui_10.png') }}" width="100%" style="display: block; margin: 0 auto;"></object>
    </div>
    <br>
    <div style="width: 700px; margin: 0 auto;">
        <object data="{{ asset('/images/ui_11.png') }}" width="100%" style="display: block; margin: 0 auto;"></object>
    </div>
    <br>
    <div style="width: 700px; margin: 0 auto;">
        <object data="{{ asset('/images/ui_12.png') }}" width="100%" style="display: block; margin: 0 auto;"></object>
    </div>
    <br>
    <div style="width: 700px; margin: 0 auto;">
        <object data="{{ asset('/images/ui_13.png') }}" width="100%" style="display: block; margin: 0 auto;"></object>
    </div>
</div>
@endsection