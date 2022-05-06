@include('templates/header')
<div class="container">
    <div class="row ">
        <div class="col-sm">
        </div>

        <div class="col-sm alert alert-info">
            <h2>INICIAR SESION</h2>
            <form action="/Log" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Usuario</label>
                    <input type="text" class="form-control" name="user" placeholder="Ingresa tu usuario">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" class="form-control" name="password" placeholder="Ingresa tu contraseña">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
            </form>
        </div>
        <div class="col-sm"></div>
    </div>

</div>
@include('templates/footer')