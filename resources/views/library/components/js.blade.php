<!-- JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="/library_assets/js/jquery.min.js"></script>
	<script src="/library_assets/js/popper.min.js"></script>
	<script src="/library_assets/js/bootstrap.min.js"></script>
    <script src="/library_assets/js/bs-custom-file-input.min.js"></script>
    <script>
        // custom file
        $(document).ready(function () {
           bsCustomFileInput.init()
       })
   </script>
	<!--plugins-->
	<script src="/library_assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="/library_assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="/library_assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!-- Vector map JavaScript -->
	<script src="/library_assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="/library_assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="/library_assets/plugins/vectormap/jquery-jvectormap-in-mill.js"></script>
	<script src="/library_assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
	<script src="/library_assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
	<script src="/library_assets/plugins/vectormap/jquery-jvectormap-au-mill.js"></script>
	<script src="/library_assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
	<script src="/library_assets/js/index2.js"></script>
    <!--notification js -->
    <script src="/library_assets/plugins/notifications/js/lobibox.min.js"></script>
    <script src="/library_assets/plugins/notifications/js/notifications.min.js"></script>
    <script src="/library_assets/plugins/notifications/js/notification-custom-script.js"></script>
	<!-- App JS -->
    <script>
		$(function () {
			$('[data-toggle="popover"]').popover()
		})

        function success_user(xabar) {
	    Lobibox.notify('info', {
		pauseDelayOnHover: true,
		continueDelayOnInactiveTab: false,
		position: 'top right',
		icon: 'bx bx-check-circle',
		msg: xabar
	});
}
    </script>
	<script src="/library_assets/js/app.js"></script>
    <script src='/library_assets/js/tinymce.min.js' referrerpolicy="origin">
    </script>
    <script>
        tinymce.init({
          selector: '#mytextarea'
        });
    </script>
<!--Data Tables js-->
<script src="library_assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        //Default data table
        $('#example').DataTable();
        var table = $('#example2').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
        });
        table.buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
    });
</script>
