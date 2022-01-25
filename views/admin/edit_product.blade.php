@include('admin/admin_header')
<div class="container" style="max-width: 900px;">
  @if($product)
  <h2>Izmeni proizvod</h2><br><br>
  <form action="{{url('admin/update')}}" method="post" enctype="multipart/form-data">
     @csrf
     <input type="hidden" name="id" class="form-control"  value="{{$product->id}}">
    <div class="form-group">
  <label for="usr">Naslov produkta:</label>
  <input type="text" name="product" class="form-control"  id="usr" value="{{$product->title}}">
</div>
<div class="form-group">
<label for="sifra">Sifra:</label>
<input type="text" name="sifra" class="form-control" id="sifra"   value="{{$product->sifra}}">
</div>
<div class="form-group">
<label for="usr">Cena:</label>
<input type="text" name="cena" class="form-control" id="usr" value="{{$product->cena}}">
</div>
<div class="form-group">
<label for="usr">Akcija:</label>
<input type="text" name="akcija" class="form-control" id="usr" value="{{$product->akcija}}">
</div>
<div class="form-group">
<label for="usr">Naslovna strana:</label>
<input type="text" name="redosled" class="form-control" id="usr" value="{{$product->redosled}}">
</div>
    <div class="form-group">
  <label for="comment">Preporucena stampa:</label>
  <textarea class="form-control" name="stampa" rows="1" id="comment">{{$product->preporucena_stampa}}</textarea>
</div>
<div class="form-group">
<label for="materijal">Materijal:</label>
<textarea class="form-control" name="materijal" rows="1" id="materijal" >{{$product->materijal}}</textarea>
</div>
<!-- <div class="form-group">
  <label for="slike">Slike:</label>
                <input type="file" name="images[]" multiple class="form-control" id="slike">
            </div> -->
<div class="form-group">
<label for="sel1">Kategorija:</label>
<select class="form-control" id="sel1" name="category">
  <option value=0>izaberi</option>
  @foreach(\App\Category::get() as $category)
  @if($product->category)
  @if($product->category->id==$category->id)
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


<div class="form-group">
<label for="sel1">Subcategory:</label>
<select class="form-control" id="sel1" name="subcategory">
  <option value=0>izaberi</option>
  @foreach(\App\Subcategory::get() as $subcategory)

  @if($product->subcategory_id)
  @if($product->subcategory_id==$subcategory->id)
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
<div class="form-group">
<label for="sel1">Subsubcategory:</label>
<select class="form-control" id="sel1" name="subsubcategory">
  <option value=0>izaberi</option>
  @foreach(\App\Subsubcategory::get() as $subsubcategory)

  @if($product->subsubcategory_id)
  @if($product->subsubcategory_id==$subsubcategory->id)
  <option value={{$subsubcategory->id}} selected>{{$subsubcategory->title}}</option>
  @else
  <option value={{$subsubcategory->id}}>{{$subsubcategory->title}}</option>
  @endif
  @else
  <option value={{$subsubcategory->id}}>{{$subsubcategory->title}}</option>
  @endif

@endforeach
</select>
</div>

<div class="form-group">
<label for="sel1">Boje:</label>
<select class="form-control" id="sel1" name="color[]" multiple>
  <option value=0>izaberi</option>
  @foreach(\App\Color::get() as $color)
  @if($product->color->first())
  @if($product->color->where('id',$color->id)->first())
<option value={{$color->id}} selected >{{$color->title}}</option>
@else
<option value={{$color->id}}>{{$color->title}}</option>
@endif

@else
<option value={{$color->id}}>{{$color->title}}</option>
@endif
@endforeach

</select>
</div>

    <button type="submit" class="btn btn-default" style="background:red;">Submit</button>
  </form>
</div>

<a href="{{url('admin/erase_product/'.$product->id)}}">OBRISI</a>
@else
<div style="height:400px;"><p style="text-align:center;">nema proizvoda sa tim imenom/sifrom<p></div>

@endif



@include('admin/admin_footer')
