@if (Session::has('success'))
    <div class="alert alert-success alert-block message">
        {{ Session::get('success') }}
    </div>
@endif

@if (Session::has('error'))
    <div class="alert alert-danger alert-block message">
        {{ Session::get('error') }}
    </div>
@endif

@if (Session::has('warning'))
    <div class="alert alert-warning alert-block message">
        {{ Session::get('warning') }}
    </div>
@endif

@if (Session::has('info'))
    <div class="alert alert-info alert-block message">
        {{ Session::get('info') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger message">
        Please check the form below for errors
    </div>
@endif
