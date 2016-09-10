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
                  <li class="active"><a href="<?php echo base_url(); ?>admin/colleage_cotch_two"><span>Step 2</span></a></li>
   
                   <li class=""><a href="<?php echo base_url(); ?>admin/colleage_cotch_four"><span>Step 4</span></a></li>	
   
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
                                     Cotch Division List
                                      </a>
                                    </h4>
                                  </div>
                                  <div class="panel-collapse collapse" id="collapseOne" style="height: 0 px;">
                                    <div class="panel-body">
                                   <div class="buttoncss" style="padding:0 25px 0 0;">
                                      <button class="btn btn-primary addColl_Division">Add Cotch Division</button>				  
                                    </div>
                                    <br /><br />
                                      <div class="table-responsive">
                              <table class="table mb30">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Division</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody id="Coll_Division_List">
                                    <?php $Coll_Division_details=get_table_details('coll_cotch_division','Coll_DivisionID'); ?>
                                   <?php if(empty($Coll_Division_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                                   <?php foreach($Coll_Division_details as $Coll_Division){ ?>
                                  <tr id="Coll_Division_<?php echo $Coll_Division['Coll_DivisionID']; ?>">
                                    <td><?php echo $Coll_Division['Coll_DivisionID']; ?></td>
                                    <td><?php echo $Coll_Division['Coll_DivisionName']; ?></td>
                                    <td>
                                      <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_cotch_two/add_Coll_Division/<?php echo $Coll_Division['Coll_DivisionID']; ?> "><i class="fa fa-pencil"></i></a>
                                      <a class="delete-row" href="javascript:void(0);" onclick="remove_Coll_Division('<?php echo $Coll_Division['Coll_DivisionID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                                    </td>
                                  </tr>
                                  <?php } } ?>
                                </tbody>
                              </table>
                                   <script>
                                jQuery(".addColl_Division").click(function() {
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
                                                href: '<?php echo base_url(); ?>admin/colleage_cotch_two/add_Coll_Division/',
                                            }
                                        ]);
                                    });
                                function remove_Coll_Division(Coll_DivisionID)
                                {
                                    
                        
                                    if(confirm("Are You Sure?"))
                                    {
                                         $.ajax({
                                            url:'<?php echo base_url(); ?>admin/colleage_cotch_two/delete_Coll_Division/',
                                            type:'POST',
                                            data:{Coll_DivisionID:Coll_DivisionID},
                                            success:function(result){
                                              $('#Coll_Division_'+Coll_DivisionID).remove();
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
                                     Cotch Program List
                                      </a>
                                    </h4>
                                  </div>
                                  <div class="panel-collapse collapse" id="collapseTwo" style="height: 0 px;">
                                    <div class="panel-body">
                                   <div class="buttoncss" style="padding:0 25px 0 0;">
                                      <button class="btn btn-primary addColl_Program">Add Cotch Program</button>				  
                                    </div>
                                    <br /><br />
                                      <div class="table-responsive">
                              <table class="table mb30">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Program</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody id="Coll_Program_List">
                                    <?php $Coll_Program_details=get_table_details('coll_cotch_program','Coll_ProgramID'); ?>
                                   <?php if(empty($Coll_Program_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                                   <?php foreach($Coll_Program_details as $Coll_Program){ ?>
                                  <tr id="Coll_Program_<?php echo $Coll_Program['Coll_ProgramID']; ?>">
                                    <td><?php echo $Coll_Program['Coll_ProgramID']; ?></td>
                                    <td><?php echo $Coll_Program['Coll_ProgramName']; ?></td>
                                    <td>
                                      <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_cotch_two/add_Coll_Program/<?php echo $Coll_Program['Coll_ProgramID']; ?> "><i class="fa fa-pencil"></i></a>
                                      <a class="delete-row" href="javascript:void(0);" onclick="remove_Coll_Program('<?php echo $Coll_Program['Coll_ProgramID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                                    </td>
                                  </tr>
                                  <?php } } ?>
                                </tbody>
                              </table>
                                   <script>
                                jQuery(".addColl_Program").click(function() {
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
                                                href: '<?php echo base_url(); ?>admin/colleage_cotch_two/add_Coll_Program/',
                                            }
                                        ]);
                                    });
                                function remove_Coll_Program(Coll_ProgramID)
                                {
                                    
                        
                                    if(confirm("Are You Sure?"))
                                    {
                                         $.ajax({
                                            url:'<?php echo base_url(); ?>admin/colleage_cotch_two/delete_Coll_Program/',
                                            type:'POST',
                                            data:{Coll_ProgramID:Coll_ProgramID},
                                            success:function(result){
                                              $('#Coll_Program_'+Coll_ProgramID).remove();
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
                                     Cotch Playoff List
                                      </a>
                                    </h4>
                                  </div>
                                  <div class="panel-collapse collapse" id="collapseThree" style="height: 0 px;">
                                    <div class="panel-body">
                                   <div class="buttoncss" style="padding:0 25px 0 0;">
                                      <button class="btn btn-primary addColl_Playoff">Add Cotch Playoff</button>				  
                                    </div>
                                    <br /><br />
                                      <div class="table-responsive">
                              <table class="table mb30">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Playoff</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody id="Coll_Playoff_List">
                                    <?php $Coll_Playoff_details=get_table_details('coll_cotch_playoff','Coll_PlayoffID'); ?>
                                   <?php if(empty($Coll_Playoff_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                                   <?php foreach($Coll_Playoff_details as $Coll_Playoff){ ?>
                                  <tr id="Coll_Playoff_<?php echo $Coll_Playoff['Coll_PlayoffID']; ?>">
                                    <td><?php echo $Coll_Playoff['Coll_PlayoffID']; ?></td>
                                    <td><?php echo $Coll_Playoff['Coll_PlayoffName']; ?></td>
                                    <td>
                                      <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_cotch_two/add_Coll_Playoff/<?php echo $Coll_Playoff['Coll_PlayoffID']; ?> "><i class="fa fa-pencil"></i></a>
                                      <a class="delete-row" href="javascript:void(0);" onclick="remove_Coll_Playoff('<?php echo $Coll_Playoff['Coll_PlayoffID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                                    </td>
                                  </tr>
                                  <?php } } ?>
                                </tbody>
                              </table>
                                   <script>
                                jQuery(".addColl_Playoff").click(function() {
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
                                                href: '<?php echo base_url(); ?>admin/colleage_cotch_two/add_Coll_Playoff/',
                                            }
                                        ]);
                                    });
                                function remove_Coll_Playoff(Coll_PlayoffID)
                                {
                                    
                        
                                    if(confirm("Are You Sure?"))
                                    {
                                         $.ajax({
                                            url:'<?php echo base_url(); ?>admin/colleage_cotch_two/delete_Coll_Playoff/',
                                            type:'POST',
                                            data:{Coll_PlayoffID:Coll_PlayoffID},
                                            success:function(result){
                                              $('#Coll_Playoff_'+Coll_PlayoffID).remove();
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
                                     Cotch Team List
                                      </a>
                                    </h4>
                                  </div>
                                  <div class="panel-collapse collapse" id="collapseFour" style="height: 0 px;">
                                    <div class="panel-body">
                                   <div class="buttoncss" style="padding:0 25px 0 0;">
                                      <button class="btn btn-primary addColl_Team">Add Cotch Team</button>				  
                                    </div>
                                    <br /><br />
                                      <div class="table-responsive">
                              <table class="table mb30">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Team</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody id="Coll_Team_List">
                                    <?php $Coll_Team_details=get_table_details('coll_cotch_team','Coll_TeamID'); ?>
                                   <?php if(empty($Coll_Team_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                                   <?php foreach($Coll_Team_details as $Coll_Team){ ?>
                                  <tr id="Coll_Team_<?php echo $Coll_Team['Coll_TeamID']; ?>">
                                    <td><?php echo $Coll_Team['Coll_TeamID']; ?></td>
                                    <td><?php echo $Coll_Team['Coll_TeamName']; ?></td>
                                    <td>
                                      <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_cotch_two/add_Coll_Team/<?php echo $Coll_Team['Coll_TeamID']; ?> "><i class="fa fa-pencil"></i></a>
                                      <a class="delete-row" href="javascript:void(0);" onclick="remove_Coll_Team('<?php echo $Coll_Team['Coll_TeamID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                                    </td>
                                  </tr>
                                  <?php } } ?>
                                </tbody>
                              </table>
                                   <script>
                                jQuery(".addColl_Team").click(function() {
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
                                                href: '<?php echo base_url(); ?>admin/colleage_cotch_two/add_Coll_Team/',
                                            }
                                        ]);
                                    });
                                function remove_Coll_Team(Coll_TeamID)
                                {
                                    
                        
                                    if(confirm("Are You Sure?"))
                                    {
                                         $.ajax({
                                            url:'<?php echo base_url(); ?>admin/colleage_cotch_two/delete_Coll_Team/',
                                            type:'POST',
                                            data:{Coll_TeamID:Coll_TeamID},
                                            success:function(result){
                                              $('#Coll_Team_'+Coll_TeamID).remove();
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


