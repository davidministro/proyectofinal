$(document).on('ready',iniciar);

function iniciar()
{
	

	$varNomb= $('#NomProducto');
	$varCod= $('#CodProducto');
	$varBusc= $('#Buscar');
	$varPrecio= $('#PrecioProducto');
	$varCanti= $('#CantProducto');
	$varDescr= $('#DescProducto');
	
	$varEliminarPro= $('#EliminarPro');
	$varEliminar= $('#Eliminar');
	$varCancelar= $('#Cancelar');
	
	$varNomb.attr('disabled','disabled');
	$varPrecio.attr('disabled','disabled');
	$varCanti.attr('disabled','disabled');
	$varDescr.attr('disabled','disabled');
	$varEliminar.attr('disabled','disabled');

	
	
	

	$varBusc.on('click', BuscarPro);
	


}

function BuscarPro()
{
////////////////////////////////////	

 var Cod= $('#CodProducto').val();

alert(Cod);
 var datos = "CodProducto="+Cod;
 alert(datos);
 	$.ajax({
		url : "eliminar.php",
		type: "POST",
		data: {
			CodProducto:Cod
		},
		beforeSend: function(){
			console.log("Enviando");
		},
		success: function(e){
			console.log(e);
			alert ('eliminado');
			
			console.log("Eliminado");
		}


	});







$varEliminar.removeAttr("disabled");
$varEliminar.on('click', EliminarPro);

}



function EliminarPro()
{
////////////////////////////////////	
	

	
}

	
function Cancelar()
{
	$varNuevoPro.removeAttr("disabled");
	$varEditarPro.removeAttr("disabled");
	$varEliminarPro.removeAttr("disabled");


	iniciar();

}

