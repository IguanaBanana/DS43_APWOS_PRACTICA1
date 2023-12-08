@extends('layouts.site')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    <title>TenIt's</title>
</head>

<body class="cuerpo"> 

    
<div class="container">
        <div class="col-12" id="color-sugerencias">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(156, 135, 133);">
        <a class="navbar-brand" href="#"><bl>TenIt's</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Iniciar Sesión</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Top!
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Nike</a>
                <a class="dropdown-item" href="#">Adidas</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Pumas</a>
              </div>
            </li>
          </ul>
          
          
        </div>
      </nav>
    </div>


    <div id="Fila1" class="container-fluid">
        <div class="container">
            <div class="row">
              <div class="col-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="img/slider-4.png" class="slider-image"  alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="img/slider-2.png" class="slider-image" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="img/slider-3.png" class="slider-image" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="img/slider-1.png" class="slider-image" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>
            </div>

        </div>

    </div>

<br>

    <div class="container" id="pagina1">
        <div class="row">
            <div class="col-6">
                <br>
                <br>
                <br>
                <h1 class="texto-grande">Tenemos un amplio surtido de tenis en stock!</h1>
                <br>
                <br>
                <br>
            </div>     
                
                <div class="col-6">   
                    <img class="img-fluid" src="img/conjunto1.jpg" >
                    
                </div>
            </div>
        </div>
    </div>
<br>
    <div class="container" id="pagina2">
        <div class="row">
            <div class=col-3>
                
                <img class="img-fluid" src="img/slider2.jpg"> 
            </div>
                   
            <div class="col-3" id="">
                        
                <img class="img-fluid" src="img/slider3.jpg" alt="">

            </div>
        
            
                    
            <div class="col-6">
                <br>
                <h1 class="texto-grande">NOVEDADES TENIS</h1>
                <br>
                <h2>Obtén lo mejor de todos los mundos. Tecnología que mejora el rendimiento + comodidad durante todo el día en un zapato ideal. </h2> 
            </div>                        
        </div>                
                    
    </div>       
        
<br>    

    <div class="container" id="pagina3">
        <div class="row">
              
            <div class="col-12">
                
                <br>
                <br>    
                <h1 class="grande">TOP</h1>
                <h1 class="texto-grande"> Estos son los estios mas vendidos.</h1>
                <br>
                <br>
                <br>
                <br>
            </div> 
        </div>     
    <div class="container" id="pagina3-2">
            <div class="row">
                <div class="col-4">   
                <img class="img-fluid" src="img/tenis1.jpg" >                    
                 
                </div> 
                <div class="col-4">                       
                <img class="img-fluid" src="img/tenis2.jpg" >                     
                
                </div> 
                <div class="col-4">                                            
                <img class="img-fluid" src="img/tenis3.jpg" >
                                  
                </div> 
                
            </div>
        </div>
    </div>
<br>
    <div class="container" id="pagina4">
        <div class="row">
            
          <div class="col-12">
                <br>
                <br>
                <br>
                <h1 class="texto-grande"> Busca tus tenis:</h1> 
                <br>
                <br>
                <br>
          </div>
        </div>
        <div class="row">
            
            <div class="col-4">
                <h1>1</h1>
                <h3>Selecciona el producto de tu agrado en nuestro amplio stock</h3>
                </div>
            <div class="col-4">
                <h1>2</h1>
                <h3>Agregalo a tu carrito.</h3>
            </div>
            <div class="col-4">
                <h1>3</h1>
                <h3>Realiza tu pago y nosotros te lo enviamos!</h3>
            </div>
        </div>
    </div>

    <div class="container" id="pagina2">
        <div class="row">       
            <div class="col-6">
                <br>
                <br>
                <h1 class="texto-grande"> Deporte </h1>
                <br>
                <br>
                <h3>Aqui veras nuestros modelos especiales para ejercitarte!</h3> 
            </div>                        
          
                      
            <div class=col-2>
                <br>
                <br>  
            <img class="img-fluid" src="img/tenis4.jpg"> 
            </div>
               
            <div class="col-2" id="">
                <br>
                <br>
            <img class="img-fluid" src="img/tenis5.jpg" alt="">

            </div>   
            <div class="col-2" id="">
                <br>
                <br>  
            <img class="img-fluid" src="img/tenis6.jpg" alt="">
            </div> 
        </div>          
    </div>   


    <div class="container">
            <div class="col-12">

<footer class="text-center text-lg-start bg-light text-muted">

    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom" id="color-sugerencias">

      <div class="me-5 d-none d-lg-block">
        <span>Contacta con nosotros:</span>
      </div>

      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>

    </section>

    <section class="">
      <div class="container text-center text-md-start mt-5">

        <div class="row mt-3">

          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>TenIt's
            </h6>
            <p>
              Aqui podras encontrar toda nuestra informacion de contacto.
            </p>
          </div>

          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

            <h6 class="text-uppercase fw-bold mb-4">
              Tenis
            </h6>
            <p>
              <a href="https://www.facebook.com/" class="text-reset">facebook</a>
            </p>
            <p>
              <a href="https://twitter.com/?lang=es" class="text-reset">X (twitter)</a>
            </p>
            <p>
              <a href="https://www.instagram.com/" class="text-reset">Instagram</a>
            </p>
            <p>
              <a href="tiktok.com" class="text-reset">tiktok</a>
            </p>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="text-uppercase fw-bold mb-4">Contacto</h6>
            <p><i class="fas fa-home me-3"></i> Hermosillo, Sonora 83000, MEX</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
                tenits@contacto.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 52 237 5973</p>
            <p><i class="fas fa-print me-3"></i> + 52 234 6789</p>
          </div>
        </div>
      </div>
    </section>
  </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
  
    @endsection