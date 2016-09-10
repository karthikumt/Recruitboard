<?php 
	$Current=$this->router->fetch_class();
	
	if($Current=='home')
	{
		$this->load->view('include/Mobile_Detect.php');
		$detected = new Mobile_Detect;	
	}
	
?>

<footer class="footer<?php if($Current=='home') { ?> fixbottom <?php } ?>" >
    	 <?php
			if($Current=='home' && ($detected->isMobile() || $detected->isTablet() || $detected->isiOS() || $detected->isAndroidOS())) { ?>
           <div class="wrapper">
           		<div class="copyright">
                <ul>
                	<li>Do You Have a Burning Desire to Play in College?</li>
	                <li>Are You Tired of Not Knowing Where, How, & When to Start the Recruiting Process?</li>										                	<li>Discover What Positions College Coaches are Recruiting for Next Season & Contact Them If You Match Their Specific Requirements.</li>
                    <li>Start Your FREE Profile or Upgrade to Premium for $9.99 & Start Communicating TODAY!</li>
               </ul>      
           		</div>
           </div>                     
                                
        <?php } ?>         
        
        <div class="wrapper">
    		<div class="copyright">Copyright © 2016 MyRecruitBoard, LLC. All rights reserved.</div>
        </div>
                      
        
    </footer>