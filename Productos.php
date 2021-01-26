<!DOCTYPE html>
<html lang="es">
<head>
    <title>MilkShake - Tu Sabor Favorito Hecho Malteada</title>
    <meta charset="UTF-8">
    <!-- Estas son importantes para que los navegadores nos encuentre por palabras claves -->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Renombramos el archivo .ico para que el servidor lo identifique favicon.ico -->
    <link rel="icon" href="favicon2.ico">
    <!-- Aqui llamamos los estilos tanto del Bootstrap como  propios -->
    <link rel="stylesheet" href="./css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/bootstrap.css">    
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/responsiveslides.css">
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" type="text/css" href="https://csshake.surge.sh/csshake.min.css">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css"/>  
     <!-- Social bar -->
     <link rel="stylesheet" href="fonticon.css">
  <link rel="stylesheet" href="mainicon.css"> 
  <link rel="stylesheet" href="css/whatsapp.css"> 
        <!-- Javascripts de Bootstrap y ajenos -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/responsiveslides.min.js"></script>
              <!-- SCROOLL REVEAL JS LIBRARY CDN -->
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    

</head>
<body class="bg-dark">
<!-- Desarrollo un solo Header y lo incluyo a las demas paginas -->
<?php include("php/header.php"); ?>
<!-- whatsapp -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://wa.me/573116920160" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
<div  class="clearfix"></div>
    <div  class="container">
        <p>
            <h1 style = "font-family: 'Quicksand', sans-serif; "  class="text-center text-light">Productos</h1>
        </p> 
        <div class="card-deck">
            <div class="card text-center ">
                <div class="carousel-inner">
                            <div class="carousel-item active">
                        <img class="d-block w-100" src="img/burbuja.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                        <img class="d-block w-100" src="img/chips.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                        <img class="d-block w-100" src="img/chips.jpg" alt="Third slide">
                            </div>
                            
                             <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                             <span class="iconify productos" data-icon="clarity:cursor-hand-click-line" data-inline="false"></span>
                        <span class="sr-only">Next</span>
                            </a>
                </div>
                <div class="card-body">
                    <h3 style = "font-family: 'Quicksand', sans-serif; "   class="card-title text-center">New Mega chocorramo</h3>
                    <p style = "font-family: 'Quicksand', sans-serif; "  class="card-text"> Helado de macadamia - Arequipe - Chocorramo - Galleta Milo - Barquillo - Chantilly - Salsa de arequipe - Burbuja jet</p>
                    <a class="btn btn-danger text-white btn-lg "  href=""><i class="fas fa-dollar-sign"></i> 16.000   <i class="far fa-hand-point-left"></i></a>
                </div>
            </div>
            <div class="card text-center">
                <img class="card-img-top " src="img/chips.jpg" alt="Card image cap">
                <div class="card-body">
                    <h3 style = "font-family: 'Quicksand', sans-serif; "  class="card-title text-center">New Mega Baileys</h3>
                    <p style = "font-family: 'Quicksand', sans-serif; "  class="card-text">Helado de vainilla - Crema de avellanas - Baileys - Galleta chokis - Chips de chocolate - Barquillo - Chantilly - Salsa Hershey ́s de chocolate.</p>
                    <a class="btn btn-danger text-white btn-lg "  href=""><i class="fas fa-dollar-sign"></i> 16.000   <i class="far fa-hand-point-left"></i></a>
                </div>
            </div>
            <div class="card text-center ">
                <img class="card-img-top " src="img/fresas2.jpg" alt="Card image cap">
                <div class="card-body">
                    <h3 style = "font-family: 'Quicksand', sans-serif; "  class="card-title text-center">New Mega Hershey's</h3>
                    <p style = "font-family: 'Quicksand', sans-serif; "  class="card-text">Helado de vainilla - Crema de avellanas - Chocokrispys - Hershey ́s cookies and cream - Fresas - Barquillo - Salsa Hershey ́s de chocolate</p>
                    <a class="btn btn-danger text-white btn-lg "  href=""><i class="fas fa-dollar-sign"></i> 16.000   <i class="far fa-hand-point-left"></i></a>
                </div>
            </div>
        </div>
        </div>
</div>
</div>
</div>


