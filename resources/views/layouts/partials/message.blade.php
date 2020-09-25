<div class="row mt-3">
    <div class="col-md-6 container">
@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@elseif(session()->has('danger'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i>{{ session('danger') }}</i>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@elseif(session()->has('warning'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <i>{{ session('warning') }}</i>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
    </div>
</div>