@if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show">
        <strong>Success!</strong> {{ session('message') }}.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif