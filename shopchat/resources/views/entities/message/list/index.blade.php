<div class="row mt-4 mb-4 message-list">
    @foreach ($messages as $message)
        <div class="col-12 message-list-item-wrapper">
            @include( 'entities.message.list.single' )
        </div>
    @endforeach
</div>