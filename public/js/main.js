$(document).ready(function(){
//console.log('ok');
cargardata();

$("#GuardarProducto").click(function(){
let isValid = document.querySelector('#save-producto').reportValidity();
  
 if (isValid==false) {  
  
$('#save-producto').addClass('was-validated')
}else{

let url="http://localhost/konecta/productos";


let data=$("#save-producto").serialize(); 
saveajax(url,data)

}
})
$("#Saveedit").click(function(){

let isValid = document.querySelector('#edit-producto').reportValidity();
  
 if (isValid==false) {  
  
$('#save-producto').addClass('was-validated')
}else{

let url="http://localhost/konecta/editproductos";


let data=$("#edit-producto").serialize(); 
saveajax(url,data)

}

})


})


function eliminar(id){

let url="http://localhost/konecta/deleteproducto";


let data={'id':id}; 
saveajax(url,data)
}

function editar(id){
//console.log(id);



$( "#prueba" ).load( "http://localhost/konecta/showproductos",{ "id": id } )

$("#editmodal").modal('show');
}

function cargardata(){
$.getJSON("http://localhost/konecta/productos", function( data ) {
$(".cuerpoProductos").html("");   
$.each( data, function( key, val ) {
   $(".cuerpoProductos").append("<tr>"+
				 "<td>"+ val.idproducto+"</td>"+
				 "<td>"+val.nombre+"</td>"+
				"<td>"+val.referencia+"</td>"+
				"<td>"+val.precio+"</td>"+
				"<td>"+val.peso+"</td>"+
				"<td>"+val.categoria+"</td>"+
				"<td>"+val.stock+"</td>"+
				"<td>"+val.fecha_creacion+"</td>"+
               "<td> <button type='button'class='btn btn-info' onclick=editar("+ val.idproducto+")> editar</button>   </td>"+
              "<td> <button type='button'class='btn btn-danger' onclick=eliminar("+ val.idproducto+")> eliminar</button>   </td>"+
			 "</tr>")

});
 
  
});


} 


function saveajax(url,data){
$.post(url, data)
  .done(function(datos ) {
//console.log(datos.respuesta)    
alert(datos.respuesta)
//alert('respuesta',datos.respuesta );
cargardata();
  });

}