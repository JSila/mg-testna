@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Problems occured while submitting the form</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
