 <script src="{{ asset('pack/bower_components/jquery/dist/jquery.min.js') }}"></script>
 <!-- Bootstrap 3.3.7 -->
 <script src="{{ asset('pack/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>


 <script src="{{ asset('pack/bower_components/toggle/js/bootstrap-toggle.min.js') }}"></script>
 <!-- AdminLTE App -->
 <script src="{{ asset('pack/dist/js/adminlte.js') }}"></script>
 <!-- DataTables -->
 <script src="{{ asset('pack/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('pack/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
 <script src="{{ asset('pack/bower_components/datatables.net-bs/js/dataTables.responsive.min.js') }}"></script>
 <script src="{{ asset('pack/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js') }}"></script>

 <!-- SlimScroll -->
 <script src="{{ asset('pack/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
 <!-- FastClick -->
 <script src="{{ asset('pack/bower_components/fastclick/lib/fastclick.js') }}"></script>

 <!-- AdminLTE for demo purposes -->
 <!-- <script src="pack/dist/js/demo.js"></script> -->
 <!-- iCheck 1.0.1 -->
 <script src="{{ asset('pack/plugins/iCheck/icheck.min.js') }}"></script>

 <!-- sweet alert -->
 <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script> -->
 <script src="{{ asset('pack/plugins/sweetalert/sweetalert2.js') }}"></script>

 <!-- Compiled and minified JavaScript -->
 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> -->
 <!-- InputMask -->
 <script src="{{ asset('pack/plugins/input-mask/jquery.inputmask.js') }}"></script>
 <script src="{{ asset('pack/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
 <script src="{{ asset('pack/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>

 <!-- Latest compiled and minified JavaScript -->
 <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script> -->

 <!-- (Optional) Latest compiled and minified JavaScript translation files -->
 <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script> -->



 <!-- daterangepicker -->
 <script src="{{ asset('pack/bower_components/moment/min/moment.min.js') }}"></script>
 <script src="{{ asset('pack/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

 <!-- DTEPICKER -->
 <script src="{{ asset('pack/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
 <script src="{{ asset('pack/bower_components/bootstrap-datepicker/dist/locales/bootstrap-datepicker.es.min.js') }}">
 </script>

 <!-- Morris.js charts -->
 <script src="{{ asset('pack/bower_components/raphael/raphael.min.js') }}"></script>
 <script src="{{ asset('pack/bower_components/morris.js/morris.min.js') }}"></script>


 <script src="{{ asset('pack/bower_components/chart.js/Chart.min.js') }}"></script>
 <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
 <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script> -->

 <script>
     document.addEventListener("DOMContentLoaded", function() {
         // Invocamos cada 5 segundos ;)
         const milisegundos = 60 * 5000;
         setInterval(function() {
             // No esperamos la respuesta de la petición porque no nos importa
             //fetch("vistas/modulos/sesion.php");
         }, milisegundos);
     });
     $(document).ready(function() {
         $(".reload-all").hide();


     })

     function change(a) {
         var css = document.getElementById("css");
         if (a == 1)
             css.setAttribute("href", "vistas/css/plantilla.css");
         if (a == 2)
             css.setAttribute("href", "vistas/css/plantilla2.css");
     }
     //loadGuiasR(1)

     $(document).on('click', ".reload-all", function() {
         $(".reload-all").hide();
     });
     $('.sidebar-menu').tree();
 </script>
