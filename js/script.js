$(document).on('ready',iniciar);

function iniciar()
{
	

	$varNomb= $('#NomProducto');
	$varCod= $('#CodProducto');
	$varBusc= $('#Buscar');
	$varPrecio= $('#PrecioProducto');
	$varCanti= $('#CantProducto');
	$varDescr= $('#DescProducto');
	$varCateg= $('#Combo');
	$varImg= $('#imagen');
	$varNuevoPro= $('#NuevoPro');
	$varEditarPro= $('#EditarPro');
	$varEliminarPro= $('#EliminarPro');
	$varGuardar= $('#Guardar');
	$varEliminar= $('#Eliminar');
	$varActualizar= $('#Actualizar');
	$varCancelar= $('#Cancelar');
	$varlimpiar= $('#btncancelar');
	
	$varNomb.attr('disabled','disabled');
	$varCod.attr('disabled','disabled');
	$varBusc.attr('disabled','disabled');
	$varPrecio.attr('disabled','disabled');
	$varCanti.attr('disabled','disabled');
	$varDescr.attr('disabled','disabled');
	$varCateg.attr('disabled','disabled');
	$varImg.attr('disabled','disabled');
	$varGuardar.attr('disabled','disabled');
	$varEliminar.attr('disabled','disabled');
	$varActualizar.attr('disabled','disabled');
	$varCancelar.attr('disabled','disabled');
	

	
	
	$varNuevoPro.on('click', NuevoPro);
	$varEditarPro.on('click', EditarPro);
	$varEliminarPro.on('click', EliminarPro);
	$varlimpiar.on('click', Limpiar);
	
	


}

function Limpiar()
{
	$(":text").each(function(){	
			$($(this)).val('');
	});
}

function NuevoPro()
{
	alert("NuevoPro 4");

	$varNomb= $('#NomProducto');
	$varCod= $('#CodProducto');
	$varBusc= $('#Buscar');
	$varPrecio= $('#PrecioProducto');
	$varCanti= $('#CantProducto');
	$varDescr= $('#DescProducto');
	$varCateg= $('#Combo');
	$varImg= $('#imagen');
	$varEditarPro= $('#EditarPro');
	$varEliminarPro= $('#EliminarPro');
	$varGuardar= $('#Guardar');
	$varCancelar= $('#Cancelar');
	

	$varEditarPro.attr('disabled','disabled');
	$varEliminarPro.attr('disabled','disabled');
	
	$varNomb.removeAttr("disabled");
	$varCod.removeAttr("disabled");
	$varPrecio.removeAttr("disabled");
	$varCanti.removeAttr("disabled");
	$varDescr.removeAttr("disabled");
	$varCateg.removeAttr("disabled");
	$varImg.removeAttr("disabled");
	$varGuardar.removeAttr("disabled");
	$varCancelar.removeAttr("disabled");

	$varCancelar.on('click', Cancelar);
	$varGuardar.on('click', insertar);
		

}

function insertar()
{
	alert("Guardar");
	var Nomb= $('#NomProducto').val();
	var Cod= $('#CodProducto').val();
	
	var Precio= $('#PrecioProducto').val();
	var Canti= $('#CantProducto').val();
	var Descr= $('#DescProducto').val();
	var Categ= $('#Combo').val();
	var Img= $('#imagen').val();
   alert(Img);
	var datos = "NomProducto="+Nomb+"&CodProducto="+Cod+"&PrecioProducto="+Precio+"&CantProducto="+Canti+"&DescProducto="+Descr+"&Combo="+Categ+"&imagen="+Img;


	$.ajax({
		url : "insertar.php",
		type: "POST",
		data: {
			NomProducto:Nomb,
			CodProducto:Cod,
			PrecioProducto:Precio,
			CantProducto:Canti,
			DescProducto:Descr,
			Combo:Categ,
			imagen:Img
						
		},

		beforeSend: function(){
			console.log("Enviando");
		},
		success: function(e){

			console.log(e);
			
			console.log("sati");
			/*if (respuesta==1)
			{
				$('#mensaje').html('Articulo Guardado');
			}

			else (respuesta==2)
			{
				$('#mensaje').html('no Guardado');
			}*/

		}


	});

}



function EditarPro()
{
	
alert("EditarPro");
	$varNomb= $('#NomProducto');
	$varCod= $('#CodProducto');
	$varBusc= $('#Buscar');
	$varPrecio= $('#PrecioProducto');
	$varCanti= $('#CantProducto');
	$varDescr= $('#DescProducto');
	$varCateg= $('#Combo');
	$varImg= $('#imagen');
	$varNuevoPro= $('#NuevoPro');
	$varEditarPro= $('#EditarPro');
	$varEliminarPro= $('#EliminarPro');
	$varGuardar= $('#Guardar');
	$varEliminar= $('#Eliminar');
	$varActualizar= $('#Actualizar');
	$varCancelar= $('#Cancelar');
	
	$varNuevoPro.attr('disabled','disabled');
	$varEliminarPro.attr('disabled','disabled');

	$varCod.removeAttr("disabled");
	$varBusc.removeAttr("disabled");
	
	
	$varCancelar.removeAttr("disabled");


	$varCancelar.on('click', Cancelar);

}

function EliminarPro()
{
////////////////////////////////////	
	$varNomb= $('#NomProducto');
	$varCod= $('#CodProducto');
	$varBusc= $('#Buscar');
	$varPrecio= $('#PrecioProducto');
	$varCanti= $('#CantProducto');
	$varDescr= $('#DescProducto');
	$varCateg= $('#Combo');
	$varImg= $('#imagen');
	$varNuevoPro= $('#NuevoPro');
	$varEditarPro= $('#EditarPro');
	$varEliminarPro= $('#EliminarPro');
	$varGuardar= $('#Guardar');
	$varEliminar= $('#Eliminar');
	$varActualizar= $('#Actualizar');
	$varCancelar= $('#Cancelar');


	$varNuevoPro.attr('disabled','disabled');
	$varEditarPro.attr('disabled','disabled');

	$varCod.removeAttr("disabled");
	$varBusc.removeAttr("disabled");
	
	
	$varCancelar.removeAttr("disabled");


	$varCancelar.on('click', Cancelar);


	
}

	
function Cancelar()
{
	$varNuevoPro.removeAttr("disabled");
	$varEditarPro.removeAttr("disabled");
	$varEliminarPro.removeAttr("disabled");


	iniciar();

}

