<?php 
require_once "header.php";
require_once "menu.php";

?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">

			<h1>Contactame</h1>
			<br>
			<p>Puedes contactarte conmigo a través del siguiente formulario. Si piensas que algo puede ser mejorado
			o agregado al mismo, o si simplemente quieres conversar conmigo, esta es la forma de hacerlo. </p>	
			<form>
				<div class="form-group">
					<label for="exampleFormControlInput1"></label>Correo electronico
					<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
				</div>

				<div class="form-group">
					<label ></label>Telefono
					<input type="" class="form-control" id="Numero telefonico" placeholder="numero telefonico">
				</div>

				<div class="form-group">
					<label for="exampleFormControlTextarea1"></label>Mensaje
					<textarea class="form-control" id="Mensaje" rows="3" placeholder="Escribe aqui tu mensaje"></textarea>
				</div>

				<div>
					<button name="boton" id="boton">Enviar</button>
				</div>
			</form>

			<?php 
			require_once "footer.php"
			?>