<div id="product-messages">
	
	@include( 'entities.message.list.post' )

	<hr class="mt-5">

	<h5>{{ count($messages) }} Messages</h5>

	<hr>

	@include( 'entities.message.list.index' )

</div><!-- product-messages-->