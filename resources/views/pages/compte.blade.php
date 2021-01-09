@extends('default')


@section('content')

<style>

/* .container {
    margin-top: 90px ;
    opacity:0.9;
    border-radius:25px;
    width:1000px;
} */




#container-test{
    margin-top: 70px;
    margin-bottom:150px;
    opacity:0.9;
    border-radius:25px;
    width:1000px;
    font-family: 'Poppins', sans-serif;
}

.text{
   opacity:0.7;
   color:#343A40;
   font-family: 'Poppins', sans-serif;
}

.form-group .glyphicon{
    margin:0px -23px 0px 5px;
}

.card-header{
    background-color:#D2D7DB;
    border-color:#606A75;
    margin:0px 0px 10px 0px;
    opacity:0.8;
}

.btn{
    width:290px;
}

strong {
    font-size:20px;

}
</style>


<script>
    $(function() {
    $('#profile-image1').on('click', function() 
      {
        $('#profile-image-upload').click();
      });
    });       
</script> 

<div class="container" id="container-test">
  <div class="row">
    <!-- ======================== First column ==================================== -->
      <div class="col-sm" style="">
        <div class="panel panel-default">
              <div class="card-header">  <h4 >Votre profil</h4> <a href="user_settings"><span class="glyphicon glyphicon-cog"></span> Gérer mon compte</a></div>
              <div class="panel-body">
                <div class="box box-info">
                  <div class="box-body">
                    <div class="col-sm-6">

                      {{-- {{dd($user->avatar)}} --}}
                      @if (!empty($user['avatar']))

                      <div  style="text-align : center"> <img alt="User Pic" src="{{ asset('avatar/'.$user->avatar) }}" id="profile-image1" class="img-circle img-responsive"> 
                        
                        @else

                        <div  style="text-align : center"> <img alt="User Pic" src="https://www.flaticon.com/svg/static/icons/svg/149/149071.svg" id="profile-image1" class="img-circle img-responsive"> 
                        
                          @endif

                        <input id="profile-image-upload" class="hidden" type="file">
                        <br>
                        <div style="color:#999;" >
                          <span class="badge" style="opacity:0.5;">Changer votre avatar</span>

                        <form method="POST" action="{{route('add_avatar', ['id' => Auth::user()->id])}}" enctype="multipart/form-data"  style="text-align: center; margin:10px 0px 10px 29px">
                         {{ csrf_field() }} 
                          <div class="car-body">
                        <input type="file" accept="image/png, image/jpeg, image/gif" name="image_avatar"/>
                        <button type="submit" class="btn btn-primary btn-sm" style="width:131px; margin:10px 0px 0px -29px">Changer</button >
                        <br>
                        <p style="font-size: small; margin-left:-25px;">(2Mo max)</p>


                          </div>
                        </form>
                        </div>
                      </div>
                    <br>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <h5>Nom d'utilisateur:</h5>
                    <h4 style="color:#00b1b1;">{{$user->username}} </h4></span>        
                  </div>
                  <div class="clearfix"></div>
                  <hr style="margin:5px 0 5px 0;">   
                

                  <div class="col-sm-5 col-xs-6 tital " >Nom:</div><div class="col-sm-7">{{$user->name}}</div>
                  
                  <div class="clearfix"></div>
                  <div class="bot-border"></div>

                  <div class="col-sm-5 col-xs-6 tital " >Date d'inscription:</div><div class="col-sm-7">{{$user->created_at}}</div>

                </div>
              </div>
        </div>
      </div>
      <!-- ========================= Second column ========================================= -->

      <div class="col-sm" style="">
        <div class="panel panel-default">
          <div class="card-header">  
            <h4 >Vos annonces</h4> <a href="deposer"><span class="glyphicon glyphicon-send"></span> Déposer une annonce</a></div>
          </div>
          <div class="card-body">
            <div class="box box-info">
              <p class="h4">Nombres annonces déposées : </p>
              <p class="h4" style="text-align: center "> {{($annonces)->count()}}</p> 
            </div>
              <div class="card" style="height: auto; text-align:center">
              <p class="h4" style="text-align: center"> Vos annonces :</p>
              
              
                  @foreach ($annonces as $ad)
                  <div class="card">
                  <div class="col-1-sm" style="margin: 20px; margin: auto">
                  
                  
                      <p class="nav-link"  href="{{ route('voir_annonce',['id' => $ad->id, 'categorie_id' => $ad->categorie_id, 'locate_id' => $ad->locate_id, 'user_id' => $ad->user_id]) }}">{{$ad->title}}</p>               
                 
                  <form method="GET" action="delete/{{$ad->id}}">  
                          <button type="button" class="btn btn-secondary bg-light ">
                            <a class="nav-link"  href="{{ route('voir_annonce',['id' => $ad->id, 'categorie_id' => $ad->categorie_id, 'locate_id' => $ad->locate_id, 'user_id' => $ad->user_id]) }}">Voir</a>
                          
                          </button>
                            
                        <button type="submit" class="btn btn-warning" value="{{$ad->id}}">
                          {{-- <input type="submit" value="Supprimer" name="del_ad" /> --}}
                            Supprimer
                          </button>
                        </form>
                  </div>
                  </div>
                  @endforeach
            
            </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>

@endsection