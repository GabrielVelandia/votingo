function prueba()
{
	alert("Funciona");
}

function votar(id_op,now_op)
{
	$.ajax({
		url:'../../controllers/votingController.php',
		type:'POST',
		data:'id_nav='+id_op,
		cache:false,
		success:function(rpt)
		{
			$("#rpt_votos").html(rpt);
		}

	});
}