@include('admin/admin_header')
<div class="container" style="max-width: 900px;">
  <h2>Izmeni subsubkategoriju</h2><br><br>
  @foreach($subsubcategories as $subsubcategory)
  <form action="{{url('admin/update_subsubcat')}}" method="post" enctype="multipart/form-data">
     @csrf
<input type="hidden" name="id" class="form-control"  value="{{$subsubcategory->id}}">
    <div class="form-group">
  <label for="usr">subsubkategorija:</label>
  <input type="text" name="subsubcategory" class="form-control"  id="usr" value="{{$subsubcategory->title}}">
  <label for="sel1">Subkategorija:</label>
  <select class="form-control" id="sel1" name="subcategory">
    <option value=0>izaberi</option>
    @foreach(\App\Subcategory::get() as $subcategory)
    @if($subsubcategory->subcategory)
    @if($subsubcategory->subcategory->id==$subcategory->id)
  <option value={{$subcategory->id}} selected>{{$subcategory->title}}</option>
  @else
  <option value={{$subcategory->id}}>{{$subcategory->title}}</option>
  @endif
  @else
  <option value={{$subcategory->id}}>{{$subcategory->title}}</option>
  @endif
  @endforeach
  </select>
</div>


<button type="submit" class="btn btn-default" style="background:red;">Submit</button>
</form><br><br><br>
@endforeach   <br><br><br><br><br>
<h2>Dodaj subkategoriju</h2><br><br>
<form action="{{url('admin/new_subsubcat')}}" method="post" enctype="multipart/form-data">
   @csrf


  <div class="form-group">
<label for="usr">subsubkategorija:</label>
<input type="text" name="subsubcategory" class="form-control"  id="usr">
<label for="sel1">kategorija:</label>
<select class="form-control" id="sel1" name="subcategory">
  <option value=0>izaberi</option>
  @foreach(\App\Subcategory::get() as $subcategory)
<option value={{$subcategory->id}}>{{$subcategory->title}}</option>
@endforeach
</select>
</div>


<button type="submit" class="btn btn-default" style="background:red;">Submit</button>
</form>

</div>





@include('admin/admin_footer')
