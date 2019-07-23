<div class="modal fade" id="modalModificarAuto" tabindex="-1" role="dialog" aria-labelledby="modalModificarAuto"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modificar Auto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label for="modalMarca">Marca</label>
                <select name="marca" id="modalMarca" class="form-control">
                    <option id="modalOptionDetault">Seleccione Marca</option>
                    @foreach($marca as $item)
                    <option id="modalMarcaAuto" value="{{ $item->id }}">{{ $item->descripcion }}</option>
                    @endforeach
                </select>
                <label for="modalModeloAuto">Modelo</label>
                <input type="text" class="form-control" id="modalModeloAuto" placeholder="Ingrese Modelo">
                <label for="modalPlacaAuto">Placa</label>
                <input type="text" class="form-control" id="modalPlacaAuto" placeholder="Ingrese Placa">
                <label for="modalColorAuto">Color</label>
                <input type="text" class="form-control" id="modalColorAuto" placeholder="Ingrese Color">
                <label for="modalPrecioAuto">Precio</label>
                <input type="number" class="form-control" id="modalPrecioAuto" placeholder="Ingrese Precio">
            </div>
            <div class="modal-footer">
                
                <button type="button" class="btn btn-primary" id="guardarCambios" onclick="swal('Buen trabajo!', 'Auto modificado correctamente', 'success');">Guardar Cambios</button>
            </div>
        </div>
    </div>
</div>