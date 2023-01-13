<div>
	<div class="header-action-icon-2">
		
		<a class="mini-cart-icon" href="{{route('shop.cart')}}">
			<img alt="Cart" src="{{asset('img/theme/icons/icon-cart.svg')}}">
			@if(Cart::instance('cart')->count() > 0)
				<span class="pro-count blue">{{Cart::instance('cart')->count()}}</span>
			@endif
		</a>
		<div class="cart-dropdown-wrap cart-dropdown-hm2">
			<ul>
				@foreach(Cart::instance('cart')->content() as $item)
					<li>
						<div class="shopping-cart-img">
							<a href="{{$item->options->slug ? route('product.details', $item->options->slug) : ''}}"><img alt="{{$item->name}}" src="{{asset('img/shop/product')}}-{{$item->id}}-1.jpg"></a>
						</div>
						<div class="shopping-cart-title">
							<h4 class="text-capitalize"><a href="{{$item->options->slug ? route('product.details', $item->options->slug) : ''}}">
									{{substr($item->name, 0, 20)}}
								</a></h4>
							<h3><strong>{{$item->qty}} × </strong>${{$item->price}}</h3>
						</div>
						<div class="shopping-cart-delete">
							<a href="#"><i class="fi-rs-cross-small"></i></a>
						</div>
					</li>
				@endforeach
			</ul>
			<div class="shopping-cart-footer">
				<div class="shopping-cart-total">
					<h4>Total <span>${{Cart::instance('cart')->total()}}</span></h4>
				</div>
				<div class="shopping-cart-button">
					<a href="{{route('shop.cart')}}">View Cart</a>
					<a href="shop-checkout.php">Checkout</a>
				</div>
			</div>
		</div>
	</div>
</div>
