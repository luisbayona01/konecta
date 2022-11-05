<html lang="en">
    <head>
        <title>gestion productos</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
       <script src="../../public/js/main.js"></script>
    </head>
    <body ><div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/konecta/">productos <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/konecta/showventas">ventas</a>
      </li>
     
     
    </ul>
   
  </div>
</nav>



            <h2>listarProducto</h2>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalinsert">
Agregar producto
</button>


<div class="alert alert-primary" role="alert" style="display:none" id="respuesta">
  This is a primary alert—check it out!
</div>
             <div class="table-responsive">
	<table class="table">
		<thead>
			<tr>
				<th>idproducto</th>
				<th>nombre</th>
				<th>Referencia:</th>
				<th>Precio</th>
				<th>Peso</th>
				<th>Categoria</th>
				<th>Stock</th>
				<th>Fecha_creacion</th>
			</tr>
		</thead>
		<tbody class="cuerpoProductos">
			
		</tbody>
	</table>
</div>
           <div id="myModalinsert" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<h4 class="modal-title">Agregar Producto</h4>
				<form id="save-producto" class="needs-validation" novalidate>
					<div class="form-group">
						<label for="nombre">nombre:</label>
						<input type="text" class="form-control" id="nombre" placeholder="Enter nombre" name="nombre" required/>
                 <div class="invalid-feedback">
                                    El Campo nombre es obligatorio
                                </div>
					</div>
					<div class="form-group">
						<label for="Referencia:">Referencia:</label>
						<input type="text" class="form-control" id="Referencia" placeholder="Enter Referencia:" name="Referencia" required/>
  <div class="invalid-feedback">
                                    El Campo Referencia es obligatorio
                                </div>					
</div>
					<div class="form-group">
						<label for="Precio">Precio:</label>
						<input type="number" class="form-control" id="Precio" placeholder="Enter Precio" name="Precio" required />
 <div class="invalid-feedback">
                                    El Campo precio es obligatorio
                                </div>									
</div>
					<div class="form-group">
						<label for="Peso">Peso:</label>
						<input type="number" class="form-control" id="Peso" placeholder="Enter Peso" name="Peso"  required/>
     <div class="invalid-feedback">
                                    El Campo peso es obligatorio
                                </div>									
</div>
					<div class="form-group">
						<label for="Categoria">Categoria:</label>
						<input type="text" class="form-control" id="Categoria" placeholder="Enter Categoria" name="Categoria"  required/>
<div class="invalid-feedback">
                                    El Campo Categoria es obligatorio
                                </div>														
</div>
					<div class="form-group">
						<label for="Stock">Stock:</label>
						<input type="number" class="form-control" id="Stock" placeholder="Enter Stock" name="Stock"  required/>
<div class="invalid-feedback">
                                    El Campo stock es obligatorio
                                </div>					
</div>
				
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" id="GuardarProducto">GuardarProducto</button>
			</div>
		</div>
	</div>
</div>

            
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div id="prueba"> </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="Saveedit">Save changes</button>
      </div>
    </div>
  </div>
</div>



                </body>
                </html>