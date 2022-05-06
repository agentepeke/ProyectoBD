@include('templates/header2')
<div class="container">
    <div class="row">
        <center>
            <h1>
                Productos
            </h1>

        </center>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <a class="btn btn-dark" href="/nueva-marca">Agregar Producto</a>
        </div>
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
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <p class="card-text"><a href="/categories/admin/{{$brand->id_brand}}" class="btn btn-primary">Ver</a></p>
                                        </div>
                                        <div class="col">
                                            <p class="card-text"><a href="/brand/edit/{{$brand->id_brand}}" class="btn btn-warning">Editar</a></p>
                                        </div>
                                        <div class="col">
                                            <p class="card-text"><a href="/brand/delete/{{$brand->id_brand}}" class="btn btn-danger">Eliminar</a></p>
                                        </div>
                                    </div>
                                </div>
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
@include('templates/footerAdmin')