@extends('default')


@section('content')




<!-- Page Content -->
<div class="container">
  <br>
  <br>
  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-8">
      <img class="img-fluid" src="HomePage1Main.jpg" alt="">
    </div>

    <div class="col-md-4">
      <h3 class="my-3">Le site de vente par excellence</h3>
      <p>Vous trouverez ici les meilleures annonces de votre région, toutes nos annonces sont certifiées par nos équipes !</p>      
      
    </div>

  </div>
  <!-- /.row -->
  
  <!-- Related Projects Row -->
  
  <h3 class="my-4">Dernières annonces</h3>
  @foreach ($ads as $ad)
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
  
                    </article>
    
      
    </div>
    @endforeach
<!-- D2BUT -->
<!-- <div class="container-fluid"> 
  <div class="col-sm-12">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">

        
        <div class="item active">
          <img src="annonces/hand_home1.jpg" alt="Image" height="768" height="1366"/>
            <div class="carousel-caption">
              <h1>Annunciati</h1> <br> <h2>Le site d'annonces par exellence. <br> Vous trouverez ici les meilleures annonces de votre région, toutes nos annonces sont certifiées par nos équipes !</h2>
            
            </div>      
          </div>

        @foreach ($ads as $ad)
      
          <div class="item">
          <img src="{{ asset('annonces/'.$ad->photo_principale) }}" alt="Image"/>
            <div class="carousel-caption">
              
            
            </div>      
          </div>
          @endforeach
        
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Précédent</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Suivant</span>
        </a>
      </div>
  </div>
</div> -->
        
  <!-- FIN -->



</div>





<!-- /.container -->

@endsection

