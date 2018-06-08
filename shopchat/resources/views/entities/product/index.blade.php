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

	<div class="col-xs-12 col-sm-6 col-md-8">
		<img src="{{ $product->image }}" class="img-fluid" />
	</div><!-- col-->

	<div class="col-xs-12 col-sm-6 col-md-4">
		<h4>{{ $product->description }}</h4>
	</div><!-- col-->

</div><!-- row -->

<h2>Questions? Comments? Leave 'em!</h2>

<p>Conect with the Creative Market shop owner or fellow customers.</p>

<div class="row mt-4 mb-4">

	

</div><!-- row -->


@stop