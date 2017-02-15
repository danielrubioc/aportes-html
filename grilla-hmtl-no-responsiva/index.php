<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET ?>" />
    <title><?php echo TITULO_SITIOWEB ?></title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>


		<div class="ancho-super">
				<div class="columna1" id="lista1">
					<button class="click-open" href="" id="despliega-1" name="col-1">
					posicion1
					</button>
				</div>
				
				<div class="columna2" id="lista2">
					<button class="click-open" href="" id="despliega-2" name="col-2">
					posicion2
					</button>
				</div>
				<div class="columna3" id="lista3">
					<button class="click-open" href="" id="despliega-3" name="col-3">
					posicion3
					</button>
				</div>
				
				<div class="columna4" id="lista4">
					<button class="click-open" href="" id="despliega-4" name="col-4">
					posicion4
					</button>
				</div>
				<!--segunda fila-->
				<div class="columna5" id="lista5">
					<button class="click-open" href="" id="despliega-1" name="col-5">
					posicion5
					</button>
				</div>
				<div class="columna6" id="lista6">
					<button class="click-open" href="" id="despliega-2" name="col-6">
					posicion6
					</button>
				</div>
				<div class="columna7" id="lista7">
					<button class="click-open" href="" id="despliega-3" name="col-7">
					posicion7
					</button>
				</div>
				<div class="columna8" id="lista8">
					<button class="click-open" href="" id="despliega-4" name="col-8">
					posicion8
					</button>
				</div>
				<!--tercera fila-->

				<div class="columna9" id="lista9">
					<button class="click-open" href="" id="despliega-1" name="col-9">
					posicion9
					</button>
				</div>
				<div class="columna10" id="lista10">
					<button class="click-open" href="" id="despliega-2" name="col-10">
					posicion10
					</button>
				</div>
				<div class="columna11" id="lista11">
					<button class="click-open" href="" id="despliega-3" name="col-11">
					posicion11
					</button>
				</div>
				<div class="columna12" id="lista12">
					<button class="click-open" href="" id="despliega-4" name="col-12">
					posicion12
					</button>
				</div>

				<!--============ CONTENIDO   ===============-->
				<div class="columna1-visible height-defin-content" id="abrir-despliega-1">
					<div class="box-content-selection" id="visible-col-1">
						contenido de posicion 1
						<button class="close-contenido" href="" id="despliega-1" name="col-1">
							cerrar
						</button>
					</div>
					<div class="box-content-selection" id="visible-col-5">
						contenido de posicion 5
						<button class="close-contenido" href="" id="despliega-1" name="col-5">
							cerrar
						</button>
					</div>
					<div class="box-content-selection" id="visible-col-9">
						contenido de posicion 9
						<button class="close-contenido" href="" id="despliega-1" name="col-9">
							cerrar
						</button>
					</div>
				</div>
				<div class="columna2-visible height-defin-content" id="abrir-despliega-2">
					<div class="box-content-selection" id="visible-col-2">
						contenido de posicion 2
						<button class="close-contenido" href="" id="despliega-2" name="col-2">
							cerrar
						</button>
					</div>
					<div class="box-content-selection" id="visible-col-6">
						contenido de posicion 6
						<button class="close-contenido" href="" id="despliega-2" name="col-6">
							cerrar
						</button>
					</div>
					<div class="box-content-selection" id="visible-col-10">
						contenido de posicion 10
						<button class="close-contenido" href="" id="despliega-2" name="col-10">
							cerrar
						</button>
					</div>
				</div>
				<div class="columna3-visible height-defin-content" id="abrir-despliega-3">
					<div class="box-content-selection" id="visible-col-3">
						contenido de posicion 3
						<button class="close-contenido" href="" id="despliega-3" name="col-3">
							cerrar
						</button>
					</div>
					<div class="box-content-selection" id="visible-col-7">
						contenido de posicion 7
						<button class="close-contenido" href="" id="despliega-3" name="col-7">
							cerrar
						</button>
					</div>
					<div class="box-content-selection" id="visible-col-11">
						contenido de posicion 11
						<button class="close-contenido" href="" id="despliega-3" name="col-11">
							cerrar
						</button>
					</div>	
				</div>
				<div class="columna4-visible height-defin-content" id="abrir-despliega-4">
					<div class="box-content-selection" id="visible-col-4">
						contenido de posicion 4
						<button class="close-contenido" href="" id="despliega-4" name="col-4">
							cerrar
						</button>
					</div>
					<div class="box-content-selection" id="visible-col-8">
						contenido de posicion 8
						<button class="close-contenido" href="" id="despliega-4" name="col-8">
							cerrar
						</button>
					</div>
					<div class="box-content-selection" id="visible-col-12">
						contenido de posicion 12
						<button class="close-contenido" href="" id="despliega-4" name="col-12">
							cerrar
						</button>
					</div>	
				</div>
				
		</div>
		

		



