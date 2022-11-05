<div class="container">
	<h2>updateproducto</h2>
	<form id="edit-producto" class="needs-validation" novalidate>
		<div class="form-group">
<input type="hidden" class="form-control" id="idproducto" placeholder="Enter nombre" name="idproducto"  value=<?=$editdata['idproducto']?> />			
<label for="nombre">nombre:</label>
			<input type="text" class="form-control" id="nombre" placeholder="Enter nombre" name="nombre"  value=<?=$editdata['nombre']?> required/>
			<div class="invalid-feedback">
				El Campo nombre es obligatorio
			</div>
		</div>
		<div class="form-group">
			<label for="Referencia:">Referencia:</label>
			<input type="text" class="form-control" id="Referencia" placeholder="Enter Referencia" value=<?=$editdata['referencia']?> name="Referencia" required />
			<div class="invalid-feedback">
				El Campo Referencia es obligatorio
			</div>
		</div>
		<div class="form-group">
			<label for="Precio">Precio:</label>
			<input type="number" class="form-control" id="Precio" placeholder="Enter Precio"  value=<?=$editdata['precio']?> name="Precio" required />
			<div class="invalid-feedback">
				El Campo precio es obligatorio
			</div>
		</div>
		<div class="form-group">
			<label for="Peso">Peso:</label>
			<input type="number" class="form-control" id="Peso" placeholder="Enter Peso" name="Peso" value=<?=$editdata['peso']?> required />
			<div class="invalid-feedback">
				El Campo peso es obligatorio
			</div>
		</div>
		<div class="form-group">
			<label for="Categoria">Categoria:</label>
			<input type="text" class="form-control" id="Categoria" placeholder="Enter Categoria" value=<?=$editdata['categoria']?> name="Categoria" required />
			<div class="invalid-feedback">
				El Campo Categoria es obligatorio
			</div>
		</div>
		<div class="form-group">
			<label for="Stock">Stock:</label>
			<input type="number" class="form-control" id="Stock" placeholder="Enter Stock" name="Stock"  value=<?=$editdata['stock']?> required />
			<div class="invalid-feedback">
				El Campo stock es obligatorio
			</div>
		</div>
	</form>
</div>


                     