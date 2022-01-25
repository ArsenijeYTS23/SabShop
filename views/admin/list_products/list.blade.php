<div class="row">


  @foreach($products as $product)


  <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">

    <!-- Block2 -->
    <div class="block2">
      <a href="{{url('admin/edit_product/'.str_replace(' ','_',$product->title))}}">
      <div class="block2-img wrap-pic-w of-hidden pos-relative">
        @if($product->image_product->first())
        <img src={{asset($product->image_product->first()->image)}} alt="IMG-PRODUCT">
        @elseif($product->image)
        <img src={{asset($product->image)}} alt="IMG-PRODUCT">
        @endif
        <!-- <div class="block2-overlay trans-0-4"> -->
          <!-- <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
            <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
            <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
          </a> -->

          <!-- <div class="block2-btn-addcart w-size1 trans-0-4">

            <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
              Add to Cart
            </button>
          </div> -->
        <!-- </div> -->
      </div>
    </a>

      <div class="block2-txt p-t-20">
        @if($product->image_product)
        <a href="{{url('admin/edit_product/'.str_replace(' ','_',$product->title))}}" class="block2-name dis-block s-text3 p-b-5">
          @else
          <a href="{{url('admin_usluga/'.$product->id)}}" class="block2-name dis-block s-text3 p-b-5">
            @endif
          {{$product->title}}
        </a>
        @if($product->cena)
        <span class="block2-price m-text6 p-r-5">
        {{$product->cena * \App\KursnaLista::first()->dinar}}
        </span>
        din
        @endif
      </div>
    </div>
  </div>
  @endforeach

</div>
