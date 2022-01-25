@extends('template')
@section('title')
Kako kupiti
@stop
@section('sadrzaj')
<br>
<div class="container">
<h1>{{$uslovi->title_kako_kupiti}}</h1>
<br><br>

<p>{!!$uslovi->text_kako_kupiti!!}</p>
</div>
  @stop
