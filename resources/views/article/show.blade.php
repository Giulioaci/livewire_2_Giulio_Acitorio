<x-layout>
    <div class="container mb-5">
        <div class="row justify-content-center my-5">
            <div class="col-12">
                <h1 class="display-5 text-center">Dettagli dell'articolo: {{$article->title}}</h1>
            </div>
        </div>
         <div class="row justify-content-center">
            <div class="col-12 col-md-6 d-flex flex-column align-items-center justify-content-center">
                <p>{{$article->body}}</p>
                <p class="text-muted">Scritto da: {{$article->user->name}} </p>
            </div>
            <img src="{{ $article->img ? Storage::url($article->img) : 'https://picsum.dev/300/200' }}" alt="Immagine dell'articolo {{$article->title}}" class="mx-auto rounded shadow heightCustom">
        </div>
    </div>
    @auth
     @if (Auth::id() == $article->user->id)
       <div class="row justify-content-around mt-5">
          <div class="col-6">
            <livewire:article-delete :article="$article">
          </div>
          <div class="col-6">
            <a href="{{route('article.edit', compact('article'))}}" class="btn btn-primary">Modifica</a>
          </div>
       </div>
     @endif
    @endauth
</x-layout>