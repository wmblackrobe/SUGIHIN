


    <!-- Mainly scripts -->
    <script src="<?php echo base_url(); ?>assets/admin/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Peity -->
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/peity/jquery.peity.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url(); ?>assets/admin/js/inspinia.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/iCheck/icheck.min.js"></script>

    <!-- Peity -->
    <script src="<?php echo base_url(); ?>assets/admin/js/demo/peity-demo.js"></script>


    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/dataTables/datatables.min.js"></script>

     <!-- Page-Level Scripts -->
     <script type="text/javascript">




//Disable cut copy paste

document.oncopy = function(){alert("copy option disabled"); return false;}

document.oncut = function(){alert("cut option disabled");return false;}






//Disable mouse right click

document.onmousedown = disableclick;

msg = "Right Click Disabled";

function disableclick(e)

{

     if(event.button==2)

     {

     alert(msg);

     return false;

   }

}

</script>
 <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>