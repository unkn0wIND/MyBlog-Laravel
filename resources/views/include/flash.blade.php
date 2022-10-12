@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block mt-2">
    <strong>{{ $message }}</strong>
    </div>
@endif
