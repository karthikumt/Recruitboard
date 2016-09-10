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
                  <li class=""><a href="<?php echo base_url(); ?>admin/colleage_admission_four"><span>Step 4</span></a></li>
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
                                Acceptance List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseOne" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addacceptance">Add Acceptance</button>				  
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
                        <tbody id="Acceptance_List">
                            <?php $Gender_details=get_table_details('coll_admi_acceptance','Coll_admi_AcceptanceID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Acceptance_<?php echo $Gender['Coll_admi_AcceptanceID']; ?>">
                            <td><?php echo $Gender['Coll_admi_AcceptanceID']; ?></td>
                            <td><?php echo $Gender['Coll_admi_AcceptanceName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_admission_second/add_acceptance/<?php echo $Gender['Coll_admi_AcceptanceID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_acceptance('<?php echo $Gender['Coll_admi_AcceptanceID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".addacceptance").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/colleage_admission_second/add_acceptance/',
                                    }
                                ]);
                            });
                        function remove_acceptance(Coll_admi_AcceptanceID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/colleage_admission_second/delete_acceptance/',
                                    type:'POST',
                                    data:{Coll_admi_AcceptanceID:Coll_admi_AcceptanceID},
                                    success:function(result){
                                      $('#Acceptance_'+Coll_admi_AcceptanceID).remove();
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
                              <a href="#collapsetwo" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                TestScore List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapsetwo" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addtestscore">Add TestScore</button>				  
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
                        <tbody id="TestScore_List">
                            <?php $Gender_details=get_table_details('coll_admi_testscore','Coll_admi_TestScoreID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="TestScore_<?php echo $Gender['Coll_admi_TestScoreID']; ?>">
                            <td><?php echo $Gender['Coll_admi_TestScoreID']; ?></td>
                            <td><?php echo $Gender['Coll_admi_TestScoreName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_admission_second/add_testscore/<?php echo $Gender['Coll_admi_TestScoreID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_testscore('<?php echo $Gender['Coll_admi_TestScoreID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".addtestscore").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/colleage_admission_second/add_testscore/',
                                    }
                                ]);
                            });
                        function remove_testscore(Coll_admi_TestScoreID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/colleage_admission_second/delete_testscore/',
                                    type:'POST',
                                    data:{Coll_admi_TestScoreID:Coll_admi_TestScoreID},
                                    success:function(result){
                                      $('#TestScore_'+Coll_admi_TestScoreID).remove();
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
                              <a href="#collapsethree" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                Graduaction List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapsethree" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addgraduaction">Add Graduaction</button>				  
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
                        <tbody id="Graduaction_List">
                            <?php $Gender_details=get_table_details('coll_admi_graduaction','Coll_admi_GraduactionID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Graduaction_<?php echo $Gender['Coll_admi_GraduactionID']; ?>">
                            <td><?php echo $Gender['Coll_admi_GraduactionID']; ?></td>
                            <td><?php echo $Gender['Coll_admi_GraduactionName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_admission_second/add_graduaction/<?php echo $Gender['Coll_admi_GraduactionID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_graduaction('<?php echo $Gender['Coll_admi_GraduactionID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".addgraduaction").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/colleage_admission_second/add_graduaction/',
                                    }
                                ]);
                            });
                        function remove_graduaction(Coll_admi_GraduactionID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/colleage_admission_second/delete_graduaction/',
                                    type:'POST',
                                    data:{Coll_admi_GraduactionID:Coll_admi_GraduactionID},
                                    success:function(result){
                                      $('#Graduaction_'+Coll_admi_GraduactionID).remove();
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
                              <a href="#collapsefour" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                Setting List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapsefour" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addsetting">Add Setting</button>				  
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
                        <tbody id="Setting_List">
                            <?php $Gender_details=get_table_details('coll_admi_setting','Coll_admi_SettingID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Setting_<?php echo $Gender['Coll_admi_SettingID']; ?>">
                            <td><?php echo $Gender['Coll_admi_SettingID']; ?></td>
                            <td><?php echo $Gender['Coll_admi_SettingName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_admission_second/add_setting/<?php echo $Gender['Coll_admi_SettingID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_setting('<?php echo $Gender['Coll_admi_SettingID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".addsetting").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/colleage_admission_second/add_setting/',
                                    }
                                ]);
                            });
                        function remove_setting(Coll_admi_SettingID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/colleage_admission_second/delete_setting/',
                                    type:'POST',
                                    data:{Coll_admi_SettingID:Coll_admi_SettingID},
                                    success:function(result){
                                      $('#Setting_'+Coll_admi_SettingID).remove();
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
                              <a href="#collapsefive" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                Gpa List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapsefive" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addgpa">Add Gpa</button>				  
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
                        <tbody id="Gpa_List">
                            <?php $Gender_details=get_table_details('coll_admi_gpa','Coll_admi_GpaID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Gpa_<?php echo $Gender['Coll_admi_GpaID']; ?>">
                            <td><?php echo $Gender['Coll_admi_GpaID']; ?></td>
                            <td><?php echo $Gender['Coll_admi_GpaName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_admission_second/add_gpa/<?php echo $Gender['Coll_admi_GpaID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_gpa('<?php echo $Gender['Coll_admi_GpaID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".addgpa").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/colleage_admission_second/add_gpa/',
                                    }
                                ]);
                            });
                        function remove_gpa(Coll_admi_GpaID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/colleage_admission_second/delete_gpa/',
                                    type:'POST',
                                    data:{Coll_admi_GpaID:Coll_admi_GpaID},
                                    success:function(result){
                                      $('#Gpa_'+Coll_admi_GpaID).remove();
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
                        
                        <?php /*?><div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a href="#collapsesix" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                TopMajor List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapsesix" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addtopmajor">Add TopMajor</button>				  
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
                        <tbody id="TopMajor_List">
                            <?php $Gender_details=get_table_details('coll_admi_topmajor','Coll_admi_TopMajorID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="TopMajor_<?php echo $Gender['Coll_admi_TopMajorID']; ?>">
                            <td><?php echo $Gender['Coll_admi_TopMajorID']; ?></td>
                            <td><?php echo $Gender['Coll_admi_TopMajorName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_admission_second/add_topmajor/<?php echo $Gender['Coll_admi_TopMajorID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_topmajor('<?php echo $Gender['Coll_admi_TopMajorID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".addtopmajor").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/colleage_admission_second/add_topmajor/',
                                    }
                                ]);
                            });
                        function remove_topmajor(Coll_admi_TopMajorID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/colleage_admission_second/delete_topmajor/',
                                    type:'POST',
                                    data:{Coll_admi_TopMajorID:Coll_admi_TopMajorID},
                                    success:function(result){
                                      $('#TopMajor_'+Coll_admi_TopMajorID).remove();
                                    }
            
                        });
                        return false;
                            }
                        }
                      </script>
                      </div>
                            </div>
                          </div>
                          
                        </div><?php */?>
             
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


