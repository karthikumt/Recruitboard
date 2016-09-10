<section class="content">
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="register">
                <div class="reg-title step11">
                    <h3>CONGRATULATIONS, your MyRecruitBoard profile is complete!</h3>
                    
                </div>
                  <?php if($this->session->flashdata('successmessage')){?> 
                    <div class="successmessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('successmessage');?>
                    </div>  
                <?php }?>
            	<div class="reg-text">
                    <p>You can now navigate the site freely.Please come back daily to share new updates and connect with other members.</p>

                    
				</div>
                <div class="rb-logo">
                	<a href="javascript:void(0);" title="Recruitment Board">
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
	<script>
	setTimeout(function(){daseboard();}, 3000);
	function daseboard()
	{
	window.location.assign("<?php echo base_url('dashboard'); ?>");
	}
	</script>