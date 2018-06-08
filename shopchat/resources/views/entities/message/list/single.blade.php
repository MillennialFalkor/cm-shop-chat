<div class="message-list-item">
	<div class="row">
		<div class="col-3 col-sm-2 col-md-1 user-img">
			<img src="{{ URL::asset('images/user-placeholder.png') }}" class="img-fluid" />
		</div>
		<div class="col-9 col-sm-10 col-md-11 message">
			<ul class="message-parts">
				<li class="user">
					{{ $message->user()->first()->username }} 
					@if ( $message->user()->first()->id == $product->user_id )
					    <span class="shop-owner">Shop Owner</span>
					@endif
				</li>
				<li class="content">{{ $message->content }}</li>
				<li class="date"><?php echo date( 'F j, Y, g:i a', strtotime($message->updated_at)); ?></li>
			</ul>
		</div>
	</div>
</div>