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
                  <li class=""><a href="<?php echo base_url(); ?>admin/student_athlete_second"><span>Step 4</span></a></li>
                  <li class=""><a href="<?php echo base_url(); ?>admin/student_athlete_three"><span>Step 4a</span></a></li>
                   <li class=""><a href="<?php echo base_url(); ?>admin/student_athlete_four"><span>Step 5</span></a></li>	
                <li class="active"><a href="<?php echo base_url(); ?>admin/student_athlete_six"><span>Step 6</span></a></li>	
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
                 Primary Position List
                  </a>
                </h4>
              </div>
              <div class="panel-collapse collapse" id="collapseOne" style="height: 0 px;">
                <div class="panel-body">
               <div class="buttoncss" style="padding:0 25px 0 0;">
				  <button class="btn btn-primary addPosition">Add Primary Position</button>				  
		  	    </div>
          		<br /><br />
                  <div class="table-responsive">
          <table class="table mb30">
            <thead>
              <tr>
                <th>ID</th>
                <th>Position</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="Position_List">
              	<?php $Position_details=get_table_details('stu_primary_position','PositionID'); ?>
               <?php if(empty($Position_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Position_details as $Position){ ?>
              <tr id="Position_<?php echo $Position['PositionID']; ?>">
                <td><?php echo $Position['PositionID']; ?></td>
                <td><?php echo $Position['PositionName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_Position/<?php echo $Position['PositionID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_Position('<?php echo $Position['PositionID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
            </tbody>
          </table>
               <script>
		  	jQuery(".addPosition").click(function() {
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
							href: '<?php echo base_url(); ?>admin/student_athlete_six/add_Position/',
						}
					]);
				});
			function remove_Position(PositionID)
			{
				
	
				if(confirm("Are You Sure?"))
				{
					 $.ajax({
						url:'<?php echo base_url(); ?>admin/student_athlete_six/delete_Position/',
						type:'POST',
						data:{PositionID:PositionID},
						success:function(result){
						  $('#Position_'+PositionID).remove();
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
                 Primary Throws List
                  </a>
                </h4>
              </div>
              <div class="panel-collapse collapse" id="collapseTwo" style="height: 0 px;">
                <div class="panel-body">
               <div class="buttoncss" style="padding:0 25px 0 0;">
				  <button class="btn btn-primary addThrows">Add Primary Throws</button>				  
		  	    </div>
          		<br /><br />
                  <div class="table-responsive">
          <table class="table mb30">
            <thead>
              <tr>
                <th>ID</th>
                <th>Throws</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="Throws_List">
              	<?php $Throws_details=get_table_details('stu_primary_throws','ThrowsID'); ?>
               <?php if(empty($Throws_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Throws_details as $Throws){ ?>
              <tr id="Throws_<?php echo $Throws['ThrowsID']; ?>">
                <td><?php echo $Throws['ThrowsID']; ?></td>
                <td><?php echo $Throws['ThrowsName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_Throws/<?php echo $Throws['ThrowsID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_Throws('<?php echo $Throws['ThrowsID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
            </tbody>
          </table>
               <script>
		  	jQuery(".addThrows").click(function() {
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
							href: '<?php echo base_url(); ?>admin/student_athlete_six/add_Throws/',
						}
					]);
				});
			function remove_Throws(ThrowsID)
			{
				
	
				if(confirm("Are You Sure?"))
				{
					 $.ajax({
						url:'<?php echo base_url(); ?>admin/student_athlete_six/delete_Throws/',
						type:'POST',
						data:{ThrowsID:ThrowsID},
						success:function(result){
						  $('#Throws_'+ThrowsID).remove();
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
                 Primary Bats List
                  </a>
                </h4>
              </div>
              <div class="panel-collapse collapse" id="collapseThree" style="height: 0 px;">
                <div class="panel-body">
               <div class="buttoncss" style="padding:0 25px 0 0;">
				  <button class="btn btn-primary addBats">Add Primary Bats</button>				  
		  	    </div>
          		<br /><br />
                  <div class="table-responsive">
          <table class="table mb30">
            <thead>
              <tr>
                <th>ID</th>
                <th>Bats</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="Bats_List">
              
                
				<?php $Bats_details=get_table_details('stu_primary_bats','BatsID'); ?>
               
			   <?php if(empty($Bats_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Bats_details as $Bats){ ?>
              <tr id="Bats_<?php echo $Bats['BatsID']; ?>">
                <td><?php echo $Bats['BatsID']; ?></td>
                <td><?php echo $Bats['BatsName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_Bats/<?php echo $Bats['BatsID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_Bats('<?php echo $Bats['BatsID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
            </tbody>
          </table>
               <script>
		  	jQuery(".addBats").click(function() {
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
							href: '<?php echo base_url(); ?>admin/student_athlete_six/add_Bats/',
						}
					]);
				});
			function remove_Bats(BatsID)
			{
				
	
				if(confirm("Are You Sure?"))
				{
					 $.ajax({
						url:'<?php echo base_url(); ?>admin/student_athlete_six/delete_Bats/',
						type:'POST',
						data:{BatsID:BatsID},
						success:function(result){
						  $('#Bats_'+BatsID).remove();
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
                 Pitching Era List
                  </a>
                </h4>
              </div>
              <div class="panel-collapse collapse" id="collapseFour" style="height: 0 px;">
                <div class="panel-body">
               <div class="buttoncss" style="padding:0 25px 0 0;">
				  <button class="btn btn-primary addEra">Add Pitching Era</button>				  
		  	    </div>
          		<br /><br />
                  <div class="table-responsive">
          <table class="table mb30">
            <thead>
              <tr>
                <th>ID</th>
                <th>Era</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="Era_List">
              	<?php $Era_details=get_table_details('stu_pitching_era','EraID'); ?>
               <?php if(empty($Era_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Era_details as $Era){ ?>
              <tr id="Era_<?php echo $Era['EraID']; ?>">
                <td><?php echo $Era['EraID']; ?></td>
                <td><?php echo $Era['EraName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_Era/<?php echo $Era['EraID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_Era('<?php echo $Era['EraID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
            </tbody>
          </table>
               <script>
		  	jQuery(".addEra").click(function() {
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
							href: '<?php echo base_url(); ?>admin/student_athlete_six/add_Era/',
						}
					]);
				});
			function remove_Era(EraID)
			{
				
	
				if(confirm("Are You Sure?"))
				{
					 $.ajax({
						url:'<?php echo base_url(); ?>admin/student_athlete_six/delete_Era/',
						type:'POST',
						data:{EraID:EraID},
						success:function(result){
						  $('#Era_'+EraID).remove();
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
                 Pitching Win/loss_Record List
                  </a>
                </h4>
              </div>
              <div class="panel-collapse collapse" id="collapseFive" style="height: 0 px;">
                <div class="panel-body">
               <div class="buttoncss" style="padding:0 25px 0 0;">
				  <button class="btn btn-primary addWinloss_Rec">Add Pitching Win/loss_Record</button>				  
		  	    </div>
          		<br /><br />
                  <div class="table-responsive">
          <table class="table mb30">
            <thead>
              <tr>
                <th>ID</th>
                <th>Win/loss_Record</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="Winloss_Rec_List">
              	<?php $Winloss_Rec_details=get_table_details('stu_pitching_winloss_rec','Winloss_RecID'); ?>
               <?php if(empty($Winloss_Rec_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Winloss_Rec_details as $Winloss_Rec){ ?>
              <tr id="Winloss_Rec_<?php echo $Winloss_Rec['Winloss_RecID']; ?>">
                <td><?php echo $Winloss_Rec['Winloss_RecID']; ?></td>
                <td><?php echo $Winloss_Rec['Winloss_RecName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_Winloss_Rec/<?php echo $Winloss_Rec['Winloss_RecID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_Winloss_Rec('<?php echo $Winloss_Rec['Winloss_RecID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
            </tbody>
          </table>
               <script>
		  	jQuery(".addWinloss_Rec").click(function() {
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
							href: '<?php echo base_url(); ?>admin/student_athlete_six/add_Winloss_Rec/',
						}
					]);
				});
			function remove_Winloss_Rec(Winloss_RecID)
			{
				
	
				if(confirm("Are You Sure?"))
				{
					 $.ajax({
						url:'<?php echo base_url(); ?>admin/student_athlete_six/delete_Winloss_Rec/',
						type:'POST',
						data:{Winloss_RecID:Winloss_RecID},
						success:function(result){
						  $('#Winloss_Rec_'+Winloss_RecID).remove();
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
                 Pitching Primary_Pitch List
                  </a>
                </h4>
              </div>
              <div class="panel-collapse collapse" id="collapseSix" style="height: 0 px;">
                <div class="panel-body">
               <div class="buttoncss" style="padding:0 25px 0 0;">
				  <button class="btn btn-primary addPrimary_Pitch">Add Pitching Primary_Pitch</button>				  
		  	    </div>
          		<br /><br />
                  <div class="table-responsive">
          <table class="table mb30">
            <thead>
              <tr>
                <th>ID</th>
                <th>Primary_Pitch</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="Primary_Pitch_List">
              	<?php $Primary_Pitch_details=get_table_details('stu_pitching_primary_pitch','Primary_PitchID'); ?>
               <?php if(empty($Primary_Pitch_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Primary_Pitch_details as $Primary_Pitch){ ?>
              <tr id="Primary_Pitch_<?php echo $Primary_Pitch['Primary_PitchID']; ?>">
                <td><?php echo $Primary_Pitch['Primary_PitchID']; ?></td>
                <td><?php echo $Primary_Pitch['Primary_PitchName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_Primary_Pitch/<?php echo $Primary_Pitch['Primary_PitchID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_Primary_Pitch('<?php echo $Primary_Pitch['Primary_PitchID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
            </tbody>
          </table>
               <script>
		  	jQuery(".addPrimary_Pitch").click(function() {
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
							href: '<?php echo base_url(); ?>admin/student_athlete_six/add_Primary_Pitch/',
						}
					]);
				});
			function remove_Primary_Pitch(Primary_PitchID)
			{
				
	
				if(confirm("Are You Sure?"))
				{
					 $.ajax({
						url:'<?php echo base_url(); ?>admin/student_athlete_six/delete_Primary_Pitch/',
						type:'POST',
						data:{Primary_PitchID:Primary_PitchID},
						success:function(result){
						  $('#Primary_Pitch_'+Primary_PitchID).remove();
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
                 Pitching Secondary_Pitch List
                  </a>
                </h4>
              </div>
              <div class="panel-collapse collapse" id="collapseSeven" style="height: 0 px;">
                <div class="panel-body">
               <div class="buttoncss" style="padding:0 25px 0 0;">
				  <button class="btn btn-primary addSecondary_Pitch">Add Pitching Secondary_Pitch</button>				  
		  	    </div>
          		<br /><br />
                  <div class="table-responsive">
          <table class="table mb30">
            <thead>
              <tr>
                <th>ID</th>
                <th>Secondary_Pitch</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="Secondary_Pitch_List">
              	<?php $Secondary_Pitch_details=get_table_details('stu_pitching_secondary_pitch','Secondary_PitchID'); ?>
               <?php if(empty($Secondary_Pitch_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Secondary_Pitch_details as $Secondary_Pitch){ ?>
              <tr id="Secondary_Pitch_<?php echo $Secondary_Pitch['Secondary_PitchID']; ?>">
                <td><?php echo $Secondary_Pitch['Secondary_PitchID']; ?></td>
                <td><?php echo $Secondary_Pitch['Secondary_PitchName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_Secondary_Pitch/<?php echo $Secondary_Pitch['Secondary_PitchID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_Secondary_Pitch('<?php echo $Secondary_Pitch['Secondary_PitchID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
            </tbody>
          </table>
               <script>
		  	jQuery(".addSecondary_Pitch").click(function() {
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
							href: '<?php echo base_url(); ?>admin/student_athlete_six/add_Secondary_Pitch/',
						}
					]);
				});
			function remove_Secondary_Pitch(Secondary_PitchID)
			{
				
	
				if(confirm("Are You Sure?"))
				{
					 $.ajax({
						url:'<?php echo base_url(); ?>admin/student_athlete_six/delete_Secondary_Pitch/',
						type:'POST',
						data:{Secondary_PitchID:Secondary_PitchID},
						success:function(result){
						  $('#Secondary_Pitch_'+Secondary_PitchID).remove();
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
                 Pitching Fastball List
                  </a>
                </h4>
              </div>
              <div class="panel-collapse collapse" id="collapseEight" style="height: 0 px;">
                <div class="panel-body">
               <div class="buttoncss" style="padding:0 25px 0 0;">
				  <button class="btn btn-primary addFastball">Add Pitching Fastball</button>				  
		  	    </div>
          		<br /><br />
                  <div class="table-responsive">
          <table class="table mb30">
            <thead>
              <tr>
                <th>ID</th>
                <th>Fastball</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="Fastball_List">
              	<?php $Fastball_details=get_table_details('stu_pitching_fastball','FastballID'); ?>
               <?php if(empty($Fastball_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Fastball_details as $Fastball){ ?>
              <tr id="Fastball_<?php echo $Fastball['FastballID']; ?>">
                <td><?php echo $Fastball['FastballID']; ?></td>
                <td><?php echo $Fastball['FastballName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_Fastball/<?php echo $Fastball['FastballID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_Fastball('<?php echo $Fastball['FastballID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
            </tbody>
          </table>
               <script>
		  	jQuery(".addFastball").click(function() {
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
							href: '<?php echo base_url(); ?>admin/student_athlete_six/add_Fastball/',
						}
					]);
				});
			function remove_Fastball(FastballID)
			{
				
	
				if(confirm("Are You Sure?"))
				{
					 $.ajax({
						url:'<?php echo base_url(); ?>admin/student_athlete_six/delete_Fastball/',
						type:'POST',
						data:{FastballID:FastballID},
						success:function(result){
						  $('#Fastball_'+FastballID).remove();
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
                 Hitting Batting_Avg List
                  </a>
                </h4>
              </div>
              <div class="panel-collapse collapse" id="collapseNine" style="height: 0 px;">
                <div class="panel-body">
               <div class="buttoncss" style="padding:0 25px 0 0;">
				  <button class="btn btn-primary addBatting_Avg">Add Hitting Batting_Avg</button>				  
		  	    </div>
          		<br /><br />
                  <div class="table-responsive">
          <table class="table mb30">
            <thead>
              <tr>
                <th>ID</th>
                <th>Batting_Avg</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="Batting_Avg_List">
              	<?php $Batting_Avg_details=get_table_details('stu_hitting_batting_avg','Batting_AvgID'); ?>
               <?php if(empty($Batting_Avg_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Batting_Avg_details as $Batting_Avg){ ?>
              <tr id="Batting_Avg_<?php echo $Batting_Avg['Batting_AvgID']; ?>">
                <td><?php echo $Batting_Avg['Batting_AvgID']; ?></td>
                <td><?php echo $Batting_Avg['Batting_AvgName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_Batting_Avg/<?php echo $Batting_Avg['Batting_AvgID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_Batting_Avg('<?php echo $Batting_Avg['Batting_AvgID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
            </tbody>
          </table>
               <script>
		  	jQuery(".addBatting_Avg").click(function() {
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
							href: '<?php echo base_url(); ?>admin/student_athlete_six/add_Batting_Avg/',
						}
					]);
				});
			function remove_Batting_Avg(Batting_AvgID)
			{
				
	
				if(confirm("Are You Sure?"))
				{
					 $.ajax({
						url:'<?php echo base_url(); ?>admin/student_athlete_six/delete_Batting_Avg/',
						type:'POST',
						data:{Batting_AvgID:Batting_AvgID},
						success:function(result){
						  $('#Batting_Avg_'+Batting_AvgID).remove();
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
                 Hitting RBI Name List
                  </a>
                </h4>
              </div>
              <div class="panel-collapse collapse" id="collapseTen" style="height: 0 px;">
                <div class="panel-body">
               <div class="buttoncss" style="padding:0 25px 0 0;">
				  <button class="btn btn-primary addStu_Rbi">Add Hitting RBI Name</button>				  
		  	    </div>
          		<br /><br />
                  <div class="table-responsive">
          <table class="table mb30">
            <thead>
              <tr>
                <th>ID</th>
                <th>RBI Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="Stu_Rbi_List">
              	<?php $Stu_Rbi_details=get_table_details('stu_hitting_rbi','Stu_RbiID'); ?>
               <?php if(empty($Stu_Rbi_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Stu_Rbi_details as $Stu_Rbi){ ?>
              <tr id="Stu_Rbi_<?php echo $Stu_Rbi['Stu_RbiID']; ?>">
                <td><?php echo $Stu_Rbi['Stu_RbiID']; ?></td>
                <td><?php echo $Stu_Rbi['Stu_RbiName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_Stu_Rbi/<?php echo $Stu_Rbi['Stu_RbiID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_Stu_Rbi('<?php echo $Stu_Rbi['Stu_RbiID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
            </tbody>
          </table>
               <script>
		  	jQuery(".addStu_Rbi").click(function() {
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
							href: '<?php echo base_url(); ?>admin/student_athlete_six/add_Stu_Rbi/',
						}
					]);
				});
			function remove_Stu_Rbi(Stu_RbiID)
			{
				
	
				if(confirm("Are You Sure?"))
				{
					 $.ajax({
						url:'<?php echo base_url(); ?>admin/student_athlete_six/delete_Stu_Rbi/',
						type:'POST',
						data:{Stu_RbiID:Stu_RbiID},
						success:function(result){
						  $('#Stu_Rbi_'+Stu_RbiID).remove();
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
                  <a href="#collapseElevn" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                 Hitting Stolen Name List
                  </a>
                </h4>
              </div>
              <div class="panel-collapse collapse" id="collapseElevn" style="height: 0 px;">
                <div class="panel-body">
               <div class="buttoncss" style="padding:0 25px 0 0;">
				  <button class="btn btn-primary addStu_Stolen">Add Hitting RBI Name</button>				  
		  	    </div>
          		<br /><br />
                  <div class="table-responsive">
          <table class="table mb30">
            <thead>
              <tr>
                <th>ID</th>
                <th>Stolen Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="Stu_Stolen_List">
              	<?php $Stu_Stolen_details=get_table_details('stu_hitting_stolen','Stu_StolenID'); ?>
               <?php if(empty($Stu_Stolen_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Stu_Stolen_details as $Stu_Stolen){ ?>
              <tr id="Stu_Stolen_<?php echo $Stu_Stolen['Stu_StolenID']; ?>">
                <td><?php echo $Stu_Stolen['Stu_StolenID']; ?></td>
                <td><?php echo $Stu_Stolen['Stu_StolenName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_Stu_Stolen/<?php echo $Stu_Stolen['Stu_StolenID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_Stu_Stolen('<?php echo $Stu_Stolen['Stu_StolenID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
            </tbody>
          </table>
               <script>
		  	jQuery(".addStu_Stolen").click(function() {
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
							href: '<?php echo base_url(); ?>admin/student_athlete_six/add_Stu_Stolen/',
						}
					]);
				});
			function remove_Stu_Stolen(Stu_StolenID)
			{
				
	
				if(confirm("Are You Sure?"))
				{
					 $.ajax({
						url:'<?php echo base_url(); ?>admin/student_athlete_six/delete_Stu_Stolen/',
						type:'POST',
						data:{Stu_StolenID:Stu_StolenID},
						success:function(result){
						  $('#Stu_Stolen_'+Stu_StolenID).remove();
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
                          <a href="#collapsetwelve" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                           Hitting OnBase  List
                          </a>
                        </h4>
                      </div>
                      <div class="panel-collapse collapse" id="collapsetwelve" style="height: 0 px;">
                        <div class="panel-body">
                       <div class="buttoncss" style="padding:0 25px 0 0;">
                          <button class="btn btn-primary addonbase">Add Hitting OnBase </button>				  
                        </div>
                        <br /><br />
                          <div class="table-responsive">
                  <table class="table mb30">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody id="OnBase_List">
                        <?php $Gender_details=get_table_details('stu_hitting_onbase','Stu_OnBaseID'); ?>
                       <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                       <?php foreach($Gender_details as $Gender){ ?>
                      <tr id="OnBase_<?php echo $Gender['Stu_OnBaseID']; ?>">
                        <td><?php echo $Gender['Stu_OnBaseID']; ?></td>
                        <td><?php echo $Gender['Stu_OnBaseName']; ?></td>
                        <td>
                          <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_onbase/<?php echo $Gender['Stu_OnBaseID']; ?> "><i class="fa fa-pencil"></i></a>
                          <a class="delete-row" href="javascript:void(0);" onclick="remove_onbase('<?php echo $Gender['Stu_OnBaseID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                        </td>
                      </tr>
                      <?php } } ?>
                    </tbody>
                  </table>
                 <script>
                    jQuery(".addonbase").click(function() {
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
                                    href: '<?php echo base_url(); ?>admin/student_athlete_six/add_onbase/',
                                }
                            ]);
                        });
                    function remove_onbase(Stu_OnBaseID)
                    {
                        if(confirm("Are You Sure?"))
                        {
                             $.ajax({
                                url:'<?php echo base_url(); ?>admin/student_athlete_six/delete_onbase/',
                                type:'POST',
                                data:{Stu_OnBaseID:Stu_OnBaseID},
                                success:function(result){
                                  $('#OnBase_'+Stu_OnBaseID).remove();
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
                  <a href="#collapsethirteen" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                   Hitting Yardbase  List
                  </a>
                </h4>
              </div>
              <div class="panel-collapse collapse" id="collapsethirteen" style="height: 0 px;">
                <div class="panel-body">
               <div class="buttoncss" style="padding:0 25px 0 0;">
                  <button class="btn btn-primary addyardbase">Add Hitting Yardbase </button>				  
                </div>
                <br /><br />
                  <div class="table-responsive">
            <table class="table mb30">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="YardBase_List">
                <?php $Gender_details=get_table_details('stu_hitting_yardbase','Stu_YardBaseID'); ?>
               <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
               <?php foreach($Gender_details as $Gender){ ?>
              <tr id="YardBase_<?php echo $Gender['Stu_YardBaseID']; ?>">
                <td><?php echo $Gender['Stu_YardBaseID']; ?></td>
                <td><?php echo $Gender['Stu_YardBaseName']; ?></td>
                <td>
                  <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_yardbase/<?php echo $Gender['Stu_YardBaseID']; ?> "><i class="fa fa-pencil"></i></a>
                  <a class="delete-row" href="javascript:void(0);" onclick="remove_yardbase('<?php echo $Gender['Stu_YardBaseID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php } } ?>
            </tbody>
            </table>
            <script>
            jQuery(".addyardbase").click(function() {
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
                            href: '<?php echo base_url(); ?>admin/student_athlete_six/add_yardbase/',
                        }
                    ]);
                });
            function remove_yardbase(Stu_YardBaseID)
            {
                if(confirm("Are You Sure?"))
                {
                     $.ajax({
                        url:'<?php echo base_url(); ?>admin/student_athlete_six/delete_yardbase/',
                        type:'POST',
                        data:{Stu_YardBaseID:Stu_YardBaseID},
                        success:function(result){
                          $('#YardBase_'+Stu_YardBaseID).remove();
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
              <a href="#collapsefourteen" data-parent="#accordion" data-toggle="collapse" class="collapsed">
               Hitting Speed  List
              </a>
            </h4>
            </div>
            <div class="panel-collapse collapse" id="collapsefourteen" style="height: 0 px;">
            <div class="panel-body">
            <div class="buttoncss" style="padding:0 25px 0 0;">
              <button class="btn btn-primary addspeed">Add Hitting Speed </button>				  
            </div>
            <br /><br />
              <div class="table-responsive">
            <table class="table mb30">
            <thead>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
            </tr>
            </thead>
            <tbody id="Speed_List">
            <?php $Gender_details=get_table_details('stu_hitting_speed','Stu_SpeedID'); ?>
            <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
            <?php foreach($Gender_details as $Gender){ ?>
            <tr id="Speed_<?php echo $Gender['Stu_SpeedID']; ?>">
            <td><?php echo $Gender['Stu_SpeedID']; ?></td>
            <td><?php echo $Gender['Stu_SpeedName']; ?></td>
            <td>
              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_speed/<?php echo $Gender['Stu_SpeedID']; ?> "><i class="fa fa-pencil"></i></a>
              <a class="delete-row" href="javascript:void(0);" onclick="remove_speed('<?php echo $Gender['Stu_SpeedID']; ?>')" ><i class="fa fa-trash-o"></i></a>
            </td>
            </tr>
            <?php } } ?>
            </tbody>
            </table>
            <script>
            jQuery(".addspeed").click(function() {
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
                        href: '<?php echo base_url(); ?>admin/student_athlete_six/add_speed/',
                    }
                ]);
            });
            function remove_speed(Stu_SpeedID)
            {
            if(confirm("Are You Sure?"))
            {
                 $.ajax({
                    url:'<?php echo base_url(); ?>admin/student_athlete_six/delete_speed/',
                    type:'POST',
                    data:{Stu_SpeedID:Stu_SpeedID},
                    success:function(result){
                      $('#Speed_'+Stu_SpeedID).remove();
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
                              <a href="#collapsefifteen" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                Field Assist List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapsefifteen" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addassist">Add Field Assist </button>				  
                            </div>
                            <br /><br />
                              <div class="table-responsive">
                      <table class="table mb30">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="Assist_List">
                            <?php $Gender_details=get_table_details('stu_field_assist','Stu_AssistID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Assist_<?php echo $Gender['Stu_AssistID']; ?>">
                            <td><?php echo $Gender['Stu_AssistID']; ?></td>
                            <td><?php echo $Gender['Stu_AssistName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_assist/<?php echo $Gender['Stu_AssistID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_assist('<?php echo $Gender['Stu_AssistID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".addassist").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_six/add_assist/',
                                    }
                                ]);
                            });
                        function remove_assist(Stu_AssistID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_six/delete_assist/',
                                    type:'POST',
                                    data:{Stu_AssistID:Stu_AssistID},
                                    success:function(result){
                                      $('#Strength_'+Stu_AssistID).remove();
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
                        Field Put List
                      </a>
                    </h4>
                  </div>
                  <div class="panel-collapse collapse" id="collapseSixteen" style="height: 0 px;">
                    <div class="panel-body">
                   <div class="buttoncss" style="padding:0 25px 0 0;">
                      <button class="btn btn-primary addput">Add Field Put </button>				  
                    </div>
                    <br /><br />
                      <div class="table-responsive">
              <table class="table mb30">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="Put_List">
                    <?php $Gender_details=get_table_details('stu_field_put','Stu_PutID'); ?>
                   <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                   <?php foreach($Gender_details as $Gender){ ?>
                  <tr id="Put_<?php echo $Gender['Stu_PutID']; ?>">
                    <td><?php echo $Gender['Stu_PutID']; ?></td>
                    <td><?php echo $Gender['Stu_PutName']; ?></td>
                    <td>
                      <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_put/<?php echo $Gender['Stu_PutID']; ?> "><i class="fa fa-pencil"></i></a>
                      <a class="delete-row" href="javascript:void(0);" onclick="remove_put('<?php echo $Gender['Stu_PutID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                    </td>
                  </tr>
                  <?php } } ?>
                </tbody>
              </table>
             <script>
                jQuery(".addput").click(function() {
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
                                href: '<?php echo base_url(); ?>admin/student_athlete_six/add_put/',
                            }
                        ]);
                    });
                function remove_put(Stu_PutID)
                {
                    if(confirm("Are You Sure?"))
                    {
                         $.ajax({
                            url:'<?php echo base_url(); ?>admin/student_athlete_six/delete_put/',
                            type:'POST',
                            data:{Stu_PutID:Stu_PutID},
                            success:function(result){
                              $('#Put_'+Stu_PutID).remove();
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
                        Field Double List
                      </a>
                    </h4>
                  </div>
                  <div class="panel-collapse collapse" id="collapseSeventeen" style="height: 0 px;">
                    <div class="panel-body">
                   <div class="buttoncss" style="padding:0 25px 0 0;">
                      <button class="btn btn-primary adddouble">Add Field Double </button>				  
                    </div>
                    <br /><br />
                      <div class="table-responsive">
              <table class="table mb30">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="Double_List">
                    <?php $Gender_details=get_table_details('stu_field_double','Stu_DoubleID'); ?>
                   <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                   <?php foreach($Gender_details as $Gender){ ?>
                  <tr id="Double_<?php echo $Gender['Stu_DoubleID']; ?>">
                    <td><?php echo $Gender['Stu_DoubleID']; ?></td>
                    <td><?php echo $Gender['Stu_DoubleName']; ?></td>
                    <td>
                      <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_double/<?php echo $Gender['Stu_DoubleID']; ?> "><i class="fa fa-pencil"></i></a>
                      <a class="delete-row" href="javascript:void(0);" onclick="remove_double('<?php echo $Gender['Stu_DoubleID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                    </td>
                  </tr>
                  <?php } } ?>
                </tbody>
              </table>
             <script>
                jQuery(".adddouble").click(function() {
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
                                href: '<?php echo base_url(); ?>admin/student_athlete_six/add_double/',
                            }
                        ]);
                    });
                function remove_double(Stu_DoubleID)
                {
                    if(confirm("Are You Sure?"))
                    {
                         $.ajax({
                            url:'<?php echo base_url(); ?>admin/student_athlete_six/delete_double/',
                            type:'POST',
                            data:{Stu_DoubleID:Stu_DoubleID},
                            success:function(result){
                              $('#Double_'+Stu_DoubleID).remove();
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
                      <a href="#collapseeighteen" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                        Field Triple List
                      </a>
                    </h4>
                  </div>
                  <div class="panel-collapse collapse" id="collapseeighteen" style="height: 0 px;">
                    <div class="panel-body">
                   <div class="buttoncss" style="padding:0 25px 0 0;">
                      <button class="btn btn-primary addtriple">Add Field Triple </button>				  
                    </div>
                    <br /><br />
                      <div class="table-responsive">
              <table class="table mb30">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="Triple_List">
                    <?php $Gender_details=get_table_details('stu_field_triple','Stu_TripleID'); ?>
                   <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                   <?php foreach($Gender_details as $Gender){ ?>
                  <tr id="Triple_<?php echo $Gender['Stu_TripleID']; ?>">
                    <td><?php echo $Gender['Stu_TripleID']; ?></td>
                    <td><?php echo $Gender['Stu_TripleName']; ?></td>
                    <td>
                      <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_triple/<?php echo $Gender['Stu_TripleID']; ?> "><i class="fa fa-pencil"></i></a>
                      <a class="delete-row" href="javascript:void(0);" onclick="remove_triple('<?php echo $Gender['Stu_TripleID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                    </td>
                  </tr>
                  <?php } } ?>
                </tbody>
              </table>
             <script>
                jQuery(".addtriple").click(function() {
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
                                href: '<?php echo base_url(); ?>admin/student_athlete_six/add_triple/',
                            }
                        ]);
                    });
                function remove_triple(Stu_TripleID)
                {
                    if(confirm("Are You Sure?"))
                    {
                         $.ajax({
                            url:'<?php echo base_url(); ?>admin/student_athlete_six/delete_triple/',
                            type:'POST',
                            data:{Stu_TripleID:Stu_TripleID},
                            success:function(result){
                              $('#Triple_'+Stu_TripleID).remove();
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
                      <a href="#collapsenineteen" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                        Field  List
                      </a>
                    </h4>
                  </div>
                  <div class="panel-collapse collapse" id="collapsenineteen" style="height: 0 px;">
                    <div class="panel-body">
                   <div class="buttoncss" style="padding:0 25px 0 0;">
                      <button class="btn btn-primary addfiled">Add Triple </button>				  
                    </div>
                    <br /><br />
                      <div class="table-responsive">
              <table class="table mb30">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="Filed_List">
                    <?php $Gender_details=get_table_details('stu_field_filed','Stu_FiledID'); ?>
                   <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                   <?php foreach($Gender_details as $Gender){ ?>
                  <tr id="Filed_<?php echo $Gender['Stu_FiledID']; ?>">
                    <td><?php echo $Gender['Stu_FiledID']; ?></td>
                    <td><?php echo $Gender['Stu_FiledName']; ?></td>
                    <td>
                      <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_six/add_filed/<?php echo $Gender['Stu_FiledID']; ?> "><i class="fa fa-pencil"></i></a>
                      <a class="delete-row" href="javascript:void(0);" onclick="remove_filed('<?php echo $Gender['Stu_FiledID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                    </td>
                  </tr>
                  <?php } } ?>
                </tbody>
              </table>
             <script>
                jQuery(".addfiled").click(function() {
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
                                href: '<?php echo base_url(); ?>admin/student_athlete_six/add_filed/',
                            }
                        ]);
                    });
                function remove_filed(Stu_FiledID)
                {
                    if(confirm("Are You Sure?"))
                    {
                         $.ajax({
                            url:'<?php echo base_url(); ?>admin/student_athlete_six/delete_filed/',
                            type:'POST',
                            data:{Stu_FiledID:Stu_FiledID},
                            success:function(result){
                              $('#Filed_'+Stu_FiledID).remove();
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


