@extends('template')
@section('title')
Zamena velicine i zamena artikla
@stop
@section('sadrzaj')
<br>
<div class="container">
<h1>{{$uslovi->title_zamena_velicine_i_zamena_artikla_za_drugi}}</h1>
<br><br>

<p>{!!$uslovi->text_zamena_velicine_i_zamena_artikla_za_drugi!!}</p>
</div>
  @stop
