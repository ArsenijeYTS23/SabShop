@include('admin/admin_header')
<div class="container" style="max-width: 900px;">
  <h2>Baneri</h2><br><br>
  @foreach($baners as $baner)
  <form action="{{url('admin/update_baner')}}" method="post" enctype="multipart/form-data">
     @csrf
<input type="hidden" name="id" class="form-control"  value="{{$baner->id}}">
    <div class="form-group">
  <label for="usr">Title:</label>
  <input type="text" name="title" class="form-control"  id="usr" value="{{$baner->title}}">
  <label for="usr">tekst1:</label>
  <input type="text" name="text1" class="form-control"  id="usr" value="{{$baner->text1}}">
  <label for="usr">tekst2:</label>
  <input type="text" name="text2" class="form-control"  id="usr" value="{{$baner->text2}}">
  <label for="usr">link:</label>
  <input type="text" name="link" class="form-control"  id="usr" value="{{$baner->link}}">
  <label for="usr">redosled:</label>
  <input type="text" name="text3" class="form-control"  id="usr" value="{{$baner->text3}}">
</div>


<button type="submit" class="btn btn-default" style="background:red;">Submit</button>
</form><br><br><br>
@if($baner->image)
<img style="width:500px;" src="{{asset($baner->image)}}"><br><br><a href="{{url('admin/delete_baner_img/'.$baner->id)}}">obrisi</a>
@else
<form action="{{url('admin/add_baner_img')}}" method="post" enctype="multipart/form-data">
   @csrf
   <input type="hidden" name="id" class="form-control"  value="{{$baner->id}}">
   <div class="form-group">
     <label for="slike">Slike:</label>
                   <input type="file" name="image" multiple class="form-control" id="slike">
               </div>
                 <button type="submit" class="btn btn-default" style="background:red;">Submit</button>

 </form>
@endif

<hr style="border: 10px solid black;
border-radius: 5px;">
@endforeach

</div>








@include('admin/admin_footer')
