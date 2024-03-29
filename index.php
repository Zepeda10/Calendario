<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Calendario Diciembre</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script><!--Cagando Query-->
	<link rel="stylesheet" href="css/estilos.css">
	<link id="tema" rel="stylesheet" href="css/rojo.css">
	<script type="text/javascript" src="js/Acciones.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">
</head>

<body>
	<h2 id="titulo">Calendario Diciembre 2020</h2>

		<div id="selector-theme">
			<p id="p">Seleccionar tema:</p>
			<div id="to-red"></div>
			<div id="to-green"></div>
			<div id="to-blue"></div>
			<div id="to-purple"></div>
			<div id="to-brown"></div>
		</div>

		<a href="javascript:abrir()">
			<button id="btn">Enviar Fecha</button>
		</a>

	<table id="tabla1">
		<thead>
			<tr>
				<th>1</th>
				<th>2</th>
				<th>3</th>
				<th>4</th>
				<th>5</th>
				<th class="festivo">6</th>
				<th>7</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Martes</td>
				<td>Miércoles</td>
				<td>Jueves</td>
				<td>Viernes</td>
				<td>Sábado</td>
				<td>Domingo</td>
				<td>Lunes</td>
			</tr>
			<tr>
				<td class="act">Tarea 1</td>
				<td class="act">Tarea 2</td>
				<td class="act">Tarea 3</td>
				<td class="act">Tarea 4</td>
				<td class="act">Tarea 5</td>
				<td class="act">Tarea 6</td>
				<td class="act">Tarea 7</td>
			</tr>
		</tbody>
		<thead>
			<tr>
				<th class="festivo">8</th>
				<th>9</th>
				<th>10</th>
				<th>11</th>
				<th>12</th>
				<th class="festivo">13</th>
				<th>14</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Martes</td>
				<td>Miércoles</td>
				<td>Jueves</td>
				<td>Viernes</td>
				<td>Sábado</td>
				<td>Domingo</td>
				<td>Lunes</td>
			</tr>
			<tr>
				<td class="act">Tarea 1</td>
				<td class="act">Tarea 2</td>
				<td class="act">Tarea 3</td>
				<td class="act">Tarea 4</td>
				<td class="act">Tarea 5</td>
				<td class="act">Tarea 6</td>
				<td class="act">Tarea 7</td>
			</tr>
		</tbody>
		<thead>
			<tr>
				<th>15</th>
				<th>16</th>
				<th>17</th>
				<th>18</th>
				<th>19</th>
				<th class="festivo">20</th>
				<th>21</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Martes</td>
				<td>Miércoles</td>
				<td>Jueves</td>
				<td>Viernes</td>
				<td>Sábado</td>
				<td>Domingo</td>
				<td>Lunes</td>
			</tr>
			<tr>
				<td class="act">Tarea 1</td>
				<td class="act">Tarea 2</td>
				<td class="act">Tarea 3</td>
				<td class="act">Tarea 4</td>
				<td class="act">Tarea 5</td>
				<td class="act">Tarea 6</td>
				<td class="act">Tarea 7</td>
			</tr>
		</tbody>
		<thead>
			<tr>
				<th>22</th>
				<th>23</th>
				<th>24</th>
				<th class="festivo">25</th>
				<th>26</th>
				<th class="festivo">27</th>
				<th>28</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Martes</td>
				<td>Miércoles</td>
				<td>Jueves</td>
				<td>Viernes</td>
				<td>Sábado</td>
				<td>Domingo</td>
				<td>Lunes</td>
			</tr>
			<tr>
				<td class="act">Tarea 1</td>
				<td class="act">Tarea 2</td>
				<td class="act">Tarea 3</td>
				<td class="act">Tarea 4</td>
				<td class="act">Tarea 5</td>
				<td class="act">Tarea 6</td>
				<td class="act">Tarea 7</td>
			</tr>
		</tbody>
		<thead>
			<tr>
				<th>29</th>
				<th>30</th>
				<th>31</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Martes</td>
				<td>Miércoles</td>
				<td>Jueves</td>
			</tr>
			<tr>
				<td class="act">Tarea 1</td>
				<td class="act">Tarea 2</td>
				<td class="act">Tarea 3</td>
			</tr>
		</tbody>
	</table>

	<span id="mensaje"></span>

	<div id="formulario">

		<div id="cerrar">
			<a href="javascript:cerrar()"><img src="img/error.ico" ></a>
		</div>

		<h2>Enviar Fecha</h2>
		<form action="javascript:enviada()"  accept-charset="utf-8">
			<label for="correo">Correo Electrónico</label><br><br>
			<input type="text" id="correo" placeholder="Email de destino"><br><br>
			<label for="fecha">Fecha</label><br><br>
			<input type="date" id="fecha" min="2020-12-01" max="2020-12-31"><br><br>
			<label for="actividad">Actividad</label><br><br>
			<textarea id="actividad" cols="30" rows="3" placeholder="Actividad del día"></textarea><br><br>
			<button id="env" type="enviar">Enviar</button><br><br>
		</form>


	</div>
	
</body>
</html>