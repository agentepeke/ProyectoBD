@include('templates/header2')
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <h3>Nuevo Producto</h3>
            <form action="/insert-product" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre del producto:</label>
                    <input type="text" class="form-control" name="product_name" placeholder="Nombre">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Descripción:</label>
                    <input type="text" class="form-control" name="description" placeholder="Descripción">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Precio:</label>
                    <input type="number" class="form-control" name="price" placeholder="Precio">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Existencias:</label>
                    <input type="number" class="form-control" name="existencia" placeholder="Existencias">
                </div>
                <select class="form-select" name="categorie" readonly aria-label="Default select example">
                    @foreach($categories as $categorie)
                    <option value="{{$categorie->id_categorie}}">{{$categorie->categorie_name}}</option>
                    @endforeach
                </select>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Imagen:</label>
                    <input type="file" name="product_image" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Agregar</button>
                <div class="mb-3">
                    
                    @foreach($categories as $categorie)
                    <input value="{{$categorie->id_brand}}" type="text" class="form-control invisible" readonly  name="id_brand" placeholder="Nombre">
                    @endforeach
                 
                </div>
            </form>
        </div>
        <div class="col"></div>
    </div>
</div>
@include('templates/footerAdmin')