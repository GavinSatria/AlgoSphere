@extends('layouts.app')
@section('content')
@include('ui')
<div id="main" class="main">
    <h3><b>Introduction to UI/UX Design</b></h3>
    <br>
    <div style="width: 700px; margin: 0 auto;">
        <object data="{{ asset('/images/ui_1.png') }}" width="100%" style="display: block; margin: 0 auto;"></object>
    </div>
    <br>
    <div style="width: 700px; margin: 0 auto;">
        <object data="{{ asset('/images/ui_2.png') }}" width="100%" style="display: block; margin: 0 auto;"></object>
    </div>
</div>
@endsection