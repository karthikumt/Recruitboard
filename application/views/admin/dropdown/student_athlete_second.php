<?php	
	if(!empty($user_info)){
			$AdminID = $user_info['AdminID'];
			$FirstName = $user_info['FirstName'];
			$LastName = $user_info['LastName'];
			$Email = $user_info['Email'];
			$UserName = $user_info['UserName'];
			$Password = $user_info['Password'];
			$AdminProfilePicture = $user_info['AdminProfilePicture'];	
			$AdminType = $user_info['AdminType'];							
	}else{
			$AdminID = "";
			$FirstName = "";
			$LastName = "";
			$Email = "";
			$UserName = "";
			$Password = "";
			$AdminProfilePicture = "";
			$AdminType = "";
	}
?>    


<div class="pageheader">
  <h2><i class="fa fa-pencil"></i> Add or Edit Drop-Down List </h2>
  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>admin/">MyRecruitBoard</a></li>
      <li class="active">Add or Edit Drop-Down List</li>
    </ol>
  </div>
</div>

  
  
  <div class="contentpanel">
     
  <div class="col-md-12">
          <div class="panel panel-default">
            
            <div class="panel-body panel-body-nopadding">
              
              <!-- BASIC WIZARD -->
              <div class="basic-wizard" id="basicWizard">
                
                <ul class="nav nav-pills nav-justified">
                   <li class=""><a href="<?php echo base_url(); ?>admin/student_athlete"><span>Step 3</span></a></li>
                  <li class="active"><a href="<?php echo base_url(); ?>admin/student_athlete_second"><span>Step 4</span></a></li>
                  <li class=""><a href="<?php echo base_url(); ?>admin/student_athlete_three"><span>Step 4a</span></a></li>
                   <li class=""><a href="<?php echo base_url(); ?>admin/student_athlete_four"><span>Step 5</span></a></li>	
                <li class=""><a href="<?php echo base_url(); ?>admin/student_athlete_six"><span>Step 6</span></a></li>	
                <li class=""><a href="<?php echo base_url(); ?>admin/student_athlete_ten"><span>Step 10</span></a></li>	
                  
                </ul>
                
                
               
                <div class="tab-content">
               
                <?php if($this->session->flashdata('successmessage')){?>	
                      <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <?php echo $this->session->flashdata('successmessage');?>
                      </div>
                      <?php } ?>  
                      
                      <?php if($this->session->flashdata('errormessage')){?>	
                      <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?php echo $this->session->flashdata('errormessage');?>
                      </div>  
                      <?php }?>  
                  <div id="accordion" class="panel-group">
               
                <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a href="#collapseOne" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                 	Education ACT List
                  </a>
                </h4>
              </div>
              <div class="panel-collapse collapse" id="collapseOne" style="height: 0 px;">
                <div class="panel-body">
               <div class="buttoncss" style="padding:0 25px 0 0;">
				  <button class="btn btn-primary addEducation">Add Education ACT</button>				  
		  	    </div>
          		<br /><br />
                  <div class="table-responsive">
          <table class="table mb30">
            <thead>
              <tr>
                <th>ID</th>
                <th>ACT Score</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="Education_List">
              	<?php $Education_details=get_table_details('stu_education_act','EducationID'); ?>
               <?php if(empty($Education_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Education_details as $Education){ ?>
              <tr id="Education_<?php echo $Education['EducationID']; ?>">
                <td><?php echo $Education['EducationID']; ?></td>
                <td><?php echo $Education['EducationName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_education/<?php echo $Education['EducationID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_education('<?php echo $Education['EducationID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
            </tbody>
          </table>
               <script>
		  	jQuery(".addEducation").click(function() {
					jQuery.fancybox.open([
						{
							maxWidth: 800,
							maxHeight: 600,
							fitToView: false,
							width: '70%',
							height: '70%',
							autoSize: false,
							closeClick: false,
							openEffect: 'none',
							closeEffect: 'none',
							type: 'ajax',
							href: '<?php echo base_url(); ?>admin/student_athlete_second/add_education/',
						}
					]);
				});
			function remove_education(EducationID)
			{
				
	
				if(confirm("Are You Sure?"))
				{
					 $.ajax({
						url:'<?php echo base_url(); ?>admin/student_athlete_second/delete_education/',
						type:'POST',
						data:{EducationID:EducationID},
						success:function(result){
						  $('#Education_'+EducationID).remove();
						}

            });
			return false;
				}
			}
			
			
			
		
			
		  </script>
         
          </div>
                </div>
              </div>
              
            </div>
            
                <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a href="#collapseTwo" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                 	Education SAT List
                  </a>
                </h4>
              </div>
              <div class="panel-collapse collapse" id="collapseTwo" style="height: 0 px;">
                <div class="panel-body">
               <div class="buttoncss" style="padding:0 25px 0 0;">
				  <button class="btn btn-primary addEducation_sat">Add Education SAT</button>				  
		  	    </div>
          		<br /><br />
                  <div class="table-responsive">
          <table class="table mb30">
            <thead>
              <tr>
                <th>ID</th>
                <th>SAT Score</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="Education_sat_List">
              	<?php $Education_details_sat=get_table_details('stu_education_sat','Education_sat_ID'); ?>
               <?php if(empty($Education_details_sat)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Education_details_sat as $Education_sat){ ?>
              <tr id="Education_sat_<?php echo $Education_sat['Education_sat_ID']; ?>">
                <td><?php echo $Education_sat['Education_sat_ID']; ?></td>
                <td><?php echo $Education_sat['Education_sat_Name']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_education_sat/<?php echo $Education_sat['Education_sat_ID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_education_sat('<?php echo $Education_sat['Education_sat_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
            </tbody>
          </table>
          
          <script>
		  
		  	
			 	jQuery(".addEducation_sat").click(function() {
					jQuery.fancybox.open([
						{
							maxWidth: 800,
							maxHeight: 600,
							fitToView: false,
							width: '70%',
							height: '70%',
							autoSize: false,
							closeClick: false,
							openEffect: 'none',
							closeEffect: 'none',
							type: 'ajax',
							href: '<?php echo base_url(); ?>admin/student_athlete_second/add_education_sat/',
						}
					]);
				});
			function remove_education_sat(Education_sat_ID)
			{
				
	
				if(confirm("Are You Sure?"))
				{
					 $.ajax({
						url:'<?php echo base_url(); ?>admin/student_athlete_second/delete_education_sat/',
						type:'POST',
						data:{Education_sat_ID:Education_sat_ID},
						success:function(result){
						  $('#Education_sat_'+Education_sat_ID).remove();
						}

            });
			return false;
				}
			}
		  </script>
         
          </div>
                </div>
              </div>
              
            </div>
            
            
                <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a href="#collapseThree" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                 	Education GPA List
                  </a>
                </h4>
              </div>
              <div class="panel-collapse collapse" id="collapseThree" style="height: 0 px;">
                <div class="panel-body">
               <div class="buttoncss" style="padding:0 25px 0 0;">
				  <button class="btn btn-primary addEducation_gpa">Add Education GPA</button>				  
		  	    </div>
          		<br /><br />
                  <div class="table-responsive">
          <table class="table mb30">
            <thead>
              <tr>
                <th>ID</th>
                <th>GPA Score</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="Education_gpa_List">
              	<?php $Education_gpa_details=get_table_details('stu_education_gpa','Education_gpa_ID'); ?>
               <?php if(empty($Education_gpa_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Education_gpa_details as $Education_gpa){ ?>
              <tr id="Education_gpa_<?php echo $Education_gpa['Education_gpa_ID']; ?>">
                <td><?php echo $Education_gpa['Education_gpa_ID']; ?></td>
                <td><?php echo $Education_gpa['Education_gpa_Name']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_education_gpa/<?php echo $Education_gpa['Education_gpa_ID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_education_gpa('<?php echo $Education_gpa['Education_gpa_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
            </tbody>
          </table>
          
            <script>
		  
		  	
			 	jQuery(".addEducation_gpa").click(function() {
					jQuery.fancybox.open([
						{
							maxWidth: 800,
							maxHeight: 600,
							fitToView: false,
							width: '70%',
							height: '70%',
							autoSize: false,
							closeClick: false,
							openEffect: 'none',
							closeEffect: 'none',
							type: 'ajax',
							href: '<?php echo base_url(); ?>admin/student_athlete_second/add_education_gpa/',
						}
					]);
				});
			function remove_education_gpa(Education_gpa_ID)
			{
				
	
				if(confirm("Are You Sure?"))
				{
					 $.ajax({
						url:'<?php echo base_url(); ?>admin/student_athlete_second/delete_education_gpa/',
						type:'POST',
						data:{Education_gpa_ID:Education_gpa_ID},
						success:function(result){
						  $('#Education_gpa_'+Education_gpa_ID).remove();
						}

            });
			return false;
				}
			}
		  </script>
         
          </div>
                </div>
              </div>
              
            </div>
        
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a href="#collapseFour" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                        Education Core GPA List
                      </a>
                    </h4>
                  </div>
                  <div class="panel-collapse collapse" id="collapseFour" style="height: 0 px;">
                    <div class="panel-body">
                   <div class="buttoncss" style="padding:0 25px 0 0;">
                      <button class="btn btn-primary addEducation_Core_Gpa">Add Core Education GPA</button>				  
                    </div>
                    <br /><br />
                      <div class="table-responsive">
              <table class="table mb30">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Core GPA Score</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="Education_Core_Gpa_List">
                    <?php $Education_Core_Gpa_details=get_table_details('stu_education_core_gpa','Education_Core_Gpa_ID'); ?>
                   <?php if(empty($Education_Core_Gpa_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                   <?php foreach($Education_Core_Gpa_details as $Education_Core_Gpa){ ?>
                  <tr id="Education_Core_Gpa_<?php echo $Education_Core_Gpa['Education_Core_Gpa_ID']; ?>">
                    <td><?php echo $Education_Core_Gpa['Education_Core_Gpa_ID']; ?></td>
                    <td><?php echo $Education_Core_Gpa['Education_Core_Gpa_Name']; ?></td>
                    <td>
                      <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_education_Core_Gpa/<?php echo $Education_Core_Gpa['Education_Core_Gpa_ID']; ?> "><i class="fa fa-pencil"></i></a>
                      <a class="delete-row" href="javascript:void(0);" onclick="remove_education_Core_Gpa('<?php echo $Education_Core_Gpa['Education_Core_Gpa_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                    </td>
                  </tr>
                  <?php } } ?>
                </tbody>
              </table>
              
                <script>
              
                
                    jQuery(".addEducation_Core_Gpa").click(function() {
                        jQuery.fancybox.open([
                            {
                                maxWidth: 800,
                                maxHeight: 600,
                                fitToView: false,
                                width: '70%',
                                height: '70%',
                                autoSize: false,
                                closeClick: false,
                                openEffect: 'none',
                                closeEffect: 'none',
                                type: 'ajax',
                                href: '<?php echo base_url(); ?>admin/student_athlete_second/add_education_Core_Gpa/',
                            }
                        ]);
                    });
                function remove_education_Core_Gpa(Education_Core_Gpa_ID)
                {
                    
        
                    if(confirm("Are You Sure?"))
                    {
                         $.ajax({
                            url:'<?php echo base_url(); ?>admin/student_athlete_second/delete_education_Core_Gpa/',
                            type:'POST',
                            data:{Education_Core_Gpa_ID:Education_Core_Gpa_ID},
                            success:function(result){
                              $('#Education_Core_Gpa_'+Education_Core_Gpa_ID).remove();
                            }
    
                });
                return false;
                    }
                }
              </script>
             
              </div>
                    </div>
                  </div>
                  
                </div>

                <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a href="#collapseFive" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                ELigibility NCIAA List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseFive" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addEligibility_Nciaa">Add Eligibility NCIAA</button>				  
                            </div>
                            <br /><br />
                              <div class="table-responsive">
                      <table class="table mb30">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>NCIAA Score</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="Eligibility_Nciaa_List">
                            <?php $Eligibility_Nciaa_details=get_table_details('stu_eligibility_nciaa','Eligibility_Nciaa_ID'); ?>
                           <?php if(empty($Eligibility_Nciaa_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Eligibility_Nciaa_details as $Eligibility_Nciaa){ ?>
                          <tr id="Eligibility_Nciaa_<?php echo $Eligibility_Nciaa['Eligibility_Nciaa_ID']; ?>">
                            <td><?php echo $Eligibility_Nciaa['Eligibility_Nciaa_ID']; ?></td>
                            <td><?php echo $Eligibility_Nciaa['Eligibility_Nciaa_Name']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_Eligibility_Nciaa/<?php echo $Eligibility_Nciaa['Eligibility_Nciaa_ID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_Eligibility_Nciaa('<?php echo $Eligibility_Nciaa['Eligibility_Nciaa_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                      
                        <script>
                      
                        
                            jQuery(".addEligibility_Nciaa").click(function() {
                                jQuery.fancybox.open([
                                    {
                                        maxWidth: 800,
                                        maxHeight: 600,
                                        fitToView: false,
                                        width: '70%',
                                        height: '70%',
                                        autoSize: false,
                                        closeClick: false,
                                        openEffect: 'none',
                                        closeEffect: 'none',
                                        type: 'ajax',
                                        href: '<?php echo base_url(); ?>admin/student_athlete_second/add_Eligibility_Nciaa/',
                                    }
                                ]);
                            });
                        function remove_Eligibility_Nciaa(Eligibility_Nciaa_ID)
                        {
                            
                
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_second/delete_Eligibility_Nciaa/',
                                    type:'POST',
                                    data:{Eligibility_Nciaa_ID:Eligibility_Nciaa_ID},
                                    success:function(result){
                                      $('#Eligibility_Nciaa_'+Eligibility_Nciaa_ID).remove();
                                    }
            
                        });
                        return false;
                            }
                        }
                      </script>
                     
                      </div>
                            </div>
                          </div>
                          
                        </div>
                        
                <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a href="#collapseSix" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                 	ELigibility NAIA List
                  </a>
                </h4>
              </div>
              <div class="panel-collapse collapse" id="collapseSix" style="height: 0 px;">
                <div class="panel-body">
               <div class="buttoncss" style="padding:0 25px 0 0;">
				  <button class="btn btn-primary addEligibility_Naia">Add Core Eligibility NAIA</button>				  
		  	    </div>
          		<br /><br />
                  <div class="table-responsive">
          <table class="table mb30">
            <thead>
              <tr>
                <th>ID</th>
                <th>NAIA Score</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="Eligibility_Naia_List">
              	<?php $Eligibility_Naia_details=get_table_details('stu_eligibility_naia','Eligibility_Naia_ID'); ?>
               <?php if(empty($Eligibility_Naia_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Eligibility_Naia_details as $Eligibility_Naia){ ?>
              <tr id="Eligibility_Naia_<?php echo $Eligibility_Naia['Eligibility_Naia_ID']; ?>">
                <td><?php echo $Eligibility_Naia['Eligibility_Naia_ID']; ?></td>
                <td><?php echo $Eligibility_Naia['Eligibility_Naia_Name']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_Eligibility_Naia/<?php echo $Eligibility_Naia['Eligibility_Naia_ID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_Eligibility_Naia('<?php echo $Eligibility_Naia['Eligibility_Naia_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
            </tbody>
          </table>
          
            <script>
		  
		  	
			 	jQuery(".addEligibility_Naia").click(function() {
					jQuery.fancybox.open([
						{
							maxWidth: 800,
							maxHeight: 600,
							fitToView: false,
							width: '70%',
							height: '70%',
							autoSize: false,
							closeClick: false,
							openEffect: 'none',
							closeEffect: 'none',
							type: 'ajax',
							href: '<?php echo base_url(); ?>admin/student_athlete_second/add_Eligibility_Naia/',
						}
					]);
				});
			function remove_Eligibility_Naia(Eligibility_Naia_ID)
			{
				
	
				if(confirm("Are You Sure?"))
				{
					 $.ajax({
						url:'<?php echo base_url(); ?>admin/student_athlete_second/delete_Eligibility_Naia/',
						type:'POST',
						data:{Eligibility_Naia_ID:Eligibility_Naia_ID},
						success:function(result){
						  $('#Eligibility_Naia_'+Eligibility_Naia_ID).remove();
						}

            });
			return false;
				}
			}
		  </script>
         
          </div>
                </div>
              </div>
              
            </div>
           
				<div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a href="#collapseSeven" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                 	Intended College List
                  </a>
                </h4>
              </div>
              <div class="panel-collapse collapse" id="collapseSeven" style="height: 0 px;">
                <div class="panel-body">
               <div class="buttoncss" style="padding:0 25px 0 0;">
				  <button class="btn btn-primary addEligibility_Intended">Add Intended College</button>				  
		  	    </div>
          		<br /><br />
                  <div class="table-responsive">
          <table class="table mb30">
            <thead>
              <tr>
                <th>ID</th>
                <th>Intended College</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="Eligibility_Intended_List">
              	<?php $Eligibility_Intended_details=get_table_details('stu_eligibility_intended','Eligibility_Intended_ID'); ?>
               <?php if(empty($Eligibility_Intended_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Eligibility_Intended_details as $Eligibility_Intended){ ?>
              <tr id="Eligibility_Intended_<?php echo $Eligibility_Intended['Eligibility_Intended_ID']; ?>">
                <td><?php echo $Eligibility_Intended['Eligibility_Intended_ID']; ?></td>
                <td><?php echo $Eligibility_Intended['Eligibility_Intended_Name']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_Eligibility_Intended/<?php echo $Eligibility_Intended['Eligibility_Intended_ID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_Eligibility_Intended('<?php echo $Eligibility_Intended['Eligibility_Intended_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
            </tbody>
          </table>
          
            <script>
		  
		  	
			 	jQuery(".addEligibility_Intended").click(function() {
					jQuery.fancybox.open([
						{
							maxWidth: 800,
							maxHeight: 600,
							fitToView: false,
							width: '70%',
							height: '70%',
							autoSize: false,
							closeClick: false,
							openEffect: 'none',
							closeEffect: 'none',
							type: 'ajax',
							href: '<?php echo base_url(); ?>admin/student_athlete_second/add_Eligibility_Intended/',
						}
					]);
				});
			function remove_Eligibility_Intended(Eligibility_Intended_ID)
			{
				
	
				if(confirm("Are You Sure?"))
				{
					 $.ajax({
						url:'<?php echo base_url(); ?>admin/student_athlete_second/delete_Eligibility_Intended/',
						type:'POST',
						data:{Eligibility_Intended_ID:Eligibility_Intended_ID},
						success:function(result){
						  $('#Eligibility_Intended_'+Eligibility_Intended_ID).remove();
						}

            });
			return false;
				}
			}
		  </script>
         
          </div>
                </div>
              </div>
              
            </div>
                
                <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a href="#collapseEight" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                 	College Major List
                  </a>
                </h4>
              </div>
              <div class="panel-collapse collapse" id="collapseEight" style="height: 0 px;">
                <div class="panel-body">
               <div class="buttoncss" style="padding:0 25px 0 0;">
				  <button class="btn btn-primary addEligibility_Major">Add College Major </button>				  
		  	    </div>
          		<br /><br />
                  <div class="table-responsive">
          <table class="table mb30">
            <thead>
              <tr>
                <th>ID</th>
                <th>Intent Of Colleage</th>
                <th>Major </th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="Eligibility_Major_List">
              	<?php $Eligibility_Major_details=get_table_details('stu_eligibility_major','Eligibility_Major_ID'); ?>
               <?php if(empty($Eligibility_Major_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Eligibility_Major_details as $Eligibility_Major){ ?>
              <tr id="Eligibility_Major_<?php echo $Eligibility_Major['Eligibility_Major_ID']; ?>">
                <td><?php echo $Eligibility_Major['Eligibility_Major_ID']; ?></td>
                <td>
                	<?php if($Eligibility_Major['Eligibility_Intended_ID']!=0 && $Eligibility_Major['Eligibility_Intended_ID']!=NULL){ 
							 $SportName=get_row_data('stu_eligibility_intended','Eligibility_Intended_ID',$Eligibility_Major['Eligibility_Intended_ID']);
								echo $SportName['Eligibility_Intended_Name'];  } else { echo "-"; }?> 
                                
                 </td>
                <td><?php echo $Eligibility_Major['Eligibility_Major_Name']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_Eligibility_Major/<?php echo $Eligibility_Major['Eligibility_Major_ID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_Eligibility_Major('<?php echo $Eligibility_Major['Eligibility_Major_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
            </tbody>
          </table>
          
            <script>
		  
		  	
			 	jQuery(".addEligibility_Major").click(function() {
					jQuery.fancybox.open([
						{
							maxWidth: 800,
							maxHeight: 600,
							fitToView: false,
							width: '70%',
							height: '70%',
							autoSize: false,
							closeClick: false,
							openEffect: 'none',
							closeEffect: 'none',
							type: 'ajax',
							href: '<?php echo base_url(); ?>admin/student_athlete_second/add_Eligibility_Major/',
						}
					]);
				});
			function remove_Eligibility_Major(Eligibility_Major_ID)
			{
				
	
				if(confirm("Are You Sure?"))
				{
					 $.ajax({
						url:'<?php echo base_url(); ?>admin/student_athlete_second/delete_Eligibility_Major/',
						type:'POST',
						data:{Eligibility_Major_ID:Eligibility_Major_ID},
						success:function(result){
						  $('#Eligibility_Major_'+Eligibility_Major_ID).remove();
						}

            });
			return false;
				}
			}
		  </script>
         
          </div>
                </div>
              </div>
              
            </div>
            
			    <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a href="#collapseNine" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                 	Guidance Name List
                  </a>
                </h4>
              </div>
              <div class="panel-collapse collapse" id="collapseNine" style="height: 0 px;">
                <div class="panel-body">
               <div class="buttoncss" style="padding:0 25px 0 0;">
				  <button class="btn btn-primary addGuidance_Name">Add Guidance Name </button>				  
		  	    </div>
          		<br /><br />
                  <div class="table-responsive">
          <table class="table mb30">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name </th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="Guidance_Name_List">
              	<?php $Guidance_Name_details=get_table_details('stu_guidance_name','Guidance_ID'); ?>
               <?php if(empty($Guidance_Name_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Guidance_Name_details as $Guidance_Name){ ?>
              <tr id="Guidance_<?php echo $Guidance_Name['Guidance_ID']; ?>">
                <td><?php echo $Guidance_Name['Guidance_ID']; ?></td>
                <td><?php echo $Guidance_Name['Guidance_Name']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_Guidance_Name/<?php echo $Guidance_Name['Guidance_ID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_Guidance_Name('<?php echo $Guidance_Name['Guidance_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
            </tbody>
          </table>
          
            <script>
		  
		  	
			 	jQuery(".addGuidance_Name").click(function() {
					jQuery.fancybox.open([
						{
							maxWidth: 800,
							maxHeight: 600,
							fitToView: false,
							width: '70%',
							height: '70%',
							autoSize: false,
							closeClick: false,
							openEffect: 'none',
							closeEffect: 'none',
							type: 'ajax',
							href: '<?php echo base_url(); ?>admin/student_athlete_second/add_Guidance_Name/',
						}
					]);
				});
			function remove_Guidance_Name(Guidance_ID)
			{
				
	
				if(confirm("Are You Sure?"))
				{
					 $.ajax({
						url:'<?php echo base_url(); ?>admin/student_athlete_second/delete_Guidance_Name/',
						type:'POST',
						data:{Guidance_ID:Guidance_ID},
						success:function(result){
						  $('#Guidance_'+Guidance_ID).remove();
						}

            });
			return false;
				}
			}
		  </script>
         
          </div>
                </div>
              </div>
              
            </div>

                <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a href="#collapseTen" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                Guidance Email List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseTen" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addGuidance_Counselor">Add Guidance Email </button>				  
                            </div>
                            <br /><br />
                              <div class="table-responsive">
                      <table class="table mb30">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="Guidance_Counselor_List">
                            <?php $Guidance_Counselor_details=get_table_details('stu_guidance_email','Guidance_Counselor_ID'); ?>
                           <?php if(empty($Guidance_Counselor_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Guidance_Counselor_details as $Guidance_Counselor){ ?>
                          <tr id="Guidance_Counselor_<?php echo $Guidance_Counselor['Guidance_Counselor_ID']; ?>">
                            <td><?php echo $Guidance_Counselor['Guidance_Counselor_ID']; ?></td>
                            <td><?php echo $Guidance_Counselor['Guidance_Counselor_Email']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_Guidance_Counselor/<?php echo $Guidance_Counselor['Guidance_Counselor_ID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_Guidance_Counselor('<?php echo $Guidance_Counselor['Guidance_Counselor_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                      
                        <script>
                      
                        
                            jQuery(".addGuidance_Counselor").click(function() {
                                jQuery.fancybox.open([
                                    {
                                        maxWidth: 800,
                                        maxHeight: 600,
                                        fitToView: false,
                                        width: '70%',
                                        height: '70%',
                                        autoSize: false,
                                        closeClick: false,
                                        openEffect: 'none',
                                        closeEffect: 'none',
                                        type: 'ajax',
                                        href: '<?php echo base_url(); ?>admin/student_athlete_second/add_Guidance_Counselor/',
                                    }
                                ]);
                            });
                        function remove_Guidance_Counselor(Guidance_Counselor_ID)
                        {
                            
                
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_second/delete_Guidance_Counselor/',
                                    type:'POST',
                                    data:{Guidance_Counselor_ID:Guidance_Counselor_ID},
                                    success:function(result){
                                      $('#Guidance_Counselor_'+Guidance_Counselor_ID).remove();
                                    }
            
                        });
                        return false;
                            }
                        }
                      </script>
                     
                      </div>
                            </div>
                          </div>
                          
                        </div>
                        
           	    <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a href="#collapseEleven" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                Toefl_Score Total List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseEleven" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addToefl_Total_Score">Add Toefl_Score Total </button>				  
                            </div>
                            <br /><br />
                              <div class="table-responsive">
                      <table class="table mb30">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Total Score</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="Toefl_Total_Score_List">
                            <?php $Toefl_Total_Score_details=get_table_details('stu_toefl_score_total','Toefl_Total_Score_ID'); ?>
                           <?php if(empty($Toefl_Total_Score_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Toefl_Total_Score_details as $Toefl_Total_Score){ ?>
                          <tr id="Toefl_Total_Score_<?php echo $Toefl_Total_Score['Toefl_Total_Score_ID']; ?>">
                            <td><?php echo $Toefl_Total_Score['Toefl_Total_Score_ID']; ?></td>
                            <td><?php echo $Toefl_Total_Score['Toefl_Total_Score']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_Toefl_Total_Score/<?php echo $Toefl_Total_Score['Toefl_Total_Score_ID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_Toefl_Total_Score('<?php echo $Toefl_Total_Score['Toefl_Total_Score_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                      
                        <script>
                      
                        
                            jQuery(".addToefl_Total_Score").click(function() {
                                jQuery.fancybox.open([
                                    {
                                        maxWidth: 800,
                                        maxHeight: 600,
                                        fitToView: false,
                                        width: '70%',
                                        height: '70%',
                                        autoSize: false,
                                        closeClick: false,
                                        openEffect: 'none',
                                        closeEffect: 'none',
                                        type: 'ajax',
                                        href: '<?php echo base_url(); ?>admin/student_athlete_second/add_Toefl_Total_Score/',
                                    }
                                ]);
                            });
                        function remove_Toefl_Total_Score(Toefl_Total_Score_ID)
                        {
                            
                
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_second/delete_Toefl_Total_Score/',
                                    type:'POST',
                                    data:{Toefl_Total_Score_ID:Toefl_Total_Score_ID},
                                    success:function(result){
                                      $('#Toefl_Total_Score_'+Toefl_Total_Score_ID).remove();
                                    }
            
                        });
                        return false;
                            }
                        }
                      </script>
                     
                      </div>
                            </div>
                          </div>
                          
                        </div>
                      
                <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a href="#collapseTwelve" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                Toefl_Score Reading List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseTwelve" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addToefl_Reading_Score">Add Toefl_Score Reading </button>				  
                            </div>
                            <br /><br />
                              <div class="table-responsive">
                      <table class="table mb30">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Reading Score</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="Toefl_Reading_Score_List">
                            <?php $Toefl_Reading_Score_details=get_table_details('stu_toefl_score_reading','Toefl_Reading_Score_ID'); ?>
                           <?php if(empty($Toefl_Reading_Score_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Toefl_Reading_Score_details as $Toefl_Reading_Score){ ?>
                          <tr id="Toefl_Reading_Score_<?php echo $Toefl_Reading_Score['Toefl_Reading_Score_ID']; ?>">
                            <td><?php echo $Toefl_Reading_Score['Toefl_Reading_Score_ID']; ?></td>
                            <td><?php echo $Toefl_Reading_Score['Toefl_Reading_Score']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_Toefl_Reading_Score/<?php echo $Toefl_Reading_Score['Toefl_Reading_Score_ID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_Toefl_Reading_Score('<?php echo $Toefl_Reading_Score['Toefl_Reading_Score_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                      
                        <script>
                      
                        
                            jQuery(".addToefl_Reading_Score").click(function() {
                                jQuery.fancybox.open([
                                    {
                                        maxWidth: 800,
                                        maxHeight: 600,
                                        fitToView: false,
                                        width: '70%',
                                        height: '70%',
                                        autoSize: false,
                                        closeClick: false,
                                        openEffect: 'none',
                                        closeEffect: 'none',
                                        type: 'ajax',
                                        href: '<?php echo base_url(); ?>admin/student_athlete_second/add_Toefl_Reading_Score/',
                                    }
                                ]);
                            });
                        function remove_Toefl_Reading_Score(Toefl_Reading_Score_ID)
                        {
                            
                
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_second/delete_Toefl_Reading_Score/',
                                    type:'POST',
                                    data:{Toefl_Reading_Score_ID:Toefl_Reading_Score_ID},
                                    success:function(result){
                                      $('#Toefl_Reading_Score_'+Toefl_Reading_Score_ID).remove();
                                    }
            
                        });
                        return false;
                            }
                        }
                      </script>
                     
                      </div>
                            </div>
                          </div>
                          
                        </div>
                        
                <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a href="#collapseThirteen" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                Toefl_Score Listening List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseThirteen" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addToefl_Listening_Score">Add Toefl_Score Listening </button>				  
                            </div>
                            <br /><br />
                              <div class="table-responsive">
                      <table class="table mb30">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Listening Score</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="Toefl_Listening_Score_List">
                            <?php $Toefl_Listening_Score_details=get_table_details('stu_toefl_score_listening','Toefl_Listening_Score_ID'); ?>
                           <?php if(empty($Toefl_Listening_Score_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Toefl_Listening_Score_details as $Toefl_Listening_Score){ ?>
                          <tr id="Toefl_Listening_Score_<?php echo $Toefl_Listening_Score['Toefl_Listening_Score_ID']; ?>">
                            <td><?php echo $Toefl_Listening_Score['Toefl_Listening_Score_ID']; ?></td>
                            <td><?php echo $Toefl_Listening_Score['Toefl_Listening_Score']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_Toefl_Listening_Score/<?php echo $Toefl_Listening_Score['Toefl_Listening_Score_ID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_Toefl_Listening_Score('<?php echo $Toefl_Listening_Score['Toefl_Listening_Score_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                      
                        <script>
                      
                        
                            jQuery(".addToefl_Listening_Score").click(function() {
                                jQuery.fancybox.open([
                                    {
                                        maxWidth: 800,
                                        maxHeight: 600,
                                        fitToView: false,
                                        width: '70%',
                                        height: '70%',
                                        autoSize: false,
                                        closeClick: false,
                                        openEffect: 'none',
                                        closeEffect: 'none',
                                        type: 'ajax',
                                        href: '<?php echo base_url(); ?>admin/student_athlete_second/add_Toefl_Listening_Score/',
                                    }
                                ]);
                            });
                        function remove_Toefl_Listening_Score(Toefl_Listening_Score_ID)
                        {
                            
                
                            if(confirm("Are You Sure?"))
                            {

                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_second/delete_Toefl_Listening_Score/',
                                    type:'POST',
                                    data:{Toefl_Listening_Score_ID:Toefl_Listening_Score_ID},
                                    success:function(result){
                                      $('#Toefl_Listening_Score_'+Toefl_Listening_Score_ID).remove();
                                    }
            
                        });
                        return false;
                            }
                        }
                      </script>
                     
                      </div>
                            </div>
                          </div>
                          
                        </div>
                  
             	<div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a href="#collapseFourteen" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                Toefl_Score Speaking List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseFourteen" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addToefl_Speaking_Score">Add Toefl_Score Speaking </button>				  
                            </div>
                            <br /><br />
                              <div class="table-responsive">
                      <table class="table mb30">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Speaking Score</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="Toefl_Speaking_Score_List">
                            <?php $Toefl_Speaking_Score_details=get_table_details('stu_toefl_score_speaking','Toefl_Speaking_Score_ID'); ?>
                           <?php if(empty($Toefl_Speaking_Score_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Toefl_Speaking_Score_details as $Toefl_Speaking_Score){ ?>
                          <tr id="Toefl_Speaking_Score_<?php echo $Toefl_Speaking_Score['Toefl_Speaking_Score_ID']; ?>">
                            <td><?php echo $Toefl_Speaking_Score['Toefl_Speaking_Score_ID']; ?></td>
                            <td><?php echo $Toefl_Speaking_Score['Toefl_Speaking_Score']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_Toefl_Speaking_Score/<?php echo $Toefl_Speaking_Score['Toefl_Speaking_Score_ID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_Toefl_Speaking_Score('<?php echo $Toefl_Speaking_Score['Toefl_Speaking_Score_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                      
                        <script>
                      
                        
                            jQuery(".addToefl_Speaking_Score").click(function() {
                                jQuery.fancybox.open([
                                    {
                                        maxWidth: 800,
                                        maxHeight: 600,
                                        fitToView: false,
                                        width: '70%',
                                        height: '70%',
                                        autoSize: false,
                                        closeClick: false,
                                        openEffect: 'none',
                                        closeEffect: 'none',
                                        type: 'ajax',
                                        href: '<?php echo base_url(); ?>admin/student_athlete_second/add_Toefl_Speaking_Score/',
                                    }
                                ]);
                            });
                        function remove_Toefl_Speaking_Score(Toefl_Speaking_Score_ID)
                        {
                            
                
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_second/delete_Toefl_Speaking_Score/',
                                    type:'POST',
                                    data:{Toefl_Speaking_Score_ID:Toefl_Speaking_Score_ID},
                                    success:function(result){
                                      $('#Toefl_Speaking_Score_'+Toefl_Speaking_Score_ID).remove();
                                    }
            
                        });
                        return false;
                            }
                        }
                      </script>
                     
                      </div>
                            </div>
                          </div>
                          
                        </div>
                        
                        
                <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a href="#collapseFiftine" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                Toefl_Score Writing List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseFiftine" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addToefl_Writing_Score">Add Toefl_Score Writing </button>				  
                            </div>
                            <br /><br />
                              <div class="table-responsive">
                      <table class="table mb30">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Writing Score</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="Toefl_Writing_Score_List">
                            <?php $Toefl_Writing_Score_details=get_table_details('stu_toefl_score_writing','Toefl_Writing_Score_ID'); ?>
                           <?php if(empty($Toefl_Writing_Score_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Toefl_Writing_Score_details as $Toefl_Writing_Score){ ?>
                          <tr id="Toefl_Writing_Score_<?php echo $Toefl_Writing_Score['Toefl_Writing_Score_ID']; ?>">
                            <td><?php echo $Toefl_Writing_Score['Toefl_Writing_Score_ID']; ?></td>
                            <td><?php echo $Toefl_Writing_Score['Toefl_Writing_Score']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_Toefl_Writing_Score/<?php echo $Toefl_Writing_Score['Toefl_Writing_Score_ID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_Toefl_Writing_Score('<?php echo $Toefl_Writing_Score['Toefl_Writing_Score_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                      
                        <script>
                      
                        
                            jQuery(".addToefl_Writing_Score").click(function() {
                                jQuery.fancybox.open([
                                    {
                                        maxWidth: 800,
                                        maxHeight: 600,
                                        fitToView: false,
                                        width: '70%',
                                        height: '70%',
                                        autoSize: false,
                                        closeClick: false,
                                        openEffect: 'none',
                                        closeEffect: 'none',
                                        type: 'ajax',
                                        href: '<?php echo base_url(); ?>admin/student_athlete_second/add_Toefl_Writing_Score/',
                                    }
                                ]);
                            });
                        function remove_Toefl_Writing_Score(Toefl_Writing_Score_ID)
                        {
                            
                
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_second/delete_Toefl_Writing_Score/',
                                    type:'POST',
                                    data:{Toefl_Writing_Score_ID:Toefl_Writing_Score_ID},
                                    success:function(result){
                                      $('#Toefl_Writing_Score_'+Toefl_Writing_Score_ID).remove();
                                    }
            
                        });
                        return false;
                            }
                        }
                      </script>
                     
                      </div>
                            </div>
                          </div>
                          
                        </div>
               
                <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a href="#collapseSixteen" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                Toefl_Score Wes List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseSixteen" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addToefl_Wes_Score">Add Toefl_Score Wes </button>				  
                            </div>
                            <br /><br />
                              <div class="table-responsive">
                      <table class="table mb30">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Wes Score</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="Toefl_Wes_Score_List">
                            <?php $Toefl_Wes_Score_details=get_table_details('stu_toefl_score_wes','Toefl_Wes_Score_ID'); ?>
                           <?php if(empty($Toefl_Wes_Score_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Toefl_Wes_Score_details as $Toefl_Wes_Score){ ?>
                          <tr id="Toefl_Wes_Score_<?php echo $Toefl_Wes_Score['Toefl_Wes_Score_ID']; ?>">
                            <td><?php echo $Toefl_Wes_Score['Toefl_Wes_Score_ID']; ?></td>
                            <td><?php echo $Toefl_Wes_Score['Toefl_Wes_Score']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_Toefl_Wes_Score/<?php echo $Toefl_Wes_Score['Toefl_Wes_Score_ID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_Toefl_Wes_Score('<?php echo $Toefl_Wes_Score['Toefl_Wes_Score_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                      
                        <script>
                      
                        
                            jQuery(".addToefl_Wes_Score").click(function() {
                                jQuery.fancybox.open([
                                    {
                                        maxWidth: 800,
                                        maxHeight: 600,
                                        fitToView: false,
                                        width: '70%',
                                        height: '70%',
                                        autoSize: false,
                                        closeClick: false,
                                        openEffect: 'none',
                                        closeEffect: 'none',
                                        type: 'ajax',
                                        href: '<?php echo base_url(); ?>admin/student_athlete_second/add_Toefl_Wes_Score/',
                                    }
                                ]);
                            });
                        function remove_Toefl_Wes_Score(Toefl_Wes_Score_ID)
                        {
                            
                
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_second/delete_Toefl_Wes_Score/',
                                    type:'POST',
                                    data:{Toefl_Wes_Score_ID:Toefl_Wes_Score_ID},
                                    success:function(result){
                                      $('#Toefl_Wes_Score_'+Toefl_Wes_Score_ID).remove();
                                    }
            
                        });
                        return false;
                            }
                        }
                      </script>
                     
                      </div>
                            </div>
                          </div>
                          
                        </div>
              
                <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a href="#collapseSeventeen" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                Toefl_Score Yse List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseSeventeen" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addToefl_Yse_Score">Add Toefl_Score Yse </button>				  
                            </div>
                            <br /><br />
                              <div class="table-responsive">
                      <table class="table mb30">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Yse Score</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="Toefl_Yse_Score_List">
                            <?php $Toefl_Yse_Score_details=get_table_details('stu_toefl_score_yse','Toefl_Yse_Score_ID'); ?>
                           <?php if(empty($Toefl_Yse_Score_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Toefl_Yse_Score_details as $Toefl_Yse_Score){ ?>
                          <tr id="Toefl_Yse_Score_<?php echo $Toefl_Yse_Score['Toefl_Yse_Score_ID']; ?>">
                            <td><?php echo $Toefl_Yse_Score['Toefl_Yse_Score_ID']; ?></td>
                            <td><?php echo $Toefl_Yse_Score['Toefl_Yse_Score']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_Toefl_Yse_Score/<?php echo $Toefl_Yse_Score['Toefl_Yse_Score_ID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_Toefl_Yse_Score('<?php echo $Toefl_Yse_Score['Toefl_Yse_Score_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                      
                        <script>
                      
                        
                            jQuery(".addToefl_Yse_Score").click(function() {
                                jQuery.fancybox.open([
                                    {
                                        maxWidth: 800,
                                        maxHeight: 600,
                                        fitToView: false,
                                        width: '70%',
                                        height: '70%',
                                        autoSize: false,
                                        closeClick: false,
                                        openEffect: 'none',
                                        closeEffect: 'none',
                                        type: 'ajax',
                                        href: '<?php echo base_url(); ?>admin/student_athlete_second/add_Toefl_Yse_Score/',
                                    }
                                ]);
                            });
                        function remove_Toefl_Yse_Score(Toefl_Yse_Score_ID)
                        {
                            
                
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_second/delete_Toefl_Yse_Score/',
                                    type:'POST',
                                    data:{Toefl_Yse_Score_ID:Toefl_Yse_Score_ID},
                                    success:function(result){
                                      $('#Toefl_Yse_Score_'+Toefl_Yse_Score_ID).remove();
                                    }
            
                        });
                        return false;
                            }
                        }
                      </script>
                     
                      </div>
                            </div>
                          </div>
                          
                        </div>
              
                <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a href="#collapseEighteen" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                Toefl_Score Yre List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseEighteen" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addToefl_Yre_Score">Add Toefl_Score Yre </button>				  
                            </div>
                            <br /><br />
                              <div class="table-responsive">
                      <table class="table mb30">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Yre Score</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="Toefl_Yre_Score_List">
                            <?php $Toefl_Yre_Score_details=get_table_details('stu_toefl_score_yre','Toefl_Yre_Score_ID'); ?>
                           <?php if(empty($Toefl_Yre_Score_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Toefl_Yre_Score_details as $Toefl_Yre_Score){ ?>
                          <tr id="Toefl_Yre_Score_<?php echo $Toefl_Yre_Score['Toefl_Yre_Score_ID']; ?>">
                            <td><?php echo $Toefl_Yre_Score['Toefl_Yre_Score_ID']; ?></td>
                            <td><?php echo $Toefl_Yre_Score['Toefl_Yre_Score']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_Toefl_Yre_Score/<?php echo $Toefl_Yre_Score['Toefl_Yre_Score_ID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_Toefl_Yre_Score('<?php echo $Toefl_Yre_Score['Toefl_Yre_Score_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                      
                        <script>
                      
                        
                            jQuery(".addToefl_Yre_Score").click(function() {
                                jQuery.fancybox.open([
                                    {
                                        maxWidth: 800,
                                        maxHeight: 600,
                                        fitToView: false,
                                        width: '70%',
                                        height: '70%',
                                        autoSize: false,
                                        closeClick: false,
                                        openEffect: 'none',
                                        closeEffect: 'none',
                                        type: 'ajax',
                                        href: '<?php echo base_url(); ?>admin/student_athlete_second/add_Toefl_Yre_Score/',
                                    }
                                ]);
                            });
                        function remove_Toefl_Yre_Score(Toefl_Yre_Score_ID)
                        {
                            
                
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_second/delete_Toefl_Yre_Score/',
                                    type:'POST',
                                    data:{Toefl_Yre_Score_ID:Toefl_Yre_Score_ID},
                                    success:function(result){
                                      $('#Toefl_Yre_Score_'+Toefl_Yre_Score_ID).remove();
                                    }
            
                        });
                        return false;
                            }
                        }
                      </script>
                     
                      </div>
                            </div>
                          </div>
                          
                        </div>
                
                <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a href="#collapseninteen" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                Toefl_Score Ywe List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseninteen" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addToefl_Ywe_Score">Add Toefl_Score Ywe </button>				  
                            </div>
                            <br /><br />
                              <div class="table-responsive">
                      <table class="table mb30">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Ywe Score</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="Toefl_Ywe_Score_List">
                            <?php $Toefl_Ywe_Score_details=get_table_details('stu_toefl_score_ywe','Toefl_Ywe_Score_ID'); ?>
                           <?php if(empty($Toefl_Ywe_Score_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Toefl_Ywe_Score_details as $Toefl_Ywe_Score){ ?>
                          <tr id="Toefl_Ywe_Score_<?php echo $Toefl_Ywe_Score['Toefl_Ywe_Score_ID']; ?>">
                            <td><?php echo $Toefl_Ywe_Score['Toefl_Ywe_Score_ID']; ?></td>
                            <td><?php echo $Toefl_Ywe_Score['Toefl_Ywe_Score']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_second/add_Toefl_Ywe_Score/<?php echo $Toefl_Ywe_Score['Toefl_Ywe_Score_ID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_Toefl_Ywe_Score('<?php echo $Toefl_Ywe_Score['Toefl_Ywe_Score_ID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                      
                        <script>
                      
                        
                            jQuery(".addToefl_Ywe_Score").click(function() {
                                jQuery.fancybox.open([
                                    {
                                        maxWidth: 800,
                                        maxHeight: 600,
                                        fitToView: false,
                                        width: '70%',
                                        height: '70%',
                                        autoSize: false,
                                        closeClick: false,
                                        openEffect: 'none',
                                        closeEffect: 'none',
                                        type: 'ajax',
                                        href: '<?php echo base_url(); ?>admin/student_athlete_second/add_Toefl_Ywe_Score/',
                                    }
                                ]);
                            });
                        function remove_Toefl_Ywe_Score(Toefl_Ywe_Score_ID)
                        {
                            
                
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_second/delete_Toefl_Ywe_Score/',
                                    type:'POST',
                                    data:{Toefl_Ywe_Score_ID:Toefl_Ywe_Score_ID},
                                    success:function(result){
                                      $('#Toefl_Ywe_Score_'+Toefl_Ywe_Score_ID).remove();
                                    }
            
                        });
                        return false;
                            }
                        }
                      </script>
                     
                      </div>
                            </div>
                          </div>
                          
                        </div>

               </div>
                  
                  
                </div><!-- tab-content -->
                
              </div><!-- #basicWizard -->
              
            </div><!-- panel-body -->
          </div><!-- panel -->
          

	          
          
        </div>   
   </div><!-- contentpanel -->
 

<script src="<?php echo base_url();?>js/admin/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url();?>js/admin/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo base_url();?>js/admin/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>js/admin/modernizr.min.js"></script>
<script src="<?php echo base_url();?>js/admin/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url();?>js/admin/toggles.min.js"></script>
<script src="<?php echo base_url();?>js/admin/retina.min.js"></script>
<script src="<?php echo base_url();?>js/admin/jquery.cookies.js"></script>

<script src="<?php echo base_url();?>js/admin/jquery.validate.min.js"></script>

<script src="<?php echo base_url();?>js/admin/custom.js"></script>
 
 
 <!--------------------- fancy Box  ------------------------->

<script src="<?php echo base_url();?>js/jquery.fancybox.pack.js"></script>
<script src="<?php echo base_url();?>js/jquery.fancybox-thumbs.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>css/jquery.fancybox.css" type="text/css" media="screen" />

<link rel="stylesheet" href="<?php echo base_url();?>css/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
<script>

</script>	    

<script language="javascript" type="text/javascript">
jQuery(document).ready(function(){
  jQuery("#basicForm").validate({
    highlight: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    success: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-error');
    }
  });
  
});
<!----------------------Education -------------------------->

 $(document).ready(function() {
 $(".various").fancybox({
  maxWidth : 500,
  maxHeight : 400,
  fitToView : false,
  width  : '70%',
  height  : '70%',
  autoSize : false,
  closeClick : false,
  openEffect : 'none',
  closeEffect : 'none'
 });
});
</script>


