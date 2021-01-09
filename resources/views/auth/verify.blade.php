@extends('default')

@section('content')

<style>

.container 
{
    width:670px;
}

#container-test{
    margin-top: 90px;
    margin-bottom:454px;
    opacity:0.9;
    border-radius:25px;
    width:1000px;
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
    width:337px;
}

strong {
    font-size:20px;

}

</style>

<div class="container" id="container-test">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><span class="glyphicon glyphicon-envelope"></span>{{ __('  Nous vous avons envoyé un email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un nouveau lien a ete envoyer à votre adresse mail.') }}
                        </div>
                    @endif

                    {{ __('Veuillez vérifie votre adresse mail. ') }}
                    {{ __('Si vous n\'avez pas reçu de mail :') }}
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn-primary">{{ __('Envoyer à nouveau') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
