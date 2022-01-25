@extends('template')
@section('title')
Reklamacije
@stop
@section('sadrzaj')
<br>
<div class="container">
<h1>{{$uslovi->title_reklamacije}}</h1>
<br><br>

<p>{!!$uslovi->text_reklamacije!!}</p>
</div>
  @stop
