<?php
namespace app\Controllers;

use app\Models\Producto;

class ProductoController
{
       public static function addProducto()
       {
              $ModeloProducto = new Producto();
              $nombre = $_POST['nombre'];
              $ModeloProducto->setNombre($nombre);
              $Referencia = $_POST['Referencia'];
              $ModeloProducto->setReferencia($Referencia);
              $Precio = $_POST['Precio'];
              $ModeloProducto->setPrecio($Precio);
              $Peso = $_POST['Peso'];
              $ModeloProducto->setPeso($Peso);
              $Categoria = $_POST['Categoria'];
              $ModeloProducto->setCategoria($Categoria);
              $Stock = $_POST['Stock'];
              $ModeloProducto->setStock($Stock);
             $Fecha_creacion =  date("Y-m-d"); 
              $ModeloProducto->setFecha_creacion($Fecha_creacion);
              $respuesta="";

              if ($ModeloProducto->addProducto() == '1') {
                     $respuesta = 'operacion exitosa';
              }

              $Response = array('respuesta' => $respuesta);
              $json = $Response;
              return $json;
       }
       public static function deleteProducto()
       {
              $ModeloProducto = new Producto();
             
                $idproducto=$_POST['id'];
              $ModeloProducto->setidproducto($idproducto);   
            if ( $ModeloProducto->deleteProducto() == '1') {
                     $respuesta = 'operacion exitosa';
              }

              $Response = array('respuesta' => $respuesta);
              $json = $Response;
              return $json;
       }
       public static function mostrarProducto()
       {
              $ModeloProducto = new Producto();
              $data=$ModeloProducto->Listar_Producto();
              return $data;       
}
       public static function editProducto()
       {
              $ModeloProducto = new Producto();
              $idproducto=$_POST['id'];
              $ModeloProducto->setidproducto($idproducto); 
             $datosedit= $ModeloProducto->editProducto();
  return $datosedit;
       }
       public static function updateProducto()
       {
              $ModeloProducto = new Producto();
              $idproducto=$_POST['idproducto'];
              $nombre = $_POST['nombre'];
              $ModeloProducto->setNombre($nombre);
              $Referencia = $_POST['Referencia'];
              $ModeloProducto->setReferencia($Referencia);
              $Precio = $_POST['Precio'];
              $ModeloProducto->setPrecio($Precio);
              $Peso = $_POST['Peso'];
              $ModeloProducto->setPeso($Peso);
              $Categoria = $_POST['Categoria'];
              $ModeloProducto->setCategoria($Categoria);
              $Stock = $_POST['Stock'];
              $ModeloProducto->setStock($Stock);
              $Fecha_creacion = date("Y-m-d"); ;
              $ModeloProducto->setFecha_creacion($Fecha_creacion);
              $ModeloProducto->setidproducto($idproducto);
             

  if ( $ModeloProducto->updateProducto() == '1') {
                     $respuesta = 'operacion exitosa';
              }

              $Response = array('respuesta' => $respuesta);
              $json = $Response;
              return $json;
       }



}