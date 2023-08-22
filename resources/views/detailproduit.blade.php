@extends('layout')
@section('content')
    <div class="ficheproduit">
        <div class="infoproduit">
            <div class="imgproduits"><img src="{{ asset('assets/images/Rectangle19.png') }}" alt="Stage 1" ></div>
            <div class="stage-text">
            <h1>Nom produit</h1>
            <i class="bi bi-heart" style="color:red"></i><i class="bi bi-cart3" style="background-color:#FABC01 "></i>
            <h3>25000F</h3>
            <i class="bi bi-circle"></i><h1>Nom du vendeur</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet provident est, delectus rerum repellat dolor alias maxime pariatur minus veritatis a ex, dolorem perferendis, quibusdam minima. Officia ab nobis modi.</p>
            </div>
        </div>
        <br><br>
        <div class="detailproduit">
            <div class="imagesproduit">
                <i class="bi bi-chevron-left"></i>
                <img src="images/etu.jpg" alt="Stage 1">
                <img src="images/etu.jpg" alt="Stage 1">
                <img src="images/etu.jpg" alt="Stage 1">
                <i class="bi bi-chevron-right"></i>
                <div class="actionproduit">
                    <a href="">Acheter</a>
                    <a href="">Faire une offre</a>
                    <a href="">Message</a>
                </div>
            </div>
            <div class="infocontainer">
                <div>
                    <h5>Marque</h5>
                    <h5>Dimension</h5>
                    <h5>Taille</h5>
                    <h5>Etat</h5>
                    <h5>Matiere</h5>
                    <h5>couleur</h5>
                    <h5>Localisation</h5>
                    <h5>Personne interessée</h5>
                    <h5>Ajoutée il y  a</h5>
                </div>
                <div>
                    <h6>--------</h6>
                    <h6>------</h6>
                    <h6>--------</h6>
                    <h6>------</h6>
                    <h6>--------</h6>
                    <h6>------</h6>
                    <h6>--------</h6>
                    <h6>------</h6>
                    <h6>--------</h6>
                    <h6>------</h6>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 5rem;">
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
    @include('footer')
@endsection
