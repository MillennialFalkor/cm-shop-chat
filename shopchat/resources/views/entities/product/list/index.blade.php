<div class="row mt-4 mb-4 product-list">
    @foreach ($products as $product)
        <div class="col-12 col-sm-4 product-list-item-wrapper">
            @include( 'entities.product.list.single' )
        </div>
    @endforeach
</div>