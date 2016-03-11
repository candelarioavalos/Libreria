<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>Librería</title>

        <link rel="stylesheet" type="text/css" href="/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <nav>
			  <div class="nav-wrapper">
			    <a href="" class="brand-logo center">PRÁCTICA CON MATERIALIZE</a>
			    <ul id="nav-mobile" class="right hide-on-med-and-down">
			      <li><a href=""><i class="material-icons left">add_shopping_cart</i>Carrito</a></li>
			      <li><a href=""><i class="material-icons left">person</i>Mi Cuenta</a></li> 
			    </ul>
			  </div>
		</nav>
		<div class="row card-panel blue-grey lighten-4">

		    <div class="col s12 blue-grey lighten-2">
				<table class="striped">
				    <thead>
				        <tr>
				        	<th data-field="name">Apellidos</th>
				            <th data-field="name">Nombre</th>
				            <th data-field="name">Edad</th>
				            <th data-field="name">E-mail</th>
				            <th data-field="name">Ciudad</th>
				            <th data-field="name">Teléfono</th>
				        </tr>
				    </thead>

				    <tbody>
				        <tr>
				            <td>Avalos Contreras</td>
				            <td>Candelario</td>
				            <td>30</td>
				            <td>cande@gmail.com</td>
				            <td>Manzanillo</td>
				            <td>3141010106</td>
				        </tr>
				        <tr>
				            <td>Avalos Contreras</td>
				            <td>Francisco</td>
				            <td>35</td>
				            <td>pancho@gmail.com</td>
				            <td>Manzanillo</td>
				            <td>3141010101</td>
				        </tr>
				        <tr>
				            <td>Duarte Cervantes</td>
				            <td>Mariana</td>
				            <td>22</td>
				            <td>mary@gmail.com</td>
				            <td>Villa de Álvarez</td>
				            <td>3141010105</td>
				        </tr>
				        <tr>
				            <td>Miranda Ramírez</td>
				            <td>Olga</td>
				            <td>26</td>
				            <td>olga@gmail.com</td>
				            <td>Tecomán</td>
				            <td>3141010104</td>
				        </tr>
				        
				    </tbody>
		      	</table>
		       			<br/><br/><br/>
		    </div>
    	</div>
    	<div class="col s4 card-panel green accent-1"><br/>
    		<table class="striped">
				<thead>
				    <tr>
				    	<th data-field="name">Este es un formulario</th>
				        <th data-field="name">Lista desordenada de colores</th>
				        <th data-field="name">Lista ordenada de colores</th>
				    </tr>
				</thead>

				<tbody>
				    <tr>
				    	<td>
				    		<form action="/form" method="POST">
					       		<i class="material-icons">account_box</i>
								<label>Nombre:</label>
								<input type="text" name="nombre"/><br/>

								<i class="material-icons">tag_faces</i>
								<label>Nick:</label>
								<input type="text" name="nick"/><br/>

								<label>Email:</label>
								<input type="email" name="email"/><br/>

								<i class="material-icons">lock</i>
								<label>Password:</label>
								<input type="password" name="password"/><br/>

								<i class="material-icons">contact_phone</i>
								<label>Telefono:</label>
								<input type="tel" name="telefono"/><br/>

								<button class="btn waves-effect waves-light" type="submit" name="action">Enviar
					    		<i class="material-icons right">send</i>
					 	 		</button>
						   	</form><br/>
				    	</td>	
				        <td>
				        	<ul class="collection">
						      <li class="collection-item">Verde</li>
						      <li class="collection-item">Azul</li>
						      <li class="collection-item">Amarillo</li>
						      <li class="collection-item">Rojo</li>
						      <li class="collection-item">Negro</li>
						      <li class="collection-item">Rosa</li>
						      <li class="collection-item">Café</li>
						      <li class="collection-item">Naranja</li>
						      <li class="collection-item">Morado</li>
						   </ul>
				        </td>
				        <td>
				        	<ol class="collection">
						      <li class="collection-item">Verde</li>
						      <li class="collection-item">Azul</li>
						      <li class="collection-item">Amarillo</li>
						      <li class="collection-item">Rojo</li>
						      <li class="collection-item">Negro</li>
						      <li class="collection-item">Rosa</li>
						      <li class="collection-item">Café</li>
						      <li class="collection-item">Naranja</li>
						      <li class="collection-item">Morado</li>
						   </ol>
				        </td>
				    </tr>
				</tbody>
		    </table>
		       
		</div>
		<div class="video-container">
	        <iframe width="853" height="480" src="http://www.w3schools.com/" frameborder="0" allowfullscreen></iframe>
	    </div>





    </body>
</html>