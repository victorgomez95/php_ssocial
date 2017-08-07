function Registrar(accion)
{

	idempleado= document.frmPelicula.idempleado.value;
	nombre= document.frmPelicula.nombre.value;
	appaterno= document.frmPelicula.appaterno.value;
	apmaterno= document.frmPelicula.apmaterno.value;
	puesto= document.frmPelicula.puesto.value;
	salario= document.frmPelicula.salario.value;

	if(accion=='uno')
	{
		$.post("php/registrar.php",{
				idempleado:idempleado,
				nombre:nombre,
				appaterno:appaterno,
				apmaterno:apmaterno,
				puesto:puesto,
				salario:salario
		});
	}
	alert("Registro guardado ");
	window.location.reload(true);
}

function Eliminar(idempleado)
{
	if(confirm("Confirma que desea eliminar este registro"))
	{

		$.post("php/eliminar.php",{
				idempleado:idempleado,
		});

	}
	else
	{

	}
	window.location.reload(true);
}
