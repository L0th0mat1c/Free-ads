@extends('default')

@section('content')

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

<style>



.container 
{
    width:670px;
}

#container-test{
    margin-top: 90px;
    margin-bottom:147px;
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

/* .btn{
    border:5px:
} */

strong {
    font-size:20px;

}

</style>

<div class="container" id="container-test">
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><span class="glyphicon glyphicon-copy"></span>{{ __(' Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="text col-md-4 col-form-label text-md-right">{{ __('Name ') }}<span class="glyphicon glyphicon-user"></span></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <h5>{{ $message }}</h5>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="text col-md-4 col-form-label text-md-right">{{ __('User Name ') }}<span class="glyphicon glyphicon-user"></span></label>

                            <div class="col-md-6">
                                <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <h5>{{ $message }}</h5>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="text col-md-4 col-form-label text-md-right">{{ __('E-Mail Address ') }}<span id="mail" class="glyphicon glyphicon-envelope "></span></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <h5>{{ $message }}</h5>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone_number" class="text col-md-4 col-form-label text-md-right">{{ __('phone Number ') }}<span class="glyphicon glyphicon-earphone"></span></label>

                            <div class="col-md-6">
                                <input id="phone_number" type="phone_number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number">

                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <h5>{{ $message }}</h5>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="text col-md-4 col-form-label text-md-right">{{ __('Password ') }}<span class="glyphicon glyphicon-lock"></span></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                       <h5>{{ $message }}</h5>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="text col-md-4 col-form-label text-md-right">{{ __('Confirm Password ') }} <span class=" glyphicon glyphicon-lock"></span></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
