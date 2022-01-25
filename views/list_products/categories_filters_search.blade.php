<!-- <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">  - izmenjeno zbog padinga -->
<div class="col-sm-6 col-md-4 col-lg-3">
  <div class="leftbar p-r-20 p-r-0-sm">
    <!--  -->
    <h4 class="m-text14 p-b-7">
      Categories
    </h4>

    <!-- <ul class="p-b-54">    - izmenjeno zbog padinga -->
    <ul >
      <!-- <li class="p-t-4">
        <a href="#" class="s-text13 active1">
          All
        </a>
      </li> -->
   @foreach($categories as $category)
      <li class="p-t-4">
        <a href="{{$url.'/'.str_replace(' ','_',$category->title)}}" class="s-text13">
          {{$category->title}}
        </a>
      </li>
      @endforeach

    </ul>

    <!--  -->

  </div>
</div>
