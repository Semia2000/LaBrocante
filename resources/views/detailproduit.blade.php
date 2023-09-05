@extends('layout')
@section('content')
    <div class="ficheproduit d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="infoproduit">
                <div class="imgproduits">
                    <img src="{{ asset('assets/images/image11.jpg') }}" alt="Stage 1">
                </div>
                <div class="detailproduit">
                    <h1>Nom produit</h1>
                    <span><i class="bi bi-heart" style="color:#D84545"></i><i class="bi bi-cart-dash-fill"
                            style="color:#FABC01"></i></span>
                    <h3>25000 FCFA</h3>
                    <h1><span class="bi bi-circle" style="color: rgb(194, 190, 190);">&nbsp;&nbsp;&nbsp;</span>Nom du
                        vendeur</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet provident est, delectus rerum repellat
                        dolor alias maxime pariatur minus veritatis a ex, dolorem perferendis, quibusdam minima. Officia ab
                        nobis modi. Lorem ipsum dolor sit amet consectetur adipisicing elit. A unde maiores modi temporibus
                        id nihil excepturi voluptas, tenetur vero. Quod illo nisi ex quaerat atque, impedit sint harum fugit
                        delectus. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet, corporis velit. Nam
                        repudiandae veniam repellendus alias libero itaque. Quo laudantium ducimus labore numquam unde
                        suscipit blanditiis repudiandae nemo id nobis.Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit. Eveniet, corporis velit. Nam repudiandae veniam repellendus alias libero itaque. Quo
                        laudantium ducimus labore numquam unde suscipit blanditiis repudiandae nemo id nobis. </p>
                    <div class="line"></div>
                </div>
            </div>
            <div class="infodetail">
                <div class="imagedetail">
                    <div class="imagesproduit">
                        <i class="bi bi-chevron-left"></i>
                        <img src="{{ asset('assets/images/image5.png') }}" alt="Stage 1" width="200" height="100">
                        <img src="{{ asset('assets/images/image4.png') }}" alt="Stage 1" width="200" height="100">
                        <img src="{{ asset('assets/images/image10.png') }}" alt="Stage 1" width="200" height="100">
                        &nbsp;&nbsp;<i class="bi bi-chevron-right"></i>
                    </div>
                    <div class="actionproduit">
                        <a href="" class="liens">Acheter</a>
                        <a href="" class="liens">Faire une offre</a>
                        <a href="" class="liens">Message</a>
                    </div>
                </div>
                <div class="infocontainer">
                    <div class="info-item">
                        <h5>Marque</h5>
                        <h5>Dimension</h5>
                        <h5>Taille</h5>
                        <h5>Etat</h5>
                        <h5>Matiere</h5>
                        <h5>Couleur</h5>
                        <h5>Localisation</h5>
                        <h5>Personne interessée</h5>
                        <h5>Ajoutée </h5>
                    </div>
                    <div class="dashes">
                        <h5>--------</h5>
                        <h5>----</h5>
                        <h5>--------</h5>
                        <h5>--------</h5>
                        <h5>--------</h5>
                        <h5>-------</h5>
                        <h5>--------</h5>
                        <h5>--------</h5>
                        <h5>il y a -----</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="produits">
        <div class="container">
            <h1><b>Fil d'actualité</b></h1>
            <div class="line"></div>
            <br>
            <div class="grid-container">
                <div class="produit">
                    <div class="square">
                        <img src="{{ asset('assets/images/image2.jpg') }}" alt="reussite 1">
                    </div>
                    <div class="info">
                        <h1>Nom produit &nbsp;<i class="bi bi-heart" style="color:red;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
                <div class="produit">
                    <div class="square">
                        <img src="{{ asset('assets/images/image1.jpg') }}" alt="reussite 1">
                    </div>
                    <div class="info">
                        <h1>Nom produit &nbsp;<i class="bi bi-heart" style="color:red;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
                <div class="produit">
                    <div class="square">
                        <img src="{{ asset('assets/images/image7.png') }}" alt="reussite 1">
                    </div>
                    <div class="info">
                        <h1>Nom produit &nbsp;<i class="bi bi-heart" style="color:red;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
                <div class="produit">
                    <div class="square">
                        <img src="{{ asset('assets/images/image4.png') }}" alt="reussite 1">
                    </div>
                    <div class="info">
                        <h1>Nom produit &nbsp;<i class="bi bi-heart" style="color:red;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
                <div class="produit">
                    <div class="square">
                        <img src="{{ asset('assets/images/image10.png') }}" alt="reussite 1">
                    </div>
                    <div class="info">
                        <h1>Nom produit &nbsp;<i class="bi bi-heart" style="color:red;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
            </div>
            <div class="grid-container">
                <div class="produit">
                    <div class="square">
                        <img src="{{ asset('assets/images/image5.png') }}" alt="reussite 1">
                    </div>
                    <div class="info">
                        <h1>Nom produit &nbsp;<i class="bi bi-heart" style="color:red;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
                <div class="produit">
                    <div class="square">
                        <img src="{{ asset('assets/images/image6.png') }}" alt="reussite 1">
                    </div>
                    <div class="info">
                        <h1>Nom produit &nbsp;<i class="bi bi-heart" style="color:red;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
                <div class="produit">
                    <div class="square">
                        <img src="{{ asset('assets/images/image7.png') }}" alt="reussite 1">
                    </div>
                    <div class="info">
                        <h1>Nom produit &nbsp;<i class="bi bi-heart" style="color:red;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
                <div class="produit">
                    <div class="square">
                        <img src="{{ asset('assets/images/image4.png') }}" alt="reussite 1">
                    </div>
                    <div class="info">
                        <h1>Nom produit &nbsp;<i class="bi bi-heart" style="color:red;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
                <div class="produit">
                    <div class="square">
                        <img src="{{ asset('assets/images/image10.png') }}" alt="reussite 1">
                    </div>
                    <div class="info">
                        <h1>Nom produit &nbsp;<i class="bi bi-heart" style="color:red;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
            </div>
            <div class="grid-container">
                <div class="produit">
                    <div class="square">
                        <img src="{{ asset('assets/images/image5.png') }}" alt="reussite 1">
                    </div>
                    <div class="info">
                        <h1>Nom produit &nbsp;<i class="bi bi-heart" style="color:red;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
                <div class="produit">
                    <div class="square">
                        <img src="{{ asset('assets/images/image6.png') }}" alt="reussite 1">
                    </div>
                    <div class="info">
                        <h1>Nom produit &nbsp;<i class="bi bi-heart" style="color:red;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
                <div class="produit">
                    <div class="square">
                        <img src="{{ asset('assets/images/image7.png') }}" alt="reussite 1">
                    </div>
                    <div class="info">
                        <h1>Nom produit &nbsp;<i class="bi bi-heart" style="color:red;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
                <div class="produit">
                    <div class="square">
                        <img src="{{ asset('assets/images/image4.png') }}" alt="reussite 1">
                    </div>
                    <div class="info">
                        <h1>Nom produit &nbsp;<i class="bi bi-heart" style="color:red;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
                <div class="produit">
                    <div class="square">
                        <img src="{{ asset('assets/images/image10.png') }}" alt="reussite 1">
                    </div>
                    <div class="info">
                        <h1>Nom produit &nbsp;<i class="bi bi-heart" style="color:red;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
@endsection
