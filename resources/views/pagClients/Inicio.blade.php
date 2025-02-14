<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('/css/StylePages.css')}}">
    <title>Document</title>
</head>
<body id="body">

    {{-- HEADER --}}
    <div >
        @include("components.clients-component.header")
    </div>
<br>
    {{-- CARRUSEL --}}
    <div class="card text-bg-dark" id="sombras">
        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">

            {{-- INDICADOR DEL TAMAÑO DE ELEMENTOS DEL CARRUSEL --}}
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
            </div>
    
            {{-- ELEMENTOS DEL CARRUSEL
            LAS IMAGENES SON DE TAMAÑO 3000x600 --}}
            <div class="carousel-inner">
                <div class="carousel-item active ms-2">
                    <img src="{{url('/img/carrusel1.webp')}}" height="300" alt=""> 
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Example headline.</h1>
                            <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                        </div>
                    </div>
                </div>
    
    
                <div class="carousel-item ms-2">
                    <img src="{{url('/img/carrusel2.jpg')}}" height="300" alt="">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Some representative placeholder content for the second slide of the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                        </div>
                    </div>
                </div>
    
    
                <div class="carousel-item ms-2">
                    <img src="{{url('/img/carrusel3.png')}}" height="300" alt="">            
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>One more for good measure.</h1>
                            <p>Some representative placeholder content for the third slide of this carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
    
                {{-- BOTONES DE PREVIO Y SIGUIENTE --}}
    
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

<hr>

    {{-- SECCIÓN DE TIENDA --}}
    <div class="card text-bg-dark" id="sombras">
        <div class="text-center">
            <div class="card-body">
                <div class="row me-2">
                    <div class="col-10">
                        <div class="row ms-1">
                            {{-- CARTAS DE PRODUCTOS EN VENTA --}}
                 {{-- 1 --}}<div class="col-2">
                                <div class="card" style="width: 12rem; height:20rem">
                                    <img src="{{url('/img/electrodomesticos.jpg')}}" height="160rem"  alt="">
                                    <div class="card-body">
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                  </div>
                            </div>

                {{-- 2 --}}<div class="col-2">
                                <div class="card" style="width: 12rem; height:20rem">
                                    <img src="{{url('/img/electronica.jpg')}}" height="160rem"  alt="">
                                    <div class="card-body">
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>

                {{-- 3 --}}<div class="col-2">
                                <div class="card" style="width: 12rem; height:20rem">
                                    <img src="{{url('/img/herramientas.jpg')}}" height="160rem"  alt="">
                                    <div class="card-body">
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                  </div>
                            </div>

                {{-- 4 --}}<div class="col-2">
                                <div class="card" style="width: 12rem; height:20rem">
                                    <img src="{{url('/img/electronica.jpg')}}" height="160rem"  alt="">
                                    <div class="card-body">
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                  </div>
                            </div>

                {{-- 5 --}}<div class="col-2">
                                <div class="card" style="width: 12rem; height:20rem">
                                    <img src="{{url('/img/Electrodomesticos.jpg')}}" height="160rem"  alt="">
                                    <div class="card-body">
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                  </div>
                            </div>

                {{-- 6 --}}<div class="col-2">
                                <div class="card" style="width: 12rem; height:20rem">
                                    <img src="{{url('/img/electronica.jpg')}}" height="160rem"  alt="">
                                    <div class="card-body">
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-2">
                        <div class="text-center mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Tienda</h5>
                                <p class="card-text">Productos, Promociones y más</p>
                                <a href="/Tienda" class="btn btn-primary">ir</a>
                            </div>
                        </div>
                    </div> 
                </div> 
            </div>
        </div>
    </div>

<hr>

    {{-- SERVICIOS --}}
    <div class="card text-bg-dark" id="sombras">
        <div class="text-center">
            <div class="card-body">
                <div class="row me-2">
                    <div class="col-6 mx-1 my-1">
                        <div class="text-center mb-3" style="width: 18rem;">
                            <div class="card-body">
                                <img src="{{url('/img/Reparacion.jpg')}}" height="400rem"  id="opacidad">
                            </div>
                        </div>
                    </div>
                    <div class="col-5 border-start" id="sombrasizquierda">
                        <div class="mb-4" style="width: 40rem;">
                            <div class="card-body">
                                <h5 class="card-title">CON EXPERIENCIA EN MANTENIMIENTO, REPARACIÓN E INSTALACIÓN</h5>
                                <hr>
                                <p class="card-text">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque 
                                    dolore repellendus cumque maiores atque! Delectus cumque labore tempora dicta, quisquam 
                                    explicabo! Rerum iusto voluptas quo repellat dolorum, soluta perferendis id?
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque 
                                    dolore repellendus cumque maiores atque! Delectus cumque labore tempora dicta, quisquam 
                                    explicabo! Rerum iusto voluptas quo repellat dolorum, soluta perferendis id?
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque 
                                    dolore repellendus cumque maiores atque! Delectus cumque labore tempora dicta, quisquam 
                                    explicabo! Rerum iusto voluptas quo repellat dolorum, soluta perferendis id?
                                </p>
                                <a href="#" class="btn btn-primary">Servicios</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<hr>

    {{-- DONDE NOS ENCONTRAMOS --}}
    <div class="card text-bg-dark" id="sombras">
        <div class="card text-center text-bg-dark">
            <div class="card-header">
                <h3>¿DONDE NOS ENCONTRAMOS?</h3>
            </div>
            <div class="card-body">
                <div class="row me-1">
                    <img src="{{url('/img/mapa.png')}}" height="300" alt=""> 
                </div>    
                <div class="mt-1">
                    2 de Abril 105, Los Pinos, 93557 Gutiérrez Zamora, Ver.
                </div>                           
            </div>
        </div>
    </div>
    
<hr>

    {{-- PRINCIPALES CLIENTES --}}
    <div class="text-center" id="sombras">
        <div class="card-body py-4">
            <div class="row me-2">
                <div class="col-10">
                    <div class="row">

                        <div class="col-2">
                            <div class="card" style="width: 12rem; height:20rem">
                                <img src="{{url('/img/cliente1.png')}}" height="160rem"  alt="">
                                <div class="card-body">
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="card" style="width: 12rem; height:20rem">
                                <img src="{{url('/img/cliente2.jpg')}}" height="160rem"  alt="">
                                <div class="card-body">
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="card" style="width: 12rem; height:20rem">
                                <img src="{{url('/img/cliente3.png')}}" height="160rem"  alt="">
                                <div class="card-body">
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="card" style="width: 12rem; height:20rem">
                                <img src="{{url('/img/cliente4.jpg')}}" height="160rem"  alt="">
                                <div class="card-body">
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="card" style="width: 12rem; height:20rem">
                                <img src="{{url('/img/cliente5.png')}}" height="160rem"  alt="">
                                <div class="card-body">
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="card" style="width: 12rem; height:20rem">
                                <img src="{{url('/img/cliente6.png')}}" height="160rem"  alt="">
                                <div class="card-body">
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                              </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-2">
                    <div class="text-center mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Contactanos</h5>
                            <p class="card-text"> </p>
                            <a href="#" class="btn btn-primary">ir</a>
                        </div>
                    </div>
                </div> 
            </div> 
        </div>
    </div>

<hr>

    {{-- FOOTER --}}
    <div>
        @include("components.clients-component.footer ")
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</body>
</html>


