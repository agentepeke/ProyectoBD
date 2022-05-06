@include('templates/header2')
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <h3>Editar Categoría</h3>
            @foreach($categories as $categorie)
            <form action="/update-categorie/{{$categorie->id_categorie}}" method="post" >
            {{csrf_field()}}
            <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombrela categoría:</label>
                    <input value="{{$categorie->id_brand}}" type="text" class="form-control invisible" readonly  name="id_brand" placeholder="Nombre">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombrela categoría:</label>
                    <input value="{{$categorie->categorie_name}}" type="text" class="form-control"  name="categorie_name" placeholder="Nombre">
                </div>
                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
            @endforeach
        </div>
        <div class="col"></div>
    </div>
</div>
@include('templates/footerAdmin')