<div class="row min-vh-100 justify-content-center align-items-center">
    @foreach($articles as $article)
    <div class="col-12 col-md-4 mb-4">
           <div class="card mx-auto" style="width: 18rem;">
             <img src="{{ !$article->img ? 'https://picsum.dev/300/200' : Storage::url($article->img )}} " class="card-img-top cardImg" alt="Immagine dell'articolo {{$article->title}}">
             <div class="card-body">
               <h5 class="card-title">{{$article->title}}</h5>
               <div class="row justify-content-around align-items-center">
                <div class="col-6">
                  <a href="{{route('article.show', compact('article'))}}" class="btn btn-primary">Dettagli</a>
                </div>
                <div class="col-6">
                   @auth
                     @if (Auth::id() == $article->user->id)
                     <a href="{{route('article.edit', compact('article'))}}" class="btn btn-primary">Modifica l'articolo</a>
                     @endif
                   @endauth  
                </div>
               </div>
             </div>
            </div>
    </div>
    @endforeach
</div>
