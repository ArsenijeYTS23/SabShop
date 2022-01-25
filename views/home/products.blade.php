<section class="bgwhite p-t-45 p-b-58">
  <div class="container">
    <div class="sec-title p-b-22">
      <h3 class="m-text5 t-center">
        Our Products
      </h3>
    </div>

    <!-- Tab01 -->
    <div class="tab01">

      <div class="tab-content p-t-35">
        <!-- - -->
        <div class="tab-pane fade show active" id="best-seller" role="tabpanel">
          <div class="row">



            @foreach($products as $product)
              @if($product->akcija ==1)

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
              <!-- Block2 -->
              <div class="block2">
                <div class="block2-img wrap-pic-w of-hidden pos-relative">
                  <a href="{{url('product/'.str_replace(' ','_',$product->title))}}">
                  <img src="{{asset($product->image_product->first()->image)}}" alt="IMG-PRODUCT">
                </a>
                </div>

                <div class="block2-txt p-t-20">
                  <a href="{{ url('product/'.str_replace(' ','_',$product->title)) }}" class="block2-name dis-block s-text3 p-b-5">
                    {{$product->title}}
                  </a>

                  <span class="block2-price m-text6 p-r-5">
                    @if($product->cena > 0)
                    {{number_format($product->cena * $dinar->dinar, 2)}} din
                    @else
                    <p style="color:red">Na upit</p>
                    @endif
                  </span>
                </div>
              </div>
            </div>

            @else

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">

              <div class="block2">
                <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
                  <a href="{{url('product/'.str_replace(' ','_',$product->title))}}">
                  <img src="{{asset($product->image_product->first()->image)}}" alt="IMG-PRODUCT">
                </a>

                </div>

                <div class="block2-txt p-t-20">
                  <a href="{{ url('product/'.str_replace(' ','_',$product->title)) }}" class="block2-name dis-block s-text3 p-b-5">
                    {{$product->title}}
                  </a>

                  <span class="block2-oldprice m-text7 p-r-5">
                    {{number_format($product->cena * $dinar->dinar, 2)}} din
                  </span>

                  <span class="block2-newprice m-text8 p-r-5">
                    {{number_format($product->cena * $dinar->dinar * $product->akcija, 2)}} din
                  </span>
                </div>
              </div>
            </div>
            @endif
            @endforeach





          </div>
        </div>


      </div>
    </div>
  </div>
</section>
