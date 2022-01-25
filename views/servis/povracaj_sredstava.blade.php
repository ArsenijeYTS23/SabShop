@extends('template')
@section('title')
Povracaj sredstava
@stop
@section('sadrzaj')
<br>
<div class="container">
<h1>{{$uslovi->title_povracaj_sredstava}}</h1>
<br><br>

<p>{!!$uslovi->text_povracaj_sredstava!!}</p>
</div>
  @stop
