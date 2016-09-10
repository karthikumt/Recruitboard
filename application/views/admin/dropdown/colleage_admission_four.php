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
                   <li class=""><a href="<?php echo base_url(); ?>admin/colleage_admission"><span>Step 1</span></a></li>
                  <li class=""><a href="<?php echo base_url(); ?>admin/colleage_admission_second"><span>Step 2</span></a></li>
                  <li class="active"><a href="<?php echo base_url(); ?>admin/colleage_admission_four"><span>Step 4</span></a></li>
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
                                Field List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseOne" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addfield">Add Field</button>				  
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
                        <tbody id="Field_List">
                            <?php $Gender_details=get_table_details('coll_admi_field','Coll_admi_FieldID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Field_<?php echo $Gender['Coll_admi_FieldID']; ?>">
                            <td><?php echo $Gender['Coll_admi_FieldID']; ?></td>
                            <td><?php echo $Gender['Coll_admi_FieldName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_admission_four/add_field/<?php echo $Gender['Coll_admi_FieldID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_field('<?php echo $Gender['Coll_admi_FieldID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".addfield").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/colleage_admission_four/add_field/',
                                    }
                                ]);
                            });
                        function remove_field(Coll_admi_FieldID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/colleage_admission_four/delete_field/',
                                    type:'POST',
                                    data:{Coll_admi_FieldID:Coll_admi_FieldID},
                                    success:function(result){
                                      $('#Field_'+Coll_admi_FieldID).remove();
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
                                Major List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseThree" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addmajor">Add Major</button>				  
                            </div>
                            <br /><br />
                              <div class="table-responsive">
                      <table class="table mb30">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Field Of Interest</th>
                            <th>Name</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="Major_List">
                            <?php $Gender_details=get_table_details('coll_admi_major','Coll_admi_MajorID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Major_<?php echo $Gender['Coll_admi_MajorID']; ?>">
                            <td><?php echo $Gender['Coll_admi_MajorID']; ?></td>
                            <td> 
							<?php if($Gender['Coll_admi_FieldID']!=0 && $Gender['Coll_admi_FieldID']!=NULL){ 
							 $SportName=get_row_data('coll_admi_field','Coll_admi_FieldID',$Gender['Coll_admi_FieldID']);
								echo $SportName['Coll_admi_FieldName'];  } else { echo "-"; }?> 
                                
                                </td>
                            <td><?php echo $Gender['Coll_admi_MajorName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_admission_four/add_major/<?php echo $Gender['Coll_admi_MajorID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_major('<?php echo $Gender['Coll_admi_MajorID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".addmajor").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/colleage_admission_four/add_major/',
                                    }
                                ]);
                            });
                        function remove_major(Coll_admi_MajorID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/colleage_admission_four/delete_major/',
                                    type:'POST',
                                    data:{Coll_admi_MajorID:Coll_admi_MajorID},
                                    success:function(result){
                                      $('#Major_'+Coll_admi_MajorID).remove();
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
                                GpaList List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseTwo" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addgpalist">Add GpaList</button>				  
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
                        <tbody id="GpaList_List">
                            <?php $Gender_details=get_table_details('coll_admi_gpalist','Coll_admi_GpaListID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="GpaList_<?php echo $Gender['Coll_admi_GpaListID']; ?>">
                            <td><?php echo $Gender['Coll_admi_GpaListID']; ?></td>
                            <td><?php echo $Gender['Coll_admi_GpaListName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_admission_four/add_gpalist/<?php echo $Gender['Coll_admi_GpaListID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_gpalist('<?php echo $Gender['Coll_admi_GpaListID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".addgpalist").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/colleage_admission_four/add_gpalist/',
                                    }
                                ]);
                            });
                        function remove_gpalist(Coll_admi_GpaListID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/colleage_admission_four/delete_gpalist/',
                                    type:'POST',
                                    data:{Coll_admi_GpaListID:Coll_admi_GpaListID},
                                    success:function(result){
                                      $('#GpaList_'+Coll_admi_GpaListID).remove();
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
                                TestData List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseFour" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addtestdata">Add TestData</button>				  
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
                        <tbody id="TestData_List">
                            <?php $Gender_details=get_table_details('coll_admi_testdata','Coll_admi_TestDataID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="TestData_<?php echo $Gender['Coll_admi_TestDataID']; ?>">
                            <td><?php echo $Gender['Coll_admi_TestDataID']; ?></td>
                            <td><?php echo $Gender['Coll_admi_TestDataName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_admission_four/add_testdata/<?php echo $Gender['Coll_admi_TestDataID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_testdata('<?php echo $Gender['Coll_admi_TestDataID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".addtestdata").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/colleage_admission_four/add_testdata/',
                                    }
                                ]);
                            });
                        function remove_testdata(Coll_admi_TestDataID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/colleage_admission_four/delete_testdata/',
                                    type:'POST',
                                    data:{Coll_admi_TestDataID:Coll_admi_TestDataID},
                                    success:function(result){
                                      $('#TestData_'+Coll_admi_TestDataID).remove();
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


