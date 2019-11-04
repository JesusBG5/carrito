var producto = 0;
window.onload=function(){

}
function agregarCarrito(nombre,precio){
	if(producto==0){
		crearTabla();
	}
	agregarFila(nombre,precio);
}
function agregarFila(nombre,precio){
	var t = document.getElementById("tabla");
	var fila = document.createElement("tr");
	t.appendChild(fila);
	fila.innerHTML="<td>"+nombre+"</td><td>"+precio+"</td>";
	producto++;
}
function crearTabla(){
	var seccion = document.getElementById("principal");
	var t = document.createElement("table");
	t.setAttribute("id","tabla");
	t.setAttribute("class","tabla");
	seccion.appendChild(t);
	
	var encabezado2 = document.createElement("th");
	t.appendChild(encabezado2);
	encabezado2.innerHTML="Nombre";

	var encabezado = document.createElement("th");
	t.appendChild(encabezado);
	encabezado.innerHTML="Precio";
	producto++;
}