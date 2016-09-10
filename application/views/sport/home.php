<section class="content">
<div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        	<div class="register stud-athlete">
            	<div class="reg-title">
                    <h2>Page UnderConstraction</h2>
                  
				
                </div>
               <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        
                        <?php
					if($this->session->userdata('MyRecuritID'))
					  {
					   $UserID=$this->session->userdata('MyRecuritID'); 
					  }else{
					   $UserID= $this->session->userdata('UserID');  
					  }
					$User=get_user_detail($UserID);  
					if($User['UserType']=='1')
					{
					?>
						<input type="submit" value="Continue" onclick="window.location.assign('<?php echo base_url('student_athlete/step4'); ?>')">
                        <?php
					}else
					{
					 ?>
						<input type="submit" value="Continue" onclick="window.location.assign('<?php echo base_url('juco_transfer/step4'); ?>')">
                        <?php
					}
                        ?>	
                         </div>
                
                
        	</div>
            </div>
        </div>
    </section>
   