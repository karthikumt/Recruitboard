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
                   <li class="active"><a href="<?php echo base_url(); ?>admin/student_athlete"><span>Step 3</span></a></li>
                  <li class=""><a href="<?php echo base_url(); ?>admin/student_athlete_second"><span>Step 4</span></a></li>
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
                                Gender List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseOne" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addgender">Add Gender</button>				  
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
                        <tbody id="Gender_List">
                            <?php $Gender_details=get_table_details('stu_athlete_gender','GenderID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Gender_<?php echo $Gender['GenderID']; ?>">
                            <td><?php echo $Gender['GenderID']; ?></td>
                            <td><?php echo $Gender['Gender']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete/add_gender/<?php echo $Gender['GenderID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_gender('<?php echo $Gender['GenderID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".addgender").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete/add_gender/',
                                    }
                                ]);
                            });
                        function remove_gender(GenderID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete/delete_gender/',
                                    type:'POST',
                                    data:{GenderID:GenderID},
                                    success:function(result){
                                      $('#Gender_'+GenderID).remove();
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
                                Country List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseTwo" style="height: 0px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addcountry">Add Country</button>				  
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
                        <tbody id="Country_List">
                            <?php $Gender_details=get_table_details('country','CountryID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Country_<?php echo $Gender['CountryID']; ?>">
                            <td><?php echo $Gender['CountryID']; ?></td>
                            <td><?php echo $Gender['CountryName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete/add_country/<?php echo $Gender['CountryID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_country('<?php echo $Gender['CountryID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
						 <script>
                            jQuery(".addcountry").click(function() {
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
                                            href: '<?php echo base_url(); ?>admin/student_athlete/add_country/',
                                        }
                                    ]);
                                });
                            function remove_country(CountryID)
                            {
                                if(confirm("Are You Sure?"))
                                {
                                     $.ajax({
                                        url:'<?php echo base_url(); ?>admin/student_athlete/delete_country/',
                                        type:'POST',
                                        data:{CountryID:CountryID},
                                        success:function(result){
                                          $('#Country_'+CountryID).remove();
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
                                Class List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseFour" style="height: 0px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addclass">Add Class</button>				  
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
                        <tbody id="Class_List">
                            <?php $Gender_details=get_table_details('stu_athlete_class','ClassID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Class_<?php echo $Gender['ClassID']; ?>">
                            <td><?php echo $Gender['ClassID']; ?></td>
                            <td><?php echo $Gender['ClassName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete/add_class/<?php echo $Gender['ClassID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_class('<?php echo $Gender['ClassID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
						 <script>
                            jQuery(".addclass").click(function() {
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
                                            href: '<?php echo base_url(); ?>admin/student_athlete/add_class/',
                                        }
                                    ]);
                                });
                            function remove_class(ClassID)
                            {
                                if(confirm("Are You Sure?"))
                                {
                                     $.ajax({
                                        url:'<?php echo base_url(); ?>admin/student_athlete/delete_class/',
                                        type:'POST',
                                        data:{ClassID:ClassID},
                                        success:function(result){
                                          $('#Class_'+ClassID).remove();
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
                                Weight List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseFive" style="height: 0px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addweight">Add Weight</button>				  
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
                        <tbody id="Weight_List">
                            <?php $Gender_details=get_table_details('stu_athlete_weight','WeightID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Weight_<?php echo $Gender['WeightID']; ?>">
                            <td><?php echo $Gender['WeightID']; ?></td>
                            <td><?php echo $Gender['WeightName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete/add_weight/<?php echo $Gender['WeightID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_weight('<?php echo $Gender['WeightID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
						 <script>
                            jQuery(".addweight").click(function() {
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
                                            href: '<?php echo base_url(); ?>admin/student_athlete/add_weight/',
                                        }
                                    ]);
                                });
                            function remove_weight(WeightID)
                            {
                                if(confirm("Are You Sure?"))
                                {
                                     $.ajax({
                                        url:'<?php echo base_url(); ?>admin/student_athlete/delete_weight/',
                                        type:'POST',
                                        data:{WeightID:WeightID},
                                        success:function(result){
                                          $('#Weight_'+WeightID).remove();
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
                                Height List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseSix" style="height: 0px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addheight">Add Feet</button>				  
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
                        <tbody id="Height_List">
                            <?php $Gender_details=get_table_details('stu_athlete_height','HeightID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Height_<?php echo $Gender['HeightID']; ?>">
                            <td><?php echo $Gender['HeightID']; ?></td>
                            <td><?php echo $Gender['HeightName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete/add_height/<?php echo $Gender['HeightID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_height('<?php echo $Gender['HeightID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
						 <script>
                            jQuery(".addheight").click(function() {
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
                                            href: '<?php echo base_url(); ?>admin/student_athlete/add_height/',
                                        }
                                    ]);
                                });
                            function remove_height(HeightID)
                            {
                                if(confirm("Are You Sure?"))
                                {
                                     $.ajax({
                                        url:'<?php echo base_url(); ?>admin/student_athlete/delete_height/',
                                        type:'POST',
                                        data:{HeightID:HeightID},
                                        success:function(result){
                                          $('#Height_'+HeightID).remove();
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
                                Inches List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseTen" style="height: 0px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addinches">Add Inches</button>				  
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
                        <tbody id="Inches_List">
                            <?php $Gender_details=get_table_details('stu_athlete_inches','InchesID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Inches_<?php echo $Gender['InchesID']; ?>">
                            <td><?php echo $Gender['InchesID']; ?></td>
                            <td><?php echo $Gender['InchesName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete/add_inches/<?php echo $Gender['InchesID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_inches('<?php echo $Gender['InchesID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
						 <script>
                            jQuery(".addinches").click(function() {
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
                                            href: '<?php echo base_url(); ?>admin/student_athlete/add_inches/',
                                        }
                                    ]);
                                });
                            function remove_inches(InchesID)
                            {
                                if(confirm("Are You Sure?"))
                                {
                                     $.ajax({
                                        url:'<?php echo base_url(); ?>admin/student_athlete/delete_inches/',
                                        type:'POST',
                                        data:{InchesID:InchesID},
                                        success:function(result){
                                          $('#Inches_'+InchesID).remove();
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
                                Sport List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseSeven" style="height: 0px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                             <button class="btn btn-primary addsport">Add Sport</button>		  
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
                        <tbody id="Sport_List">
                            <?php $Gender_details=get_table_details('stu_athlete_sport','SportID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Sport_<?php echo $Gender['SportID']; ?>">
                            <td><?php echo $Gender['SportID']; ?></td>
                            <td><?php echo $Gender['SportName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete/add_sport/<?php echo $Gender['SportID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_sport('<?php echo $Gender['SportID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
						 <script>
                            jQuery(".addsport").click(function() {
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
                                            href: '<?php echo base_url(); ?>admin/student_athlete/add_sport/',
                                        }
                                    ]);
                                });
                            function remove_sport(SportID)
                            {
                                if(confirm("Are You Sure?"))
                                {
                                     $.ajax({
                                        url:'<?php echo base_url(); ?>admin/student_athlete/delete_sport/',
                                        type:'POST',
                                        data:{SportID:SportID},
                                        success:function(result){
                                          $('#Sport_'+SportID).remove();
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
                                Position List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseThree" style="height: 0px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addposition">Add Position</button>				  
                            </div>
                            <br /><br />
                              <div class="table-responsive">
                      <table class="table mb30">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>SportName</th>
                            <th>Name</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="Position_List">
                            <?php $Gender_details=get_table_details('stu_athlete_position','PositionID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Position_<?php echo $Gender['PositionID']; ?>">
                            
                            <td><?php echo $Gender['PositionID']; ?></td>
                            <td> 
							<?php if($Gender['SportID']!=0 && $Gender['SportID']!=NULL){ 	
							 $SportName=get_row_data('stu_athlete_sport','SportID',$Gender['SportID']);
								echo $SportName['SportName'];  } else { echo "-"; }?> 
                                
                                </td>
                            <td><?php echo $Gender['Position']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete/add_position/<?php echo $Gender['PositionID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_position('<?php echo $Gender['PositionID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
						 <script>
                            jQuery(".addposition").click(function() {
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
                                            href: '<?php echo base_url(); ?>admin/student_athlete/add_position/',
                                        }
                                    ]);
                                });
                            function remove_position(PositionID)
                            {
                                if(confirm("Are You Sure?"))
                                {
                                     $.ajax({
                                        url:'<?php echo base_url(); ?>admin/student_athlete/delete_position/',
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
$(document).ready(function() {
	$(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});



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
<!----------------------Gender ---------------------------->


</script>


