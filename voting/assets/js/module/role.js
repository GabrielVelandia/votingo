// Declarar array global que contendra la lista de las categorias
//var arrCategories = []
showRoles()
// LLamar funcion de jquery para accion del boton añadir categoria 

$("#addElement").click(function (e) {
	// Deshabilitar el envio por Http
	e.preventDefault()

	let idRole = $("#role").val()
	let nameRole = $("#role option:selected").text()

	if (idRole != ''){
		if (typeof existRole(idRole) === 'undefined') {
			//agregar categoria al array
			arrRoles.push({
				'id': idRole,
				'name': nameRole
			})
		}else{
			alert("El rol ya se Encuentra Seleccionado")
		}
		// Metodo para mostrar en Html el array de las categorias 
		showRoles()
	}else{
		alert("Debe Seleccionar un Rol ")
	}

});

function existRole(idRole) {
	let existRole = arrRoles.find(function (role) {
		return role.id == idRole
	})
	return existRole
}

function showRoles(){
	$("#list-roles").empty()

	arrRoles.forEach(function (role){
		$("#list-roles").append('<div class="form-group"><button onclick="removeElement('+role.id+')" class="btn btn-danger">X</button><span>'+role.name+'</span></div>')
	})
}

function removeElement(idRole) {
	let index = arrRoles.indexOf(existRole(idRole))
	arrRoles.splice(index,1)
	showRoles()
	console.log(arrRoles)
}

//Generar el metodo de envio al controlador

$("#submit").click(function (e){
	// Deshabilitar el envio por Http
	e.preventDefault() 

	let url = "?controller=user&method=save"
	let params = {
		name: 			$("#name").val(),
		last_name: 	$("#last_name").val(),
		document: 		$("#document").val(),
		cellphone: 		$("#cellphone").val(),
		email: 		$("#email").val(),
		roles: 	arrRoles
	}



	// Metodo post usando ajax para enviar la informacion al controlador
	$.post(url, params, function(response){
		//Respuesta del Request
		if (typeof response.error !== 'undefined') {
			alert(response.message)
		}else{
			alert("Insercion Satisfactoria")
			//redirrecion al modulo de listar peliculas
			location.href = "?controller=user"
		}
	}, 'json').fail(function (error) {
		alert("Insercion Fallida ("+error.responseText+")")
	});

});