<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>



<script>
	
	
$(document).ready(function(){
		
		$('button.click-open').on('click', function (){
			var column = ($(this).attr('id')); //premite abrir div emergente
			var content = ($(this).attr('name')); // permite desplegar contenido
			console.log('#abrir-'+column);
			console.log(content);
				$('#abrir-'+column).toggleClass('visible-event');
				$('#visible-'+content).toggleClass('visible-content');
				$('button.click-open').attr("disabled","disabled"); //deshabilito  botones
		});

		//click en la primera posicion mueve los lementos
		$('#lista1').add('#lista5').add('#lista9').on('click', function (){
			$('#lista2').add('#lista6').add('#lista10').toggleClass('move-left-1-2');
			$('#lista3').add('#lista7').add('#lista11').toggleClass('move-left-1-3');
			$('#lista4').add('#lista8').add('#lista12').toggleClass('move-left-1-4');
		});
		//click en la segunda posicion mueve los lementos
		$('#lista2').add('#lista6').add('#lista10').on('click', function (){
			$('#lista3').add('#lista7').add('#lista11').toggleClass('move-left-2-3');
			$('#lista4').add('#lista8').add('#lista12').toggleClass('move-left-2-4');
		});
		//click en la tercera posicion mueve los lementos
		$('#lista3').add('#lista7').add('#lista11').on('click', function (){
			$('#lista2').add('#lista1').add('#lista6').add('#lista5').add('#lista10').add('#lista9').toggleClass('move-left-3');
		});
		//click en la cuarta posicion mueve los lementos
		$('#lista4').add('#lista8').add('#lista12').on('click', function (){
			$('#lista3').add('#lista7').add('#lista11').toggleClass('move-left-4-3');
			$('#lista2').add('#lista6').add('#lista10').toggleClass('move-left-4-2');
			$('#lista1').add('#lista5').add('#lista9').toggleClass('move-left-4-1');
		});

		//cerrar contenido y remover clases
		$('button.close-contenido').on('click', function (){
			var column = ($(this).attr('id')); //premite abrir div emergente
			var content = ($(this).attr('name')); // permite desplegar contenido
			$('#abrir-'+column).toggleClass('visible-event');
			$('#visible-'+content).toggleClass('visible-content');
			$('button.click-open').removeAttr("disabled","disabled");
				if ((content == 'col-1') || (content == 'col-5') || (content == 'col-9')) {
					$('#lista2').add('#lista6').add('#lista10').removeClass('move-left-1-2');
					$('#lista3').add('#lista7').add('#lista11').removeClass('move-left-1-3');
					$('#lista4').add('#lista8').add('#lista12').removeClass('move-left-1-4');
				};
				if ((content == 'col-2') || (content == 'col-6') || (content == 'col-10')) {
					$('#lista3').add('#lista7').add('#lista11').toggleClass('move-left-2-3');
					$('#lista4').add('#lista8').add('#lista12').toggleClass('move-left-2-4');
				};
				if ((content == 'col-3') || (content == 'col-7') || (content == 'col-11')) {
					$('#lista2').add('#lista1').add('#lista6').add('#lista5').add('#lista10').add('#lista9').toggleClass('move-left-3');
				};
				if ((content == 'col-4') || (content == 'col-8') || (content == 'col-12')) {
					$('#lista3').add('#lista7').add('#lista11').toggleClass('move-left-4-3');
					$('#lista2').add('#lista6').add('#lista10').toggleClass('move-left-4-2');
					$('#lista1').add('#lista5').add('#lista9').toggleClass('move-left-4-1');
				};
		});
  		

   });


</script>

</body>
</html>
