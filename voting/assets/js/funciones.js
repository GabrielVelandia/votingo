
function prueba(){
	alert('funciona');

}

function votar(id_op,nom_op){
	
	$.ajax({
		url:'controller/votarController.php',
		type:'POST',
		data:'id_nav='+id_op,
		cache:false,
		success:function(rpt){
			$("#rpt_votos").html(rpt);
		}
	});	
}