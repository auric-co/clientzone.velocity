<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Velocity 2019</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Are you sure you want to end your current session?</div>
            <div class="modal-footer">
                <button class="btn btn-success" type="button" data-dismiss="modal">No</button>
                <a class="btn btn-danger" href="<?php echo $uri ?>/dashboard/logout.php">Yes</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo $uri ?>/dashboard/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo $uri ?>/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $uri ?>/js/js-xlsx-master/dist/xlsx.full.min.js"></script>
<script src="<?php echo $uri ?>/js/FileSaver.js-master/dist/FileSaver.min.js"></script>
<script src="<?php echo $uri ?>/js/canvas-toBlob.js-master/canvas-toBlob.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?php echo $uri ?>/dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="<?php echo $uri ?>/dashboard/js/sb-admin-2.min.js"></script>
<!-- Page level plugins -->
<script src="<?php echo $uri ?>/dashboard/vendor/chart.js/Chart.min.js"></script>
<!-- Page level plugins -->
<script src="<?php echo $uri ?>/dashboard/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo $uri ?>/dashboard/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="https://cdnjs.com/libraries/Chart.js"></script>
<script src="<?php echo $uri ?>/dashboard/js/<?php if (isset($page)){echo $page;}else{ echo "index";} ?>/chart-area.js"></script>
<script src="<?php echo $uri ?>/dashboard/js/<?php if (isset($page)){echo $page;}else{ echo "index";} ?>/chart-pie.js"></script>
<script src="<?php echo $uri ?>/dashboard/js/<?php if (isset($page)){echo $page;}else{ echo "index";} ?>/chart-bar.js"></script>


</body>

</html>
