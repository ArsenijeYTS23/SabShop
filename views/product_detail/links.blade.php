<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
  <a href='{{url('/')}}' class="s-text16">
    Home
    <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
  </a>
   @if($product->category)
  <a href="{{url('list/'.str_replace(' ','_',$product->category->title))}}" class="s-text16">
    {{$product->category->title}}
    <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
  </a>
  @endif

  @if($product->subcategory)
 <a href="{{url('list/'.str_replace(' ','_',$product->category->title).'/'.str_replace(' ','_',$product->subcategory->title))}}" class="s-text16">
   {{$product->subcategory->title}}
   <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
 </a>
 @endif
 @if($product->subsubcategory)
<a href="{{url('list/'.str_replace(' ','_',$product->category->title).'/'.str_replace(' ','_',$product->subcategory->title).'/'.str_replace(' ','_',$product->subsubcategory->title))}}" class="s-text16">
  {{$product->subsubcategory->title}}
  <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
</a>
@endif


  <span class="s-text17">
  {{ $product->title}}
  </span>
</div>
