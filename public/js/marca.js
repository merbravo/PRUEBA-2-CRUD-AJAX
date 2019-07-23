var idMarca;
$(document).ready(function () {
    cargarMarca();
    $('#guardarMarca').click(function(e){
        registrarMarca();
    });
    $(document).on('click', '.modificar', function(){
        $('#modalModificarMarca').modal('show');
        idMarca = $(this).val();
        $.get('marca/'+idMarca,function (item) { 
            $('#modalDescripcionMarca').val(item.descripcion);
         });
    });
    $('#guardarCambios').click(function(e){
        modificarMarca(idMarca);        
    });
});

var c = 1;
function cargarMarca(){
    $.get('marca', function(data){
        var fila;
        $.each(data, function(index, value){
            fila = '<tr id="marca'+value.id+'"><td>'+c+'</td><td>'+value.descripcion+'</td><td><button class="btn btn-warning modificar" value="'+value.id+'" >Modificar</button></td><td><button class="btn btn-danger" onclick="eliminarMarca('+value.id+')">ELiminar</button></td></tr>';
            $('#tablaMarca').append(fila);
            c++;
        })
    })
}

function registrarMarca(){
    var formData = {
        descripcion: $('#descripcionMarca').val()
    }
    var fila;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "POST",
        url: "marca",
        data: formData,
        dataType: 'json',
        success: function(value) {
            fila = '<tr id="marca'+value.id+'"><td>'+c+'</td><td>'+value.descripcion+'</td><td><button class="btn btn-warning modificar" value="'+value.id+'">Modificar</button></td><td><button class="btn btn-danger" onclick="eliminarMarca('+value.id+')">ELiminar</button></td></tr>';
            $('#tablaMarca').append(fila);
            c++;
            $('#descripcionMarca').val('');
        },
        error: function() {
            console.log("error");
        }
    });
}

function eliminarMarca(id){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "DELETE",
        url: "marca/" + id,
        success: function(value) {
            console.log("done");
            $('#marca'+value.id).remove();
        },
        error: function() {
            console.log("error");
        }
    });
}

function modificarMarca(id) {
    var formData = {
        descripcion: $('#modalDescripcionMarca').val()
    }
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "PUT",
        url: "marca/" + id,
        data: formData,
        dataType: "json",
        success: function(value) {
            console.log("done");
            fila = '<tr id="marca'+value.id+'"><td>'+c+'</td><td>'+value.descripcion+'</td><td><button class="btn btn-warning modificar" value="'+value.id+'">Modificar</button></td><td><button class="btn btn-danger" onclick="eliminarMarca('+value.id+')">ELiminar</button></td></tr>';
            $('#marca'+value.id).replaceWith(fila);
            $('#modalModificarMarca').modal('hide');        
            c++;
        },
        error: function () {
            console.log("error");
        }
    });
}

