var idAuto;
$(document).ready(function () {
    cargarAuto();
    $('#guardarAuto').click(function(e){
        console.log($('#micolor').val());
        registrarAuto();
    });
    $(document).on('click', '.modificar', function(){
        $('#modalModificarAuto').modal('show');
        idAuto = $(this).val();
        $.get('autos/'+idAuto,function (item) { 
            $('#modalMarca').val(item.marca);
            $('#modalModeloAuto').val(item.modelo);
            $('#modalPlacaAuto').val(item.placa);
            $('#modalColorAuto').val(item.color);
            $('#modalPrecioAuto').val(item.precio);
         });
    });
    $('#guardarCambios').click(function(e){
        modificarAuto(idAuto);        
    });
});

var c = 1;
function cargarAuto(){
    var fila;
    $.get('auto', function(data){
        $.each(data, function(index, value){    
            $.get('marca/'+value.marca, function(item){
                fila = '<tr id="auto'+value.id+'"><td>'+c+'</td><td>'+item.descripcion+'</td><td>'+value.modelo+'</td><td>'+value.placa+'</td><td bgcolor=#'+value.color+' ></td><td>'+value.precio+'</td><td><button class="btn btn-warning modificar" value="'+value.id+'">Modificar</button></td><td><button class="btn btn-danger" onclick="eliminarAuto('+value.id+')">Eliminar</button></td></tr>';
                $('#tablaAuto').append(fila);
                c++;
            });
        });
    });
}

function registrarAuto(){
    var formData = {
        marca: $('#marca').val(),
        modelo: $('#modeloAuto').val(),
        placa: $('#placaAuto').val(),
        color: $('#micolor').val(),
        precio: $('#precioAuto').val()
    }
    var fila;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "POST",
        url: "autos",
        data: formData,
        dataType: 'json',
        success: function(value) {
            console.log("done");
            $.get('marca/'+value.marca, function(item){
                fila = '<tr id="auto'+value.id+'"><td>'+c+'</td><td>'+item.descripcion+'</td><td>'+value.modelo+'</td><td>'+value.placa+'</td><td bgcolor=#'+value.color+'></td><td>'+value.precio+'</td><td><button class="btn btn-warning modificar" value="'+value.id+'">Modificar</button></td><td><button class="btn btn-danger" onclick="eliminarAuto('+value.id+')">Eliminar</button></td></tr>';
                $('#tablaAuto').append(fila);
                limpiarCampos();
                c++;
            })
        },
        error: function() {
            console.log("error");
        }
    });
}

function eliminarAuto(id){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "DELETE",
        url: "autos/" + id,
        success: function(value) {
            console.log("done");
            $('#auto'+value.id).remove();
        },
        error: function() {
            console.log("error");
        }
    });
}

function modificarAuto(id) {
    var formData = {
        marca: $('#modalMarca').val(),
        modelo: $('#modalModeloAuto').val(),
        placa: $('#modalPlacaAuto').val(),
        color: $('#modalColorAuto').val(),
        precio: $('#modalPrecioAuto').val()
    }
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "PUT",
        url: "autos/" + id,
        data: formData,
        dataType: "json",
        success: function(value) {
            console.log("done");
            $.get('marca/'+value.marca, function(item){
                fila = '<tr id="auto'+value.id+'"><td>'+c+'</td><td>'+item.descripcion+'</td><td>'+value.modelo+'</td><td>'+value.placa+'</td><td>'+value.color+'</td><td>'+value.precio+'</td><td><button class="btn btn-warning modificar" value="'+value.id+'">Modificar</button></td><td><button class="btn btn-danger" onclick="eliminarAuto('+value.id+')">Eliminar</button></td></tr>';
                $('#auto'+value.id).replaceWith(fila);
                $('#modalModificarAuto').modal('hide');        
                c++;
            })
        },
        error: function () {
            console.log("error");
        }
    });
}

function limpiarCampos(){
    $('#modeloAuto').val('');
    $('#placaAuto').val('');
    $('#colorAuto').val('');
    $('#precioAuto').val('');
    $('#marca').val($('#optionDetault').val());    
}