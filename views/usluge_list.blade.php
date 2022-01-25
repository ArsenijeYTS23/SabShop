@extends('template')
@section('sadrzaj')

<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url({{asset('images/heading-pages-02.jpg')}});">
  <h2 class="l-text2 t-center">
    Women
  </h2>
  <p class="m-text13 t-center">
    New Arrivals Women Collection 2018
  </p>
</section>
<div class="flex-sb-m flex-w p-b-35">
  <div class="flex-w">
    <!-- <div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
      <select class="selection-2" name="sorting">
        <option>Default Sorting</option>
        <option>Popularity</option>
        <option>Price: low to high</option>
        <option>Price: high to low</option>
      </select>
    </div>

    <div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
      <select class="selection-2" name="sorting">
        <option>Price</option>
        <option>$0.00 - $50.00</option>
        <option>$50.00 - $100.00</option>
        <option>$100.00 - $150.00</option>
        <option>$150.00 - $200.00</option>
        <option>$200.00+</option>

      </select>
    </div> -->
    <div class="search-product pos-relative bo4 of-hidden">

    </div>
  </div>

  <span class="s-text8 p-t-5 p-b-5">
    <!-- Showing 1–12 of  -->

  </span>
</div>



<div class="row">


  @foreach($products as $product)


  <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">

    <!-- Block2 -->
    <div class="block2" style="padding:10px;">
      <a href="{{url('usluga/'.str_replace(' ','_',$product->title))}}">
      <div class="block2-img wrap-pic-w of-hidden pos-relative">

        <img src={{asset($product->image)}} alt="IMG-PRODUCT">


      </div>
    </a>

      <div class="block2-txt p-t-20">

          <a href="{{url('usluga/'.$product->id)}}" class="block2-name dis-block s-text3 p-b-5">

          {{$product->title}}
        </a>

      </div>
    </div>
  </div>
  @endforeach

</div>
@stop
