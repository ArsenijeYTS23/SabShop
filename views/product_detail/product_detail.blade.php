<!-- promena
main.css 181
main.css 1994 -->


<div class="container bgwhite p-t-35 p-b-80">
  <div class="flex-w flex-sb">
    <div class="w-size13 p-t-30 respon5">
      <div class="wrap-slick3 flex-sb flex-w">


        <div class="slick3" style="width:100%">

          @foreach( $product->image_product as $slika)
          <div class="item-slick3" data-thumb="{{asset($slika->image)}}">

            <div class="wrap-pic-w">
              <img src="{{asset($slika->image)}}" alt="IMG-PRODUCT">
            </div>

          </div>
          @endforeach




        </div>
        @if($product->image_product->count() >1)

        <div class="wrap-slick3-dots"></div>

        @endif
       <!-- izmenjeno slick-custom.js 138-139 -->
       <!-- izmenjeno main.css 1983 -->



      </div>
    </div>

    <div class="w-size14 p-t-30 respon5">
      <h4 class="product-detail-name m-text16 p-b-13">
      {{$product->title}}
      </h4>
      <p>šifra proizvoda: <b>{{$product->sifra}}</b></p>
        @if($product->cena > 0)
    @if($product->akcija  != 1)
      <span class="block2-oldprice m-text7 p-r-5">
        {{number_format($product->cena * $kurs, 2)}} din
      </span>
      @endif

      <p class="s-text8 p-t-10">    cena:</p>
        <span class="m-text17">
        {{number_format($product->cena * $kurs * $product->akcija, 2)}} dinara
        </span>

        <p class="s-text8 p-t-10">  cena sa PDV-om:   </p>
        <span class="m-text17">
          {{number_format($product->cena * $kurs * 1.20 * $product->akcija, 2)}} dinara
          </span>
      @else
      <span class="m-text17" style="color:red">
        Cena na upit
      </span>

      @endif



      <!--  -->
      <div class="p-t-33 p-b-60">
        <form action="{{ url('dodaj') }}" method="get">
      <input type="hidden" name="product_id" value={{$product->id}} >
      @if($product->color->first())
        <div class="flex-m flex-w">
          <div class="s-text15 w-size15 t-center">
            Boja
          </div>

          <div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
            <select class="selection-2" name="color">
              <option>Odaberi boju</option>
              @foreach($product->color as $col)
              <option style="color:red;">{{ $col->title }} - {{ $product->sifra }}.{{ $col->sifra }} </option>
              @endforeach
              <!-- <option>Gray</option>
              <option>Red</option>
              <option>Black</option>
              <option>Blue</option> -->
            </select>
          </div>

        </div>
          @endif

        <div class="flex-r-m flex-w p-t-10">

          <div class="w-size16 flex-m flex-w">
              @if($product->cena > 0)
            <div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
              <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
              </button>

              <input class="size8 m-text18 t-center num-product" type="number" name="num-product" value="1">

              <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
              </button>
            </div>
            @endif

            <div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
              <!-- Button -->
              @if($product->cena > 0)
              <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" type="submit">
                Dodaj u korpu
              </button>
              @endif

            </div>
          </div>

        </div>
        </form>
      </div>

      <!-- <div class="p-b-45">
        <span class="s-text8 m-r-35">SKU: MUG-01</span>
        <span class="s-text8">Categories: Mug, Design</span>
      </div> -->

      <!--  -->
      <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
        <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
          Opis
          <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
          <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
        </h5>

        <div class="dropdown-content dis-none p-t-15 p-b-23">
          <p class="s-text8">
          <b> {!!$product->materijal!!}</b> <br>

          </p>
        </div>
      </div>

      <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
        <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
          Preporucena stampa
          <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
          <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
        </h5>

        <div class="dropdown-content dis-none p-t-15 p-b-23">
          <p class="s-text8">
            <b>{!!$product->preporucena_stampa!!}</b>
          </p>
        </div>
      </div>

      <!-- <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
        <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
          Reviews (0)
          <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
          <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
        </h5>

        <div class="dropdown-content dis-none p-t-15 p-b-23">
          <p class="s-text8">
            Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
          </p>
        </div>
      </div> -->
    </div>
  </div>
</div>
