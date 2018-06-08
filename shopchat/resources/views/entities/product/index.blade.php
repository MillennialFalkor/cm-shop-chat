@extends ('master')

@section('title')
ShopChat Product - {{ $product->title }}
@stop

@section ('description')
{{ $product->description }}
@stop

@section ('content')

<h1>{{ $product->title }}</h1>

<div class="row mt-4 mb-4">

	<div class="col-12 col-sm-6 col-md-8 mb-3">
		<img src="{{ $product->image }}" class="img-fluid" />
	</div><!-- col-->

	<div class="col-12 col-sm-6 col-md-4">
		<h3>Product Details</h3>
		<hr>
		<h4>Description: <small>{{ $product->description }}</small></h4>
		<h4>Added: <small><?php echo date( 'F j, Y', strtotime($product->updated_at)); ?></small></h4>
		<p>By: <em>Andrew Reinhardt</em></p>
	</div><!-- col-->

</div><!-- row -->

<h2>Questions? Comments? Leave 'em!</h2>

<p>Connect with the Creative Market shop owner or fellow customers.</p>

<p style="text-transform: uppercase;"><small><strong>Tip: Entering username of shop owner simulates comment left by shop owner.</strong></small></p>

@include( 'entities.message.list.panel' )

@stop