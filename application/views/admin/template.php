<?php
	if(!get_admin_id()){
		redirect(base_url()."admin/login");
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="dswt admin">
  <meta name="author" content="dswtpl">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <title>Admin</title>

  <link href="<?php echo base_url();?>css/admin/style.default.css" rel="stylesheet">
  <link href="<?php echo base_url();?>css/admin/jquery.datatables.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>js/jquery-1.11.1.js" type="text/javascript"></script>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
  <script>
$(document).ready(function(e) {
    setTimeout(function() {
	  $('.alert-success').fadeOut('slow');
	  $('.errormessage').fadeOut('slow');
	 }, 5000);
	
	$('.alert-success button.close.commonbtn').click(function(){
	  $('.successmessage').hide();             
	 });
	 $('.errormessage button.close.commonbtn').click(function(){         
	  $('.errormessage').hide();             
	 });
});
</script>
  
  
</head>
    <body>         
    
    <div id="preloader">
        <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
    </div>
    
    <style>
        .buttoncss{float:right; margin-bottom:12px;}
    </style>
    
    <section>
        <?php include('include/sidebar.php');?>				
        <div class="mainpanel">
        <?php include('include/header.php');?>
        <?php echo $MainContent; ?>
        </div>
    </section>
    </body>        



</html>
