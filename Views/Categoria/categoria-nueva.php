
<script type="text/javascript">
function validar(){
    let nombre = document.getElementById("nombre").value;
    if(nombre != ""){
        let descripcion = document.getElementById("descripcion").value;
        if(descripcion != ""){
            guardar(nombre, descripcion);
        } else {
            alert("Por favor digite la descripcion");
        }
    } else {
        alert("Por favor digite nombre");
    }
}

function guardar(nombre, descripcion){
    fetch("../Categoria/guardar/"+nombre+"/"+descripcion, {
        method: 'GET'//,
        //body: JSON.stringify(objeto)
        //body: objeto
    })
    .then(function (response) {
        return response.text();
    })
    .then(function (data) {
        let res = (data > 0) ? "Guardado exitosamente" : "Error guardando"
        alert(res);
        console.log("data", data);
    })
    .catch(function (error) {
        console.error("error", error);
    })
}

</script>

<div class="app-title">
	<div>
		<h1><i class="fa fa-edit"></i>Categoria</h1><p>Nuevas</p>
	</div>
	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
		<li class="breadcrumb-item">Categoria</li>
		<li class="breadcrumb-item"><a href="#">Nueva</a></li>
	</ul>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="tile">
			<h3 class="tile-title">Datos</h3>
			<div class="tile-body">
				<form>
					<div class="form-group">
						<label class="control-label">Nombre</label>
						<input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre">
					</div>
					<div class="form-group">
						<label class="control-label">Descripción</label>
						<input class="form-control" type="text" name="descripcion" id="descripcion" placeholder="Descripción">
					</div>
				</form>
			</div>
			<div class="tile-footer">
				<button class="btn btn-primary" type="button" onclick="validar()"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>
			</div>
		</div>
	</div>
</div>
    