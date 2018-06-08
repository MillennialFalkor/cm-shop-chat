@extends ('master')

@section('title')
ShopChat - The Creative Market Code Challenge
@stop

@section ('description')
Allows Creative Market shops to talk directly to their customers, with an AJAX-driven message board on product detail pages.
@stop

@section ('content')

<h1 class="text-center">Challenge Accepted!</h1>

<div class="row mt-4 mb-5">

	<div class="col-12 col-sm-8 col-lg-6 col-centered">
		<img class="img-fluid" src="{{ URL::asset('images/shopchat-logo-lg.png') }}" />
	</div><!-- col-->

</div><!-- row -->

<h2 class="text-center">Welcome to ShopChat.</h2>

<p class="text-center">Submission by Andrew Reinhardt</p>

<p class="text-center">Get started below. Click a product to go to the detail page, where Creative Market shops can answer product questions posted by customers.</p>

<div class="row">

	@include( 'entities.product.list.index' )

</div><!-- row -->

@stop