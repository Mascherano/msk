<div id="carousel-contacto" class="carousel slide carousel-fade" data-ride="carousel" data-pause="false">
    <div class="container tm-banner-text-container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-right">Lorem ipsum dolor sit amet</h1>
                <h2 class="text-right">consectetur adipiscing elit</h2>
                <p class="text-right text-white">Morbi sagittis, ex vel pharetra tincidunt, mauris urna pretium sapien,
                tincidunt porta risus dolor sed tortor. Fusce sollicitudin id turpis quis dictum.</p>
            </div>
            <div class="col-md-6 d-flex justify-content-center">

                <form class="p-4 w-75" action={{route('contact')}} method="POST">
                    {{ csrf_field() }}
                    <div class='signup rounded'>
                        <h5 class="text-center font-weight-light mb-4">¿Quieres saber más acerca de esta tecnología?</h5>
                        <input name="nombre" class="form-control form-control-sm semi-transparent mb-2" type='text' placeholder='Nombre:' required />
                        <input name="email" class="form-control form-control-sm semi-transparent mb-2" type='text' placeholder='Correo:' required/>
                        <input name="telefono" class="form-control form-control-sm semi-transparent mb-2" type='text' placeholder='Teléfono:' required/>
                        <input class="form-control-sm btn btn-red" id="btn-contact" type='submit' placeholder='Enviar' />
                    </div>
                    <div id="nuestros-servicios" ></div>

                </form>

            </div>
        </div>
    </div>
    <div class="overlay"></div>
    <div class="carousel-inner">
        <div class="carousel-item active slide-1"></div>
        <div class="carousel-item slide-2"></div>
        <div class="carousel-item slide-3"></div>
    </div>
</div>

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->
<section class="servicios py-5 text-center">
    <div class="container text-center">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="brdr-btm-red font-weight-bold">Nuestros Servicios</h2>
            </div>
        </div>
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-md-6 mt-3 mb-4 flip-card">
                <div class="flip-card-inner">
                    <div class="container bg-red p-4 flip-card-front">
                        <h2><i class="fa fa-truck fa-5x m-2 font-size-large" style="color:#fff"></i></h2>
                        <h1 class="bg-darkred text-center m-0 p-0">Transporte</h1>
                    </div>
                    <div class="container bg-red pt-2 flip-card-back">
                        <h2 class="bg-darkred text-center m-2">Transporte</h2>
                        <div class="row">
                            <div class="col-12 text-left m-2">
                                <ul class="lista texto-carta">
                                    <li><i class="fa fa-check mr-2"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li><i class="fa fa-check mr-2"></i>Quisque commodo mauris eu accumsan placerat.</li>
                                    <li><i class="fa fa-check mr-2"></i>Pellentesque faucibus ante vel sem semper, quis eleifend mauris facilisis.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-3 mb-4 flip-card">
                <div class="flip-card-inner">
                    <div class="container bg-red p-4 flip-card-front">
                        <h2><i class="fas fa-truck-loading fa-5x m-2" style="color:#fff"></i></h2>
                        <h1 class="bg-darkred text-center m-0 p-0">Mudanza</h1>
                    </div>
                    <div class="container bg-red pt-2 flip-card-back">
                        <h2 class="bg-darkred text-center m-2">Mudanza</h2>
                        <div class="row">
                            <div class="col-12 text-left m-2">
                                <ul class="lista texto-carta">
                                    <li><i class="fa fa-check mr-2"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li><i class="fa fa-check mr-2"></i>Quisque commodo mauris eu accumsan placerat.</li>
                                    <li><i class="fa fa-check mr-2"></i>Pellentesque faucibus ante vel sem semper, quis eleifend mauris facilisis.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- START THE FEATURETTES -->
<div class="container mt-5">
    <div id="galeria"></div>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dictum sed lorem vel pellentesque. Lorem ipsum
    dolor sit amet, consectetur adipiscing elit. Donec tincidunt semper sapien ac ultrices. Sed eros nunc, sagittis
    at scelerisque eu, imperdiet eu libero. Nam et vulputate quam. Maecenas dictum lectus magna, a commodo augue
    varius vitae. Phasellus auctor sodales mauris, nec volutpat nisl porta a. Maecenas at magna pellentesque,
    elementum eros nec, blandit lacus. Nam laoreet, sem nec ultricies mattis, libero purus rutrum purus, et tempus
    ipsum est eget lacus. Quisque lectus tellus, blandit id arcu a, laoreet mattis sem. Donec scelerisque dolor a
    purus laoreet ultrices. Nam maximus dignissim est a aliquet. Suspendisse quis varius purus. Fusce tristique
    faucibus mattis. Proin a volutpat velit. Aenean varius ante sit amet lacus elementum congue.</p>
