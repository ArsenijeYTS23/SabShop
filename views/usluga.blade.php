@extends('template')
@section('title')
@if($usluga)
{{$usluga->title}}
@endif
@stop
@section('sadrzaj')
@include('usluga/links')

<section class="bgwhite p-t-60 p-b-25">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12 p-b-80">
        <div class="p-r-50 p-r-0-lg">
          @include('usluga/blog')


        </div>
      </div>


    </div>
  </div>
</section>




@stop