<!-- Segunda Linea -->
<div class="clearfix"></div>
    <div class="container">
        <p>
            <h1 class="text-center text-light"></h1>
        </p> 
        <div class="card-deck">
            <div class="card text-center">
                <img class="card-img-top " src="img/IMG_4158.jpg" alt="Card image cap">
                <div class="card-body">
                    <h3 style = "font-family: 'Quicksand', sans-serif; "  class="card-title text-center">Mega Oreo</h3>
                    <p style = "font-family: 'Quicksand', sans-serif; "  class="card-text">Medio Brownie, Oreo, Minichips, Glaceado de chocolate, Jeringa de chocolate, Base Helado de cookies and cream.</p>
                    <a class="btn btn-danger text-white btn-lg "  href=""><i class="fas fa-dollar-sign"></i> 18.000   <i class="far fa-hand-point-left"></i></a>
                </div>
            </div>
            <div class="card text-center ">
                <img class="card-img-top " src="img/froot.jpg" alt="Card image cap">
                <div class="card-body">
                    <h3 style = "font-family: 'Quicksand', sans-serif; "  class="card-title text-center">New Mega Quipitos</h3>
                    <p style = "font-family: 'Quicksand', sans-serif; "  class="card-text">Helado de vainilla - Crema de avellanas - Froot loops - Quipitos - Barquillo - Galleta Quaker de fresa - Chantilly - Salsa de fresa</p>
                    <a class="btn btn-danger text-white btn-lg "  href=""><i class="fas fa-dollar-sign"></i> 16.000   <i class="far fa-hand-point-left"></i></a>
                </div>
            </div>
            <div class="card text-center">
                <img class="card-img-top " src="img/frto.jpg" alt="Card image cap">
                <div class="card-body">
                    <h3 style = "font-family: 'Quicksand', sans-serif; "  class="card-title text-center">Mega Sparkies</h3>
                    <p style = "font-family: 'Quicksand', sans-serif; "  class="card-text">Helado de fresa, Sparkies, Masmelo Mini, Galleta Quaqer, Medio Snikers, Jeringa de fresa, Glacedo de fresa.</p>
                    <a class="btn btn-danger text-white btn-lg "  href=""><i class="fas fa-dollar-sign"></i> 16.000   <i class="far fa-hand-point-left"></i></a>
                </div>
            </div>
        </div>
        </div>
</div>

<!--  Linea -->

<div class="clearfix"></div>
    <div class="container">
        <p>
            <h1 class="text-center text-light"></h1>
        </p> 
        <div class="card-deck">
            <div class="card text-center">
                <img class="card-img-top " src="img/IMG_3788.JPG" alt="Card image cap">
                <div class="card-body">
                    <h3 style = "font-family: 'Quicksand', sans-serif; "  class="card-title text-center">Mega Cono</h3>
                    <p style = "font-family: 'Quicksand', sans-serif; "  class="card-text">Medio Brownie, Bola de Helado, Crema Chantillin, Glaceado de chocolate, Jeringa de chocolate, Base Helado de cookies and cream.</p>
                    <a class="btn btn-danger text-white btn-lg "  href=""><i class="fas fa-dollar-sign"></i> 18.000   <i class="far fa-hand-point-left"></i></a>
                </div>
            </div>
            <div class="card text-center ">
                <img class="card-img-top " src="img/mouse.JPG" alt="Card image cap">
                <div class="card-body">
                    <h3 style = "font-family: 'Quicksand', sans-serif; "  class="card-title text-center">New Mega Mouse</h3>
                    <p style = "font-family: 'Quicksand', sans-serif; "  class="card-text">Helado de fresa - Crema de chantillin - Galleta Oreo- Grajeas de colores</p>
                    <a class="btn btn-danger text-white btn-lg "  href=""><i class="fas fa-dollar-sign"></i> 13.000   <i class="far fa-hand-point-left"></i></a>
                </div>
            </div>
            <div class="card text-center">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
            <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block w-100" src="img/burro6.JPG" alt="First slide">
                            </div>
                            <div class="carousel-item">
                        <img class="d-block w-100" src="img/burro2.JPG" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                        <img class="d-block w-100" src="img/burro3.JPG" alt="Third slide">
                            </div>
                            
                             <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                             <span class="iconify productos" data-icon="clarity:cursor-hand-click-line" data-inline="false"></span>
                        <span class="sr-only">Next</span>
                            </a>
                            </div>
                <div class="card-body">
                    <h3 style = "font-family: 'Quicksand', sans-serif; "  class="card-title text-center">Burro de Pollo</h3>
                    <p style = "font-family: 'Quicksand', sans-serif; "  class="card-text">Tortilla, Pollo Desmechado, Queso mozzarella, Tomate, Lechuga, Salsa BBQ, Papa fosforito.</p>
                    <a class="btn btn-danger text-white btn-lg "  href=""><i class="fas fa-dollar-sign"></i> 11.000   <i class="far fa-hand-point-left"></i></a>
                </div>
            </div>
        </div>
        </div>
