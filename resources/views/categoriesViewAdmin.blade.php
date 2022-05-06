@include('templates/header2')
<br />
<br />
<div class="container">
    <div class="row">
        <center>
            <h1>
                Categorias
            </h1>

        </center>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <a class="btn btn-primary" href="/nueva-categoria/{{$brand}}">Agregar Categoría</a>
        </div>
        <br />
        <br />
        @if(count($products)>0 and count($categories)>0)

        @foreach($categories as $categorie)
        <br />

        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h3>{{$categorie->categorie_name}}</h3>
                </div>
                <div class="col">
                    <p class="card-text"><a href="/edit/categorie/{{$categorie->id_categorie}}" class="btn btn-warning">Editar</a></p>
                </div>
                <div class="col">
                    <p class="card-text"><a href="/delete/categorie/{{$categorie->id_categorie}}" class="btn btn-danger">eliminar</a></p>
                </div>
            </div>
        </div>
        <br />
        <br />
        <div class="col-12">
            <a class="btn btn-dark" href="/nuevo-producto/{{$categorie->id_categorie}}">Agregar Producto</a>
        </div>
        <br />
        <br />
        <hr />
        <div class="owl-carousel products-carousel owl-theme">
            @foreach ($products as $product)
            @if($product->id_categorie==$categorie->id_categorie)
            <div class="card " style="width: 18rem;">
                <img src="/storage/products/{{$product->route}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$product->product_name}}</h5>
                    <p class="card-text">{{$product->description}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Disponibilidad: {{$product->existencia}} en existencia</li>
                    <li class="list-group-item">Precio: Q{{$product->price}}</li>
                </ul>
                <div class="card-body">
                    <a href="/edit/product/{{$product->id_product}}" class="badge rounded-pill bg-warning text-dark">Editar</a>
                    <a href="/delete/product/{{$product->id_product}}" class="badge rounded-pill bg-danger">Eliminar</a>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        @endforeach
        @endif
    </div>
</div>

<script>
    jQuery(document).ready(function($) {
        $('.products-carousel').owlCarousel({
            loop: true,
            margin: 5,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause:true,
            responsive: {
                0: {
                    items: 1
                },
                800: {
                    items: 2
                },
                1000: {
                    items: 3
                },
                1300: {
                    items: 4
                }

            }
        });
    });
</script>
@include('templates/footerAdmin')