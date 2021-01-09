@extends('default')


@section('content')


<div class="container">
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="" method="GET">
            @csrf
          <fieldset>
            <legend class="text-center">Reinitialiser votre mot de passe</legend>

          
            <!-- Email input-->
            <div class="form-group">
              <div class="col">
              <input id="email" name="email" type="email" placeholder="Adresse mail de votre compte" class="form-control">
              </div>
            </div>

            
            
            <!-- Form actions -->
            <div class="form-group">
              
                <button type="submit" class="btn btn-primary btn-lg btn-block">Ripristina = <span style="color:#4c91cd">Réinitialisation</span> </button>
             
              
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>

@endsection

