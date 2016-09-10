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
                        <div>
                            <a href="logout">Logout</a>
                        </div>
        	</div>
            </div>
        </div>
    </section>
    