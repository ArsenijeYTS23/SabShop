@include('admin/admin_header')

	<!-- Title Page -->


@foreach($porudzbine as $porudzbina)
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">

			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1"></th>
							<th class="column-2">Product</th>
							<th class="column-3">Cena(bez pdv)</th>
							<th class="column-4">Kolicina</th>
							<th class="column-5">Boja</th>
							<th class="column-5">Zbir</th>
						</tr>

     <!-- zakomentarisan width main.css 2089 2093 2097 -->
     @foreach($porudzbina->porudzbine_product as $product)
						<tr class="table-row">
							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src='{{asset($product->product->image_product->first()->image)}}' alt="IMG-PRODUCT">
								</div>
							</td>
							<td class="column-2">{{$product->product->title}}</td>
							<td class="column-3">{{number_format($product->product->cena * \App\KursnaLista::first()->dinar,2)}}</td>
							<td class="column-4">{{$product->num_product}}</td>
							<td class="column-5">{{$product->color}}</td>
							<td class="column-5">{{number_format($product->product->cena * \App\KursnaLista::first()->dinar * $product->num_product,2)}}</td>

						</tr>
            @endforeach



					</table>

				</div>
			</div>
			<a href="{{url('admin/arhiviraj_porudzbinu/'.$porudzbina->id)}}" style="float:right;">Arhiviraj</a>

      <span class="m-text22 w-size19 w-full-sm">
        Total:  {{$porudzbina->total * 1.2}} din
      </span><br><br>
        <p>IME: {{$porudzbina->name}}</p>
          <p>FIRMA: {{$porudzbina->firma}}</p>
            <p>TEL: {{$porudzbina->telefon}}</p>
              <p>ADRESA: {{$porudzbina->adresa}}</p>
                <p>EMAIL: {{$porudzbina->email}}</p>

		</div>

	</section>
	<a href="{{url('admin/obrisi_porudzbinu/'.$porudzbina->id)}}" style="color:red;">Obrisi</a>
	<hr style="border: 10px solid black;
  border-radius: 5px;">
  @endforeach

  @include('admin/admin_footer')
