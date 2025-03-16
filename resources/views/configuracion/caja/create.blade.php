<div id="modal-create-caja" class="modal fade modal-forms" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            <form role="form" method="post" action="{{ route('cajas.store') }}" id="form-create-caja">
                @csrf
                <div class="modal-header" style="background:#3c8dbc; color:white">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">NUEVA CAJA</h4>
                </div>
                <div class="modal-body">
                    <div class="box-body">
                        <div id="respuestaAjax"></div>
                        <div class="form-group">
                            <input type="text" class="form-control " name="nombre" id="crear-nombre"
                                placeholder="INGRESE NOMBRE">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control " name="numero" id="crear-numero" min="1"
                                placeholder="INGRESE NÚMERO">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control " name="ubicacion" id="crear-ubicacion"
                                placeholder="INGRESE UBICACIÓN">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">
                        <i class="far fa-times-circle fa-lg"></i> Salir
                    </button>
                    <button type="button" class="btn btn-primary btn-guardar-caja">Guardar
                        Caja</button>
                </div>
            </form>
        </div>
    </div>
</div>
