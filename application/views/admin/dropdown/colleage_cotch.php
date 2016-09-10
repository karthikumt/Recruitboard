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
                   <li class="active"><a href="<?php echo base_url(); ?>admin/colleage_cotch"><span>Step 1</span></a></li>
                  <li class=""><a href="<?php echo base_url(); ?>admin/colleage_cotch_two"><span>Step 2</span></a></li>

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
                                     Cotch Country List
                                      </a>
                                    </h4>
                                  </div>
                                  <div class="panel-collapse collapse" id="collapseOne" style="height: 0 px;">
                                    <div class="panel-body">
                                   <div class="buttoncss" style="padding:0 25px 0 0;">
                                      <button class="btn btn-primary addColl_Country">Add Cotch Country</button>				  
                                    </div>
                                    <br /><br />
                                      <div class="table-responsive">
                              <table class="table mb30">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Country</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody id="Coll_Country_List">
                                    <?php $Coll_Country_details=get_table_details('coll_cotch_country','Coll_CountryID'); ?>
                                   <?php if(empty($Coll_Country_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                                   <?php foreach($Coll_Country_details as $Coll_Country){ ?>
                                  <tr id="Coll_Country_<?php echo $Coll_Country['Coll_CountryID']; ?>">
                                    <td><?php echo $Coll_Country['Coll_CountryID']; ?></td>
                                    <td><?php echo $Coll_Country['Coll_CountryName']; ?></td>
                                    <td>
                                      <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_cotch/add_Coll_Country/<?php echo $Coll_Country['Coll_CountryID']; ?> "><i class="fa fa-pencil"></i></a>
                                      <a class="delete-row" href="javascript:void(0);" onclick="remove_Coll_Country('<?php echo $Coll_Country['Coll_CountryID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                                    </td>
                                  </tr>
                                  <?php } } ?>
                                </tbody>
                              </table>
                                   <script>
                                jQuery(".addColl_Country").click(function() {
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
                                                href: '<?php echo base_url(); ?>admin/colleage_cotch/add_Coll_Country/',
                                            }
                                        ]);
                                    });
                                function remove_Coll_Country(Coll_CountryID)
                                {
                                    
                        
                                    if(confirm("Are You Sure?"))
                                    {
                                         $.ajax({
                                            url:'<?php echo base_url(); ?>admin/colleage_cotch/delete_Coll_Country/',
                                            type:'POST',
                                            data:{Coll_CountryID:Coll_CountryID},
                                            success:function(result){
                                              $('#Coll_Country_'+Coll_CountryID).remove();
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
                                     Cotch Gender List
                                      </a>
                                    </h4>
                                  </div>
                                  <div class="panel-collapse collapse" id="collapseTwo" style="height: 0 px;">
                                    <div class="panel-body">
                                   <div class="buttoncss" style="padding:0 25px 0 0;">
                                      <button class="btn btn-primary addColl_Gender">Add Cotch Gender</button>				  
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
                                <tbody id="Coll_Gender_List">
                                    <?php $Coll_Gender_details=get_table_details('coll_cotch_gender','Coll_GenderID'); ?>
                                   <?php if(empty($Coll_Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                                   <?php foreach($Coll_Gender_details as $Coll_Gender){ ?>
                                  <tr id="Coll_Gender_<?php echo $Coll_Gender['Coll_GenderID']; ?>">
                                    <td><?php echo $Coll_Gender['Coll_GenderID']; ?></td>
                                    <td><?php echo $Coll_Gender['Coll_GenderName']; ?></td>
                                    <td>
                                      <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_cotch/add_Coll_Gender/<?php echo $Coll_Gender['Coll_GenderID']; ?> "><i class="fa fa-pencil"></i></a>
                                      <a class="delete-row" href="javascript:void(0);" onclick="remove_Coll_Gender('<?php echo $Coll_Gender['Coll_GenderID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                                    </td>
                                  </tr>
                                  <?php } } ?>
                                </tbody>
                              </table>
                                   <script>
                                jQuery(".addColl_Gender").click(function() {
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
                                                href: '<?php echo base_url(); ?>admin/colleage_cotch/add_Coll_Gender/',
                                            }
                                        ]);
                                    });
                                function remove_Coll_Gender(Coll_GenderID)
                                {
                                    
                        
                                    if(confirm("Are You Sure?"))
                                    {
                                         $.ajax({
                                            url:'<?php echo base_url(); ?>admin/colleage_cotch/delete_Coll_Gender/',
                                            type:'POST',
                                            data:{Coll_GenderID:Coll_GenderID},
                                            success:function(result){
                                              $('#Coll_Gender_'+Coll_GenderID).remove();
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
                                     Cotch Sport List
                                      </a>
                                    </h4>
                                  </div>
                                  <div class="panel-collapse collapse" id="collapseThree" style="height: 0 px;">
                                    <div class="panel-body">
                                   <div class="buttoncss" style="padding:0 25px 0 0;">
                                      <button class="btn btn-primary addColl_Sport">Add Cotch Sport</button>				  
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
                                <tbody id="Coll_Sport_List">
                                    <?php $Coll_Sport_details=get_table_details('coll_cotch_sport','Coll_SportID'); ?>
                                   <?php if(empty($Coll_Sport_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                                   <?php foreach($Coll_Sport_details as $Coll_Sport){ ?>
                                  <tr id="Coll_Sport_<?php echo $Coll_Sport['Coll_SportID']; ?>">
                                    <td><?php echo $Coll_Sport['Coll_SportID']; ?></td>
                                    <td><?php echo $Coll_Sport['Coll_SportName']; ?></td>
                                    <td>
                                      <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_cotch/add_Coll_Sport/<?php echo $Coll_Sport['Coll_SportID']; ?> "><i class="fa fa-pencil"></i></a>
                                      <a class="delete-row" href="javascript:void(0);" onclick="remove_Coll_Sport('<?php echo $Coll_Sport['Coll_SportID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                                    </td>
                                  </tr>
                                  <?php } } ?>
                                </tbody>
                              </table>
                                   <script>
                                jQuery(".addColl_Sport").click(function() {
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
                                                href: '<?php echo base_url(); ?>admin/colleage_cotch/add_Coll_Sport/',
                                            }
                                        ]);
                                    });
                                function remove_Coll_Sport(Coll_SportID)
                                {
                                    
                        
                                    if(confirm("Are You Sure?"))
                                    {
                                         $.ajax({
                                            url:'<?php echo base_url(); ?>admin/colleage_cotch/delete_Coll_Sport/',
                                            type:'POST',
                                            data:{Coll_SportID:Coll_SportID},
                                            success:function(result){
                                              $('#Coll_Sport_'+Coll_SportID).remove();
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


