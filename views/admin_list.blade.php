@include('admin/admin_header')
<div class="wrap_header">
  <!-- Logo -->


  <!-- Menu -->
  <div class="wrap_menu">
    <nav class="menu">
      <ul class="main_menu">

@foreach($data['categoryMenu'] as $cat)
        <li>
          <a href="{{url('admin/list_admin/'.str_replace(' ','_',$cat->title))}}">{{ $cat->title }}</a>
          @if($cat->subcategory->first())
          <ul class="sub_menu">
            @foreach($cat->subcategory as $sub)
            <li><a href="{{url('admin/list_admin/'.str_replace(' ','_',$cat->title).'/'.str_replace(' ','_',$sub->title))}}">{{$sub->title}}</a></li>
            @endforeach

          </ul>
          @endif
        </li>
        @endforeach

        <!-- <li>
          <a href="">Usluge</a>

          <ul class="sub_menu">

            <li><a href="index.html">prva</a></li>
            <li><a href="index.html">prva</a></li>
            <li><a href="index.html">prva</a></li>


          </ul>

        </li> -->








      </ul>
    </nav>
  </div>



</div>



<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
  <div class="container">
    <div class="row">
      @if($categories && $categories->first())
      @include('admin/list_products/categories_filters_search')
      @endif

      @if($categories && $categories->first())
      <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
        @else
      <div class="col-sm-6 col-md-8 col-lg-9 p-b-50" style="flex: 0 0 99%;
  max-width: 99%;">
  @endif
        <!--  -->

       @include('admin/list_products/shorting_price_showing')
        <!-- Product -->
        @include('admin/list_products/list')

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
@include('admin/admin_footer')
