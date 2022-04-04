
<script type="text/javascript">
window.onload = function(){
	/*
	document.getElementById("editar").addEventListener("click", function(event){
		alert("uuuuuu");
	});
	*/
}

function editar(id){
	let nombreCategoria = document.getElementById("nc"+id).value;
	if(nombreCategoria != ""){
        let descripcionCategoria = document.getElementById("dc"+id).value;
        if(descripcionCategoria != ""){
            editarCategoria(id, nombreCategoria, descripcionCategoria);
        } else {
            alert("Escriba la descripcion de la categoria");
        }
	} else{
		alert("Escriba el nombre de la categoria");
	}
}


function editarCategoria(id, nombreCategoria, descripcionCategoria) {
    const url = "../Categoria/actualizar/"+id+"/"+nombreCategoria+"/"+descripcionCategoria;
    console.log("URL", url);
	fetch(url, {
	    method: 'GET'//,
	    //body: JSON.stringify(objeto)
	    //body: objeto
	})
    .then(function (response) {
        return response.text();
    })
    .then(function (data) {
        alert(data);
        console.log("data", data);
    })
    .catch(function (error) {
        console.error("error", error);
    })
}


function eliminar(id){
	let confirmacion = confirm("Esta suguro(a) que desea eliminar");
    if(confirmacion == true){
    	if(id != ""){
	        eliminarCategoria(id);
	    } else {
	        alert("Error eliminando la categoria");
	    }
    }  
}

function eliminarCategoria(id) {
    fetch("../Categoria/eliminar/"+id, {
        method: 'GET'//,
        //body: JSON.stringify(objeto)
        //body: objeto
    })
    .then(function (response) {
        return response.text();
    })
    .then(function (data) {
        alert(data);
        location.reload();
        console.log("data", data);
    })
    .catch(function (error) {
        console.error("error", error);
    })
}

</script>
<div class="app-title">
	<div>
		<h1><i class="fa fa-th-list"></i> Categorias</h1><p>Home</p>
	</div>
	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
		<li class="breadcrumb-item">Categorias</li>
		<li class="breadcrumb-item active"><a href="#">Home</a></li>
	</ul>
</div>

<div class="row">
	<div class="clearfix"></div>
	<div class="col-md-12">
		<div class="tile">
			<h3 class="tile-title">Todas las Categorias</h3>
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th>N.</th>
							<th>ID</th>
							<th>NOMBRE</th>
							<th>DESCRIPCION</th>
							<th>ACCIONES </th>
							<th><a class="btn btn-primary btn-sm" href="<?php echo VIEW;?>categoria/nueva">Nuevo</a> </th>
						</tr>
					</thead>
					<tbody><?php
						$auto = 1;
						foreach ($data as $row) {?>
						<tr>
							<td><?php echo $auto++;?></td>
							<td><?php echo $row['id'];?></td>
							<td>
								<input type="text" name="nc<?php echo $row['id'];?>" id="nc<?php echo $row['id'];?>" value="<?php echo $row['nombre'];?>">
							</td>
							<td>
								<input type="text" name="dc<?php echo $row['id'];?>" id="dc<?php echo $row['id'];?>" value="<?php echo $row['descripcion'];?>">
							</td>
							<td colspan="2">
								<button class="btn btn-primary" onclick="editar('<?php echo $row['id'];?>');">Editar</button>
								<button class="btn btn-danger" onclick="eliminar('<?php echo $row['id'];?>');">Eliminar</button>
							</td>
						</tr><?php	
						}?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>