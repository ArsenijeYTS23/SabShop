<div class="banner bgwhite p-t-40 p-b-40">
  <h3 class="m-text5 t-center">
  Nase usluge
  </h3>
  <div class="container">

    <div class="row">
      @foreach($usluges as $usluge)
      <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
        <!-- block1 -->
        <div class="block1 hov-img-zoom pos-relative m-b-30">
          <img src="{{$usluge->image}}" alt="IMG-BENNER">

          <div class="block1-wrapbtn w-size2">
            <!-- Button -->
            <a href="{{url('usluga/'.str_replace(' ','_',$usluge->title))}}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4" style="text-align:center;">
<b>{{$usluge->title}}</b>
            </a>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</div>
