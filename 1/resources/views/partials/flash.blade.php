@if (session()->has('flash_message'))
    <div class="container">
        <div class="alert alert-info">
            <p>{{ session()->get('flash_message') }}</p>
        </div>
    </div>
@endif
