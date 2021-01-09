@extends('default')

@section('content')
{{-- {{dd(Auth::user())->id}} --}}
<div class="container">
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="deposeraction" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
          <fieldset>
            <legend class="text-center">Déposer une annonce</legend>

          <label class="text-center" name="user_id" >
          <input type ="hidden" value="{{Auth::user()->id}}" name="user_id"> 
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Titre de l'annonce</label>
              <div class="col-md-9">
                <input id="ad_title" name="ad_title" type="text" placeholder="Titre de votre annonce" class="form-control" required>
              </div>
            </div>

            <!-- Locate input -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Votre ville :</label>
              <div class="col-md-9">
                <select class="custom-select d-block w-100" name="ad_location" required>
                <option value="" disabled selected>Choisir une ville</option>   
                @foreach($data['locates'] as $locate)
                   <option value="{{$locate->id}}">{{$locate->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <!-- Categorie input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Catégorie de votre annonce</label>
              <div class="col-md-9">
                <select class="custom-select d-block w-100" name="ad_category" required>
                <option value="" disabled selected>Choisir une catégorie</option> 
                @foreach($data['categories'] as $cat)
                     <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Votre message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="ad_description" name="ad_description" placeholder="Votre description d'annonce" rows="5" required></textarea>
              </div>
            </div>
            
            <!-- Prix -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Votre prix</label>
              <div class="col-md-9">
                <span class="currencyinput"> € <input type="number" min="1" step="any" name="ad_price" required/></span>  
              </div>
            </div>
            
            <!-- Photo -->
              <div class="row">    
                  <div class="col-xs-12 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">  
                      <!-- image-preview-filename input [CUT FROM HERE]-->
                      <div class="input-group image-preview">
{{--                           <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
 --}}                          <span class="input-group-btn">
                              <!-- image-preview-clear button -->
                              <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                  <span class="glyphicon glyphicon-remove"></span> Clear
                              </button>
                              <!-- image-preview-input -->
                              <div class="btn btn-default image-preview-input">
                                  <span class="glyphicon glyphicon-folder-open"></span>
                                  <span class="image-preview-input-title">Browse</span>
                                  <input type="file" accept="image/png, image/jpeg, image/gif" name="image"/> <!-- rename it -->
                                  
                              </div>
                              <br>
                                  <p style="font-size: small; text-align:left">(2Mo max)</p>
                          </span>
                      </div><!-- /input-group image-preview [TO HERE]--> 
                  </div>
              </div>
            <br>
            <br>
            
            
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Annunciami !</button>
                
              </div>
              
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>




<!-- Intégrer un if sur l'accès à la page déposer -->


<!-- <form class="card p-2">
  
</form>
</div>
<div class="col-md-auto order-md-1 justify-content-center">
<h4 class="mb-3">Remplisser votre annonce</h4>
<form class="needs-validation" novalidate>
  

  <div class="mb-3">
    <ul class="navbar nav">
      <li class="navitem">
        <label for="address" style="text-align: left">Description de l'annonce</label>
      </li>
      <li class="nav-item">
        <textarea name="description" id="" cols="60" rows="10"></textarea>
        <div class="invalid-feedback">
        Veuillez saisir une description de l'annonce
        </div>
      </li>
    </ul>
  </div>


  <div class="row">
    <div class="col-md-2 mb-2">
      <label for="state">Ville</label>
      <select class="custom-select d-block w-100" id="state" required>
        <option value="">Choose...</option>
        <option>Paris</option>
        <option>Lyon</option>
        <option>Marseille</option>
        <option>Toulouse</option>
        <option>Bordeaux</option>
        <option>Lille</option>
      </select>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <p><label for="zip">Photo</label></p>
      <form enctype="multipart/form-data" action="fileupload.php" method="post">
        <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
        Chargement de la photo <input type="file" name="monfichier" />
        <input type="submit" />
      </form>
      <div class="invalid-feedback">
          Ajoutez au moins une photo pour illustrer votre annonce
      </div>
    </div>
  </div>
  <hr class="mb-4">
    <h3 style="text-align: center"><label for="soumettre">Soumettre mon annonce</label></h3>  
    <p style="text-align: center"><input  type="submit" value="Je poste mon annonce" name="submit" style="position"></p>
  <hr class="mb-4"> -->


    
@endsection