</div>
</div>
</div> 

<!-- Tercera LInea -->
<div class="clearfix"></div>
    <div class="container">
        <p>
            <h1 class="text-center text-light"></h1>
        </p> 
        <div class="card-deck">
            <div class="card text-center ">
                <img class="card-img-top " src="img/mani2.jpg" alt="Card image cap">
                <div class="card-body">
                    <h3 style = "font-family: 'Quicksand', sans-serif; "  class="card-title text-center">New Mega Snickers</h3>
                    <p style = "font-family: 'Quicksand', sans-serif; "  class="card-text">Helado de chocolate - Waffle - Crema de avellanas - Maní triturado - Snicker - Barquillo - chantilly - Salsa Hershey ́s de chocolate.</p>
                    <a class="btn btn-danger text-white btn-lg "  href=""><i class="fas fa-dollar-sign"></i> 16.000   <i class="far fa-hand-point-left"></i></a>
                </div>
            </div>
            <div class="card text-center ">
                <img class="card-img-top " src="img/mani3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h3 style = "font-family: 'Quicksand', sans-serif; "  class="card-title text-center">Malteada Básica</h3>
                    <p style = "font-family: 'Quicksand', sans-serif; "  class="card-text">Elige un toping: Oreo, Jet Wafer, Jet, Trululu, Oreo Vainilla, Choco Disk, Galleta Milo, Gol, Quaker Galleta, Millows, Moritas, Muu, Nucita, Minichips, Sparkies, Choco Break Frutales, Muu Liquida, Quipitos.</p>
                    <a class="btn btn-danger text-white btn-lg "  href=""><i class="fas fa-dollar-sign"></i> 15.000   <i class="far fa-hand-point-left"></i></a>
                </div>
            </div>
            <div class="card text-center ">
                <img class="card-img-top " src="img/quipitos.jpg" alt="Card image cap">
                <div class="card-body">
                    <h3 style = "font-family: 'Quicksand', sans-serif; "  class="card-title text-center">Malteada Normal</h3>
                    <p style = "font-family: 'Quicksand', sans-serif; "  class="card-text">Elige un toping: Chcoco Break Cookies, Ositos Trululu, Burbujas Jet, Golochips, Choco Break Caramelo, Galletas Chokis, Jumbo Mani, Chokis Bolita, Black & White, Choco Melos.</p>
                    <a class="btn btn-danger text-white btn-lg "  href=""><i class="fas fa-dollar-sign"></i> 15.000   <i class="far fa-hand-point-left"></i></a>
                </div>
            </div>
        </div>
        </div>
</div>

<!-- Cuarta Linea -->
<div class="clearfix"></div>
    <div class="container">
        <p>
            <h1 class="text-center text-light"></h1>
        </p> 
        <div class="card-deck">
            <div class="card text-center">
                <img class="card-img-top" src="img/unicornio.jpg" alt="Card image cap">
                <div class="card-body">
                    <h3 style = "font-family: 'Quicksand', sans-serif; "  class="card-title text-center">New Mega unicornio</h3>
                    <p style = "font-family: 'Quicksand', sans-serif; "  class="card-text">Helado de fresa - Chantilly - Escarcha comestible - Masmelos mini - Golochips - Paleta multicolor - Barquillo - Chantilly - Salsa de fresa.</p>
                    <a class="btn btn-danger text-white btn-lg "  href=""><i class="fas fa-dollar-sign"></i> 16.000   <i class="far fa-hand-point-left"></i></a>
                </div>
            </div>
            <div class="card text-center">
                <img class="card-img-top" src="img/an.jpg" alt="Card image cap">
                <div class="card-body">
                    <h3 style = "font-family: 'Quicksand', sans-serif; "  class="card-title text-center">Malteda Super</h3>
                    <p style = "font-family: 'Quicksand', sans-serif; "  class="card-text">Elige un toping: Hershey Blanca, Hershey Negra, Snicker Blanca, Snicker Negra, Milkyway, Ferrero, Twix, Kikkat, Milo, Nuggets Milo, Montblack, m&m Chocolate, Cruch, Kinder barra, Nerds, Kisses, m&m Chocolate mani, Nutella, Huevo Kinder.</p>
                    <a class="btn btn-danger text-white btn-lg "  href=""><i class="fas fa-dollar-sign"></i> 15.000   <i class="far fa-hand-point-left"></i></a>
                </div>
            </div>
            <div class="card text-center ">
                <img class="card-img-top shake-slow" src="img/en.jpg" alt="Card image cap">
                <div class="card-body">
                    <h3 style = "font-family: 'Quicksand', sans-serif; "  class="card-title text-center">Waffle</h3>
                    <p style = "font-family: 'Quicksand', sans-serif; "  class="card-text">Elige un toping: Baileys, Crema de cafe, Sabajon sabor brandy, Amarreto, Crema de brandy, Ponche kuba, Tequila, Smirnoff, Piña Colada</p>
                    <a class="btn btn-danger text-white btn-lg "  href=""><i class="fas fa-dollar-sign"></i> 9.000   <i class="far fa-hand-point-left"></i></a>
                </div>
            </div>
        </div>
        </div>
