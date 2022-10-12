<div>
    <div class="container" style="margin-right:24%;">
        @foreach ($categories as $category)
            <div class="form-group">
                    <input class="form-check-input" type="checkbox" id="{{ $category->id }}" wire:model="activeFilters.{{ $category->id }}" />
                    <label class="form-check-label" for="{{ $category->id }}">
                    {{ $category->label }}
                    </label>
            </div>
        @endforeach
    </div>


        <div class="col-10">
            <div class="articles row justify-content-center">
                @foreach ($articles as $article)
                    <div class="col-md-5">
                        <div class="card my-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <span class="badge bg-primary">{{ $article->category->label }}</span>  
                                <p class="card-text">{{ $article->subtitle }}</p>
                                <a href="{{ route('article', $article->slug)}}" class="btn btn-primary">
                                    Lire la suite
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> 
        </div>
</div>
