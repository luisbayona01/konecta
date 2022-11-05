<?php 
                      namespace app\Controllers;
                      use app\Models\ Ventarealizada;
                      
                      class VentarealizadaController {
                       Public    function addVentarealizadas(){
           $ModeloVentarealizada=new Ventarealizada();
            $idproducto=$_POST['idproducto'];
           $ModeloVentarealizada->setIdproducto($idproducto);

   $cantidad=$_POST['cantidad'];
$ModeloVentarealizada->setCantidad($cantidad);


 $sctok= $ModeloVentarealizada->validastock();            

if($sctok!=0){
 $respuesta='no es posible realizar la venta ';
$Response=array('respuesta'=>$respuesta);
           $json=json_encode($Response);
          return $json;
      

}


           if($ModeloVentarealizada->addVentarealizada()== '1'){
                  $respuesta='operacion exitosa';
                 $this->updatestockproduct($idproducto,$cantidad);
                 }   

           $Response=array('respuesta'=>$respuesta);
           $json=json_encode($Response);
          return $json;
                 }
public  function  updatestockproduct($idproducto,$cantidad){  
$ModeloVentarealizada=new Ventarealizada();
$ModeloVentarealizada->setIdproducto($idproducto);
$ModeloVentarealizada->setCantidad($idproducto);
$ModeloVentarealizada->updatestockproducto();

 }

       public static function mostrarventa()
       {
              $ModeloVentarealizada = new Ventarealizada();
              $data=$ModeloVentarealizada->listarventas();
              return $data;       
}
 
}