</div>

<!-- Quinta  Linea -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
<div class="clearfix"></div>
    <div class="container">
        <p>
            <h1 class="text-center text-light"></h1>
        </p> 
        <div class="card-deck">
            <div class="card text-center ">
            <div class="carousel-inner">
                            
                            <div class="carousel-item active">
                        <img class="d-block w-100" src="img/francesas.JPG" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                        <img class="d-block w-100" src="img/francesas2.JPG" alt="Third slide">
                            </div>
                            
                             <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                             <span class="iconify productos" data-icon="clarity:cursor-hand-click-line" data-inline="false"></span>
                        <span class="sr-only">Next</span>
                            </a>
                </div>
                <div  class="card-body">
                    <h3 style = "font-family: 'Quicksand', sans-serif; "  class="card-title text-center">Papas Francesas </h3>
                    <p style = "font-family: 'Quicksand', sans-serif; "   class="card-text">Limonada Natural, Limonada Cerezada, Limonada Yerbabuena, Smoothie Lulo, Smoothie Maracuya, Smoothie Fresa, Smoothie Mora</p>
                    <a class="btn btn-danger text-white btn-lg "  href=""><i class="fas fa-dollar-sign"></i> 5.000   <i class="far fa-hand-point-left"></i></a>
                </div>
            </div>
            <div class="card text-center ">
                <img class="card-img-top " src="img/tn.jpg" alt="Card image cap">
                <div class="card-body">
                    <h3 style = "font-family: 'Quicksand', sans-serif; "  class="card-title text-center">Waffle</h3>
                    <p style = "font-family: 'Quicksand', sans-serif; "  class="card-text">Pollo desmechado o jamon, Tortilla, Lechuga, Tomate, Queso, Rippio de papa </p><a class="btn btn-danger text-white btn-lg "  href=""><i class="fas fa-dollar-sign"></i> 9.000   <i class="far fa-hand-point-left"></i></a>
                </div>
            </div>
            <div class="card text-center ">
                <img class="card-img-top " src="img/un.jpg" alt="Card image cap">
                <div class="card-body">
                    <h3 style = "font-family: 'Quicksand', sans-serif; "  class="card-title text-center">Granizado Milo</h3>
                    <p style = "font-family: 'Quicksand', sans-serif; "  class="card-text">Delicioso Sandiwch de jamon y queso, acompañado de nachos con salsa de queso y showy.</p><a class="btn btn-danger text-white btn-lg "  href=""><i class="fas fa-dollar-sign"></i> 7.000   <i class="far fa-hand-point-left"></i></a>
                </div>
            </div>
        </div>
        </div>
</div>
</div>
</div>

