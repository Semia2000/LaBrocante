@extends('layouts.layout')
@section('content')
    <div class="container mt-5">
        <div class="row col-lg-4 usernameconfirm">
            <div>
                <h2 style="margin: 0">Vérification</h2>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group mt-5">
                        <input type="email" class=" form-control @error('email') is-invalid @enderror" id="email"
                            placeholder="Adresse email" name="email" value="{{ old('email') }}">
                    </div>

                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <button type="submit" style="background-color: #FABC01;color:white"
                        class="btn  mt-5">Continuer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
