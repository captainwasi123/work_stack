<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{URL::to('/public/seller')}}/js/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{URL::to('/public/seller')}}/js/jquery.slimscroll.js"> </script>
<script src="{{URL::to('/public/seller')}}/js/sidebarmenu.js"> </script>
<script src="{{URL::to('/public/seller')}}/js/sticky-kit.min.js"> </script>
<script src="{{URL::to('/public/seller')}}/js/jquery.sparkline.min.js"> </script>
<script src="{{URL::to('/public/seller')}}/js/custom.min.js"> </script>
<script src="{{URL::to('/public/seller')}}/js/raphael-min.js"> </script>
<!-- <script src="{{URL::to('/public/seller')}}/js/morris-data.js"> </script> -->
<script src="{{URL::to('/public/seller')}}/js/morris.min.js"> </script>
<script src="{{URL::to('/public/seller')}}/js/dashboard4.js"> </script>
<script src="{{URL::to('/public/seller')}}/js/jQuery.style.switcher.js"> </script>
<script src="{{URL::to('/public/seller')}}/js/jquery.dataTables.min.js"></script>
<script src="{{URL::to('/public/seller')}}/js/functions.js"> </script>
<script src="{{URL::to('/public/seller')}}/js/waves.js"> </script>
<!-- <script src="{{URL::to('/public/seller')}}/js/footable.all.min.js"> </script>
<script src="{{URL::to('/public/seller')}}/js/footable-init.js"> </script>

<script src="{{URL::to('/public/seller')}}/js/flot-data.js"> </script>
<script src="{{URL::to('/public/seller')}}/js/jasny-bootstrap.js"> </script>
<script src="{{URL::to('/public/seller')}}/js/jquery.PrintArea.js"> </script>
<script src="{{URL::to('/public/seller')}}/js/jsgrid-init.js"> </script>
<script src="{{URL::to('/public/seller')}}/js/mask.init.js"> </script>
<script src="{{URL::to('/public/seller')}}/js/perfect-scrollbar.min.js"> </script> -->
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->

    <script>
    $(document).ready(function() {
        $(".dataTables_filter").removeAttr("top");
    });
    </script>