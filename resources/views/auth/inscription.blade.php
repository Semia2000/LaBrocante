@extends('layouts.layout')
@section('content')
<section id="connexionpage" class="d-flex align-items-center justify-content-center">
    <div class="usernameconfirm container mb-3">
        <div>
            <h2 style="margin: 0">Inscription</h2>
            <form action="{{ route('register') }}" method="POST">
                @csrf

                <div class="form-group mt-4">
                    <input type="text" class="form-control" id="name" placeholder="Nom" name="name">
                </div>
                <div class="form-group mt-4">
                    <input type="email" class="form-control" id="email" placeholder="Adresse email"
                        name="email">
                </div>
                <div class="form-group mt-4">
                    <input type="password" class="form-control" id="password" placeholder="Mot de passe"
                        name="password">
                </div>

                <div class="form-group mt-4">
                    <input type="password" class="form-control" id="passwordConfirmation"
                        placeholder="Confirmation mot de passe" name="passwordConfirmation">
                </div>

                {{-- <div class="form-check mt-4">
                    <input type="checkbox" class="form-check-input" id="exampleCheck" name="remember">
                    <label class="form-check-label" for="exampleCheck">
                        Se souvenir de moi </label>
                </div> --}}
                <div class="form-check mt-4">
                    <p>Vous avez un compte ? <a href="{{ route('login') }}"> Se connecter</a></p>
                </div>
                <button type="submit" class="btn mb-3">Continuer</button>
            </form>
        </div>
    </div>
</section>


@endsection
