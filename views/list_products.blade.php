
@extends('template')
@section('title')
{{$title}}
@stop
@section('sadrzaj')
	@include('list_products/front')


	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				@if($categories && $categories->first())
			  @include('list_products/categories_filters_search')
				@endif

				@if($categories && $categories->first())
        <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					@else
				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50" style="flex: 0 0 99%;
    max-width: 99%;">
		@endif
					<!--  -->
					@include('list_products/shorting_price_showing')

					<!-- Product -->
					@include('list_products/list')

					<!-- Pagination -->
					<div class="pagination flex-m flex-w p-t-26">
						<!-- <a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
						<a href="#" class="item-pagination flex-c-m trans-0-4">2</a> -->
						{{ $products->links() }}
					</div>
				</div>
			</div>
		</div>
	</section>
	@stop
