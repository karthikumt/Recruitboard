 <section class="content">
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="register step4">
                <?php if($this->session->flashdata('successmessage')){?> 
                    <div class="successmessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('successmessage');?>
                    </div>  
                <?php }?>
            	<div class="reg-text">
                    <p>CONGRATULATIONS, your MyRecruitBoard profile is complete! Now you can navigate the site freely.  Don't forget to visit our forums and chat with other MyRecruitBoard members. Come back daily to share your new updates and connect with more
MyRecruitBoard members.</p>
                    
				</div>
                  
                <div class="rb-logo">
                	<a href="<?php echo base_url('home'); ?>" title="Recruitment Board">
                    	<img src="<?php echo base_url('images/img1.png'); ?>" alt="">
                    </a>
                </div>
                <h2 class="complet-title">
                	Welcome to The MyRecruitBoard Team!
                </h2>
        	</div>
            </div>
        </div>
    </section>