$(document).ready(function(){

cargardata();
llenarselect();

$("#saveventas").click(function(){
let isValid = document.querySelector('#save-venta').reportValidity();
  
 if (isValid==false) {  
  
$('#save-venta').addClass('was-validated')
}else{

let url="http://localhost/konecta/addventa";


let data=$("#save-venta").serialize(); 
saveajax(url,data)

}

})


})

function cargardata(){
$.getJSON("http://localhost/konecta/ventas", function( data ) {
$(".cuerpoProductosventas").html("");   
$.each( data, function( key, val ) {
   $(".cuerpoProductosventas").append("<tr>"+
				 "<td>"+ val.nombre+"</td>"+
				 "<td>"+val.venta+"</td>"+
				"<td>"+val.stockproductos+"</td>"+
				"<td>"+val.cantidadvendida+"</td>"+
				"</tr>")

});
 
  
});
}  

function llenarselect(){
$.getJSON("http://localhost/konecta/productos", function( data ) {
$("#productos").html("");
$("#productos").html('<option value=""> seleccione un  producto</option>');   
$.each( data, function( key, val ) {
   $("#productos").append("<option value="+val.idproducto+">"+ val.nombre+"</option>");

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


 