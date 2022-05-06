<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Iconbutton -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/572c61a0b7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('frontend/css/css.css')}}" type="text/css">
    
    <link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css" />

</head>

<body>
    <div class="sidebars">
        <div class="logo-details">
            <i class='fas fa-store icon'></i>
            <div class="logo_name">Tienda</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-lista">
        <li>
                <a href="/admin">
                    <i class='fas fa-home'></i>
                    <span class="links_name">Panel Administrador</span>
                </a>
                <span class="tooltip">Panel Administrador</span>
            </li>
            <li>
                <a href="/">
                    <i class='fas fa-undo-alt'></i>
                    <span class="links_name">Ir a la tienda</span>
                </a>
                <span class="tooltip">Ir a la tienda</span>
            </li>
            <li>
                <a href="/logout">
                <i class="fas fa-reply"></i>
                    <span class="links_name">Cerrar sesion</span>
                </a>
                <span class="tooltip">Cerrar sesion</span>
            </li>
        </ul>
    </div>

    <script>
        let sidebars = document.querySelector(".sidebars");
        let closeBtn = document.querySelector("#btn");
        let searchBtn = document.querySelector(".bx-search");

        closeBtn.addEventListener("click", () => {
            sidebars.classList.toggle("open");
            menuBtnChange();
        });

        searchBtn.addEventListener("click", () => { 
            sidebars.classList.toggle("open");
            menuBtnChange(); 
        });

        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");
            }
        }
    </script>