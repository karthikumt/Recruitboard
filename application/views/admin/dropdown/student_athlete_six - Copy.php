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
                  <li class=""><a href="<?php echo base_url(); ?>admin/student_athlete"><span>Step 1</span></a></li>
                  <li class=""><a href="<?php echo base_url(); ?>admin/student_athlete_six"><span>Step 2</span></a></li>
                  <li class=""><a href="<?php echo base_url(); ?>admin/student_athlete_three"><span>Step 3</span></a></li>
               	  <li class=""><a href="<?php echo base_url(); ?>admin/student_athlete_four"><span>Step 4</span></a></li>
                  <li class="active"><a href="<?php echo base_url(); ?>admin/student_athlete_six"><span>Step 6</span></a></li>
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
              	<?php $Throws_details=get_table_details('stu_primary_Throws','ThrowsID'); ?>
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
              	<?php $Era_details=get_table_details('stu_Pitching_Era','EraID'); ?>
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
              	<?php $Winloss_Rec_details=get_table_details('stu_Pitching_Winloss_Rec','Winloss_RecID'); ?>
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
              	<?php $Primary_Pitch_details=get_table_details('stu_Pitching_Primary_Pitch','Primary_PitchID'); ?>
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
              	<?php $Secondary_Pitch_details=get_table_details('stu_Pitching_Secondary_Pitch','Secondary_PitchID'); ?>
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
              	<?php $Fastball_details=get_table_details('stu_Pitching_Fastball','FastballID'); ?>
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
              	<?php $Batting_Avg_details=get_table_details('stu_Hitting_Batting_Avg','Batting_AvgID'); ?>
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


