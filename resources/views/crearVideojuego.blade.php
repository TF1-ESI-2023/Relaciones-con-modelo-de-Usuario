@include("common/header")
 
<br><br>
<h2>Videojuego</h2>
<div class="container">
<div class="row">

    <form action="/videojuego" method="post">
        @csrf
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="nombre">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Año</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="anio">
            </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Género</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="genero">
        </div>

        
        <div class="mb-3">
            <button type="submit" class="btn btn-primary mb-3">Guardar</button>

        </div>
    </form>
</div>

    @if(session("creado"))
        <div class="alert alert-success">
            Created
        </div>
    @endif
   
@include("common/footer");