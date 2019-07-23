<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }} ">
    <meta name="author" content="Sergi Tur Badenas - acacha.org">

    <meta property="og:title" content="Adminlte-laravel" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }}" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org/" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x600.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x314.png" />
    <meta property="og:sitename" content="demo.adminlte.acacha.org" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@acachawiki" />
    <meta name="twitter:creator" content="@acacha1" />

    <title>{{ trans('adminlte_lang::message.landingdescriptionpratt') }}</title>

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/all-landing.css') }}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

<div id="app">
    <!-- Fixed navbar -->
    <div id="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"><b>Compañía de Autos</b></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Iniciar sesión</a></li>
                        <li><a href="{{ url('/register') }}">Registrarse</a></li>
                    @else
                        <li><a href="/home">{{ Auth::user()->name }}</a></li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>


    <section id="home" name="home"></section>
    <div id="headerwrap">
        <div class="container">
            <div class="row centered">
                <div class="col-lg-12">
                    <h1><b>MerCe</b> Compañía de autos</h1>
                   
                    
                </div>
                <div class="col-lg-2">
                    <h5>Autos</h5>
                    <p>Nuestra compañía cuenta con una alta gama de automóviles de último modelo</p>
                    <img class="hidden-xs hidden-sm hidden-md" src="{{ asset('/img/arrow1.png') }}">
                </div>
                <div class="col-lg-8">
                    <img class="img-responsive" src="{{ asset('/img/auto2.jpg') }}" alt="">
                </div>
                <div class="col-lg-2">
                    <br>
                    <img class="hidden-xs hidden-sm hidden-md" src="{{ asset('/img/arrow2.png') }}">
                    <h5>Personal</h5>
                    <p>Nuestro personal esta altamente capacitado para brindar la mejro opción de automóvil de acuerdo a sus necesidades.</p>
                </div>
            </div>
        </div> <!--/ .container -->
    </div><!--/ #headerwrap -->


    <section id="desc" name="desc"></section>
    <!-- INTRO WRAP -->
    <div id="intro">
        <div class="container">
            <div class="row centered">
                <h1>INFORMACIÓN ACERCA DE LA EMPRESA</h1>
                <br>
                <br>
                <div class="col-lg-4">
                    <img src="{{ asset('/img/intro01.png') }}" alt="">
                    <h3>COMUNIDAD</h3>
                    <p>Contamos con alrededor de 50 personas trabajando para pderles brindar una atención de calidad</p>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('/img/intro02.png') }}" alt="">
                    <h3>HORARIO</h3>
                    <p>Nuestro horario de atención es de lunes a sábado de 8:00 am hasta las 5:00 pm.</p>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('/img/intro03.png') }}" alt="">
                    <h3>MONITOREO</h3>
                    <p>Nuestros autos cuentan con una garantía de 5 años y estos estarán en monitoreo por nuestros mecánicos.</p>
                </div>
            </div>
            <br>
            <hr>
        </div> <!--/ .container -->
    </div><!--/ #introwrap -->

    <!-- FEATURES WRAP -->
    <div id="features">
        <div class="container">
            <div class="row">
                <h1 class="centered">Me gustaría saber</h1>
                <br>
                <br>
                <div class="col-lg-6 centered">
                    <img class="centered" src="{{ asset('/img/auto.jpg') }}" alt="">
                </div>

                <div class="col-lg-6">
                    <h3>Somos la nueva generación de autos</h3>
                    <br>
                    <!-- ACCORDION -->
                    <div class="accordion ac" id="accordion2">
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                   Filosofía
                                </a>
                            </div><!-- /accordion-heading -->
                            <div id="collapseOne" class="accordion-body collapse in">
                                <div class="accordion-inner">
                                    <p> Vemos en "El poder de los Sueños" una manera de ensar que nos guía e impulsa. La fortaleza de nuestra compañía nace de esta filosofía. Cada individuo involucrado con MerCe está inspirado para soñar libremente y perseguir metas sin miedo a alcanzarlas. Así, hacemos nuestro trabajo diario impulsados con el motor más genuino que existe: la felicidad del ser humano.</p>
                                </div><!-- /accordion-inner -->
                            </div><!-- /collapse -->
                        </div><!-- /accordion-group -->
                        <br>

                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                    Misión
                                </a>
                            </div>
                            <div id="collapseTwo" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>
                                        Manteniendo un punto de vista global, estamos dedicados a la provisión de productos de la máxima calidad, a un precio razonable, para la satisfacción del cliente a través del mundo.                                      

                                    </p>
                                </div><!-- /accordion-inner -->
                            </div><!-- /collapse -->
                        </div><!-- /accordion-group -->
                        <br>

                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                   Visión
                                </a>
                            </div>
                            <div id="collapseThree" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>
                                        Convertirnos en una compañía que la sociedad quiera que exista.</p>
                                </div><!-- /accordion-inner -->
                            </div><!-- /collapse -->
                        </div><!-- /accordion-group -->
                        <br>

                        <br>
                    </div><!-- Accordion -->
                </div>
            </div>
        </div><!--/ .container -->
    </div><!--/ #features -->


    <section id="showcase" name="showcase"></section>
    <div id="showcase">
        <div class="container">
            <div class="row">
                <h1 class="centered">ALGUNOS DE NUESTROS AUTOS</h1>
                <br>
                <div class="col-lg-8 col-lg-offset-2">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{ asset('/img/auto3.png') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('/img/auto5.jpeg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
        </div><!-- /container -->
    </div>


    <section id="contact" name="contact"></section>
    <div id="footerwrap">
        <div class="container">
            <div class="col-lg-5">
                <h3>Dirección</h3>
                <p>
                    San Bartolo-San Rafael,<br/>
                    Calceta,<br/>
                    90873<br/>
                    Ecuador
                </p>
            </div>

            <div class="col-lg-7">
                <h3>Sugerencias</h3>
                <br>
                <form role="form" action="#" method="post" enctype="plain">
                    <div class="form-group">
                        <label for="name1">Nombre</label>
                        <input type="name" name="Name" class="form-control" id="name1" placeholder="Ingresar nombre">
                    </div>
                    <div class="form-group">
                        <label for="email1">Dirección E-mail</label>
                        <input type="email" name="Mail" class="form-control" id="email1" placeholder="Ingresar E-mail">
                    </div>
                    <div class="form-group">
                        <label>Texto</label>
                        <textarea class="form-control" name="Message" rows="3"></textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-large btn-success">{{ trans('adminlte_lang::message.submit') }}</button>
                </form>
            </div>
        </div>
    </div>
    <div id="c">
        <div class="container">
            <p>
               <strong>Copyright &copy; 2019 <a href="#">MerCe.org</a>.</strong> Creado por<a href="#"> Mercedes Bravo Meza</a> 
                <br/>
                mercybravobsc@hotmail.com
                <br/>
                 Calceta-Manabí-Ecuador
            </p>

        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('/js/app.js') }}"></script>
<script src="{{ asset('/js/smoothscroll.js') }}"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>
