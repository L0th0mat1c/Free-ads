<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    
    <title>Annunciati</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <style>

      body{
        background-color:#EEEEEE;
      }
      
      .navbar-brand{
        font-family: 'Caveat', cursive;
        font-size:30px;
        margin:-4px 0px 3px 0px;
        color:#EEEEEE;
      }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      /* Remove the navbar's default margin-bottom and rounded borders */ 
      .navbar {
        margin-bottom: 0;
        border-radius: 0;
        height:15px;
        z-index: 4;
        position: relative;
      }

      /* couleur blanche des lien */
      nav .navbar-nav li a{
      color: #9299a1;
      font-family: 'Poppins', sans-serif;
      }
  
      .nav-item{
        margin-right: 10px
      }
      
      /* Add a gray background color and some padding to the footer */
      footer {
        background-color: #f2f2f2;
        padding: 25px;
      }
      
    .carousel-inner img {
        width: 100%; /* Set width to 100% */
        margin: auto;
        min-height:200px;
    }
  
    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none; 
      }
      #collapse_search{
        display: none;
      }
    }
    
    .footer .container span{
      display:flex;
      justify-content:center;
    }

    hr{
      display:table-cell;vertical-align:middle;
      /* unicode-bidi: isolate; */
      /* margin-block-start: 0.5em; */
      /* margin-inline-start: 1px; */
      /* margin-inline-end: 1px; */
      /* overflow: hidden; */
      
      margin-block-end: 0.5em;      
      border-style: solid;
      border-width: 0.5px;
      height:18px;
      margin-top:13px;
      color:#9299a1;
      background-color:#A4ACB5;    
    }

    .icon-bar{

      background-color:#9299a1;
    }

    .navbar-collapse{
      background-color:#343A40;
      position:relative;
      z-index: 4
    }

    </style>

  </head>

  <body>
  
  <nav class="navbar navbar-expand-md bg-dark">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" style="color: #EA5252" href="/">Annunciati</a>
      </div>
      
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <hr class="my-4">
          <li class="nav-item" ><a class="nav-link" href="/deposer"><span class="glyphicon glyphicon-send"></span> Déposer une annonce</a></li>
          <hr class="my-4">
          <li class="nav-item"><a class="nav-link" href="/search"><span class="glyphicon glyphicon-search"></span> Chercher une annonce</a></li>
          
         
        </ul>
        <ul class="nav navbar-nav navbar-right">
        
        @guest
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span>{{ __(' Login') }}</a>
          </li>
          
          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}"><span class="glyphicon glyphicon-copy"></span>{{ __(' Register') }}</a>
              </li>
          @endif
          @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->username }}
              </a>

              <div class="dropdown-menu dropdown-menu-right  bg-dark" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                      <span class="glyphicon glyphicon-log-out"></span>{{ __('  Logout') }}
                  </a>
                  <a class="dropdown-item" href="compte">                
                  <span class="glyphicon glyphicon-user"></span>{{ __('  Mon compte') }}
                  </a>
                  <a class="dropdown-item" href="deposer">                
                  <span class="glyphicon glyphicon-send"></span>{{ __('  Déposer une annonce') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              </div>
          </li>
        @endguest       
        </ul>
      </div>
    </div>
  </nav>

<!--contenu qui changera selon la page-->
@if(session('success'))
  <div class="container">
    <div class="alert alert-success">
      {{session('success')}}
    </div>
  </div>
@endif

@if(session('error'))
  <div class="container">
    <div class="alert alert-danger">
      {{session('error')}}
    </div>
  </div>
@endif

@yield('content')

<!--Fin de section du contenu qui change-------->


<footer class="footer">
      <div class="container">
        <span class="text-muted">Annunciati &copy; 2020-2021 &middot; 
        <a href="/apropos">A propos</a></span>
      </div>
    </footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script></body>

</body>

</html>