@include('templates/header2')
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <h3>Producto nuevo</h3>
            <form action="/insert-brand" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre del producto:</label>
                    <input type="text" class="form-control"  name="brand_name" placeholder="Nombre">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Descripción:</label>
                    <input type="text" class="form-control"  name="brand_description" placeholder="Descripción">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Imagen:</label>
                    <input type="file" name="brand_image" class="form-control" >
                </div>
                <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
        </div>
        <div class="col"></div>
    </div>
</div>
@include('templates/footerAdmin')