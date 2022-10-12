@extends('base')

@section('content')

    <div class="jumbotron">

        <h1 class="display-3 text-center">Les Articles du Blog - Laravel 8</h1>
        @livewire('filters', ['categories' => $categories])
        <div class="d-flex justify-content-center mt-2">
            {{ $articles->links('vendor.pagination.custom') }}
        </div>

    </div>

@endsection