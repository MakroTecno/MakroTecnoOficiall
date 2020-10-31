// CLONAR Y ELIMINAR INPUT
        $(document).ready(function(){
        var i = 1;
        $('#agregar_fact').click(function () {
            i++;
            var rutinas = document.getElementById('rutinas').value;
            $('.repetido').append(
            '<div class="text-center repetido'+i+'"><input type="hidden" name="factura[]" placeholder="No. Rutina" value="'+rutinas+'"></div>'+
            '<div class="col-sm-12 col-md-5 text-center repetido'+i+'"><input id="code" type="number" name="codigo[]" placeholder="Codigo Producto"></div>'+
            '<div class="col-sm-12 col-md-5 text-center repetido'+i+'"><input type="number" id="cantidad" name="cantidad[]" placeholder="Cantidad"></div>'+
            '<div class="repetidos_fact col-sm-12 col-md-2 text-center repetido'+i+'"><a type="button" name="remove" id="'+i+'" class="btn_remove">X</a></div>'
            );
        });
        $(document).on('click', '.btn_remove', function () {
            var id = $(this).attr('id');
           $('.repetido'+ id).remove();
        });
    });
///////////////////////////////ADD PRODUCTOS/////////////////////////////////////////////////////////////////////////////

// CLONAR Y ELIMINAR INPUT
        $(document).ready(function(){
        var i = 1;
        $('#agregar_producto').click(function () {
            i++;
            var idempresa = document.getElementById('idempresa').value;
            var cantidadEx = document.getElementById('cantidad_Ex').value;
            $('.add_productos').append(
                '<input type="hidden" class="input_productos delete'+i+'" name="id_empresa[]" value="'+idempresa+'">'+
                '<input type="hidden" class="input_productos delete'+i+'" name="id_empresa[]" value="'+cantidadEx+'">'+  
                '<div class="col-12 text-center input_productos delete'+i+'"><input type="text" name="codigo[]" placeholder="Codigo del Producto"></div>'+
                '<div class="col-12 text-center input_productos delete'+i+'"><input type="text" name="descripcion[]" placeholder="Descripcion"></div>'+
                '<div class="col-12 text-center input_productos delete'+i+'"><input type="number" name="vneto[]" placeholder="Valor Neto"></div>'+
                '<div class="col-12 text-center input_productos delete'+i+'"><input type="number" name="vunitario[]" placeholder="Valor Unitario"></div>'+
                '<div class="col-12 text-center input_productos delete'+i+'"><a type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove" style="color:white;">X</a></div><br class="delete'+i+'">'
             );
        });
        $(document).on('click', '.btn_remove', function () {
            var id = $(this).attr('id');
           $('.delete'+id).remove();
        });
    });



