<?php if($Coll_admi_TestDataID!=0 && $Coll_admi_TestDataID!=NULL ){
		$getdata=get_row_data('coll_admi_testdata','Coll_admi_TestDataID',$Coll_admi_TestDataID); 
		$Coll_admi_TestDataID=$getdata['Coll_admi_TestDataID'];
		$Coll_admi_TestDataName=$getdata['Coll_admi_TestDataName'];
		$Status=$getdata['Status'];
	}else{
		$Coll_admi_TestDataID="";
		$Coll_admi_TestDataName="";
		$Status="";
	}
?>
		
<div class="contentpanel">
      <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return education();">
      <input type="hidden" name="Coll_admi_TestDataID" value="<?php echo $Coll_admi_TestDataID; ?>" />
      
          <div class="panel panel-default">      	
                <div class="panel-heading">          
                  <h4 class="panel-title">Add TestData Details</h4>          
                </div>
            
                <div class="panel-body panel-body-nopadding"> 
                	<fieldset style="border:none;">
                         <?php 
                           if($Coll_admi_TestDataID!=0 && $Coll_admi_TestDataID!=NULL){ ?>
						  	  <div class="form-group" id="Laliya_<?php echo $Coll_admi_TestDataID; ?>">
                                <div class="form-group">
                                  <label class="col-sm-3 control-label">TestData</label>
                                   <div class="col-sm-6">
                                  <input type="text" class="form-control" id="Coll_admi_TestDataName"  name="Coll_admi_TestDataName" required="required" value="<?php echo $Coll_admi_TestDataName; ?>"/>
                                  </div>
                                </div>
                            <div>
                           </div>
                           </div>
                            <?php  } else { ?>
                           
                          
                            <div class="" id="Laliyagiri" >
                               <div class="form-group">
                              <label class="col-sm-3 control-label">TestData</label>
                              <div class="col-sm-6">
                                <input type="text" class="form-control" id="Coll_admi_TestDataName"  name="Coll_admi_TestDataName[]" required="required"/>
                              </div>
                            </div>   
                                <div class="align-right">
                                <input type="button" class="btn btn-danger" id="Remove" value="Remove" onclick="Remove_data(this.id)"  style="display:none; float:right; margin:-54px 88px 0 0;" >
							</div>
                            </div>
                            <div id="MyIds"></div> 	
                           	<div class="cl"></div>
                            <?php } ?>
                </fieldset>
                </div>
            
                <div class="panel-footer">
                    <div class="row">
                      <div class="col-sm-9 col-sm-offset-3">
                      	<button type="submit" name="Savebutton" id="Save_details" value="Save" class="btn btn-primary">Save</button>
                        <?php if($Coll_admi_TestDataID==0){ ?>
                        <button type="button" name="Savebutton" value="AddMore" class="btn btn-primary" onclick="ValidateDatas()">AddMore</button>
                        <?php } ?>
                        <button  type="button" class="btn btn-default" onclick="$.fancybox.close();">Cancel</button>
                      </div>
                    </div>
                  </div>
            
          </div>
			<input type="hidden" id="NewHiddenLala" value="0" />
      </form>
      
     
</div>
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


function education()
{
	 $('#Save_details').text('Loading....');
	 $.ajax({
				url:'<?php echo base_url();?>admin/colleage_admission_four/update_testdata',
				type:'POST',
				data:$('#basicForm').serialize(),
				success:function(result){
		
				  $.fancybox.close();
				  $('#TestData_List').html("");
				  $('#TestData_List').html(result);
				}

            });
			return false;
}

</script>

<script>

function ValidateDatas(){

var NewHiddenLala=$('#NewHiddenLala').val();
$('#MyIds').append($( "#Laliyagiri" ).clone().attr('id','Laliyagiri_'+NewHiddenLala));
$('#Laliyagiri_'+NewHiddenLala).find('#Remove').attr('id','Remove_'+NewHiddenLala);
$('#Laliyagiri_'+NewHiddenLala).find("input:text").val("");


$('#Remove_'+NewHiddenLala).show();
	NewHiddenLala=parseInt(NewHiddenLala)+1;
	$('#NewHiddenLala').val(NewHiddenLala);
	
}
function Remove_data(Myids)
{
	var res = Myids.split("_"); 
	$('#Laliyagiri_'+res[1]).remove();
}
function Remove_Details(ID)
{
	if(confirm('Are You Sure?'))
	{
		$.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>",
			data: {ID:ID,a:'DeleteTrack'},
			success : function(resp){
				$('#Laliya_'+ID).remove();	
				}
    	});
	}
	else 
		return false;

}

</script>