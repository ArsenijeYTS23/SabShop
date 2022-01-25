@include('admin/admin_header')
<div class="container" style="max-width: 900px;">
  <h2>Ubaci proizvod</h2><br><br>
  <form action="{{url('store')}}" method="post" enctype="multipart/form-data">
     @csrf
    <div class="form-group">
  <label for="usr">Naslov produkta:</label>
  <input type="text" name="product" class="form-control"  id="usr">
</div>
<div class="form-group">
<label for="sifra">Sifra:</label>
<input type="text" name="sifra" class="form-control" id="sifra">
</div>
<div class="form-group">
<label for="usr">Cena:</label>
<input type="text" name="cena" class="form-control" id="usr">
</div>
    <div class="form-group">
  <label for="comment">Preporucena stampa:</label>
  <textarea class="form-control" name="stampa" rows="1" id="comment"></textarea>
</div>
<div class="form-group">
<label for="materijal">Materijal:</label>
<textarea class="form-control" name="materijal" rows="1" id="materijal"></textarea>
</div>
<div class="form-group">
  <label for="slike">Slike:</label>
                <input type="file" name="images[]" multiple class="form-control" id="slike">
            </div>
<div class="form-group">
<label for="sel1">Kategorija:</label>
<select class="form-control" id="sel1" name="category">
  <option value=0>izaberi</option>
  @foreach(\App\Category::get() as $category)

<option value={{$category->id}}>{{$category->title}}</option>
@endforeach
</select>
</div>


<div class="form-group">
<label for="sel1">Subcategory:</label>
<select class="form-control" id="sel1" name="subcategory">
  <option value=0>izaberi</option>
  @foreach(\App\Subcategory::get() as $subcategory)
<option value={{$subcategory->id}}>{{$subcategory->title}}</option>
@endforeach
</select>

</div>
<div class="form-group">
<label for="sel1">Subsubcategory:</label>
<select class="form-control" id="sel1" name="subsubcategory">
  <option value=0>izaberi</option>
  @foreach(\App\Subsubcategory::get() as $subsubcategory)
<option value={{$subsubcategory->id}}>{{$subsubcategory->title}}</option>
@endforeach
</select>
</div>

<div class="form-group">
<label for="sel1">Boje:</label>
<select class="form-control" id="sel1" name="color[]" multiple>
  <option value=0>izaberi</option>
  @foreach(\App\Color::get() as $color)
<option value={{$color->id}}>{{$color->title}}</option>
@endforeach
</select>
</div>

    <button type="submit" class="btn btn-default" style="background:red;">Submit</button>
  </form>
</div>



@include('admin/admin_footer')
