@extends('template')
@section('title')
Politika privatnosti
@stop
@section('sadrzaj')
<br>
<div class="container">
<h1>{{$uslovi->title_politika_privatnosti}}</h1>
<br><br>

<p>{!!$uslovi->text_politika_privatnosti!!}</p>
</div>
  @stop