<!-- sexta  Linea -->
<div class="clearfix"></div>
    <div class="container">
        <p>
            <h1 class="text-center text-light"></h1>
        </p> 
        <div class="card-deck">
            <div class="card text-center ">
                <img class="card-img-top shake-slow" src="img/HB.jpg" alt="Card image cap">
                <div  class="card-body">
                    <h3 style = "font-family: 'Quicksand', sans-serif; "  class="card-title text-center">Hamburguesas</h3>
                    <p style = "font-family: 'Quicksand', sans-serif; "   class="card-text">Hamburguesas con carne angus certificada acompañada de papas</p>
                    <a class="btn btn-danger text-white btn-lg "  href=""><i class="fas fa-dollar-sign"></i> 15.000   <i class="far fa-hand-point-left"></i></a>
                </div>
            </div>
            <div class="card text-center ">
                <img class="card-img-top " src="img/HB2.jpg" alt="Card image cap">
                <div class="card-body">
                    <h3 style = "font-family: 'Quicksand', sans-serif; "  class="card-title text-center">Papas Americanas</h3>
                    <p style = "font-family: 'Quicksand', sans-serif; "  class="card-text">Deliciosas papas americanas acompañadas con tocineta </p>
                    <a class="btn btn-danger text-white btn-lg "  href=""><i class="fas fa-dollar-sign"></i> 9.700   <i class="far fa-hand-point-left"></i></a>
                </div>
            </div>
            <div class="card text-center ">
                <img class="card-img-top " src="img/fresas.JPG" alt="Card image cap">
                <div class="card-body">
                    <h3 style = "font-family: 'Quicksand', sans-serif; "  class="card-title text-center">Fresas en crema baileys</h3>
                    <p style = "font-family: 'Quicksand', sans-serif; "  class="card-text">Fresas- Oreo triturado- cobertura de avellanas- chantilli en crema de baileys</p>
                    <a class="btn btn-danger text-white btn-lg "  href=""><i class="fas fa-dollar-sign"></i> 15.000   <i class="far fa-hand-point-left"></i></a>
                </div>
            </div>
        </div>
        </div>
</div>

<!-- septima  Linea -->
<div class="clearfix"></div>
    <div class="container">
        <p>
            <h1 class="text-center text-light"></h1>
        </p> 
        <div class="card-deck">
            <div class="card text-center ">
                <img class="card-img-top shake-slow" src="img/combo1.JPG" alt="Card image cap">
                <div  class="card-body">
                    <h3 style = "font-family: 'Quicksand', sans-serif; "  class="card-title text-center">NUGGETS DE POLLO </h3>
                    <p style = "font-family: 'Quicksand', sans-serif; "   class="card-text">Nuggets de pollo acompañados de porcion de papas a la francesa</p>
                    <a class="btn btn-danger text-white btn-lg "  href=""><i class="fas fa-dollar-sign"></i> 7.000   <i class="far fa-hand-point-left"></i></a>
                </div>
            </div>
            <div class="card text-center ">
                <img class="card-img-top " src="img/combo2.JPG" alt="Card image cap">
                <div class="card-body">
                    <h3 style = "font-family: 'Quicksand', sans-serif; "  class="card-title text-center">Combo Infantil 1</h3>
                    <p style = "font-family: 'Quicksand', sans-serif; "  class="card-text">New Mega Mouse + papas a la francesa </p>
                    <a class="btn btn-danger text-white btn-lg "  href=""><i class="fas fa-dollar-sign"></i> 15.700   <i class="far fa-hand-point-left"></i></a>
                </div>
            </div>
            <div class="card text-center ">
                <img class="card-img-top " src="img/combo3.JPG" alt="Card image cap">
                <div class="card-body">
                    <h3 style = "font-family: 'Quicksand', sans-serif; "  class="card-title text-center">Combo Infantil 2</h3>
                    <p style = "font-family: 'Quicksand', sans-serif; "  class="card-text">New Mega Mouse + papas a la francesa + nuggets de pollo</p>
                    <a class="btn btn-danger text-white btn-lg "  href=""><i class="fas fa-dollar-sign"></i> 17.700   <i class="far fa-hand-point-left"></i></a>
                </div>
            </div>
        </div>
        </div>
</div>


<!-- social bar -->  
<div class="social-bar">
    <a href="https://www.facebook.com/milkshakecol/" class="icon icon-facebook" target="_blank"></a>
    
    <a href="https://www.youtube.com/channel/UC9OQwG58n4dXSbNP1_R_qKA" class="icon icon-youtube" target="_blank"></a>
    <a href="https://www.instagram.com/milkshake_col/?hl=es-la" class="icon icon-instagram" target="_blank"></a>
  </div>

<!-- Desarrollo un solo Footer y lo incluyo a las demas paginas -->    
<?php include("php/footer.php"); ?>
</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <!-- iconify -->
 <script src="https://code.iconify.design/1/1.0.5/iconify.min.js"></script>
 <!-- SCROOLL REVEAL SCRIPT -->
 <script>
      window.sr = ScrollReveal();

    sr.reveal('.navbar', {
      duration: 2000,
      origin: 'bottom'
    });
    </script> 




 <!--fonts-->

<style>
@import url('https://fonts.googleapis.com/css?family=Quicksand');
</style>
    <!--fin fonts-->
</html>