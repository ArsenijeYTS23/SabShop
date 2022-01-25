

	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/banner/100.jpg);">
		<h2 class="l-text2 t-center">
			Korpa
		</h2>
	</section>

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			<form action="{{url('porudzbina')}}" method="post" enctype="multipart/form-data">
		     @csrf
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1"></th>
							<th class="column-2">Product</th>
							<th class="column-3">Cena bez Pdv</th>
							<!-- <th class="column-4 p-l-70">Quantity</th> -->
							<th class="column-4">Kolicina</th>
							<th class="column-5">Boja</th>
							<th class="column-6" style="padding-right: 30px">Zbir</th>
							<th class="column-7">Ukloni</th>
						</tr>
						@if($sesija ?? ''  && $sesija->first())
          @foreach($sesija as $key=> $ses)
     <!-- zakomentarisan width main.css 2089 2093 2097 -->
						<tr class="table-row">
							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src={{asset($products->where('id',$ses['product_id'])->first()->image_product->first()->image)}} alt="IMG-PRODUCT">
								</div>
							</td>
							<td class="column-2">{{$products->where('id',$ses['product_id'])->first()->title}}</td>
							<td class="column-3">{{number_format($products->where('id',$ses['product_id'])->first()->cena * $kurs, 2)}}</td>
							<td class="column-4">{{$ses['num-product']}}	</td>
							<td class="column-5">{{    !empty($ses['color']) ?  $ses['color'] : ''    }}</td>
							<td class="column-6">{{number_format($products->where('id',$ses['product_id'])->first()->cena * $kurs * $ses['num-product'],2)}}</td>
							<td class="column-7">
								<a href={{url('remove_from_cart/'.$key)}}><button type="button" class="close" aria-label="Close" style="position:relative; right:10px;">
                                 <span aria-hidden="true">&times;</span>
                               </button></a>
														 </td>
						</tr>
						@endforeach
						@endif


					</table>
				</div>
			</div>
			@if(Session::get('ses'))
			<input type="hidden" name="total"  value={{$total}}>

			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div>
				<div class="flex-w flex-m w-full-sm">
					<div class="size11 bo4 m-r-10">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="Ime i prezime" required>
					</div>
				</div>
				<div class="flex-w flex-m w-full-sm">
					<div class="size11 bo4 m-r-10">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="firma" placeholder="Ime firme" required>
					</div>
				</div>
				<div class="flex-w flex-m w-full-sm">
					<div class="size11 bo4 m-r-10">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="telefon" placeholder="Broj telefona" required>
					</div>
				</div>
				<div class="flex-w flex-m w-full-sm">
					<div class="size11 bo4 m-r-10">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="adresa" placeholder="Adresa" required>
					</div>
				</div>
				<div class="flex-w flex-m w-full-sm">
					<div class="size11 bo4 m-r-10">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="email">
					</div>
				</div>
			</div>


				<div class="size10 trans-0-4 m-t-10 m-b-10">
					<!-- Button -->
					<a href="{{url('/')}}" style="background:#032968; color:white; border:1px solid black; padding:10px">
					<!-- <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4"> -->
						Nastavi kupovinu
					<!-- </button> -->
				</a>
				</div>
			</div>


			<!-- Total -->
			<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm" style="border: 1px solid transparent ">
				<h5 class="m-text20 p-b-24">
					Cart Totals
				</h5>

				<!--  -->
				<!-- <div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Subtotal:
					</span>
         @if(Session::get('ses'))
					<span class="m-text21 w-size20 w-full-sm">
						{{$total}}
					</span>
					@endif
				</div> -->

				<!--  -->
				<!-- <div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<span class="s-text18 w-size19 w-full-sm">
						Shipping:
					</span>

					<div class="w-size20 w-full-sm">
						<p class="s-text8 p-b-23">
							There are no shipping methods available. Please double check your address, or contact us if you need any help.
						</p>

						<span class="s-text19">
							Calculate Shipping
						</span>

						<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size21 m-t-8 m-b-12">
							<select class="selection-2" name="country">
								<option>Select a country...</option>
								<option>US</option>
								<option>UK</option>
								<option>Japan</option>
							</select>
						</div>

						<div class="size13 bo4 m-b-12">
						<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="state" placeholder="State /  country">
						</div>

						<div class="size13 bo4 m-b-22">
							<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="postcode" placeholder="Postcode / Zip">
						</div>

						<div class="size14 trans-0-4 m-b-10">

							<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
								Update Totals
							</button>
						</div>
					</div>
				</div> -->

				<!--  -->
				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>

@if(Session::get('ses'))
           <span class="m-text21 w-size20 w-full-sm">
        	{{number_format($total, 2)}} dinara

           </span>

					@endif
				</div>
				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>

@if(Session::get('ses'))

					<span class="m-text21 w-size20 w-full-sm">
						{{number_format($total * 1.2, 2)}} dinara <br>
						<span style="color:red"> *cena sa pdv-om</span>
					</span>
					@endif
				</div>

				<div class="size15 trans-0-4">
					<!-- Button -->
           <!-- <a href="{{url('posalji')}}"> -->
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Posalji
					</button>
				<!-- </a> -->
					<br>
					<p>* Klikom na dugme, slažeš se sa <br><a href="{{url('uslovi_koriscenja')}}"> Uslovima korišćenja i prodaje.</a></p>
				</div>
			</div>
			  @endif
		</form>
		</div>
	</section>
