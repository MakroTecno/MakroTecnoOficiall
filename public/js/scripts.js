// CLONAR Y ELIMINAR INPUT
        $(document).ready(function(){
        var i = 1;
        $('#agregarmas').click(function () {
            i++;
            var valorfact = document.getElementById('valorfact').value;
            var fecha_ventas = document.getElementById('fecha_venta').value;
            $('.productos_tecnologia').append(
            '<input type="hidden" name="valorfact[]" value="'+valorfact+'">'+
            '<input type="hidden" name="fecha_venta[]" value="'+fecha_ventas+'">'+
            '<div class="col-sm-12 col-md-4 text-center input_producto repetido'+i+'"><input id="code" type="number" name="codigo[]" placeholder="Codigo Producto"></div>'+
            '<div class="col-sm-12 col-md-4 text-center input_producto repetido'+i+'"><input type="number" id="cantidad" name="cantidad[]" placeholder="Cantidad"></div>'+
            '<div class="col-sm-12 col-md-4 text-center repetido'+i+'"><a type="button" name="remove" id="'+i+'" class=" btn_remove btn btn-danger" style="color:white;">X</a></div>'
            );
        });
        $(document).on('click', '.btn_remove', function () {
            var id = $(this).attr('id');
           $('.repetido'+ id).remove();
        });
    });
