<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>SIDU BUSCARE</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="{{asset('assets/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700')}}" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('assets/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('assets/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- daterange picker -->
  <link rel="stylesheet" href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('assetz/vendor/datepicker/tempusdominus-bootstrap-4.css')}}" />

  {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> --}}
  
  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="header-fixed">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="/"><img src="/assets/img/logo2.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="/">Beranda</a></li>
          <li><a href="/pengaduan">Pengaduan</a></li>
          <li><a href="/cara">Cara Pengaduan</a></li>
          <li>
            @if (Route::has('login'))
            <div class="top-right links">
              @auth
              <a href="{{ url('/profil') }}">Profil</a>
              @else
              <a href="{{ route('login') }}" class="btn btn-primary" role="button" style="padding-right:1em; padding-left:1em;">Masuk</a>
              @endauth
            </div>
            @endif
          </li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  @yield('content')

  <!--==========================
    Footer
  ============================-->
  <footer id="footer" style="margin-top: 10em">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright SIDU BUSCARE. Teknik Rekayasa Perangkat Lunak B
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
        -->
        by <a href="#hero">Kelompok 1B</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="{{asset('assets/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{asset('assets/lib/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets/lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{asset('assets/lib/superfish/superfish.min.js')}}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{asset('assets/contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

  <!-- jQuery -->
  <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- Select2 -->
  <script src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>
  <!-- Bootstrap4 Duallistbox -->
  <script src="{{asset('assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
  <!-- InputMask -->
  <script src="{{asset('assets/plugins/moment/moment.min.js')}}"></script>
  <script src="{{asset('assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js')}}"></script>
  <!-- date-range-picker -->
  <script src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
  <!-- bootstrap color picker -->
  <script src="{{asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
  <!-- Bootstrap Switch -->
  <script src="{{asset('assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('assets/dist/js/demo.js')}}"></script>
  <!-- Page script -->
  <script>
    $(function() {
      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })

      //Initialize Select2 Elements
      $('.select2').select2()

      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', {
        'placeholder': 'dd/mm/yyyy'
      })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', {
        'placeholder': 'mm/dd/yyyy'
      })
      //Money Euro
      $('[data-mask]').inputmask()

      //Date range picker
      $('#reservation').daterangepicker()
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
          format: 'MM/DD/YYYY hh:mm A'
        }
      })
      //Date range as a button
      $('#daterange-btn').daterangepicker({
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf(
              'month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function(start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
      )

      //Timepicker
      $('#timepicker').datetimepicker({
        format: 'LT'
      })

      //Bootstrap Duallistbox
      $('.duallistbox').bootstrapDualListbox()

      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()

      $('.my-colorpicker2').on('colorpickerChange', function(event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
      });

      $("input[data-bootstrap-switch]").each(function() {
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
      });

    })
  </script>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

  <!-- Optional JavaScript -->
  <script src="{{asset('asset/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('asset/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
  <script src="{{asset('asset/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
  <script src="{{asset('asset/libs/js/main-js.js')}}"></script>
  <script src="{{asset('asset/vendor/datepicker/moment.js')}}"></script>
  <script src="{{asset('asset/vendor/datepicker/tempusdominus-bootstrap-4.js')}}"></script>
  <script src="{{asset('asset/vendor/datepicker/datepicker.js')}}"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>