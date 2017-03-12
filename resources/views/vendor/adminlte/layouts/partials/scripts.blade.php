<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="{{ asset('/js/app.js') }}"></script>
<script src="{{ asset('/js/demo.js') }}" type="text/javascript"></script>

    
<!-- DataTables -->
<script type="text/javascript" src="{{ asset('/plugins/DataTables/datatables.min.js') }}"></script> 
<!-- <script type="text/javascript" src="https://cdn.datatables.net/v/bs/pdfmake-0.1.18/dt-1.10.13/af-2.1.3/b-1.2.4/b-colvis-1.2.4/b-flash-1.2.4/b-html5-1.2.4/b-print-1.2.4/cr-1.3.2/r-2.1.0/sc-1.4.2/se-1.2.0/datatables.min.js"></script> -->

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
<!-- PACE -->
<script src="{{ asset('/plugins/pace/pace.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('/plugins/fastclick/fastclick.js') }}"></script>

<!-- Select2 -->
<script src="{{ asset('/plugins/select2/select2.full.min.js') }}"></script>
<!-- InputMask -->
<script src="{{ asset('/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{ asset('/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- bootstrap datepicker -->
<script src="{{ asset('/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<!-- bootstrap color picker -->
<script src="{{ asset('/plugins/colorpicker/bootstrap-colorpicker.min.js') }}"></script>
<!-- bootstrap time picker -->
<script src="{{ asset('/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{ asset('/plugins/iCheck/icheck.min.js') }}"></script>
  

<script> 
$(document).ajaxStart(function() { Pace.restart(); });
</script>

<script>
var table = $('#datatable-employee').DataTable({
    fixedHeader: true
});

new $.fn.dataTable.Buttons( table, {

        buttons: [
        	{ extend: 'copy', className: 'btn-sm exportbutton' },
            { extend: 'excel', className: 'btn-sm exportbutton' },
            { extend: 'pdf', className: 'btn-sm exportbutton' },
            { extend: 'csv', className: 'btn-sm exportbutton' },
            { extend: 'print', className: 'btn-sm exportbutton' },
            { extend: 'colvis', className: 'btn-sm exportbutton' },
        ]
} );
 
table.buttons().container()
    .appendTo( $('.col-sm-6:eq(0)', table.table().container() ) ); 
 
</script>

  <script>
if(document.getElementById("active").checked) {
    document.getElementById('activeUnchecked').disabled = true;
}
</script>

<script type="text/javascript">
$(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('.datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat blue color scheme for iCheck
    $('input[type="checkbox"].flat-blue, input[type="radio"].flat-blue').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });
  //Flat grey color scheme for iCheck
    $('input[type="checkbox"].flat-grey, input[type="radio"].flat-grey').iCheck({
      checkboxClass: 'icheckbox_flat-grey',
      radioClass: 'iradio_flat-grey'
    });
  //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-red',
      radioClass: 'iradio_flat-red'
    });
  //Flat green color scheme for iCheck
    $('input[type="checkbox"].flat-green, input[type="radio"].flat-green').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });

</script>

<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>
