@include('templates/header')
<div class="container">
    <div class="row">
    <center>
       <h1 class="fw-bold" style="font-family: 'Cookie', cursive;">
       <div class="p-3 mb-2 bg-dark"><font style="color:palevioletred" size="7" >La colonia Cafe</font></div>
       </h1> 

    </center>
    </div>
    <div class="row">
        <!--- Inicio Carrousel --->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/storage/imges/panaderia.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/storage/imges/pastel1.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/storage/imges/Tupperwarebanner.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/storage/imges/Seytubanner.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/storage/imges/Oriflamebanner.jpg" class="d-block w-100" alt="...">
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
    <!--- FINAL CARROUSEL--->

    <a name="marcas"></a>
    <div class="row">
    <center>
       <h1 class="fw-bold">
         <br>
         <div class="p-3 mb-2 bg-dark"><font style="color:palevioletred">Nuestros Productos</font></div>
         
       </h1> 

    </center>
    </div>

</div>
<div class="container">
    <div class="row">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @if(count($brands)>0)
            @foreach($brands as $brand)
            <div class="col">
                <div class="card mb-3" style="max-width: 550px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/storage/brands/{{$brand->brand_route}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{$brand->brand_name}}</h5>
                                <p class="card-text">{{$brand->brand_description}}</p>
                                <p class="card-text"><a href="/categories/{{$brand->id_brand}}" class="btn btn-dark stretched-link">Ir a los productos</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>
<a name="acerca"></a>
<div class="container">
    <center>
        <br>
        <h1 class="fw-bold">
        <div class="p-3 mb-2 bg-dark"><font style="color:palevioletred">Acerca de Nosotros</font></div>
        <p>La colonia cafe es una tienda donde puedes encontrar distintos productos por catalogo y diferentes postres y panes deliciosos.</p>
        </h1>
    <div class="row">

    </div>
    </center>
  
</div>
@include('templates/footer-responsive')