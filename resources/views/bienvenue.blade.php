@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row col-lg-4 connexion">
            <div>
                <h2>Bienvenue!</h2>
                <br>
                <p><a href="">
                        <img src="{{ asset('assets/socialmedia/facebook.png') }}" alt="" width="35">
                        Continuer avec facebook</a></p>
                <br>
                <p><a href=""><img src="{{ asset('assets/socialmedia/google.png') }}" alt=""
                            width="35">&nbsp;Continuer avec google</a></p>
                <br>
                <p><a href=""><img src="{{ asset('assets/socialmedia/apple.png') }}" alt=""
                            width="35">&nbsp;&nbsp;Continuer avec Apple</a></p>
                <br>
            </div>
            <br>
            <h5> S'inscrire avec <a href="#">e-mail</a></h5>
            <h5>vous avez deja un compte? <a href="{{ route('login') }}">Se connecter</a></h5>
        </div>
    </div>
@endsection
