@extends('template')
@section('title')
@if($product)
{{$product->title}}
@endif
@stop



@section('sadrzaj')
@if($product)


@include('product_detail/links')
	<!-- Product Detail -->
  @include('product_detail/product_detail')


	<!-- Relate Product -->
	@include('product_detail/related_products')

  @else
  <div style="height:400px;"><p style="text-align:center;">nema proizvoda sa tim imenom/sifrom<p></div>

  @endif
  @stop
