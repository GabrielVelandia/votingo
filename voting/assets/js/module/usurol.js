
// Declarar array global que contendra la lista de categorias
var arrRoles = []
//showRoles()

// Llamar funcion de Jquery para accion click del boton addElement

$("#addElement").click(function (e) {
	//Deshabilitar el envio por http
	e.preventDefault()

	var idRole = $("#role_idfk").val() 
	let	nameRole = $("#role_idfk option:selected").text()

	if (idRole != '') {

		if (typeof existRole(idRole) === 'undefined') {

			//Agregar Categoria al Array
			arrRoles.push({
				'id': idRole,
				'nameRole': nameRole
			})

		}
		else{
			alert("El rol ya se encuentra en su selección")
		}

		//Metodo para mostrar la lista de las categorias en html
		showRoles()
	}
	else {
		alert("Seleccione un rol por favor :D")
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

	arrRoles.forEach(function(role){

		if (role.id == 1) {
			$("#list-roles").append('<div class="btn btn-primary ml-3">' +role.nameRole+ '. <span class="badge badge-transparent"><i onclick="removeElement('+role.id+')" class="fas fa-times"></i></div></span></div>')	
		}
		if (role.id == 2) {
			$("#list-roles").append('<div class="btn btn-warning ml-3">' +role.nameRole+ '. <span class="badge badge-transparent"><i onclick="removeElement('+role.id+')" class="fas fa-times"></i></div></span></div>')	
		}
		if (role.id == 3) {
			$("#list-roles").append('<div class="btn btn-info ml-3">' +role.nameRole+ '. <span class="badge badge-transparent"><i onclick="removeElement('+role.id+')" class="fas fa-times"></i></div></span></div>')	
		}
		if (role.id == 4) {
			$("#list-roles").append('<div class="btn btn-danger ml-3">' +role.nameRole+ '. <span class="badge badge-transparent"><i onclick="removeElement('+role.id+')" class="fas fa-times"></i></div></span></div>')	
		}
		
	})	
}

function removeElement(idRole) {
	let index = arrRoles.indexOf(existRole(idRole))
	arrRoles.splice(index, 1)
	showRoles()
	console.log(arrRoles)
}

//Generar el metodo de envio al backend

$("#save").click(function (e) {
	//Deshabilitar el envio por http
	e.preventDefault()

	let url = "?controller=user&method=saveRole"
	let params = {

		user_idfk: 		$("#user_idfk").val(),
		role_idfk: 		$("#role_idfk").val(),
		roles: 			arrRoles
	}

	//Listado POST usando ajax para enviar la información al backend
	$.post(url, params, function (response) {
		//Respuesta del request

		
		if (typeof response.error !== 'undefined') {
			alert(response.message)
		}
		
		
		else {
			alert("Se han agregado los Roles")
			//Redirección al modulo de listar peliculas
			location.href = "?controller=user"
		}
	}, 'json').fail(function (error) {
		alert("Inserción Fallida ("+error.responseText+")")
		console.log(error)
	});


});