<?php if($this->session->userdata('Dashbord')=='1'){ ?>
   <?php $CurrentClass= $this->router->fetch_class(); ?>
   <header class="dashboard-header clearfix">
            	<div class="dashboard-left fl clearfix">
                    <div class="logo fl">
                        <a href="<?php echo base_url(); ?>" title="MyRecruitBoard">
                            <img src="<?php echo base_url(); ?>images/dashboard-logo.png" alt="">
                        </a>
                    </div>
                    <nav class="nav fl">
                    <div class="toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                        <ul class="topnav clearfix">
                           
                            <li><a href="<?php echo base_url('dashboard'); ?>" <?php if($CurrentClass=='dashboard'){ ?> class="active" <?php } ?>>Home</a></li>
                            <li><a href="<?php echo base_url('myrecruitads'); ?>" <?php if($CurrentClass=='myrecruitads'){ ?> class="active" <?php } ?>>MyRecruitBoard</a></li>
                        <!--    <li><a href="javascript:void(0);">network </a></li>
                            <li><a href="javascript:void(0);">Forums</a></li>
                            <li><a href="javascript:void(0);">Search</a></li>-->
                        </ul>
                    </nav>
                </div>
                <div class="dashboard-right fr clearfix">
                    <ul class="clearfix fl">
                       <!-- <li>
                            <a href="#" class="flag" title="">
                                <img src="<?php echo base_url(); ?>images/icon1.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#" class="msg">
                                <img src="<?php echo base_url(); ?>images/icon2.png" alt="">
                            </a>
                        </li> 
                       -->
                       
					   <?php $UserDetails=get_user_detail($this->session->userdata('MyRecuritID'));?>
                       
                        <li class="user userH"><a href="javascript:void(0);"><?php echo  substr($UserDetails['FirstName'],0,10); ?> </a> 
                       <ul class="drop-down">

                       			<li><a href="<?php echo base_url(); ?>profile" >Edit Profile</a></li>
                                 <?php if(($UserDetails['PaymentType']=='1' || $UserDetails['PaymentType']=='2')&& ($UserDetails['UserType']=='1' || $UserDetails['UserType']=='2') && $UserDetails['IsCancel']!='1'  ) { ?>
                         <li><a href="<?php echo base_url(); ?>myrecruitads/cancel_payment" onclick="return confirm('Are you sure you want to cancel this membership?');">Cancel</a> 
                         </li>
                      <?php } ?> 
                             	<?php if($UserDetails['UserType']==1 || $UserDetails['UserType']==2 ){ ?>
                                	<li><a href="<?php echo base_url(); ?>edit_sports" >Edit Sport</a></li>
								<?php } ?>
                                <li><a href="<?php echo base_url(); ?>logout" > Logout</a></li>
                               
                    	</ul>
                          <?php if(($UserDetails['PaymentType']=='0' || $UserDetails['PaymentType']==NULL)&& ($UserDetails['UserType']=='1' || $UserDetails['UserType']=='2')) { ?>
                         <li class="upgrade-class"><a href="<?php echo base_url(); ?>myrecruitads/payment">Upgrade</a> 
                         </li>
                      <?php } ?>
                   
                       
                    </ul>
                    <!--<div class="search fr clearfix">
                    <form name="search" method="post" action="javascript:void(0); <?php // echo base_url('search_bar/action'); ?>">
                        <input type="text" name="seach" placeholder="Search">
                        <div class="search-btn fl">
                            <input type="submit" value="">
                        </div>
                        </form>
                    </div>-->
                </div>
            
        </header>

<?php  }else{ ?>	
					
<header class="header clearfix">
    	<div class="wrapper">
            <div class="left-header fl">
                <div class="logo">
                    <a href="<?php echo base_url(); ?>home" title="MyRecruitBoard">
                        <img src="<?php echo base_url(); ?>images/logo.png" alt="">
                    </a>
                </div>
            </div>
            <div class="right-header fr">
                <ul class="top-link clearfix">
                    <?php
					 if($this->session->userdata('MyRecuritID')) { ?>
                   		 <li><a href="<?php echo base_url(); ?>logout" class="">Logout</a></li>
                    <?php }
					
					else { ?>
                   	 	<li><a href="#" class="tp-login">Login</a>
                    	<form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>login/action" onsubmit="return getLogin();">
                        <ul class="login-frm"  <?php if($this->session->flashdata('errormessa')){?> style="display:block;"	<?php } ?> >
                        <?php if($this->session->flashdata('errormessa')){?>	
                             <li class="frm">
                            <div class="errormessage">
                                <button type="button" class="close commonbtn">&times;</button>
                                <?php echo $this->session->flashdata('errormessa');?>
                            </div>  
                            </li>
                        <?php }?>
                        <?php if($this->session->flashdata('resendcode')){?>	
                             <li class="frm">
                            <div class="errormessage_data">
                                <button type="button" class="close commonbtn">&times;</button>
                                <?php echo $this->session->flashdata('resendcode');?>
                            </div>  
                            </li>
                        <?php }?>
                        
						
						<?php if($this->session->flashdata('Succ')){?>	
                             <li class="frm">
                            <div class="successmessage">
                                <button type="button" class="close commonbtn">&times;</button>
                                <?php echo $this->session->flashdata('Succ');?>
                            </div>  
                            </li>
                        <?php }?>
                            <li class="frm">
                            	<input type="text" id="UserEmailAddress" name="UserEmailAddress"
                                 placeholder="Email Address">
                            </li>
                            <li class="frm">
                            	<input type="Password" id="UserPassword" name="UserPassword"
                                 placeholder="Password">
                            </li>
                            <li class="frm">
                            	<div class="inner-frm fl">
                                	<div class="login-btn">
                            		<input type="submit" value="Login">
                                </div>
                                </div>
                            	<div class="inner-frm fr">
                                    <div class="forgetLink">
                                        <a href="<?php echo base_url(); ?>forgot_password">Forgot Password</a>
                                    </div>
                                </div>
                            </li>
                         </ul>
                         
                        </form>
                         
                    
                    </li>
                    <?php } 
                     if($this->session->userdata('MyRecuritID')) { 
					 
		
					$UserID=$this->session->userdata('MyRecuritID');
					$user_info=get_user_detail($UserID);
					   if($user_info['UserType']=='1')
						{
						$url='student_athlete/step'.$user_info['Step'].'';
						}
						else if($user_info['UserType']=='2')
						{
						$url='juco_transfer/step'.$user_info['Step'].'';
						}
						else if($user_info['UserType']=='3')
						{
						$url='colleage_coach/step'.$user_info['Step'].'';
						}
						else if($user_info['UserType']=='4')
						{
						$url='colleage_admission/step'.$user_info['Step'].'';
						}
						else if($user_info['UserType']=='5')
						{
						$url='highschool_coach/step'.$user_info['Step'].'';
						}
						else if($user_info['UserType']=='6')
						{
						$url='club_coach/step'.$user_info['Step'].'';
						}
						else if($user_info['UserType']=='7')
						{
						$url='highschool_teacher/step'.$user_info['Step'].'';
						}
						else if($user_info['UserType']=='8')
						{
						$url='development_coach/step'.$user_info['Step'].'';
						}
						else if($user_info['UserType']=='9')
						{
						$url='academic_tutor/step'.$user_info['Step'].'';
						}
						else
						{
						$url='';
						}
		
					    ?>
                     <li><a href="<?php echo base_url($url);?>" class="">Dashboard</a></li>
                    <?php } else { ?>
                    <li><a href="#" class="tp-reg">Register</a>
                    	<ul class="drop-menu clearfix">
                        	<li>
                            	<a href="<?php echo base_url();?>student_athlete">
                                	<div class="drp-icon"> </div>
                                	Student Athlete
                                </a>
                            </li>
                            <li>
                            	<a href="<?php echo base_url();?>juco_transfer">
                                	<div class="drp-icon icon2"></div>
                                	JUCO/College Transfer
                                </a>
                            </li>
                            <li>
                            	<a href="<?php echo base_url();?>colleage_coach">
                                	<div class="drp-icon icon3"></div>
                                	College Coach
                                </a>
                            </li>
                            <li>
                            	<a href="<?php echo base_url();?>colleage_admission">
                                	<div class="drp-icon icon4"></div>
                                	College Admissions
                                </a>
                            </li>
                            <li>
                            	<a href="<?php echo base_url();?>highschool_coach">
                                	<div class="drp-icon icon5"></div>
                                	High School Coach
                                </a>
                            </li>
                            <li>
                            	<a href="<?php echo base_url();?>club_coach">
                                	<div class="drp-icon icon6"></div>
                                	AAU/Club Coach
                                </a>
                            </li>
                            <li>
                            	<a href="<?php echo base_url();?>highschool_teacher">
                                	<div class="drp-icon icon7"></div>
                                	High School Counselor/Teacher
                                </a>
                            </li>
                            <li>
                            	<a href="<?php echo base_url();?>development_coach">
                                	<div class="drp-icon icon8"></div>
                                	Developmental Coach/Business
                                </a>
                            </li>
                            <li>
                            	<a href="<?php echo base_url();?>academic_tutor">
                                	<div class="drp-icon icon9"></div>
                                	Academic Tutor
                                </a>
                            </li>
                        </ul>
                    </li>
                    <?php } ?>
                </ul>
            </div>	
        </div>
        
        
    </header>
    <?php } ?>
<script>

function getLogin()
{

	var flag = true;
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	
	if(!$('#UserEmailAddress').val().match(filter)){
		$('#UserEmailAddress').css('border','1px solid red');
		flag = false;
	} else {
		$('#UserEmailAddress').css('border','1px solid #a4a4a4');
	}
	if($('#UserPassword').val()==''){
		$('#UserPassword').css('border','1px solid red');
		flag = false;
	} else {
		$('#UserPassword').css('border','1px solid #a4a4a4');
	}
	
	
	
	
	if(flag == false) {
		return false;
	} else {
	
		return true;
	}	
	return false;		
}
</script>

