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
                   <li class=""><a href="<?php echo base_url(); ?>admin/academic_step_one"><span>Step 1</span></a></li>
              
   
                   <li class="active"><a href="<?php echo base_url(); ?>admin/academic_step_four"><span>Step 4</span></a></li>	
   
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
                                      <a href="#collapseTwo" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                     Academic Category List
                                      </a>
                                    </h4>
                                  </div>
                                  <div class="panel-collapse collapse" id="collapseTwo" style="height: 0 px;">
                                    <div class="panel-body">
                                   <div class="buttoncss" style="padding:0 25px 0 0;">
                                      <button class="btn btn-primary addAcademic_Category">Add Category</button>				  
                                    </div>
                                    <br /><br />
                                      <div class="table-responsive">
                              <table class="table mb30">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody id="Academic_Category_List">
                                    <?php $Academic_Category_details=get_table_details('academic_category','Academic_CategoryID'); ?>
                                   <?php if(empty($Academic_Category_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                                   <?php foreach($Academic_Category_details as $Academic_Category){ ?>
                                  <tr id="Academic_Category_<?php echo $Academic_Category['Academic_CategoryID']; ?>">
                                    <td><?php echo $Academic_Category['Academic_CategoryID']; ?></td>
                                    <td><?php echo $Academic_Category['Academic_CategoryName']; ?></td>
                                    <td>
                                      <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/academic_step_four/add_Academic_Category/<?php echo $Academic_Category['Academic_CategoryID']; ?> "><i class="fa fa-pencil"></i></a>
                                      <a class="delete-row" href="javascript:void(0);" onclick="remove_Academic_Category('<?php echo $Academic_Category['Academic_CategoryID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                                    </td>
                                  </tr>
                                  <?php } } ?>
                                </tbody>
                              </table>
                                   <script>
                                jQuery(".addAcademic_Category").click(function() {
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
                                                href: '<?php echo base_url(); ?>admin/academic_step_four/add_Academic_Category/',
                                            }
                                        ]);
                                    });
                                function remove_Academic_Category(Academic_CategoryID)
                                {
                                    
                        
                                    if(confirm("Are You Sure?"))
                                    {
                                         $.ajax({
                                            url:'<?php echo base_url(); ?>admin/academic_step_four/delete_Academic_Category/',
                                            type:'POST',
                                            data:{Academic_CategoryID:Academic_CategoryID},
                                            success:function(result){
                                              $('#Academic_Category_'+Academic_CategoryID).remove();
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


