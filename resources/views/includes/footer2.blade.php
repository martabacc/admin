<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
    </div>
    <strong>Beta Version &copy; {{ date('Y') }} <a href="#"> - </a>.</strong>
</footer>


<script type="text/javascript" src="{{ URL::to('assets/adminlte/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/adminlte/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>


<script type="text/javascript" src="{{ URL::to('assets/js/moment.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/adminlte/plugins/datatables/jquery.dataTables.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/adminlte/plugins/datatables/dataTables.bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/adminlte/plugins/daterangepicker/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/adminlte/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/adminlte/plugins/fullcalendar/fullcalendar.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/adminlte/dist/js/app.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/adminlte/plugins/chartjs/Chart.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/adminlte/plugins/chartjs/Chart.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/js/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::to('assets/adminlte/plugins/select2/select2.full.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('assets/adminlte/plugins/ckeditor/ckeditor.js') }}"></script>

<script type="text/javascript" data-pace-options='{ "ajax": false }' src="https://raw.github.com/HubSpot/pace/v0.5.3/pace.min.js"></script>

<script>
    $(function(){

        paceOptions = {
            ajax: false, // disabled
            document: false, // disabled
            eventLag: false, // disabled
            elements: {
                selectors: ['body']
            }
        };
        Pace.restart();
    });
</script>