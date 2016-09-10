<section class="content">
 <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="register athletes-features">
                	<div class="reg-title">
                   <!--  <h3>Please choose either the FREE Limited Membership or the Premium Membership. You can see what is included in each membeship below.</h3> -->
                    <h3>Please choose the FREE Limited Membership.</h3>
               </div>
                <?php if($this->session->flashdata('ErrorMsg') || $this->session->flashdata('errormessage')){?> 
                    <div class="errormessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('ErrorMsg');?>
                        <?php echo $this->session->flashdata('errormessage');?>
                    </div>  
                <?php }?>
                  <?php if($this->session->flashdata('successmessage')){?> 
                    <div class="successmessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('successmessage');?>
                    </div>  
                <?php }?>
                
                    <div class="features-box clearfix" style="    margin-left: 0;">
                         <form name="stu_step3" id="stu_step4" method="post" action="<?php echo base_url('juco_transfer/free_payment'); ?>"  class="form-horizontal form-bordered" enctype="multipart/form-data">   
                          <div class="cols">
                          		<div class="ft-title">
                                	Free Membership
                                	<div class="ft-innertitle">
                                    	Free
                                    </div>
                                </div>
                                <div class="ft-list">
	                              	<ul>
                                    	<li>Athletic Profile</li>
                                        <li>Academic Profile</li>
                                        <li>Biometric Statistics</li>
                                        <li>Sport Statistics</li>
                                        <li>Timeline</li>
                                        <li>Upload Photos/Videos</li>
                                    </ul>
                              </div>
                              	<div class="btn-meb">
                                	<a href="javascript:void(0);"  onclick="$('#stu_step4').submit();">Start Free Membership</a>
                                </div>
                          </div>
                          </form>
                       
                          
                      <!-- <form name="stu_step3" id="stu_step3" method="post" action="<?php echo base_url('juco_transfer/payment'); ?>"  class="form-horizontal form-bordered" enctype="multipart/form-data">  
                       	<div class="cols-2">
                          		<div class="ft-title">
                                	Premium Membership
                                	<div class="ft-innertitle">
                                    	$9.99
                                    </div>
                                </div>
                                <div class="ft-list">
	                              	<ul>
                                    	<li>Athletic Profile</li>
                                        <li>Academic Profile</li>
                                        <li>Biometric Statistics</li>
                                        <li>Sport Statistics</li>
                                        <li>Messaging</li>
                                        <li>Timeline</li>
                                        <li>Upload Unlimited Photos/Videos</li>
                                  		<li>Camps/Combines</li>
                                        <li>MyRecruitBoard Ads</li>
                                    </ul>
                              </div>
                              	<div class="btn-meb">
                                	<a href="javascript:void(0);"  onclick="$('#stu_step3').submit();">Start Premium Membership</a>
                                </div>
                          </div>
                       </form> -->
                    </div>
                    
        		</div>
            </div>
        </div>
    </section>