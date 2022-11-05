<?php 
         namespace app\Models;
         use config\Main;    
         class Ventarealizada extends  Main    {  
         
public $idproducto;
public $cantidad;
public function  setIdproducto($idproducto){
          $this->idproducto=$idproducto;

         }
public function  setCantidad($cantidad){
          $this->cantidad=$cantidad;

         }


public   function validastock(){
$sql= "select  stock  from producto  where idproducto='".$this->idproducto."' and stock=0  "; 

$Query= $this->dbAbreDatabase($sql);
$rows= $this->numeroDeCampos($Query);
return $rows;
}
         
        public function addVentarealizada(){
            $Main=new main();
            $sql="insert into ventarealizada (idproducto,cantidad) values('".$this->idproducto."','".$this->cantidad."')"; 
       //echo $sql;            
$Query= $Main->dbAbreDatabase($sql); 
             if($Query){
               return true;    
             } else{
               return false;
             }
           }

        public function updatestockproducto(){
            $Main=new main();
$sqlstock="select stock  from producto  where idproducto='".$this->idproducto."' "; 
$querystock= $this->dbAbreDatabase($sqlstock);           
$rowstock=$this->dbTrareGistro($querystock);
//echo $rowstock['stock'];
//echo $this->cantidad;

if($rowstock['stock']>$this->cantidad){
$stocknuevo=  $rowstock['stock'] - $this->cantidad;

}else{
$stocknuevo=   $this->cantidad - $rowstock['stock'];

}


 $sql="update producto set stock='".$stocknuevo."'where idproducto='".$this->idproducto."'"; 
            $Query= $Main->dbAbreDatabase($sql); 
             if($Query){
               return 1;    
             } else{
               return 0;
             }
           }
          

           public  function listarventas(){
           
           $sql='SELECT p.idproducto,p.nombre,(p.precio * v.cantidad) as venta ,p.stock as stockproductos,v.cantidad as cantidadvendida 
from ventarealizada v LEFT JOIN producto p on p.idproducto=v.idproducto  group by p.idproducto';
          $Query=$this->dbAbreDatabase($sql);
           $data=array();
           while($rows=$this->dbTrareGistro($Query)){
           $data[]=$rows;
          
           }
          
            return $data;
           }    


       }