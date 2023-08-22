@extends('layout')

@section('content')
    <div class="hero">
        <img src="{{ asset('assets/images/Rectangle19.png') }}" class="img-fluid" alt="Image d'arrière-plan">
        <div class="overlay">
            <p><b>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</b></p>
            <a href="">Vendre un article</a>
            <a href="">Acheter un article</a>
        </div>
    </div>
    <section class="produits">
       <div>
        <h1><b>Récemment Ajoutés</b></h1>
        <div class="line"></div>
        <div class="achievements-container">
            <div class="square">
            <img src="{{ asset('assets/images/Rectangle19.png') }}" alt="Réussite 1">
            </div>
            <div class="square">
                <img src="{{ asset('assets/images/Rectangle19.png') }}">
            </div>
            <div class="square">
                <img src="{{ asset('assets/images/Rectangle19.png') }}">
            </div>
            <div class="square">
                <img src="{{ asset('assets/images/Rectangle19.png') }}">
            </div>
            <div class="square">
                <img src="{{ asset('assets/images/Rectangle19.png') }}">
            </div>
        </div>
    </div>
    <div>
        <h1><b>Récemment Ajoutés</b></h1>
        <div class="line"></div>
        <div class="achievements-container">
            <div class="square">
            <img src="images/Rectangle19.png" alt="Réussite 1">
            </div>
            <div class="square">
                <img src="images/Rectangle19.png" alt="Réussite 1">
            </div>
            <div class="square">
                <img src="images/Rectangle19.png" alt="Réussite 1">
            </div>
            <div class="square">
                <img src="images/Rectangle19.png" alt="Réussite 1">
            </div>
            <div class="square">
                <img src="images/Rectangle19.png" alt="Réussite 1">
            </div>
        </div>
    </div>
    <div>
        <h1><b>Articles Populaires</b></h1>
        <div class="line"></div>
        <div class="achievements-container">
            <div class="square">
            <img src="images/Rectangle19.png" alt="Réussite 1">
            </div>
            <div class="square">
                <img src="images/Rectangle19.png" alt="Réussite 1">
            </div>
            <div class="square">
                <img src="images/Rectangle19.png" alt="Réussite 1">
            </div>
            <div class="square">
                <img src="images/Rectangle19.png" alt="Réussite 1">
            </div>
            <div class="square">
                <img src="images/Rectangle19.png" alt="Réussite 1">
            </div>
        </div>
    </div>
    <div>
        <h1><b>Suggestions de recherche</b></h1>
        <div class="line"></div>
        <div class="achievements-container">
            <div class="square">
            <img src="images/Rectangle19.png" alt="Réussite 1">
            </div>
            <div class="square">
                <img src="images/Rectangle19.png" alt="Réussite 1">
            </div>
            <div class="square">
                <img src="images/Rectangle19.png" alt="Réussite 1">
            </div>
            <div class="square">
                <img src="images/Rectangle19.png" alt="Réussite 1">
            </div>
            <div class="square">
                <img src="images/Rectangle19.png" alt="Réussite 1">
            </div>
        </div>
    </div>
    <div>
        <h1><b>Fil d'actualité</b></h1>
        <div class="line"></div>
        <div class="achievements-container">
            <div class="square">
            <img src="images/Rectangle19.png" alt="Réussite 1">
            </div>
            <div class="square">
                <img src="images/Rectangle19.png" alt="Réussite 1">
            </div>
            <div class="square">
                <img src="images/Rectangle19.png" alt="Réussite 1">
            </div>
            <div class="square">
                <img src="images/Rectangle19.png" alt="Réussite 1">
            </div>
            <div class="square">
                <img src="images/Rectangle19.png" alt="Réussite 1">
            </div>
        </div>
    </div>
    </section>


    @include('footer')
@endsection
