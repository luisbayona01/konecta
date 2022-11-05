<html lang="en">
    <head>
        <title>gestion ventas</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
       <script src="../../public/js/ventas.js"></script>
    </head>
    <body>

<div class="container">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="http://localhost/konecta/">Navbar</a>
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

            <h2>ventas realizadas</h2>


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalventas">
  registrar venta
</button>

<div class="table-responsive">
	<table class="table">
		<thead>
			<tr>
				
				<th>nombreproducto</th>
				<th>ventarelizada</th>
				<th>stockproductos</th>
				<th>cantidadvendida</th>
				
			</tr>
		</thead>
		<tbody class="cuerpoProductosventas">
			
		</tbody>
	</table>
</div>

<div class="modal fade" id="modalventas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<form id="save-venta" class="needs-validation" novalidate>
<div class="form-group">
<label for="Referencia:">Productos:</label>
<select class="form-control" id="productos"name="idproducto" required >

</select>
      <div class="invalid-feedback">
                                    El Campo producto es obligatorio
                                </div>
    </div>

		<div class="form-group">
						<label for="Referencia:">cantidad:</label>
						<input type="number" class="form-control" id="Referencia" placeholder="Enter cantidad:" name="cantidad" required/>
  <div class="invalid-feedback">
                                    El Campo cantidad es obligatorio
                                </div>					
</div>
</form>       

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="saveventas">Save changes</button>
      </div>
    </div>
  </div>
</div>



                </body>
                </html>