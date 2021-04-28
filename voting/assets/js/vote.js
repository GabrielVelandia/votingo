sw=0;
function prueba(){
	alert('funciona');

}

function votar(id_op,nom_op){
	sw++;
	if (sw==1) {
	$.ajax({
		url:'././controllers/votarController.php',
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
