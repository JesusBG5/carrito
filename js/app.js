var producto = 0;
window.onload=function(){

}
function agregarCarrito(nombre,precio){
	if(producto==0){
		crearTabla();
	}
	var total = document.getElementById("precioTotal");
	var valor = total.innerText;
	valor = precio + parseInt(valor);
	total.innerHTML = valor;
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
	var articulo = document.getElementById("total");
	var t = document.createElement("table");
	t.setAttribute("id","tabla");
	t.setAttribute("class","tabla");
	articulo.appendChild(t);
	
	var encabezado2 = document.createElement("th");
	t.appendChild(encabezado2);
	encabezado2.innerHTML="Nombre";

	var encabezado = document.createElement("th");
	t.appendChild(encabezado);
	encabezado.innerHTML="Precio";
	producto++;

	var t2 = document.createElement("table");
	t2.setAttribute("id","resultado");
	t2.setAttribute("class","tabla");
	articulo.appendChild(t2);
	var encabezado3 = document.createElement("th");
	t2.appendChild(encabezado3);
	encabezado3.innerHTML="Total";
	var encabezado3 = document.createElement("th");
	t2.appendChild(encabezado3);
	encabezado3.setAttribute("id","precioTotal");
	encabezado3.innerHTML="0";
}