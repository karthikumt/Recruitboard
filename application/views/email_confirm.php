<section class="content">
<div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        	<div class="register stud-athlete">
            	<div class="reg-title">
                
                    <h2>Your Email Confirmation Successfully</h2>
                  
                </div>
                
                 <?php if($this->session->flashdata('SuccessMsg')){?> 
                    <div class="successmessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('SuccessMsg');?>
                    </div>  
                <?php }?>
				
               <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        
             
						<input type="submit" value="Click Here For Login" onclick="window.location.assign('<?php echo base_url(); ?>')">
                       
                         </div>
                
                
        	</div>
            </div>
        </div>
    </section>
   