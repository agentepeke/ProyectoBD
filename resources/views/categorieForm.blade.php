@include('templates/header2')
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <h3>Nueva Categoria</h3>
            <form action="/insert-categorie" method="post">
                {{csrf_field()}}
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre de la categoría:</label>
                    <input type="text" class="form-control" name="categorie_name" placeholder="Nombre">
                </div>
                <select class="form-select" name="brand" aria-label="Default select example">
                    @foreach($brands as $brand)
                        @if($brand->id_brand == $idBrand)  
                        <option value="{{$brand->id_brand}}">{{$brand->brand_name}}</option>
                        @endif
                    @endforeach
                </select>
                <br>
                <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
        </div>
        <div class="col"></div>
    </div>
</div>
@include('templates/footerAdmin')