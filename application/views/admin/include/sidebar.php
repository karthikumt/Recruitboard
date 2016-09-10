<style>
.panel-collapse.collapse.in .table-responsive {
  max-height: 400px;
  overflow-y: scroll;
  width: 100%;
}
</style>
<?php
	$AdminDetail = get_admin_detail(get_admin_id());
	$AdminProfilePicture = $AdminDetail['AdminProfilePicture'];	
?>
<div class="leftpanel">    
    <div class="logopanel">
        <h1><span>[</span> MyRecruitBoard <span>]</span></h1>
    </div><!-- logopanel -->
        
    <div class="leftpanelinner">    
        
        <!-- This is only visible to small devices -->
        <div class="visible-xs hidden-sm hidden-md hidden-lg">   
            <div class="media userlogged">
                <img class="media-object" src="<?php echo base_url();?>admin_images/<?php echo $AdminProfilePicture?>" alt=""  width="30" height="30"/>
                <div class="media-body">
                    <h4><?php echo $AdminDetail['FirstName']." ".$AdminDetail['LastName'];?></h4>                    
                </div>
            </div>
          
            <h5 class="sidebartitle actitle">Account</h5>
            <ul class="nav nav-pills nav-stacked nav-bracket mb30">
              <li><a href="<?php echo base_url();?>admin/add_admin/edit_user/<?php echo get_admin_id(); ?>"><i class="glyphicon glyphicon-user"></i> My Profile</a></li>                
               <li><a href="<?php echo base_url();?>admin/login/logout"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
            </ul>
        </div>
      
      <?php
		 $CurrentClass = $this->router->fetch_class(); 
		 $CurrentFunction = $this->router->fetch_method(); 						
	  
	  	
	  ?>
      <h5 class="sidebartitle">Navigation</h5>
      <ul class="nav nav-pills nav-stacked nav-bracket">
      	<li <?php if($CurrentClass=='dashboard' && $CurrentFunction=='index'){ ?>class="active" <?php } ?>><a href="<?php echo base_url();?>admin"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>     
        
        
            <li class="nav-parent <?php if($CurrentClass=='slider_list' || $CurrentClass=='add_slider'){ ?> active nav-active <?php } ?>" ><a href="#"><i class="fa fa-th-list"></i> <span>Manage Slider</span></a>
          <ul class="children" <?php if($CurrentClass=='slider_list' || $CurrentClass=='add_slider'){ ?> style="display: block;" <?php } ?>>
            <li <?php if($CurrentClass=='add_slider'){ ?> class="active" <?php } ?>><a href="<?php echo base_url();?>admin/slider_list/add_slider"><i class="fa fa-caret-right"></i> Add Slider </a></li>
            
            <li <?php if($CurrentClass=='slider_list'){ ?> class="active" <?php } ?>><a href="<?php echo base_url();?>admin/slider_list"><i class="fa fa-caret-right"></i>Slider List</a></li>
            
          </ul>
        
        <li class="nav-parent <?php if($CurrentClass=='student_athlete' || $CurrentClass=='student_athlete_second' || $CurrentClass=='student_athlete_three'|| $CurrentClass=='student_athlete_four'|| $CurrentClass=='student_athlete_six'|| $CurrentClass=='student_athlete_ten' || $CurrentClass=='colleage_cotch'|| $CurrentClass=='colleage_cotch_two'|| $CurrentClass=='colleage_cotch_four' || $CurrentClass=='high_school_coach' || $CurrentClass=='club_coach' || $CurrentClass=='colleage_admission' ||$CurrentClass=='colleage_admission_second' || $CurrentClass=='colleage_admission_four' ||  $CurrentClass=='high_school_teacher' ||  $CurrentClass=='developement_coach' ||  $CurrentClass=='developement_coach_four' || $CurrentClass=='academic_step_one' || $CurrentClass=='academic_step_four'   ){ ?> active nav-active <?php } ?>" ><a href="#"><i class="fa fa-th-list"></i> <span>DropDown Manager</span></a>
          
          
          <ul class="children" <?php if($CurrentClass=='student_athlete' || $CurrentClass=='student_athlete_second' || $CurrentClass=='student_athlete_three'|| $CurrentClass=='student_athlete_four'|| $CurrentClass=='student_athlete_six'|| $CurrentClass=='student_athlete_ten' || $CurrentClass=='colleage_cotch'|| $CurrentClass=='colleage_cotch_two'|| $CurrentClass=='colleage_cotch_four' || $CurrentClass=='high_school_coach' || $CurrentClass=='club_coach' || $CurrentClass=='colleage_admission' ||$CurrentClass=='colleage_admission_second' || $CurrentClass=='colleage_admission_four' ||  $CurrentClass=='high_school_teacher' ||  $CurrentClass=='developement_coach' ||  $CurrentClass=='developement_coach_four'|| $CurrentClass=='academic_step_one' || $CurrentClass=='academic_step_four' ){ ?> style="display: block;" <?php } ?>>
          
            <li <?php if($CurrentClass=='student_athlete' || $CurrentClass=='student_athlete_second' || $CurrentClass=='student_athlete_three'|| $CurrentClass=='student_athlete_four'|| $CurrentClass=='student_athlete_six'|| $CurrentClass=='student_athlete_ten'){ ?> class="active" <?php } ?>><a href="<?php echo base_url();?>admin/student_athlete"><i class="fa fa-caret-right"></i> Student Athlete </a></li>
            
             <?php /*?><li <?php if($CurrentClass=='collage_transfer'){ ?> class="active" <?php } ?>><a href="javascript:void(0);"><i class="fa fa-caret-right"></i>JUCO/College Transfer </a></li><?php */?>
 	
    		 <li <?php if($CurrentClass=='colleage_cotch'|| $CurrentClass=='colleage_cotch_two'|| $CurrentClass=='colleage_cotch_four'){ ?> class="active" <?php } ?>><a href="<?php echo base_url();?>admin/colleage_cotch"><i class="fa fa-caret-right"></i>College Cotch </a></li> 
             
             <li <?php if($CurrentClass=='colleage_admission_second' || $CurrentClass=='colleage_admission' || $CurrentClass=='colleage_admission_four' ){ ?> class="active" <?php } ?>><a href="<?php echo base_url();?>admin/colleage_admission"><i class="fa fa-caret-right"></i>College Admission </a></li>           
             
             <li <?php if($CurrentClass=='high_school_coach'){ ?> class="active" <?php } ?>><a href="<?php echo base_url();?>admin/high_school_coach"><i class="fa fa-caret-right"></i>High School Coach</a></li>           
             
             <li <?php if($CurrentClass=='club_coach'){ ?> class="active" <?php } ?>><a href="<?php echo base_url();?>admin/club_coach"><i class="fa fa-caret-right"></i>Club Coach</a></li>           
             
             
             <li <?php if($CurrentClass=='high_school_teacher'){ ?> class="active" <?php } ?>><a href="<?php echo base_url();?>admin/high_school_teacher"><i class="fa fa-caret-right"></i>High School Teacher</a></li>           
            <li <?php if($CurrentClass=='developement_coach' ||  $CurrentClass=='developement_coach_four'  ){ ?> class="active" <?php } ?>><a href="<?php echo base_url();?>admin/developement_coach"><i class="fa fa-caret-right"></i>Developement Coach</a></li>        
			 
             <li <?php if($CurrentClass=='academic_step_one' || $CurrentClass=='academic_step_four'){ ?> class="active" <?php } ?>><a href="<?php echo base_url();?>admin/academic_step_one"><i class="fa fa-caret-right"></i>Academic Tutor</a></li>
            
          </ul>
          
          <li class="nav-parent <?php if($CurrentClass=='category_list' || $CurrentClass=='add_category'){ ?> active nav-active <?php } ?>" ><a href="#"><i class="fa fa-th-list"></i> <span>Manage Category</span></a>
          <ul class="children" <?php if($CurrentClass=='category_list' || $CurrentClass=='add_category'){ ?> style="display: block;" <?php } ?>>
            <li <?php if($CurrentClass=='add_category'){ ?> class="active" <?php } ?>><a href="<?php echo base_url();?>admin/category_list/add_category"><i class="fa fa-caret-right"></i> Add Category </a></li>
            
            <li <?php if($CurrentClass=='category_list'){ ?> class="active" <?php } ?>><a href="<?php echo base_url();?>admin/category_list"><i class="fa fa-caret-right"></i>Category List</a></li>
            
          </ul>
          
           
          <li class="nav-parent <?php if($CurrentClass=='student_listing'){ ?> active nav-active <?php } ?>" ><a href="#"><i class="fa fa-th-list"></i> <span>User Manager</span></a>
          
          
          <ul class="children" <?php if($CurrentClass=='student_listing'  ){ ?> style="display: block;" <?php } ?>>
          
            <li <?php if($CurrentFunction=='view_student'){ ?> class="active" <?php } ?>><a href="<?php echo base_url();?>admin/student_listing/view_student"><i class="fa fa-caret-right"></i> Student athlete</a></li>
            
               <li <?php if($CurrentFunction=='view_juco'){ ?> class="active" <?php } ?>><a href="<?php echo base_url();?>admin/student_listing/view_juco"><i class="fa fa-caret-right"></i> Juco Transfer</a></li>
 	
    		  <li <?php if($CurrentFunction=='view_coach'){ ?> class="active" <?php } ?>><a href="<?php echo base_url();?>admin/student_listing/view_coach"><i class="fa fa-caret-right"></i> Colleage Coach</a></li>
             
             
             <li <?php if($CurrentFunction=='view_admission'){ ?> class="active" <?php } ?>><a href="<?php echo base_url();?>admin/student_listing/view_admission"><i class="fa fa-caret-right"></i> College Admission</a></li>
              <li <?php if($CurrentFunction=='view_highschool'){ ?> class="active" <?php } ?>><a href="<?php echo base_url();?>admin/student_listing/view_highschool"><i class="fa fa-caret-right"></i>High School Coach</a></li>	     
             
          	  <li <?php if($CurrentFunction=='view_clubcoach'){ ?> class="active" <?php } ?>><a href="<?php echo base_url();?>admin/student_listing/view_clubcoach"><i class="fa fa-caret-right"></i>Club Coach</a></li>     
             <li <?php if($CurrentFunction=='view_highteacher'){ ?> class="active" <?php } ?>><a href="<?php echo base_url();?>admin/student_listing/view_highteacher"><i class="fa fa-caret-right"></i>High School Teacher</a></li>
             
             <li <?php if($CurrentFunction=='view_developement'){ ?> class="active" <?php } ?>><a href="<?php echo base_url();?>admin/student_listing/view_developement"><i class="fa fa-caret-right"></i>Developement Coach</a></li>
             	
          	  <li <?php if($CurrentFunction=='view_acedmic'){ ?> class="active" <?php } ?>><a href="<?php echo base_url();?>admin/student_listing/view_acedmic"><i class="fa fa-caret-right"></i>Academic Tutor</a></li>      
            
          </ul>
           
           <li class="nav-parent <?php if($CurrentClass=='post_ad' || $CurrentFunction=='post_ad'){ ?> active nav-active <?php } ?>" ><a href="javascript:void(0);"><i class="fa fa-th-list"></i> <span>Post Ads</span></a>
            <ul class="children" <?php if($CurrentClass=='post_ad' || $CurrentFunction=='post_ad'){ ?> style="display: block;" <?php } ?>>
            <li <?php if($CurrentClass=='post_ad' || $CurrentFunction=='post_ad'){ ?>class="active" <?php } ?>><a href="<?php echo base_url()?>admin/post_ad"><i class="fa fa-caret-right"></i>Ads List</a></li>
         	 </ul>
           </li>
           
          

        <li class="nav-parent <?php if($CurrentClass=='add_admin' || $CurrentFunction=='add_user'){ ?> active nav-active <?php } ?>" ><a href="#"><i class="fa fa-th-list"></i> <span>General Settngs</span></a>
          <ul class="children" <?php if($CurrentClass=='add_admin' || $CurrentFunction=='add_user'){ ?> style="display: block;" <?php } ?>>
            <li <?php if($CurrentClass=='add_admin' || $CurrentFunction=='add_user'){ ?>class="active" <?php } ?>><a href="<?php echo base_url()?>admin/add_admin"><i class="fa fa-caret-right"></i> Admin List</a></li>
             <li <?php if($CurrentClass=='general-setting' || $CurrentClass=='general-setting'){ ?>class="active" <?php } ?>><a href="<?php echo base_url()?>admin/general_setting"><i class="fa fa-caret-right"></i> General-Setting</a></li>
          </ul>
          
        </li>

          
        </li>
           
      </ul>
      
      
      
    </div><!-- leftpanelinner -->
  </div>