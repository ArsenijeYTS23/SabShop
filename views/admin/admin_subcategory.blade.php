@include('admin/admin_header')
<div class="container" style="max-width: 900px;">
  <h2>Izmeni subkategoriju</h2><br><br>
  @foreach($subcategories as $subcategory)
  <form action="{{url('admin/update_subcat')}}" method="post" enctype="multipart/form-data">
     @csrf
<input type="hidden" name="id" class="form-control"  value="{{$subcategory->id}}">
    <div class="form-group">
  <label for="usr">subkategorija:</label>
  <input type="text" name="subcategory" class="form-control"  id="usr" value="{{$subcategory->title}}">
  <label for="sel1">Kategorija:</label>
  <select class="form-control" id="sel1" name="category">
    <option value=0>izaberi</option>
    @foreach(\App\Category::get() as $category)
    @if($subcategory->category)
    @if($subcategory->category->id==$category->id)
  <option value={{$category->id}} selected>{{$category->title}}</option>
  @else
  <option value={{$category->id}}>{{$category->title}}</option>
  @endif
  @else
  <option value={{$category->id}}>{{$category->title}}</option>
  @endif
  @endforeach
  </select>
</div>


<button type="submit" class="btn btn-default" style="background:red;">Submit</button>
</form><br><br><br>
@endforeach   <br><br><br><br><br>
<h2>Dodaj subkategoriju</h2><br><br>
<form action="{{url('admin/new_subcat')}}" method="post" enctype="multipart/form-data">
   @csrf


  <div class="form-group">
<label for="usr">subkategorija:</label>
<input type="text" name="subcategory" class="form-control"  id="usr">
<label for="sel1">kategorija:</label>
<select class="form-control" id="sel1" name="category">
  <option value=0>izaberi</option>
  @foreach(\App\Category::get() as $category)
<option value={{$category->id}}>{{$category->title}}</option>
@endforeach
</select>
</div>


<button type="submit" class="btn btn-default" style="background:red;">Submit</button>
</form>

</div>





@include('admin/admin_footer')
