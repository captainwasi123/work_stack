<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="{{URL::to('/public/website')}}/js/slick-slider.js"> </script>
<script src="{{URL::to('/public/website')}}/js/functions.js"> </script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



<!-- ============================================================== -->
    <!-- sweet alert -->

@if(session()->has('success'))
    <script type="text/javascript">
        $(document).ready(function(){
            swal("Success!", "{{ session()->get('success') }}", "success");
        });
    </script>
@endif

<!-- ============================================================== -->