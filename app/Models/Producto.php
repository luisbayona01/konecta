<?php 
         namespace app\Models;
         use config\Main;    
         class Producto extends Main{  
         protected $idproducto;
public $nombre;
public $Referencia;
public $Precio;
public $Peso;
public $Categoroa;
public $Stock;
public $Fecha_creacion;
public $Categoria;
public function  setNombre($nombre){
          $this->nombre=$nombre;

         }
public function  setReferencia($Referencia){
          $this->Referencia=$Referencia;

         }
public function  setPrecio($Precio){
          $this->Precio=$Precio;

         }
public function  setPeso($Peso){
          $this->Peso=$Peso;

         }
public function  setCategoria($Categoria){
          $this->Categoria=$Categoria;

         }
public function  setStock($Stock){
          $this->Stock=$Stock;

         }
public function  setFecha_creacion($Fecha_creacion){
          $this->Fecha_creacion=$Fecha_creacion;

         }

         public function setIdproducto($idproducto){
         $this->idproducto= $idproducto;
        }  
        public function addProducto(){
            
            $sql="INSERT INTO producto(nombre, referencia, precio, peso, categoria, stock, fecha_creacion) values('".$this->nombre."','".$this->Referencia."','".$this->Precio."','".$this->Peso."','".$this->Categoria."','".$this->Stock."','".$this->Fecha_creacion."')"; 
 //echo $sql;            
$Query= $this->dbAbreDatabase($sql); 
             if($Query){
               return true;    
             } else{
               return false;
             }
           }

        public function updateProducto(){
           
  $sql="update  producto set nombre='".$this->nombre."',referencia='".$this->Referencia."',
precio='".$this->Precio."',
peso='".$this->Peso."',categoria='".$this->Categoria."',
stock='".$this->Stock."',fecha_creacion='".$this->Fecha_creacion."'where idproducto='".$this->idproducto."'";

//echo $sql;
            $Query= $this->dbAbreDatabase($sql); 
             if($Query){
               return 1;    
             } else{
               return 0;
             }
           }
           public function deleteProducto(){
            $Main=new main();
            $sql=" delete  from producto where idproducto='".$this->idproducto."'"; 
            $Query= $Main->dbAbreDatabase($sql); 
             if($Query){
               return 1;    
             } else{
               return 0;
             }
           } 
           public function editProducto(){
            ;
            $sql=" select * from producto where idproducto='".$this->idproducto."'"; 
            $Query= $this->dbAbreDatabase($sql); 
             $rows=$this->dbTrareGistro($Query);
             return$rows;  
           } 

           public  function Listar_Producto(){
           
           $sql='SELECT * FROM producto';
          $Query=$this->dbAbreDatabase($sql);
           $data=array();
           while($rows=$this->dbTrareGistro($Query)){
           $data[]=$rows;
          
           }
          
            return $data;
           }    


       }