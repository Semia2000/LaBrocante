@extends('layout')
@section('content')
 <div>
    <div class="connexion">
        <div>
        <h1>Bienvenue!</h1>
        <br><br>
        <p><a href=""><img src="{{ asset('assets/socialmedia/facebook.png') }}" alt="" width="40"> Continuer avec facebook</a></p>
        <br>
        <p><a href=""><img src="{{ asset('assets/socialmedia/google.png') }}" alt="" width="35">Continuer avec google</a></p>
        <br>
        <p><a href=""><img src="{{ asset('assets/socialmedia/apple.png') }}" alt="" width="30">Continuer avec Apple</a></p>
        <br>
        </div>
        <br><br>
        <h5>Se connecter avec <a href="">e-mail</a></h5>
        <h5>vous avez deja un compte? <a href="">Se connecter</a></h5>
    </div>
 </div>
@endsection

