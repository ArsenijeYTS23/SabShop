<div class="row">


  @foreach($products as $product)

@if($product->akcija ==1)

  <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">

    <!-- Block2 -->
    <div class="block2">
      <a href="{{url('product/'.str_replace(' ','_',$product->title))}}">
      <div class="block2-img wrap-pic-w of-hidden pos-relative ">
        @if($product->image_product->first())
        <img src={{asset($product->image_product->first()->image)}} alt="IMG-PRODUCT">
        @elseif($product->image)
        <img src={{asset($product->image)}} alt="IMG-PRODUCT">
        @endif

      </div>
    </a>

      <div class="block2-txt p-t-20">
        @if($product->image_product)
        <a href="{{url('product/'.str_replace(' ','_',$product->title))}}" class="block2-name dis-block s-text3 p-b-5">
          @else
          <a href="{{url('usluga/'.$product->id)}}" class="block2-name dis-block s-text3 p-b-5">
            @endif
          {{$product->title}}
        </a>

        <span class="block2-price m-text6 p-r-5">
          @if($product->cena > 0)
        {{number_format($product->cena * \App\KursnaLista::first()->dinar, 2)}}   din
        @else
        <p style="color:red">Na upit</p>
          @endif
        </span>


      </div>
    </div>
  </div>
  @else

  <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">

    <!-- Block2 -->
    <div class="block2">
      <a href="{{url('product/'.str_replace(' ','_',$product->title))}}">
      <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
        @if($product->image_product->first())
        <img src={{asset($product->image_product->first()->image)}} alt="IMG-PRODUCT">
        @elseif($product->image)
        <img src={{asset($product->image)}} alt="IMG-PRODUCT">
        @endif

      </div>
    </a>

      <div class="block2-txt p-t-20">
        @if($product->image_product)
        <a href="{{url('product/'.str_replace(' ','_',$product->title))}}" class="block2-name dis-block s-text3 p-b-5">
          @else
          <a href="{{url('usluga/'.$product->id)}}" class="block2-name dis-block s-text3 p-b-5">
            @endif
          {{$product->title}}
        </a>
        @if($product->cena)
        <span class="block2-oldprice m-text7 p-r-5">
          {{number_format($product->cena * \App\KursnaLista::first()->dinar, 2)}} din
        </span>

        <span class="block2-newprice m-text8 p-r-5">
          {{number_format($product->cena * \App\KursnaLista::first()->dinar * $product->akcija, 2)}} din
        </span>
        @endif
      </div>
    </div>
  </div>
  @endif
  @endforeach

</div>
