<?php
	$this->load->view('include/Mobile_Detect.php');
	$detect = new Mobile_Detect;
	
?>
<section class="content">
<div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="register academic">
            	
                 <?php if($this->session->flashdata('errormessage')){?>	
                    <div class="errormessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('errormessage');?>
                    </div>  
                <?php }?>
                <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url() ?>colleage_coach/check_admin" onsubmit="">
      			<div class="reg-frm">
                	<div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="text" placeholder="username" name="admin_username" id="admin_username">
                         </div>
                        <div class="inner-frm fr">
                        	<input type="password" placeholder="Password" name="admin_password" id="admin_password">
                        </div>
                    </div>
                    
                    <div class="frm captch-frm clearfix">
                        
                    	<div class="inner-frm fl">
                        	<input type="submit" value="Submit" name="register">
                         </div>
                        
                    </div>



                </div>
                </form>
        	</div>
            </div>
        </div>
    </section>
    