@extends('default')


@section('content')


<div class="card" style="width: 100%; text-align: center">
<p class="h2">Résultats de votre recherche !</p>
<a href="/search">Nouvelle recherche</a>
</div> 
<main role="main" style="margin: 50px">
    <div class="container">
        
        {{--  {{dd($data['ads'])}} --}} 
            @if ($data['ads']->isEmpty())
        
                <div class="row">
                    
                    <div class="col-sm-10">
                        <div class="card" style="width: 100%; text-align: center">
                            <div class="card-body">
                            <h2>Aucun résultat !</h2>
                            </div>
                            <div class="card-text">
                                <p>Désolé !</p>
                        </div>    
                    
                    {{-- <p> Aucun résultat !</p> --}}
                </div>
            @else
            <div class="cards">
                @foreach ($data['ads'] as $ad)
                  <div class="col-sm-3 justify-content-between">
                    <article class="card">
                        <a href="{{ route('voir_annonce',['id' => $ad->id, 'categorie_id' => $ad->categorie_id, 'locate_id' => $ad->locate_id, 'user_id' => $ad->user_id]) }}" class="btn btn-primary">Voir l'annonce</a>
                        
                        <img class="card-img-top" src="{{ asset('annonces/'.$ad->photo_principale) }}" alt="Card image cap" style="object-fit: cover;
                        width: 100%;
                        height: 200px;">
                        <div>
                          <span class="badge badge-info">{{$ad->category->name }}</span>
                          <span class="badge badge-info" style="text-align:rigth">{{$ad->locates->name }}</span>
                        </div>
                        <div class="content justify-content-between" style="height: 200px">
                          <p><h4>{{ $ad->title }}</h4><br>{{ $ad->description }}</p>
                          <h4>{{  $ad->price  }} €</h4>
                          
                          
                        </div>
                        <footer><p style="text-align: center"><a href="{{ route('voir_annonce',['id' => $ad->id, 'categorie_id' => $ad->categorie_id, 'locate_id' => $ad->locate_id, 'user_id' => $ad->user_id]) }}" style="color: black">Voir plus</a></footer>
                    
                        {{-- <footer>I have a footer!</footer>  --}}
                     {{--  </article> --}}
        
                    
                  </article>
                  </div> 
                @endforeach
              </div>
    </div> 
    
</main>         
    @endif
            
            
        
    
    
  </div>



@endsection