@extends('default')

@section('content')

<main role="main" style="margin: 50px;">
  <div class="container-fluid">

    <div class="row justify-content-between" style="height: auto">
            <div class="col-sm-7">
                
                <div class="col-sm-auto">
                  <div class="card" style="width: 70rem;">
                    @foreach ($data['ads'] as $ad)
                    <img class="card-img-top" src="{{ asset('annonces/'.$ad->photo_principale) }}" alt="Card image cap">
                      <div class="card" style="width: 40; text-align:center">
                        <h4>{{$ad->title}}</h4>
                      </div>
                      <div class="card-body">
                        <p class="card-text">{{ $ad->description }}</p>
                          <h2>{{  $ad->price  }} €</h2>
                      </div>
                        @endforeach
                        <div class="body" style="text-align: center">
                          @foreach ($data['categories'] as $cat)
                            <span class="badge badge-secondary">{{$cat->name}}</span>
                          @endforeach
                          @foreach ($data['locates'] as $locate)
                            <span class="badge badge-secondary">{{$locate->name}}</span> 
                            
                          @endforeach 

                        </div>

                          
                    
                  </div>
                </div>
            </div>

           

            <div class="col-sm-auto">
              @foreach ($data['users'] as $use)
                <div class="card" style="width: 50rem; text-align: center;">
                
                  <div class="card-body">
                    <p class="h2">L'annonceur : </p>
                    @if (!empty($use['avatar']))
                    <div class="card">
                      <div class="justify-content-between" style="display:block; margin-left:auto; margin-right:auto "> <img alt="User Pic" src="{{ asset('avatar/'.$use->avatar) }}" id="profile-image1" class="img-circle img-responsive"> 
                      </div>
                        @else
                      <div class="card">
                        <div class="justify-content-between" style="display:block; width: 50%; margin-left:auto; margin-right:auto"> <img alt="User Pic" src="https://www.flaticon.com/svg/static/icons/svg/149/149071.svg" id="profile-image1" class="img-circle img-responsive"> 
                        </div>

                          @endif
                        </div>
                    <span class="badge badge-secondary" style="margin-bottom: 20px"><h2>{{$use->name}}</h2></span>

                    <div class="card" style="width: 45rem;">
                      <ul class="list-group list-group-flush">
                        
                        <li class="list-group-item">
                          <p class="h4">Prénom de l'annonceur</p>
                          <p class="h6">{{$use->username}}</p>
                        </li>
                        <li class="list-group-item">
                          <p class="h4">Son uméro de téléphone</p>
                          <p class="h6">{{$use->phone_number}}</p>
                        </li>

                        <li class="list-group-item">
                          <p class="h4">Son adresse email</p>
                          <p class="h6">{{$use->email}}</p>
                        </li>
                      </ul>
                      <a href="#" class="btn btn-primary">Contacter {{$use->name}}</a>
                      <a href="/search" class="btn">Nouvelle recherche</a>

                    </div>
                  </div>                
                </div>
              @endforeach

            </div>
    </div>            
  </div>
</main>

@endsection