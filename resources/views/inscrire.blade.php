@extends('layout')
@section('content')
        <div class="container mt-5">
            <div class="row col-lg-4 usernameconfirm">
                <div>
                    <h2 style="margin: 0">Terminer L'inscription</h2>
                    <form>
                        <div class="form-group mt-5">
                        <input type="text" class="form-control" id="exampleInput" placeholder="Nom de l'utilisateur">
                        </div>
                        <div class="form-check mt-5">
                            <input type="checkbox" class="form-check-input" id="exampleCheck">
                            <label class="form-check-label" for="exampleCheck">
                                En t’inscrivant, tu confirmes que tu acceptes les <a href="#">Termes et Conditions de La Brocante</a>, avoir lu la <a href="#">Politique de Confidentialité</a> et avoir au moins 18 ans.
                            </label>
                        </div>
                        <button type="submit" style="background-color: #FABC01;color:white" class="btn  mt-5">Continuer</button>
                    </form>
                </div>
            </div>
        </div>

@endsection
