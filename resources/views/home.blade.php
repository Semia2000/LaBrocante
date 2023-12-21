@extends('layout')
@section('content')
    <div  class="bg-image" style="position: relative;">
        <div id="intro-example">
             <img src="{{ asset('assets/images/Rectangle19.png') }}" alt="">
        </div>
        <div class="mask p-5 text-center" style="background-color: rgba(0, 0, 0, 0.7);">
            <div class="d-flex">
                <div class="text-white">
                    <h1 class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                    <a href="" class="liens">Vendre un article</a>
                    <a href="" class="liens">Acheter un article</a>
                </div>
            </div>
        </div>
    </div>
    <div class="produits">
        <div class="container">
            <h1><b>Récemment Ajoutés</b></h1>
            <div class="line"></div>
            <br>
            <div class="mt-3 grid-container">
                <div class="produit">
                    <div class="square">
                        <a href="{{ route('detailproduit') }}"><img src="{{ asset('assets/images/image5.png') }}" alt="reussite 1"></a>
                    </div>
                    <div class="d-flex justify-content-between  info">
                        <h1>Nom produit &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-heart" style="color:#D84545;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
                <div class="produit">
                    <div class="square">
                         <a href=""><img src="{{ asset('assets/images/image6.jpg') }}" alt="reussite 1"></a>
                    </div>
                    <div class="d-flex justify-content-between  info">
                        <h1>Nom produit &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-heart" style="color:#D84545;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
                <div class="produit">
                    <div class="square">
                         <a href=""><img src="{{ asset('assets/images/image7.jpg') }}" alt="reussite 1"></a>
                    </div>
                    <div class="d-flex justify-content-between  info">
                        <h1>Nom produit &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-heart" style="color:#D84545;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
                <div class="produit">
                    <div class="square">
                         <a href=""><img src="{{ asset('assets/images/image4.png') }}" alt="reussite 1"></a>
                    </div>
                    <div class="d-flex justify-content-between  info">
                        <h1>Nom produit &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-heart" style="color:#D84545;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
                <div class="produit">
                    <div class="square">
                         <a href=""><img src="{{ asset('assets/images/image10.png') }}" alt="reussite 1"></a>
                    </div>
                    <div class="d-flex justify-content-between  info">
                        <h1>Nom produit &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-heart" style="color:#D84545;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h1><b>Articles Populaires</b></h1>
            <div class="line"></div>
            <br>
            <div class="grid-container ">
                <div class="produit">
                    <div class="square">
                        <a href="{{ route('detailproduit') }}"><img src="{{ asset('assets/images/image5.png') }}" alt="reussite 1"></a>
                    </div>
                    <div class="d-flex justify-content-between  info">
                        <h1>Nom produit &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-heart" style="color:#D84545;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
                <div class="produit">
                    <div class="square">
                         <a href=""><img src="{{ asset('assets/images/image6.jpg') }}" alt="reussite 1"></a>
                    </div>
                    <div class="d-flex justify-content-between  info">
                        <h1>Nom produit &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-heart" style="color:#D84545;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
                <div class="produit">
                    <div class="square">
                         <a href=""><img src="{{ asset('assets/images/image7.jpg') }}" alt="reussite 1"></a>
                    </div>
                    <div class="d-flex justify-content-between  info">
                        <h1>Nom produit &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-heart" style="color:#D84545;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
                <div class="produit">
                    <div class="square">
                         <a href=""><img src="{{ asset('assets/images/image4.png') }}" alt="reussite 1"></a>
                    </div>
                    <div class="d-flex justify-content-between  info">
                        <h1>Nom produit &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-heart" style="color:#D84545;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
                <div class="produit">
                    <div class="square">
                         <a href=""><img src="{{ asset('assets/images/image10.png') }}" alt="reussite 1"></a>
                    </div>
                    <div class="d-flex justify-content-between  info">
                        <h1>Nom produit &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-heart" style="color:#D84545;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h1><b>Suggestions de recherche</b></h1>
            <div class="line"></div>
            <br>
            <div class="row" style="margin-left: 1%">
                <div class="col -xs -4 col -sm -3 col -md -2  suggestion">Hommes</div>
                <div class="col -xs -4 col -sm -3 col -md -2  suggestion">Femmes</div>
                <div class="col -xs -4 col -sm -3 col -md -2  suggestion">Enfants</div>
                <div class="col -xs -4 col -sm -3 col -md -2  suggestion">Divertissements</div>
                <div class="col -xs -4 col -sm -3 col -md -2  suggestion">Accessoires</div>
                <div class="col -xs -4 col -sm -3 col -md -2  suggestion">Toutes les catégories</div>
            </div>
        </div>
        <div class="container">
            <h1><b>Fil d'actualité</b></h1>
            <div class="line"></div>
            <br>
            <div class="grid-container ">
                <div class="produit">
                    <div class="square">
                        <a href="{{ route('detailproduit') }}"><img src="{{ asset('assets/images/image10.png') }}" alt="reussite 1"></a>
                    </div>
                    <div class="d-flex justify-content-between  info">
                        <h1>Nom produit &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-heart" style="color:#D84545;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
                <div class="produit">
                    <div class="square">
                         <a href=""><img src="{{ asset('assets/images/image2.jpg') }}" alt="reussite 1"></a>
                    </div>
                    <div class="d-flex justify-content-between  info">
                        <h1>Nom produit &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-heart" style="color:#D84545;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
                <div class="produit">
                    <div class="square">
                         <a href=""><img src="{{ asset('assets/images/image7.jpg') }}" alt="reussite 1"></a>
                    </div>
                    <div class="d-flex justify-content-between  info">
                        <h1>Nom produit &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-heart" style="color:#D84545;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
                <div class="produit">
                    <div class="square">
                         <a href=""><img src="{{ asset('assets/images/image4.png') }}" alt="reussite 1"></a>
                    </div>
                    <div class="d-flex justify-content-between  info">
                        <h1>Nom produit &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-heart" style="color:#D84545;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
                <div class="produit">
                    <div class="square">
                         <a href=""><img src="{{ asset('assets/images/image10.png') }}" alt="reussite 1"></a>
                    </div>
                    <div class="d-flex justify-content-between  info">
                        <h1>Nom produit &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-heart" style="color:#D84545;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
            </div>
            <div class="grid-container ">
                <div class="produit">
                    <div class="square">
                        <a href="{{ route('detailproduit') }}"><img src="{{ asset('assets/images/image5.png') }}" alt="reussite 1"></a>
                    </div>
                    <div class="d-flex justify-content-between  info">
                        <h1>Nom produit &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-heart" style="color:#D84545;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
                <div class="produit">
                    <div class="square">
                         <a href=""><img src="{{ asset('assets/images/image6.jpg') }}" alt="reussite 1"></a>
                    </div>
                    <div class="d-flex justify-content-between  info">
                        <h1>Nom produit &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-heart" style="color:#D84545;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
                <div class="produit">
                    <div class="square">
                         <a href=""><img src="{{ asset('assets/images/image7.jpg') }}" alt="reussite 1"></a>
                    </div>
                    <div class="d-flex justify-content-between  info">
                        <h1>Nom produit &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-heart" style="color:#D84545;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
                <div class="produit">
                    <div class="square">
                         <a href=""><img src="{{ asset('assets/images/image4.png') }}" alt="reussite 1"></a>
                    </div>
                    <div class="d-flex justify-content-between  info">
                        <h1>Nom produit &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-heart" style="color:#D84545;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
                <div class="produit">
                    <div class="square">
                         <a href=""><img src="{{ asset('assets/images/image10.png') }}" alt="reussite 1"></a>
                    </div>
                    <div class="d-flex justify-content-between  info">
                        <h1>Nom produit &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-heart" style="color:#D84545;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
            </div>
            <div class="grid-container ">
                <div class="produit">
                    <div class="square">
                        <a href="{{ route('detailproduit') }}"><img src="{{ asset('assets/images/image1.jpg') }}" alt="reussite 1"></a>
                    </div>
                    <div class="d-flex justify-content-between  info">
                        <h1>Nom produit &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-heart" style="color:#D84545;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
                <div class="produit">
                    <div class="square">
                         <a href=""><img src="{{ asset('assets/images/image2.jpg') }}" alt="reussite 1"></a>
                    </div>
                    <div class="d-flex justify-content-between  info">
                        <h1>Nom produit &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-heart" style="color:#D84545;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
                <div class="produit">
                    <div class="square">
                         <a href=""><img src="{{ asset('assets/images/image4.png') }}" alt="reussite 1"></a>
                    </div>
                    <div class="d-flex justify-content-between  info">
                        <h1>Nom produit &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-heart" style="color:#D84545;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
                <div class="produit">
                    <div class="square">
                         <a href=""><img src="{{ asset('assets/images/image4.png') }}" alt="reussite 1"></a>
                    </div>
                    <div class="d-flex justify-content-between  info">
                        <h1>Nom produit &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-heart" style="color:#D84545;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
                <div class="produit">
                    <div class="square">
                         <a href=""><img src="{{ asset('assets/images/image10.png') }}" alt="reussite 1"></a>
                    </div>
                    <div class="d-flex justify-content-between  info">
                        <h1>Nom produit &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-heart" style="color:#D84545;"></i></h1>
                        <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                class="bi bi-cart-dash-fill"></i></h3>
                        <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                            vendeur</h1>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="seemore">
        <a href="" class="liens">Voir plus</a>
    </div>
    @include('footer')
@endsection
