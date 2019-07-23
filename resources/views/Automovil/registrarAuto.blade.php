<form>
  {{ csrf_field() }}
  <div class="form-group">
    <label for="marca">Marca</label>
    <select name="marca" id="marca" class="form-control">
        <option id="optionDetault">Seleccione Marca</option>
        @foreach($marca as $item)
          <option id="marcaAuto" value="{{ $item->id }}">{{ $item->descripcion }}</option>
        @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="modeloAuto">Modelo</label>
    <input type="text" class="form-control" id="modeloAuto" placeholder="Ingrese Modelo">
  </div>
  <div class="form-group">
    <label for="placaAuto">Placa</label>
    <input type="text" class="form-control" id="placaAuto" placeholder="Ingrese Placa">
  </div>
  <div class="form-group">
    <label for="colorAuto">Elija un color</label>
    <input type="color" name="micolor" id="micolor" value="#f00"/>
  </div>
  <div class="form-group">
    <label for="precioAuto">Precio</label>
    <input type="number" class="form-control" id="precioAuto" placeholder="Ingrese Precio">
</div>
  <button type="button" class="btn btn-primary btn-block" id="guardarAuto" onclick="swal('Buen trabajo!', 'Auto ingresado correctamente', 'success');">Guardar</button>
</form>