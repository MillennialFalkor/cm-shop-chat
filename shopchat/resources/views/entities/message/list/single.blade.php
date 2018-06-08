<div class="message-list-item">

	<div class="row">
	
		<div class="col-1 message-list-item-user-img">
			<img src="{{ URL::asset('images/user-placeholder.png') }}" class="img-fluid" />
		</div>

		<div class="col-11 message-list-item-message">
			<ul class="message-list-item-message-parts">
				<li class="message-list-item-user">{{ $message->user()->first()->username }}</li>
				<li class="message-list-item-content">{{ $message->content }}</li>
				<li class="message-list-item-date"><?php echo date( 'F j, Y, g:i a', strtotime($message->updated_at)); ?></li>
			</ul>
		</div>

	</div>
	
</div>