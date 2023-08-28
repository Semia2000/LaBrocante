@extends('layout')
@section('content')
        <div class="ficheproduit">
            <div class="infoproduit">
                <div class="imgproduits">
                    <img src="{{ asset('assets/images/ordinateur.jpg') }}" alt="Stage 1" >
                </div>
                <div class="imagedetail">
                    <div class="imagesproduit">
                        <i class="bi bi-chevron-left"></i>&nbsp;&nbsp;
                        <img src="{{ asset('assets/images/ordinateur.jpg') }}" alt="Stage 1" width="200" height="100">
                        <img src="{{ asset('assets/images/ordinateur.jpg') }}" alt="Stage 1" width="200" height="100">
                        <img src="{{ asset('assets/images/ordinateur.jpg') }}" alt="Stage 1" width="200" height="100">
                        &nbsp;&nbsp;<i class="bi bi-chevron-right"></i>
                    </div>
                    <div class="actionproduit">
                        <a href="" class="liens">Acheter</a>
                        <a href="" class="liens">Faire une offre</a>
                        <a href="" class="liens">Message</a>
                    </div>
                </div>
            </div>
            <div class="infodetail">
                <div class="detailproduit">
                    <h1>Nom produit</h1>
                    <span><i class="bi bi-heart" style="color:#D84545"></i><i class="bi bi-cart-dash-fill" style="color:#FABC01" ></i></span>
                    <h3>25000 FCFA</h3>
                    <h1><span class="bi bi-circle" style="color: rgb(194, 190, 190);">&nbsp;&nbsp;&nbsp;</span>Nom du vendeur</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet provident est, delectus rerum repellat dolor alias maxime pariatur minus veritatis a ex, dolorem perferendis, quibusdam minima. Officia ab nobis modi. Lorem ipsum dolor sit amet consectetur adipisicing elit. A unde maiores modi temporibus id nihil excepturi voluptas, tenetur vero. Quod illo nisi ex quaerat atque, impedit sint harum fugit delectus. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet, corporis velit. Nam repudiandae veniam repellendus alias libero itaque. Quo laudantium ducimus labore numquam unde suscipit blanditiis repudiandae nemo id nobis.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet, corporis velit. Nam repudiandae veniam repellendus alias libero itaque. Quo laudantium ducimus labore numquam unde suscipit blanditiis repudiandae nemo id nobis. </p>
                    <div class="line"></div>
                </div>
                <div class="infocontainer">
                    <h5>Marque<span>--------</span></h5>
                    <h5>Dimension<span>--------</span></h5>
                    <h5>Taille<span>--------</span></h5>
                    <h5>Etat<span>--------</span></h5>
                    <h5>Matiere<span>--------</span></h5>
                    <h5>couleur<span>--------</span></h5>
                    <h5>Localisation<span>--------</span></h5>
                    <h5>Personne interessée<span>--------</span></h5>
                    <h5>Ajoutée il y a<span>--------</span></h5>
                </div>
            </div>
        </div>
        <section class="produits">
            <div>
                <h1><b>Fil d'actualité</b></h1>
                <div class="line"></div>
                <br>
                <div class="achievements-container">
                    <div class="produit">
                        <div class="square">
                          <img src="{{ asset('assets/images/Rectangle19.png') }}" alt="reussite 1">
                        </div>
                        <div class="info">
                          <h1>Nom produit &nbsp;&nbsp;;<i class="bi bi-heart" style="color:#D84545;"></i></h1>
                          <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA &nbsp;<i class="bi bi-cart-dash-fill" ></i></h3>
                          <h1><img src="" alt="" class="circle"  style="background-color:#AAAAAA"> Nom du vendeur</h1>
                        </div>
                    </div>
                    <div class="produit">
                        <div class="square">
                        <img src="{{ asset('assets/images/Rectangle19.png') }}" alt="reussite 1">
                        </div>
                        <div class="info">
                        <h1>Nom produit &nbsp;&nbsp;;<i class="bi bi-heart" style="color:red;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA &nbsp;<i class="bi bi-cart-dash-fill" ></i></h3>
                        <h1><img src="" alt="" class="circle"  style="background-color:#AAAAAA"> Nom du vendeur</h1>
                        </div>
                    </div>
                    <div class="produit">
                        <div class="square">
                        <img src="{{ asset('assets/images/Rectangle19.png') }}" alt="reussite 1">
                        </div>
                        <div class="info">
                        <h1>Nom produit &nbsp;&nbsp;;<i class="bi bi-heart" style="color:red;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA &nbsp;<i class="bi bi-cart-dash-fill" ></i></h3>
                        <h1><img src="" alt="" class="circle"  style="background-color:#AAAAAA"> Nom du vendeur</h1>
                        </div>
                    </div>
                    <div class="produit">
                        <div class="square">
                        <img src="{{ asset('assets/images/Rectangle19.png') }}" alt="reussite 1">
                        </div>
                        <div class="info">
                        <h1>Nom produit &nbsp;&nbsp;;<i class="bi bi-heart" style="color:red;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA &nbsp;<i class="bi bi-cart-dash-fill" ></i></h3>
                        <h1><img src="" alt="" class="circle"  style="background-color:#AAAAAA"> Nom du vendeur</h1>
                        </div>
                    </div>
                    <div class="produit">
                        <div class="square">
                        <img src="{{ asset('assets/images/Rectangle19.png') }}" alt="reussite 1">
                        </div>
                        <div class="info">
                        <h1>Nom produit &nbsp;&nbsp;;<i class="bi bi-heart" style="color:red;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA &nbsp;<i class="bi bi-cart-dash-fill" ></i></h3>
                        <h1><img src="" alt="" class="circle"  style="background-color:#AAAAAA"> Nom du vendeur</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br><br><br><br>
    @include('footer')
@endsection
