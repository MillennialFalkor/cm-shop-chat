@include('partials.errors')
@include('partials.success')

<form id="message-list-post-form">

    <div class="form-group row">
        <label for="message-list-post-form-username" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
            <input id="message-list-post-form-username" type="text" class="form-control" placeholder="Username" name="username" value="{{ empty($success) ? old('username') : '' }}">
        </div>
    </div>
    
    <div class="form-group row">
        <label for="message-list-post-form-content" class="col-sm-2 col-form-label">Message</label>
        <div class="col-sm-10">
            <textarea id="message-list-post-form-content" class="form-control" rows="3" name="content">{{ empty($success) ? old('content') : '' }}</textarea>
        </div>
    </div>

    <input type="hidden" name="product_id" value="{{ $product->id }}" />

    <div class="form-group row">
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit Message</button>
            <div class="loading-indicator" style="margin: 0 0 -8px 5px;"></div>
        </div>
    </div>

</form>