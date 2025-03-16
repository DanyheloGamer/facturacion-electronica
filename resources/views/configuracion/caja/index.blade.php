<x-app-layout>
    <div class="box rounded " style="margin:0px; padding:0px;">
        <div class="box-header">
            <h3 class="box-title">Administración de Cajas</h3>
            <button class="btn btn-success  pull-right btn-radius" data-toggle="modal" data-target="#modal-create-caja">
                <i class="fas fa-plus-square"></i>
                Nueva Caja
                <i class="fa fa-th"></i>
            </button>
        </div>
        <div class="box-body table-user" style="margin:0px; padding:0px;">

            <table class="table tablas tbl-t dt-responsive dtr-inline collapsed" width="100%">
                <thead>
                    <tr>
                        <th style="width:10px;">#</th>
                        <th>Nombre de Caja</th>
                        <th>Número</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $item;
                    @endphp
                    @forelse ($cajas as  $key => $value)
                        <tr class="id-caja{{ $value['id'] }}">
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $value['nombre'] }}</td>
                            <td>{{ $value['numero'] }}</td>
                            <td>
                                <div class="modo-contenedor-selva text-center">
                                    <input type="checkbox" data-toggle="toggle" data-on="Activado"
                                        data-off="Desactivado" data-onstyle="success" data-offstyle="danger"
                                        id="" name="usuarioEstado<?php $value['es_activo']; ?>"
                                        value="<?php $value['es_activo']; ?>" data-size="mini" data-width="110"
                                        idUsuario="<?php echo $value['id']; ?>" <?php if($value['es_activo'] == 0){ }else{?>checked <?php } ?>>
                                </div>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-warning btn-editar-caja" idCategoria="<?php echo $value['id']; ?>"
                                    data-toggle="modal" data-target="#modalEditarCategoria"><i
                                        class="fas fa-user-edit"></i></button>
                                <button class="btn btn-sm btn-danger btnEliminarCategoria"
                                    idCategoria="<?php echo $value['id']; ?>"><i class="fas fa-trash-alt"></i></button>

                            </td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('.tablas').DataTable({
                    "language": {
                        "sProcessing": "Procesando...",
                        "sLengthMenu": "Mostrar _MENU_",
                        "sZeroRecords": "No se encontraron resultados",
                        "sEmptyTable": "Ningún dato disponible en esta tabla",
                        "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
                        "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0",
                        "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                        "sInfoPostFix": "",
                        "sSearch": "Buscar:",
                        "sUrl": "",
                        "sInfoThousands": ",",
                        "sLoadingRecords": "Cargando...",
                        "oPaginate": {
                            "sFirst": "Primero",
                            "sLast": "Último",
                            "sNext": "&rsaquo;",
                            "sPrevious": "&lsaquo;"
                        },
                        "oAria": {
                            "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                        }

                    }

                });

                $(document).on('click', '.btn-editar-caja', function() {

                });
                $('.btn-guardar-caja').on('click', function() {

                    var form = $('#form-create-caja'),
                        url = form.attr('action'),
                        method = form.attr('method');

                    $.ajax({
                        url: url,
                        method: method,
                        data: form.serialize(),
                        success: function(respuesta) {
                            if (respuesta.ok == 1) {
                                $('#modal-create-caja').modal('hide')

                                Swal.fire({
                                    title: 'Cargos',
                                    text: respuesta.mensaje,
                                    icon: 'success',
                                    confirmButtonText: 'Aceptar'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        location.href = 'cajas'
                                    }
                                })
                            }
                        },
                        error: function(xhr) {
                            var res = xhr.responseJSON;
                            console.log(res)
                            if ($.isEmptyObject(res) == false) {
                                $.each(res.errors, function(key, value) {
                                    $('#crear-' + key).addClass('has-error')
                                        .closest('.form-group')
                                        .append('<small class="text-danger">' + value +
                                            '</small>');
                                });
                            }
                        }
                    })
                })

                function guardarCaja() {}
            });
        </script>
    @endpush
</x-app-layout>
@include('configuracion.caja.create')
