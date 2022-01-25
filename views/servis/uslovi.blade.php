@extends('template')
@section('title')
Uslovi koriscenja
@stop
@section('sadrzaj')
<br>
<div class="container">
<h1>{{$uslovi->title}}</h1>
<br><br>

<p>{!!$uslovi->text!!}</p>
</div>
  @stop
