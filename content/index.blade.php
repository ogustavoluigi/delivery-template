@extends('template.'.config('settings.template').'.content.layout')
@section('content')
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{storage('assets/home/slide-image-5.png')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{storage('assets/home/slide-image-5.png')}}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container mt-3 pb-5">
        <div class="row">
            <div class="col-7">
                <div id="bolos-cafe-section" class="pt-5">
                    <h3 class="py-2">Bolos para Café</h3>
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img src="{{storage('assets/list/churros.jpg')}}" class="img-fluid rounded-start">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Churros da Vovó</h5>
                                    <p class="card-text">1 unidade de 25 cm de um delicioso churros com o recheio a sua escolha.</p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card-body">
                                    <span>R$15,00</span>
                                    <button class="btn btn-primary">Comprar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img src="{{storage('assets/list/churros.jpg')}}" class="img-fluid rounded-start">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Churros da Vovó</h5>
                                    <p class="card-text">1 unidade de 25 cm de um delicioso churros com o recheio a sua escolha.</p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card-body">
                                    <span>R$15,00</span>
                                    <button class="btn btn-primary">Comprar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="bolos-gelados-section" class="pt-5">
                    <h3 class="py-2">Bolos Gelados</h3>
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img src="{{storage('assets/list/churros.jpg')}}" class="img-fluid h-100 rounded-start">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Tri-Delícia</h5>
                                    <p class="card-text">1 unidade de 25 cm de um delicioso churros com o recheio a sua escolha.</p>
                                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card-body">
                                    <span>R$15,00</span>
                                    <button class="btn btn-primary">Comprar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img src="{{storage('assets/list/churros.jpg')}}" class="img-fluid h-100 rounded-start">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Fubá e Morango</h5>
                                    <p class="card-text">1 unidade de 25 cm de um delicioso churros com o recheio a sua escolha.</p>
                                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card-body">
                                    <span>R$15,00</span>
                                    <button class="btn btn-primary">Comprar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img src="{{storage('assets/list/churros.jpg')}}" class="img-fluid h-100 rounded-start">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Pudim de Brigadeiro</h5>
                                    <p class="card-text">1 unidade de 25 cm de um delicioso churros com o recheio a sua escolha.</p>
                                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card-body">
                                    <span>R$15,00</span>
                                    <button class="btn btn-primary">Comprar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pudim-section" class="pt-5">
                    <h3 class="py-2">Pudim</h3>
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img src="{{storage('assets/list/churros.jpg')}}" class="img-fluid h-100 rounded-start">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Fubá e Morango</h5>
                                    <p class="card-text">1 unidade de 25 cm de um delicioso churros com o recheio a sua escolha.</p>
                                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card-body">
                                    <span>R$15,00</span>
                                    <button class="btn btn-primary">Comprar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img src="{{storage('assets/list/churros.jpg')}}" class="img-fluid h-100 rounded-start">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Pudim de Brigadeiro</h5>
                                    <p class="card-text">1 unidade de 25 cm de um delicioso churros com o recheio a sua escolha.</p>
                                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card-body">
                                    <span>R$15,00</span>
                                    <button class="btn btn-primary">Comprar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 mt-5 offset-1">
                <div class="card sticky-top overflow-hidden" style="top: 100px;">
                    <h6 class="bg-primary text-light px-3 py-2">Carrinho</h6>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Churros da Vovó</td>
                                <td>R$15.00</td>
                                <td class="text-end">
                                    <svg style="fill: #dc3545;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                    </svg>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop