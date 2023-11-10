@extends('layouts.site')
@section('content')
<div id="Fila1" class="container-fluid">
        <div class="container">
            <div class="row">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="" class="d-block w-100" alt="...">
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

<br>

    <div class="container" id="pagina1">
        <div class="row">
            <div class="col-6">
                <br>
                <br>
                <br>
                <h1 class="texto-grande">TENIS</h1>
                <br>
                <br>
                <br>
            </div>     
                
                <div class="col-6">   
                    <img class="img-fluid" src="" >
                    
                </div>
            </div>
        </div>
    </div>
<br>
    <div class="container" id="pagina2">
        <div class="row">
            <div class=col-3>
                
                <img class="img-fluid" src=""> 
            </div>
                   
            <div class="col-3" id="">
                        
                <img class="img-fluid" src="" alt="">

            </div>
        
            
                    
            <div class="col-6">
                <br>
                <h1 class="texto-grande">NOVEDADES TENIS</h1>
                <br>
                <p>DESCPRIPCION </p> 
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
                <h1 class="texto-grande"> DESCPRIPCION</h1>
                <br>
                <br>
                <br>
                <br>
            </div> 
        </div>     
    <div class="container" id="pagina3-2">
            <div class="row">
                <div class="col-4">   
                <img class="img-fluid" src="" >                    
                 
                </div> 
                <div class="col-4">                       
                <img class="img-fluid" src="" >                     
                
                </div> 
                <div class="col-4">                                            
                <img class="img-fluid" src="" >
                                  
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
                <p>DESC</p>
                </div>
            <div class="col-4">
                <h1>2</h1>
                <p>DESC</p>
            </div>
            <div class="col-4">
                <h1>3</h1>
                <p>DESC</p>
            </div>
        </div>
    </div>

    <div class="container" id="pagina2">
        <div class="row">       
            <div class="col-6">
                <br>
                <br>
                <h1 class="texto-grande">SALES</h1>
                <br>
                <br>
                <p>DESC</p> 
            </div>                        
          
                      
            <div class=col-2>
                <br>
                <br>  
            <img class="img-fluid" src=""> 
            </div>
               
            <div class="col-2" id="">
                <br>
                <br>
            <img class="img-fluid" src="" alt="">

            </div>   
            <div class="col-2" id="">
                <br>
                <br>  
            <img class="img-fluid" src="" alt="">
            </div> 
        </div>          
    </div>   
    @endsection