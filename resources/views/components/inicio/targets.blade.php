<div class="contenedor-widget" style="margin-top:15px;">

    <div class="col-md-3 col-sm-6 col-xs-12">

        <div class="info-box">
            <span class="info-box-icon bg-fa"><i class="fass fas-money-bill"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">FACTURAS</span>
                <span class="info-box-number t-f">S/ <?php echo $totalf ?? 0.0; ?></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-bo"><i class="fass fas-money-bill"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">BOLETAS</span>
                <span class="info-box-number t-b">S/ <?php echo $totalb ?? 0.0; ?></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-nv"><i class="fass fas-money-bill"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">NOTAS DE VENTA</span>
                <span class="info-box-number t-nv">S/ <?php echo $totalnv ?? 0.0; ?></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-nc"><i class="fass fas-money-bill"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">NOTAS DE CRÉDITO</span>
                <span class="info-box-number t-nc">S/ <?php echo $totalnc ?? 0; ?></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-nd">
                <i class="fass fas-money-bill"></i>
            </span>
            <div class="info-box-content">
                <span class="info-box-text">NOTAS DE DÉBITO</span>
                <span class="info-box-number t-nd">S/ <?php echo $totalnd ?? 0.0; ?></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-tn"><i class="fass fas-money-bill"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">TOTAL NETO</span>
                <span class="info-box-number t-neto">S/ <?php echo $totalneto ?? 0.0; ?></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

</div>