</div>

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-3 m-0 p-0 imagen-banda-1">
            <a href="#" data-toggle="modal" data-target="#imagen1"><div class="click-layer"></div></a>
        </div>
        <div class="col-3 m-0 p-0 imagen-banda-2">
            <a href="#" data-toggle="modal" data-target="#imagen2"><div class="click-layer"></div></a>
        </div>
        <div class="col-3 m-0 p-0 imagen-banda-3">
            <a href="#" data-toggle="modal" data-target="#imagen3"><div class="click-layer"></div></a>
        </div>
        <div class="col-3 m-0 p-0 imagen-banda-4">
            <a href="#" data-toggle="modal" data-target="#imagen4"><div class="click-layer"></div></a>
        </div>
    </div>
</div>


<div class="modal fade" id="imagen1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">          
            <!-- Modal body -->
            <div class="modal-body">
                <img src="{{asset("assets/$theme/images/siete.jpeg")}}" class="img-fluid">
            </div>
        </div>          
    </div>
</div>


<div class="modal fade" id="imagen2">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">          
            <!-- Modal body -->
            <div class="modal-body">
                <img src="{{asset("assets/$theme/images/9.jpeg")}}" class="img-fluid">
            </div>
        </div>          
    </div>
</div>

<div class="modal fade" id="imagen3">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">          
            <!-- Modal body -->
            <div class="modal-body">
                <img src="{{asset("assets/$theme/images/11.jpeg")}}" class="img-fluid">
            </div>
        </div>          
    </div>
</div>

<div class="modal fade" id="imagen4">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">          
            <!-- Modal body -->
            <div class="modal-body">
                <img src="{{asset("assets/$theme/images/10.jpeg")}}" class="img-fluid">
            </div>
        </div>          
    </div>
</div>


<div class="container mt-5">
    <div class="row">
        <div class="col-4 back-persona"></div>
        <div class="col-8">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dictum sed lorem vel pellentesque. Lorem ipsum
            dolor sit amet, consectetur adipiscing elit. Donec tincidunt semper sapien ac ultrices. Sed eros nunc,
            sagittis
            at scelerisque eu, imperdiet eu libero. Nam et vulputate quam. Maecenas dictum lectus magna, a commodo augue
            varius vitae. Phasellus auctor sodales mauris, nec volutpat nisl porta a. Maecenas at magna pellentesque,
            elementum eros nec, blandit lacus. Nam laoreet, sem nec ultricies mattis, libero purus rutrum purus, et
            tempus
            ipsum est eget lacus. Quisque lectus tellus, blandit id arcu a, laoreet mattis sem. Donec scelerisque dolor
            a
            purus laoreet ultrices. Nam maximus dignissim est a aliquet. Suspendisse quis varius purus. Fusce tristique
            faucibus mattis. Proin a volutpat velit. Aenean varius ante sit amet lacus elementum congue.</p>
        </div>
    </div>
</div>

<div class="row m-0 mt-4">
    <div class="col-6 offset-3">
        <div class="brdr-btm-red"></div>
    </div>
</div>

<div id="carousel-formulario" class="carousel slide carousel-fade mt-4" data-ride="carousel" data-pause="false">
    <div id="form-contacto" class="container tm-banner-text-container-btm">
        <div class="row">
            <div class="col-6">
                <h1 class="text-right">Lorem ipsum dolor sit amet</h1>
                <h2 class="text-right">consectetur adipiscing elit</h2>
                <p class="text-right text-white">Morbi sagittis, ex vel pharetra tincidunt, mauris urna pretium sapien,
                    tincidunt porta risus dolor sed tortor. Fusce sollicitudin id turpis quis dictum.
                </p>
                <div class="container-fluid d-flex justify-content-end m-0 p-0">
                    <ul class="lista-btm text-right">
                        <li><i class="fa fa-phone mr-2 color-rojo"></i>+56 9 9876 5432</li>
                        <li><i class="fa fa-envelope mr-2 color-rojo"></i>contacto@contactame.cl</li>
                    </ul>
                </div>
            </div>
            <div class="col-6 d-flex justify-content-center">
                <form class="p-4 w-75" action={{route('contact')}} method="POST">
                    {{ csrf_field() }}
                    <div class='signup rounded'>
                        <h5 class="text-center font-weight-light mb-4">¿Quieres saber más acerca de esta tecnología?</h5>
                        <input name="nombre" class="form-control form-control-sm semi-transparent mb-2" type='text' placeholder='Nombre:' required />
                        <input name="email" class="form-control form-control-sm semi-transparent mb-2" type='text' placeholder='Correo:' required/>
                        <input name="telefono" class="form-control form-control-sm semi-transparent mb-2" type='text' placeholder='Teléfono:' required/>
                        <input class="form-control-sm btn btn-red" id="btn-contact" type='submit' placeholder='Enviar' />
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="overlay"></div>
    <div class="carousel-inner">
        <div class="carousel-item active slide-1"></div>
    </div>
</div>
