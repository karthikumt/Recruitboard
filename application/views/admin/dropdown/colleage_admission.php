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
                   <li class="active"><a href="<?php echo base_url(); ?>admin/colleage_admission"><span>Step 1</span></a></li>
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
                                Country List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseOne" style="height: 0 px;">
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
                            <?php $Gender_details=get_table_details('coll_admi_country','Coll_admi_CountryID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Country_<?php echo $Gender['Coll_admi_CountryID']; ?>">
                            <td><?php echo $Gender['Coll_admi_CountryID']; ?></td>
                            <td><?php echo $Gender['Coll_admi_CountryName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/colleage_admission/add_country/<?php echo $Gender['Coll_admi_CountryID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_country('<?php echo $Gender['Coll_admi_CountryID']; ?>')" ><i class="fa fa-trash-o"></i></a>
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
                                        href: '<?php echo base_url(); ?>admin/colleage_admission/add_country/',
                                    }
                                ]);
                            });
                        function remove_country(Coll_admi_CountryID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/colleage_admission/delete_country/',
                                    type:'POST',
                                    data:{Coll_admi_CountryID:Coll_admi_CountryID},
                                    success:function(result){
                                      $('#Country_'+Coll_admi_CountryID).remove();
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


