<section class="content-header dashboard-header">
    <div class="box container-fluid" style="border:0px; margin:0px; padding:0px;">
        <div class="col-lg-12 col-xs-12" style="border:0px; margin:0px; padding:0px; border-radius:10px;">

            <div class="col-md-3 hidden-sm hidden-xs">
                <button class="">
                    <i class="fas fa-bars"></i> {{ request()->path() }}
                </button>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 btns-dash">
                <x-master.menu-rapido></x-master.menu-rapido>
            </div>
        </div>
    </div>
</section>
