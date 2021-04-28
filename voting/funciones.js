sw=0;
b=0;
w=0;
function prueba(){
	alert('funciona');

}

function votar(id_op){
	sw++;
	if (sw==1) {
	$.ajax({
		url:'controller/votarController.php',
		type:'POST',
		data:'id_nav='+id_op,
		cache:false,
		success:function(rpt){
			$("#rpt_votos").html(rpt);
		}
	});	
	}else{

		alert('Usted ya ha votado');
	}
}

function vote(id_opp){
	b++;
	if (b==1) {
	$.ajax({
		url:'controller/votarController.php',
		type:'POST',
		data:'id_navv='+id_opp,
		cache:false,
		success:function(rpt){
			$("#rpt_votes").html(rpt);
		}
	});	
	}else{
		alert("Usted ya ha votado");
	}
}

function votes(id_oppp){
	w++;
	if (w==1) {
	$.ajax({
		url:'controller/votarController.php',
		type:'POST',
		data:'id_navvv='+id_oppp,
		cache:false,
		success:function(rpt){
			$("#rpt_votess").html(rpt);
		}
	});	 
	}else{

		alert('Usted ya ha votado');
	}
}

// function getIdUser(idUser){

// 	$.ajax({
// 		url:'controller/votarController.php',
// 		type:'POST',
// 		data:'idUserS='+idUser,
// 		cache:false
// 	});	
// }


