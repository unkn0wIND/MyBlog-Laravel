@extends('base')

@section('content')

 
    <div class="container">
        <h1 class="text-center mt-5">Editer cet article</h1>

        <form method="POST" action="{{ route('articles.update', $article->id )}}">

            @method("PUT")
            @csrf 
            <div class="col-12">
                    <div class="form-group">
                            <label>Titre</label>
                            <input type="text" value="{{ $article->title }}" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Titre de l'article"/>
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                        <label>Sous-Titre</label>
                        <input type="text"  value="{{ $article->subtitle }}" name="subtitle" class="form-control @error('subtitle') is-invalid @enderror" placeholder="Sous-Titre de l'article"/>
                        @error('subtitle')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                        <label>Contenu</label>
                        <textarea id="tinycme-editor" name="content" class="form-control w-100 @error('content') is-invalid @enderror">
                            {{ $article->content }}
                        </textarea>
                        @error('content')
                            <span class="invalid-feeback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
            
                </div>
            </div>
            <script>
                tinymce.init({
                  selector: '#tinycme-editor'
                });
            </script>
            
            <div class="d-flex justify-content-center mt-2 mb-5">
                <button type="submit" class="btn btn-primary">Modifier l'article</button>
            </div>

        </form>
       
    </div>
@endsection