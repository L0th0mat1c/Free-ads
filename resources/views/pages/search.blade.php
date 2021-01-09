@extends('default')


@section('content')

<style>
.container-fluid{
    /* margin-top: 70px;
    margin-bottom:150px;
    opacity:0.9;
    border-radius:25px;
    width:1000px; */
    font-family: 'Poppins', sans-serif;
}
p{
  margin:5px;
}
</style>

<div class="container-fluid">
    
      <nav id="Navbar" class="navbar navbar-expand-sm justify-content-between" style="opacity:0.7;">
        <span class="h3" data-feather="search" style="text-align: left; margin-top:7px;">Rechercher</span>
            <form action="search_ads" method="GET">
                <ul class="navbar nav" id="collapse_search">    
                        
                    <li class="nav-item">
                        <label for="name">Titre :</label>

                        <input type="text" id="name" name="search_title" {{-- required --}}
                            minlength="0" maxlength="8" size="10">
                    </li>
                    <!-------Dropmenu pour les catégories-->
                    <li class="nav-item">
                   
                        <label class="col-md-auto control-label" for="email">Choisir votre catégorie</label>
                      </li>
                      <li class="nav-item">
                        <select class="custom-select d-block w-100" name="search_categorie" required>
                        <option value="" disabled selected>Catégorie à choisir</option> 
                        @foreach($data['categories'] as $cat)
                          <option value="{{$cat->id}}">{{$cat->name}}</option>
                          @endforeach  
                        </select> 
                     
                    </li>
                    <!-------Dropmenu pour les localisations-->
                    <li class="nav-item">
                    
                        <label class="col-md-auto control-label" for="email">Choisir votre ville</label>
                      </li>
                      <li class="nav-item">
                        <select class="custom-select d-block w-100" name="search_locate" required>
                        <option value="" disabled selected>Ville à choisir</option>  
                        @foreach($data['locates'] as $locate)
                          <option value="{{$locate->id}}">{{$locate->name}}</option>
                          @endforeach
                        </select>
                      
                    </li>
                
                    <li class="nav-item">
                        <label for="search"> lancer la recherche</label>
                        <input type="submit" value="Rechercher" name="submit">
                    </li>
                    <li class="nav-item">
                      <div class= "R-align-items"> <button type="button" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#collapseNavbar">
                        <a class="nav-link"><img src="assets/icons/menu.png" alt=menu/></a>
                        </button>
                      </div>
                    </li>
                </ul> 
                <ul class="navbar collapse navbar-nav">
                  <li class="nav-item ">
                    <div class= "R-align-items-left">
                      <span class="navbar-toggler"><a href="#"><img src="assets/icons/cart-button.png" alt="buy"></a></span>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class= "R-align-items"> 
                      <button type="button" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#collapse_search">
                      <a class="nav-link"><img src="assets/icons/menu.png" alt=menu/></a>
                      </button>
                    </div>
                  </li>
                </ul>
              </form>
         
      
      </nav>
 
  
      <main role="main" class="col-md-auto ml-sm-auto px-md-auto">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-right
         pt-3 pb-2 mb-3 border-bottom"{{--  style="margin: 10px --}}">
          <div class="card bg-light" style="width: 100%; justify-content: around">
            <h1 class="h2" style="text-align: center">Nos annonces</h1>
          {{-- <div class="btn-toolbar mb-2 mb-md-0"> --}}
          </div>
        </div>
      </main>
       <!--------------------Insertion de la boucle foreach pour faire apparaitre les annonces-->
      <div class="cards">
        @foreach ($data['ads'] as $ad)
          <div class="col-sm-3 justify-content-between">
            <article class="card">
                <a href="{{ route('voir_annonce',['id' => $ad->id, 'categorie_id' => $ad->categorie_id, 'locate_id' => $ad->locate_id, 'user_id' => $ad->user_id]) }}" class="btn btn-primary">Voir l'annonce</a>
                
                <img class="card-img-top" src="{{ asset('annonces/'.$ad->photo_principale) }}" alt="sans illustration" style="object-fit: cover;
                width: 100%;
                height: 200px;">
                <div>
                  <span class="badge badge-info">{{$ad->category->name }}</span>
                  <span class="badge badge-info" style="text-align:rigth">{{$ad->locates->name }}</span>
                </div>
                <div class="content justify-content-between" style="height: 200px; margin:10px;">
                  <h4 style="color: midnightblue;">{{  $ad->price  }} €</h4>  
                  <p><h4>{{ $ad->title }}</h4><br>{{ $ad->description }}</p>
                  
                  
                  
                </div>
                <footer><p style="text-align: center; margin:-20px 0px -20px 0px"><a href="{{ route('voir_annonce',['id' => $ad->id, 'categorie_id' => $ad->categorie_id, 'locate_id' => $ad->locate_id, 'user_id' => $ad->user_id]) }}" style="color: black;">Voir plus</a></footer>
            
                {{-- <footer>I have a footer!</footer>  --}}
             {{--  </article> --}}

            
          </article>
          </div> 
        @endforeach
      </div>
</div> 
  
    
@endsection

