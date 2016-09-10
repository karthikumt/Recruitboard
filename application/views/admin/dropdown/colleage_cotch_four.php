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
                   <li class=""><a href="<?php echo base_url(); ?>admin/colleage_cotch"><span>Step 1</span></a></li>
                  <li class=""><a href="<?php echo base_url(); ?>admin/colleage_cotch_two"><span>Step 2</span></a></li>
     
                   <li class="active"><a href="<?php echo base_url(); ?>admin/colleage_cotch_four"><span>Step 4</span></a></li>	
   
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
                                     Cotch Gender List
                                      </a>
                                    </h4>
                                  </div>
                                  <div class="panel-collapse collapse" id="collapseOne" style="height: 0 px;">
                                    <div class="panel-body">
                                   <div class="buttoncss" style="padding:0 25px 0 0;">
                                      <button class="btn btn-primary addColl_Gen">Add Cotch Gender</button>				  
                                    </div>
                                    <br /><br />
                                      <div class="table-responsive">
                              <table class="table mb30">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Gender</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody id="Coll_Gen_List">
                                    <?php $Coll_Gen_details=get_table_details('coll_cotch_gen','Coll_GenID'); ?>
                                   <?php if(empty($Coll_Gen_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                                   <?php foreach($Coll_Gen_details as $Coll_Gen){ ?>
                                  <tr id="Coll_Gen_<?php echo $Coll_Gen['Coll_GenID']; ?>">
                                    <td><?php echo $Coll_Gen['Coll_GenID']; ?></td>
                                    <td><?php echo $Coll_Gen['Coll_GenName']; ?></td>
                                    <td>
                                      <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_cotch_four/add_Coll_Gen/<?php echo $Coll_Gen['Coll_GenID']; ?> "><i class="fa fa-pencil"></i></a>
                                      <a class="delete-row" href="javascript:void(0);" onclick="remove_Coll_Gen('<?php echo $Coll_Gen['Coll_GenID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                                    </td>
                                  </tr>
                                  <?php } } ?>
                                </tbody>
                              </table>
                                   <script>
                                jQuery(".addColl_Gen").click(function() {
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
                                                href: '<?php echo base_url(); ?>admin/colleage_cotch_four/add_Coll_Gen/',
                                            }
                                        ]);
                                    });
                                function remove_Coll_Gen(Coll_GenID)
                                {
                                    
                        
                                    if(confirm("Are You Sure?"))
                                    {
                                         $.ajax({
                                            url:'<?php echo base_url(); ?>admin/colleage_cotch_four/delete_Coll_Gen/',
                                            type:'POST',
                                            data:{Coll_GenID:Coll_GenID},
                                            success:function(result){
                                              $('#Coll_Gen_'+Coll_GenID).remove();
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
                                     Cotch Sport List
                                      </a>
                                    </h4>
                                  </div>
                                  <div class="panel-collapse collapse" id="collapseTwo" style="height: 0 px;">
                                    <div class="panel-body">
                                   <div class="buttoncss" style="padding:0 25px 0 0;">
                                      <button class="btn btn-primary addColl_Spo">Add Cotch Sport</button>				  
                                    </div>
                                    <br /><br />
                                      <div class="table-responsive">
                              <table class="table mb30">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Sport</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody id="Coll_Spo_List">
                                    <?php $Coll_Spo_details=get_table_details('coll_cotch_spo','Coll_SpoID'); ?>
                                   <?php if(empty($Coll_Spo_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                                   <?php foreach($Coll_Spo_details as $Coll_Spo){ ?>
                                  <tr id="Coll_Spo_<?php echo $Coll_Spo['Coll_SpoID']; ?>">
                                    <td><?php echo $Coll_Spo['Coll_SpoID']; ?></td>
                                    <td><?php echo $Coll_Spo['Coll_SpoName']; ?></td>
                                    <td>
                                      <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_cotch_four/add_Coll_Spo/<?php echo $Coll_Spo['Coll_SpoID']; ?> "><i class="fa fa-pencil"></i></a>
                                      <a class="delete-row" href="javascript:void(0);" onclick="remove_Coll_Spo('<?php echo $Coll_Spo['Coll_SpoID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                                    </td>
                                  </tr>
                                  <?php } } ?>
                                </tbody>
                              </table>
                                   <script>
                                jQuery(".addColl_Spo").click(function() {
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
                                                href: '<?php echo base_url(); ?>admin/colleage_cotch_four/add_Coll_Spo/',
                                            }
                                        ]);
                                    });
                                function remove_Coll_Spo(Coll_SpoID)
                                {
                                    
                        
                                    if(confirm("Are You Sure?"))
                                    {
                                         $.ajax({
                                            url:'<?php echo base_url(); ?>admin/colleage_cotch_four/delete_Coll_Spo/',
                                            type:'POST',
                                            data:{Coll_SpoID:Coll_SpoID},
                                            success:function(result){
                                              $('#Coll_Spo_'+Coll_SpoID).remove();
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
                                     Cotch Minimum GPA List
                                      </a>
                                    </h4>
                                  </div>
                                  <div class="panel-collapse collapse" id="collapseThree" style="height: 0 px;">
                                    <div class="panel-body">
                                   <div class="buttoncss" style="padding:0 25px 0 0;">
                                      <button class="btn btn-primary addColl_Min_Gpa">Add Cotch Minimum GPA</button>				  
                                    </div>
                                    <br /><br />
                                      <div class="table-remin_gpansive">
                              <table class="table mb30">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Min_Gpa</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody id="Coll_Min_Gpa_List">
                                    <?php $Coll_Min_Gpa_details=get_table_details('coll_cotch_min_gpa','Coll_Min_GpaID'); ?>
                                   <?php if(empty($Coll_Min_Gpa_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                                   <?php foreach($Coll_Min_Gpa_details as $Coll_Min_Gpa){ ?>
                                  <tr id="Coll_Min_Gpa_<?php echo $Coll_Min_Gpa['Coll_Min_GpaID']; ?>">
                                    <td><?php echo $Coll_Min_Gpa['Coll_Min_GpaID']; ?></td>
                                    <td><?php echo $Coll_Min_Gpa['Coll_Min_GpaName']; ?></td>
                                    <td>
                                      <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_cotch_four/add_Coll_Min_Gpa/<?php echo $Coll_Min_Gpa['Coll_Min_GpaID']; ?> "><i class="fa fa-pencil"></i></a>
                                      <a class="delete-row" href="javascript:void(0);" onclick="remove_Coll_Min_Gpa('<?php echo $Coll_Min_Gpa['Coll_Min_GpaID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                                    </td>
                                  </tr>
                                  <?php } } ?>
                                </tbody>
                              </table>
                                   <script>
                                jQuery(".addColl_Min_Gpa").click(function() {
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
                                                href: '<?php echo base_url(); ?>admin/colleage_cotch_four/add_Coll_Min_Gpa/',
                                            }
                                        ]);
                                    });
                                function remove_Coll_Min_Gpa(Coll_Min_GpaID)
                                {
                                    
                        
                                    if(confirm("Are You Sure?"))
                                    {
                                         $.ajax({
                                            url:'<?php echo base_url(); ?>admin/colleage_cotch_four/delete_Coll_Min_Gpa/',
                                            type:'POST',
                                            data:{Coll_Min_GpaID:Coll_Min_GpaID},
                                            success:function(result){
                                              $('#Coll_Min_Gpa_'+Coll_Min_GpaID).remove();
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
                                     Cotch Min_Height List
                                      </a>
                                    </h4>
                                  </div>
                                  <div class="panel-collapse collapse" id="collapseFour" style="height: 0 px;">
                                    <div class="panel-body">
                                   <div class="buttoncss" style="padding:0 25px 0 0;">
                                      <button class="btn btn-primary addColl_Min_Height">Add Cotch Min_Height</button>				  
                                    </div>
                                    <br /><br />
                                      <div class="table-remin_heightnsive">
                              <table class="table mb30">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Min_Height</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody id="Coll_Min_Height_List">
                                    <?php $Coll_Min_Height_details=get_table_details('coll_cotch_min_height','Coll_Min_HeightID'); ?>
                                   <?php if(empty($Coll_Min_Height_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                                   <?php foreach($Coll_Min_Height_details as $Coll_Min_Height){ ?>
                                  <tr id="Coll_Min_Height_<?php echo $Coll_Min_Height['Coll_Min_HeightID']; ?>">
                                    <td><?php echo $Coll_Min_Height['Coll_Min_HeightID']; ?></td>
                                    <td><?php echo $Coll_Min_Height['Coll_Min_HeightName']; ?></td>
                                    <td>
                                      <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_cotch_four/add_Coll_Min_Height/<?php echo $Coll_Min_Height['Coll_Min_HeightID']; ?> "><i class="fa fa-pencil"></i></a>
                                      <a class="delete-row" href="javascript:void(0);" onclick="remove_Coll_Min_Height('<?php echo $Coll_Min_Height['Coll_Min_HeightID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                                    </td>
                                  </tr>
                                  <?php } } ?>
                                </tbody>
                              </table>
                                   <script>
                                jQuery(".addColl_Min_Height").click(function() {
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
                                                href: '<?php echo base_url(); ?>admin/colleage_cotch_four/add_Coll_Min_Height/',
                                            }
                                        ]);
                                    });
                                function remove_Coll_Min_Height(Coll_Min_HeightID)
                                {
                                    
                        
                                    if(confirm("Are You Sure?"))
                                    {
                                         $.ajax({
                                            url:'<?php echo base_url(); ?>admin/colleage_cotch_four/delete_Coll_Min_Height/',
                                            type:'POST',
                                            data:{Coll_Min_HeightID:Coll_Min_HeightID},
                                            success:function(result){
                                              $('#Coll_Min_Height_'+Coll_Min_HeightID).remove();
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
                                     Cotch Min_HeightInche List
                                      </a>
                                    </h4>
                                  </div>
                                  <div class="panel-collapse collapse" id="collapseSix" style="height: 0 px;">
                                    <div class="panel-body">
                                   <div class="buttoncss" style="padding:0 25px 0 0;">
                                      <button class="btn btn-primary addColl_Min_HeightInche">Add Cotch Min_HeightInche</button>				  
                                    </div>
                                    <br /><br />
                                      <div class="table-remin_heightnsive">
                              <table class="table mb30">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Min_HeightInche</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody id="Coll_Min_HeightInche_List">
                                    <?php $Coll_Min_Height_details=get_table_details('coll_cotch_min_HeightInche','Coll_Min_HeightIncheID'); ?>
                                   <?php if(empty($Coll_Min_Height_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                                   <?php foreach($Coll_Min_Height_details as $Coll_Min_Height){ ?>
                                  <tr id="Coll_Min_HeightInche_<?php echo $Coll_Min_Height['Coll_Min_HeightIncheID']; ?>">
                                    <td><?php echo $Coll_Min_Height['Coll_Min_HeightIncheID']; ?></td>
                                    <td><?php echo $Coll_Min_Height['Coll_Min_HeightIncheName']; ?></td>
                                    <td>
                                      <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_cotch_four/add_Coll_Min_HeightInche/<?php echo $Coll_Min_Height['Coll_Min_HeightIncheID']; ?> "><i class="fa fa-pencil"></i></a>
                                      <a class="delete-row" href="javascript:void(0);" onclick="remove_Coll_Min_HeightInche('<?php echo $Coll_Min_Height['Coll_Min_HeightIncheID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                                    </td>
                                  </tr>
                                  <?php } } ?>
                                </tbody>
                              </table>
                                   <script>
                                jQuery(".addColl_Min_HeightInche").click(function() {
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
                                                href: '<?php echo base_url(); ?>admin/colleage_cotch_four/add_Coll_Min_HeightInche/',
                                            }
                                        ]);
                                    });
                                function remove_Coll_Min_HeightInche(Coll_Min_HeightIncheID)
                                {
                                    
                        
                                    if(confirm("Are You Sure?"))
                                    {
                                         $.ajax({
                                            url:'<?php echo base_url(); ?>admin/colleage_cotch_four/delete_Coll_Min_HeightInche/',
                                            type:'POST',
                                            data:{Coll_Min_HeightIncheID:Coll_Min_HeightIncheID},
                                            success:function(result){
                                              $('#Coll_Min_HeightInche_'+Coll_Min_HeightIncheID).remove();
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
                                     Cotch Max_Width List
                                      </a>
                                    </h4>
                                  </div>
                                  <div class="panel-collapse collapse" id="collapseFive" style="height: 0 px;">
                                    <div class="panel-body">
                                   <div class="buttoncss" style="padding:0 25px 0 0;">
                                      <button class="btn btn-primary addColl_Max_Height">Add Cotch Max_Width</button>				  
                                    </div>
                                    <br /><br />
                                      <div class="table-remax_heightnsive">
                              <table class="table mb30">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Max_Width</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody id="Coll_Max_Height_List">
                                    <?php $Coll_Max_Height_details=get_table_details('coll_cotch_max_height','Coll_Max_HeightID'); ?>
                                   <?php if(empty($Coll_Max_Height_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                                   <?php foreach($Coll_Max_Height_details as $Coll_Max_Height){ ?>
                                  <tr id="Coll_Max_Height_<?php echo $Coll_Max_Height['Coll_Max_HeightID']; ?>">
                                    <td><?php echo $Coll_Max_Height['Coll_Max_HeightID']; ?></td>
                                    <td><?php echo $Coll_Max_Height['Coll_Max_HeightName']; ?></td>
                                    <td>
                                      <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_cotch_four/add_Coll_Max_Height/<?php echo $Coll_Max_Height['Coll_Max_HeightID']; ?> "><i class="fa fa-pencil"></i></a>
                                      <a class="delete-row" href="javascript:void(0);" onclick="remove_Coll_Max_Height('<?php echo $Coll_Max_Height['Coll_Max_HeightID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                                    </td>
                                  </tr>
                                  <?php } } ?>
                                </tbody>
                              </table>
                                   <script>
                                jQuery(".addColl_Max_Height").click(function() {
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
                                                href: '<?php echo base_url(); ?>admin/colleage_cotch_four/add_Coll_Max_Height/',
                                            }
                                        ]);
                                    });
                                function remove_Coll_Max_Height(Coll_Max_HeightID)
                                {
                                    
                        
                                    if(confirm("Are You Sure?"))
                                    {
                                         $.ajax({
                                            url:'<?php echo base_url(); ?>admin/colleage_cotch_four/delete_Coll_Max_Height/',
                                            type:'POST',
                                            data:{Coll_Max_HeightID:Coll_Max_HeightID},
                                            success:function(result){
                                              $('#Coll_Max_Height_'+Coll_Max_HeightID).remove();
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


