<div class="row fechas-reportes ini-calendar-hide">
    <div class="col-md-3">
        <div class="input-group">
            <span class="input-group-addon">
                <i class="fas fa-calendar-alt"></i>
            </span>
            <input type="text" class="fechareportes" id="fechaInicial" name="fechaInicial" placeholder="Fecha Inicial..."
                style="width:100%" value="{{ date('d/m/Y') }}" />
        </div>
    </div>
    <div class="col-md-3">
        <div class="input-group">
            <span class="input-group-addon">
                <i class="fas fa-calendar-alt"></i>
            </span>
            <input type="text" class="fechareportes" id="fechaFinal" name="fechaFinal" placeholder="Fecha Final..."
                style="width:100%" value="{{ date('d/m/Y') }}"">
        </div>
    </div>
</div>
<div class=" box-tools pull-right" style="position: relative">
    <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle btn-calendar" data-toggle="dropdown">
            <i class="far fa-calendar-alt"></i> Hoy</button>
        <ul class="dropdown-menu calendar-reports" role="menu">
            <li>
                <a href="#" class="exit-c" ini="{{ $hoy }}" fin="{{ $hoy }}">
                    Hoy
                </a>
            </li>
            <li>
                <a href="#" class="exit-c" ini="{{ $ayer }}" fin="{{ $ayer }}">
                    Ayer
                </a>
            </li>
            <li>
                <a href="#" class="exit-c" ini="{{ $semana }}" fin="{{ $hoy }}">
                    Hace una semana
                </a>
            </li>
            <li>
                <a href="#" class="exit-c" ini="<?php echo $mes; ?>" fin="{{ $hoy }}">
                    Este mes
                </a>
            </li>
            <li>
                <a href="#" class="exit-c" ini="<?php echo $anio; ?>" fin="{{ $hoy }}">
                    Hace un año
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#" ini="{{ $hoy }}" fin="{{ $hoy }}" class="personalizado">
                    Personalizado
                </a>
            </li>
        </ul>
    </div>
</div>
