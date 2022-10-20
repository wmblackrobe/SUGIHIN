<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($themes->result_array() as $t)
{
?>
    <title><?php echo $t['nama_app'];?></title>
    <link rel="icon" href="<?php echo base_url(); ?>upload/logo/<?php echo $t['logo'];?>">
    <link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>assets/admin/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
</head>
<?php } ?>