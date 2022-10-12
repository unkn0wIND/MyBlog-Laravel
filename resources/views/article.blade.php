@extends('base')

@section('content')

    <div class="jumbotron">
        
        <h2 class="display-4 text-center">{{ $article->title }}</h2>
        
        <h5 class="text-center my-3 pt-3">{{ $article->subtitle }}</h5> 
        <div class="d-flex justify-content-center">
            <span class="badge bg-primary">{{ $article->category->label }}</span>   
        </div>
    </div>

        <hr>
        
    <div class="container">
        <p class="text-center">
                {!! $article->content !!}
        </p>
    </div>

    <div class="d-flex justify-content-center my-5">
        <a class="btn btn-primary" href="{{ route('articles') }}">
            <i class="fas fa-arrow-left"></i>
            Retour
        </a>
    </div>

@endsection