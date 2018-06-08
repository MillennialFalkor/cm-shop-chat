<ul class="mt-4 mb-4 message-list">
    @foreach ($messages as $message)
        <li class="message-list-item-wrapper mt-3 mb-3">
            @include( 'entities.message.list.single' )
        </li>
    @endforeach
</ul>