@extends('template')
@section('title')
Pravo na odustajanje
@stop
@section('sadrzaj')
<br>
<div class="container">
<h1>{{$uslovi->title_pravo_na_odustajanje}}</h1>
<br><br>

<p>{!!$uslovi->text_pravo_na_odustajanje!!}</p>
</div>
  @stop
