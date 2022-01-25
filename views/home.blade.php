@extends('template')
@section('title')
Home
@stop


@section('sadrzaj')


	<!-- Slide1 -->
	@include('home/slide')

	<!-- Banner -->
	@include('home/banner')


	<!-- Our product -->
	@include('home/products')


	<!-- Banner video -->
	@include('home/banner_video')


	<!-- Instagram -->
	@include('home/instagram')








@stop
