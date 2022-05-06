@include('templates/header2')
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <h3>Editar Producto</h3>
            @foreach($products as $product)
            <form action="/update-product/{{$product->id_product}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre del producto:</label>
                    <input  input value="{{$product->product_name}}" type="text" class="form-control" name="product_name" placeholder="Nombre">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Descripción:</label>
                    <input input value="{{$product->description}}"  type="text" class="form-control" name="description" placeholder="Descripción">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Precio:</label>
                    <input  input value="{{$product->price}}"  type="number" class="form-control" name="price" placeholder="Precio">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Existencias:</label>
                    <input  input value="{{$product->existencia}}"  type="number" class="form-control" name="existencia" placeholder="Existencias">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Imagen:</label>
                    <input type="file" name="product_image" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Editar</button>
                <div class="mb-3">
                    
                    @foreach($categories as $categorie)
                    <input value="{{$categorie->id_brand}}" type="text" class="form-control invisible" readonly  name="id_brand" placeholder="Nombre">
                    @endforeach
                 
                </div>
            </form>
            @endforeach
         
        </div>
        <div class="col"></div>
    </div>
</div>
@include('templates/footerAdmin')