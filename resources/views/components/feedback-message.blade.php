<!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible" id="alert" role="alert">
        {{ session()->get('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
@elseif (session()->has('error'))
    <div class="alert alert-danger  alert-dismissible" id="alert" role="alert">
        {{ session()->get('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
@endif
