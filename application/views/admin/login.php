<!DOCTYPE html>
<html lang="en">        
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="dswt admin">
  <meta name="author" content="dswtpl">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <title>Welcome Admin</title>

  <link href="<?php echo base_url();?>css/admin/style.default.css" rel="stylesheet">
  <link href="<?php echo base_url();?>css/admin/jquery.datatables.css" rel="stylesheet">        

</head>

<body class="signin">
<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>
  
    <div class="signinpanel">
        
        <div class="row">
            
            
            
            <div class="col-md-5">
                <script language="javascript" type="text/javascript">
					function validationform(){
						var error = 0;
						if($.trim($("#UserName").val())==''){
							$("#UserName").css("border-color","#FF0000");
							var error = 1;
						} else {
							$("#UserName").css("border-color","");
						}
						
						if($.trim($("#Password").val())==''){
							$("#Password").css("border-color","#FF0000");
							var error = 1;
						} else {
							$("#Password").css("border-color","");
						}
						
						if(error == 1){			
							return false;
						} else {		
							return true;
						}
												
					}
				</script>
                
                <?php if ( $this->session->flashdata( 'message' ) ) { ?>
                <div class="alert alert-danger">
                	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                	<?php echo $this->session->flashdata( 'message' ); ?>
                </div>
                <?php } ?>  
                        
                <form method="post" action="<?php echo base_url(); ?>admin/login/login_check" onSubmit="return validationform();">
                
                    <h4 class="nomargin">Sign In</h4>
                    <p class="mt5 mb20">Login to access your account.</p>
                
                    <input type="text" class="form-control uname" placeholder="Username" name="UserName"  id="UserName"/>
                    <input type="password" class="form-control pword" placeholder="Password" name="Password"  id="Password" />
                   <!--<a href="#"><small>Forgot Your Password?</small></a>-->
                    <button class="btn btn-success btn-block">Sign In</button>
                    
                </form>
            </div><!-- col-sm-5 -->
            
        </div><!-- row -->
        
       
        
    </div><!-- signin -->
  
</section>


<script src="<?php echo base_url();?>js/admin/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url();?>js/admin/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo base_url();?>js/admin/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>js/admin/modernizr.min.js"></script>
<script src="<?php echo base_url();?>js/admin/retina.min.js"></script>

<script src="<?php echo base_url();?>js/admin/custom.js"></script>

</body>


</html>
