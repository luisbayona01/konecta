<?php
use app\Controllers\ProductoController;
use app\Controllers\VentarealizadaController;
 /* cabezeras  encaso de acceder de manera externa*/
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('content-type: application/json; charset=utf-8');


$route->get('/',function(){
    header( 'Location:'.$_SERVER['REQUEST_URI']."app/views/producto.php");
     
}); 

 
$route->get('/productos',function(){
   
$productoController= new ProductoController();
  echo json_encode($productoController->mostrarProducto()) ;
     
 });


$route->post('/productos',function(){
   
$productoController= new ProductoController();
 $data=$productoController->addProducto() ;

 echo json_encode($data);  
 });


$route->post('/showproductos',function(){
$productoController= new ProductoController();
$editdata=$productoController->editProducto();
$containing_dir = $_SERVER["DOCUMENT_ROOT"]."/konecta/app/Views/updateProducto.php";

//echo $containing_dir;
  require_once($containing_dir); 

//include_once ROOT."/app/views/updateProducto.php"; 

 });

$route->post('/editproductos',function(){
   
$productoController= new ProductoController();
  echo json_encode($productoController->updateProducto());
     
 });

$route->post('/deleteproducto',function(){
   
$productoController= new ProductoController();
  echo json_encode($productoController->deleteProducto());
     
 });

$route->post('/addventa',function(){
   
$VentarealizadaController= new VentarealizadaController();
  echo $VentarealizadaController->addVentarealizadas();
     
 });


$route->get('/ventas',function(){
   
$VentarealizadaController= new VentarealizadaController();
  echo json_encode($VentarealizadaController->mostrarventa());
     
 });


$route->get('/showventas',function(){
   
    header( "Location:http://localhost/konecta/app/views/ventas.php");
     
 });

?>