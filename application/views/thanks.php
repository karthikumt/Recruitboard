<section class="content">
<div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        	<div class="register">
                <div class="reg-title step11">
                    <h2>Thank You For Registering !!</h2>
                  <br />

                
                
                 <?php if($this->session->flashdata('SuccessMsg')){?> 
                    <div class="successmessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('SuccessMsg');?>
                    </div>  
                <?php }?>
				
               
                        
                    <p>Thank you for registering with MyRecruitBoard. You need to activate your email account to start using our services. </p>
                    
                    <p>Your Account details have been send to your Email Address. Please Check Your Email to Verify.</p>
             
						
                       
                     </div>
                
                
        	</div>
            </div>
        </div>
    </section>
   