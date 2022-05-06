<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">


    <script src="https://kit.fontawesome.com/6f3ed928aa.js" crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg  navbar-light bg-light sticky-top navbar_color">
        <div class="container-fluid navbar_color">
            <a class="navbar-brand fs-3" href="#"><img src="/storage/imges/logo1Colonia.jpeg" class="img-fluid alt" ..."" width="50%"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item" style="font-family: 'Cookie', cursive;">
                        <a class="nav-link fs-4" href="/">
                            <font style="color:palevioletred" size="7">Inicio</font>
                        </a>
                    </li>
                    <li class="nav-item" style="font-family: 'Cookie', cursive;">
                        <a class="nav-link fs-4" href="#marcas">
                            <font style="color:palevioletred" size="7">Nuestros Productos</font>
                        </a>
                    </li>

                    <li class="nav-item" style="font-family: 'Cookie', cursive;">
                        <a class="nav-link fs-4" href="#acerca">
                            <font style="color:palevioletred" size="7">Acerca de nosotros</font>
                        </a>
                    </li>

                </ul>
                <form class="d-flex">
                    @if(!session()->has('admin'))
                    <a class="nav-link nav-item fs-6" href="/login">Iniciar Sesion</a>
                    @endif
                    @if(session()->has('admin'))
                    <a href="/admin" class="d-flex justify-content-center align-items-center">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <i class="fas fa-user log_in"></i>
                        <div class="nav-link nav-item fs-6"><font color="black">Mi perfil</font></div>
                    </div>
                    </a>
                    

            </div>

            @endif
            </form>
        </div>
        </div>

    </nav>

    <div class="icon-bar">
        <a href='https://www.facebook.com/La-Colonia-Café-1536076943316157' class='facebook socialbar' target='_blank'>
            Visitanos!!! <i class=" fab fa-facebook-square"></i>
        </a>
        <a href='#' class='whatsapp socialbar' target='_blank'>
            Visitanos!!!<i class="fab fa-whatsapp-square"></i>
        </a>
        <a href='https://www.instagram.com/lacolonia_cafe/' class='instagram socialbar' target='_blank'>
            Visitanos!!!<i class="fab fa-instagram"></i>
        </a>
 
    </div>