<section class="relateproduct bgwhite p-t-45 p-b-138">
  <div class="container">
    <div class="sec-title p-b-60">
      <h3 class="m-text5 t-center">
        Slicni proizvodi
      </h3>
    </div>

    <!-- Slide2 -->
    <div class="wrap-slick2">
      <div class="slick2">
       @foreach($related as $rel)
        <div class="item-slick2 p-l-15 p-r-15">
          <!-- Block2 -->
          <div class="block2">
            <a href="{{ url('product/'.str_replace(' ','_',$rel->title)) }}">
            <div class="block2-img wrap-pic-w of-hidden pos-relative block2">
              @if($rel->image_product->first())
              <img src="{{asset($rel->image_product->first()->image)}}" alt="IMG-PRODUCT">
              @endif
              <!-- <div class="block2-overlay trans-0-4">
                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                  <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                  <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                </a>

                <div class="block2-btn-addcart w-size1 trans-0-4">

                  <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                    Add to Cart
                  </button>
                </div>
              </div> -->
            </div>
          </a>

            <div class="block2-txt p-t-20">
              <a href="{{ url('product/'.str_replace(' ','_',$rel->title)) }}" class="block2-name dis-block s-text3 p-b-5">
                {{$rel->title}}
              </a>

              <span class="block2-price m-text6 p-r-5">
                  @if($rel->cena > 0)
              <b>  {{number_format($rel->cena * $kurs, 2)}} din  </b>
              @else
                <p style="color:red">Na upit</p>
              @endif
              </span>
            </div>
          </div>
        </div>
        @endforeach





      </div>
    </div>

  </div>
</section>
