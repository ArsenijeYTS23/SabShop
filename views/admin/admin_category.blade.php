@include('admin/admin_header')
<div class="container" style="max-width: 900px;">
  <h2>Izmeni kategoriju</h2><br><br>
  @foreach($categories as $category)
  <form action="{{url('admin/update_cat')}}" method="post" enctype="multipart/form-data">
     @csrf
<input type="hidden" name="id" class="form-control"  value="{{$category->id}}">
    <div class="form-group">
  <label for="usr">kategorija:</label>
  <input type="text" name="category" class="form-control"  id="usr" value="{{$category->title}}">
  <label for="usr">broj:</label>
  <input type="text" name="number" class="form-control"  id="usr" value="{{$category->number}}">
</div>


<button type="submit" class="btn btn-default" style="background:red;">Submit</button>
</form><br><br><br>
@endforeach   <br><br><br><br><br>
<h2>Dodaj kategoriju</h2><br><br>
<form action="{{url('admin/new_cat')}}" method="post" enctype="multipart/form-data">
   @csrf


  <div class="form-group">
<label for="usr">kategorija:</label>
<input type="text" name="category" class="form-control"  id="usr">
<label for="usr">broj:</label>
<input type="text" name="number" class="form-control"  id="usr">
</div>


<button type="submit" class="btn btn-default" style="background:red;">Submit</button>
</form>

</div>





@include('admin/admin_footer')
