@extends('template')
@section('title')
Nacini placanja
@stop
@section('sadrzaj')
<br>
<div class="container">
<h1>{{$uslovi->title_nacini_placanja}}</h1>
<br><br>

<p>{!!$uslovi->text_nacini_placanja!!}</p>
</div>
  @stop
