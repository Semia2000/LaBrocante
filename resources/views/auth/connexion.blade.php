@extends('layouts.layout')
@section('content')
    <div class="container mt-5">
        <div class="row col-lg-4 usernameconfirm">
            <div>
                <h2 style="margin: 0">Connexion</h2>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group mt-5">
                        <input type="email" class=" form-control @error('email') is-invalid @enderror" id="email"
                            placeholder="Adresse email" name="email" value="{{ old('email') }}">
                    </div>

                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group mt-4">
                        <input type="password" class=" form-control @error('password') is-invalid @enderror" id="password"
                            placeholder="Mot de passe" name="password" value="{{ old('password') }}">
                    </div>

                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-check mt-4">
                        <input type="checkbox" class="form-check-input" id="exampleCheck" name="remember">
                        <label class="form-check-label" for="exampleCheck">
                            Se souvenir de moi </label>
                    </div>
                    <div class="form-check mt-4">
                        <p>Vous n'avez pas un compte? <a href="{{ route('register') }}">S'inscrire</a></p>
                    </div>
                    <button type="submit" style="background-color: #FABC01;color:white"
                        class="btn  mt-5">Continuer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
