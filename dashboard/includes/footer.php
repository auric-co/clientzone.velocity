<!-- COPYRIGHT-->
<section class="p-t-60 p-b-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <p>Velocity Health © <?php echo date('Y'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END COPYRIGHT-->
</div>

</div>

<!-- Jquery JS-->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<!-- Bootstrap JS-->
<script src="<?php echo $sys->domain(); ?>/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="<?php echo $sys->domain(); ?>/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="<?php echo $sys->domain(); ?>/vendor/slick/slick.min.js">
</script>
<script src="<?php echo $sys->domain(); ?>/vendor/wow/wow.min.js"></script>
<script src="<?php echo $sys->domain(); ?>/vendor/animsition/animsition.min.js"></script>
<script src="<?php echo $sys->domain(); ?>/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="<?php echo $sys->domain(); ?>/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="<?php echo $sys->domain(); ?>/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="<?php echo $sys->domain(); ?>/vendor/circle-progress/circle-progress.min.js"></script>
<script src="<?php echo $sys->domain(); ?>/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?php echo $sys->domain(); ?>/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="<?php echo $sys->domain(); ?>/vendor/select2/select2.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
<script>
    $(document).ready(function() {
        $('#members').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'excel', 'pdf', 'print'
            ]
        } );
    } );
</script>
<!-- Main JS-->
<script src="<?php echo $sys->domain(); ?>js/main.js"></script>

</body>

</html>
<!-- end document-->
