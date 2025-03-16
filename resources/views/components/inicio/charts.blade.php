<!-- DONUT CHART -->
<div class="box" style="border-top:0px solid #fff">
    <div class="col-md-6 col-xs-12" style="margin:0px; padding:0px;">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <i class="fas fa-chart-line"></i> GRÁFICO DE VENTAS
                </h3>
            </div>
            <div class="box-body chart-responsive chart-responsive-ventas">
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xs-12" style="z-index: 10000 !important;">
        <div class="box box-default contenedor-pie-chart">
            <div class="box-header with-border">
                <h3 class="box-title">LOS MÁS VENDIDOS</h3>
                <div class="box-tools pull-right">
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-7">
                        <div class="chart-responsive">
                            <canvas id="pieChart" height="210"></canvas>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <ul class="chart-legend clearfix">
                            @for ($i = 0; $i < 5; $i++)
                                <li>
                                    <i class="fas fa-circle" style="color: {{ $colores[$i] }}"></i>
                                    {{-- {{ $productos[$i]['descripcion'] }} --}}
                                </li>
                            @endfor
                        </ul>
                    </div>
                </div>
            </div>
            <div class="box-footer no-padding box pro-mas-v">
                <ul class="nav nav-pills nav-stacked">
                    @for ($i = 0; $i < 5; $i++)
                        <li>
                            <a href="#">
                                <i class="fas fa-circle" style="color: {{ $colores[$i] }}"></i>
                                {{-- {{ $productos[$i]['descripcion'] }} --}}
                                <span class="pull-right" style="color:{{ $colores[$i] }}">
                                    <i class="fa fa-angle-down"></i>
                                    {{-- {{ $totales = $productos[$i]['ventas'] > 0 ? ceil(($productos[$i]['ventas'] * 100) / $sumaventas) . '%' : 0 }} --}}
                                    %
                                </span>
                            </a>
                        </li>
                    @endfor
                </ul>
            </div>
        </div>
    </div>
</div>
