$(document).ready(function(){
	iniciarTabla();

});

	var miTabla = 'tabla1'; // poner aquí el id de la tabla que queremos editar

	// preparar la tabla para edición
	function iniciarTabla() {
		tab = $(this).attr(miTabla);
	    filas = tab.getElementsByTagName('tr');

		  for (i=0; fil = filas[i]; i++) {
		  	celdas = fil.getElementsByTagName('td');
		    for (j=0; cel = celdas[j]; j++) {
		      //if ((i>0 && j==celdas.length-1) ) continue; // La última columna  y la última fila no se pueden editar
		      cel.onclick = function() {crearInput(this)} 
		    } // end for j 
		  } //end for i
	    
	} // end function

	// crear input para editar datos
	function crearInput(celda) {
		celda.onclick = function() {return false}
	  	txt = celda.innerHTML;
	  	celda.innerHTML = '';
	    obj = celda.appendChild(document.createElement('input'));
	  	obj.value = txt;
	  	obj.focus();
	  	obj.onblur = function() {
		    txt = this.value;
		    celda.removeChild(obj);
		    celda.innerHTML = txt;
		    celda.onclick = function() {crearInput(celda)
		}  
	  }
	}




