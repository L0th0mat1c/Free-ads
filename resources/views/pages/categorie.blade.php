@extends('default')

@section('content')

{{-- <nav aria-label="navbar navbar-expand-sm">
    <ul class="navbar nav">
        @foreach ($data['categories'] as $cat)
    <li class="breadcumb-item active nav-item"><a href="{{route('voir_categories', $cat->id)}}">{{$cat->name}}</a></li>   
        @endforeach  
    </ul>
</nav> --}}

<main role="main" class="col-md-auto ml-sm-auto px-md-auto">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-right
     pt-3 pb-2 mb-3 border-bottom">
      <h1 style="text-align: center">Résultats</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
      </div>
    </div>
  </main>
   <!--------------------Insertion de la boucle foreach pour faire apparaitre les annonces-->
  <div class="row">
    @foreach ($ads as $ad)
    <div class="col-sm-4">
      <div class="card mb-4 box-shadow"> 
        <img class="card-img-top" src="{{ asset('annonces/'.$ad->photo_principale) }}" alt="Card image cap">
        <div class="card-body">
        <a href="{{ route('voir_annonce',['id' =>$ad->id]) }}"><p class="card-text"><h4>{{ $ad->title }}</h4><br>{{ $ad->description }}</p></a>
        <h4>{{  $ad->price  }} €</h4>
        <span class="badge badge-info"><a class="text-white" href="#"></a></span>
        <h3><span class="badge badge-info"><a class="text-white" href="#">{{$ad->locates->name }}</a></span></h3>
        </div>
      </div>
    </div>
    @endforeach
  </div>
    
@endsection