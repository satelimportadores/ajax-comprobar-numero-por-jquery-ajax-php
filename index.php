<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="js/jquery-3.1.0.js"></script>
	<script type='text/javascript'>

$(document).ready(function(){
		

		$('.prueba').blur(function(){

			//$("#MostrarTexto").text('Has perdido el foco del text');
			var data = $('.prueba').val();
			
		

		$.ajax({
			url: 'php/test.php',
			type: 'post',
			data: ('prueba='+data),
				success:function(respuesta){
					if (respuesta == 1) {
						$("#MostrarTexto").html("¡Ya existe un pedido con el numero! = "+data);	
						$('.prueba').focus();
					}else{
						$("#MostrarTexto").html("");
					}
				}
		})


		});

});

</script>


</head>
<body>
	<input type="text" class="prueba" name="prueba">
	
	<div id="MostrarTexto"></div>

</body>
</html>