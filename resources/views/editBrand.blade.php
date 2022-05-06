@include('templates/header2')
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <h3>Editar Producto</h3>
            @foreach($brands as $brand)
            <form action="/update-brand/{{$brand->id_brand}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre del producto:</label>
                    <input value="{{$brand->brand_name}}" type="text" class="form-control"  name="brand_name" placeholder="Nombre">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Descripción:</label>
                    <input value="{{$brand->brand_description}}" type="text" class="form-control"  name="brand_description" placeholder="Descripción">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Imagen:</label>
                    <input type="file" name="brand_image" class="form-control" >
                </div>
                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
            @endforeach
         
        </div>
        <div class="col"></div>
    </div>
</div>
@include('templates/footerAdmin')