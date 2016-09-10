<?php if($Stu_Stre_PowerID!=0 && $Stu_Stre_PowerID!=NULL){
		$getGender=get_row_data('stu_strength_powerclean','Stu_Stre_PowerID',$Stu_Stre_PowerID); 
		$Stu_Stre_PowerID=$getGender['Stu_Stre_PowerID'];
		$Stu_Stre_PowerName=$getGender['Stu_Stre_PowerName'];
		$Status=$getGender['Status'];
	}else{
		$Stu_Stre_PowerID="";
		$Stu_Stre_PowerName="";
		$Status="";
	}
?>
		
<div class="contentpanel">
      <form id="basicForm" method="post"  enctype="multipart/form-data" class="form-horizontal form-bordered"  onsubmit="return height();">
      <input type="hidden" name="Stu_Stre_PowerID" value="<?php echo $Stu_Stre_PowerID; ?>" />
     	        
          <div class="panel panel-default">      	
                <div class="panel-heading">          
                  <h4 class="panel-title">Add Strength Power Details</h4>          
                </div>
            
                <div class="panel-body panel-body-nopadding"> 
                	
                    
                    <fieldset style="border:none;">
                          
                   		  <?php 
                           if($Stu_Stre_PowerID!=0 && $Stu_Stre_PowerID!=NULL){ ?>
						  	
                              <div class="form-group" id="Laliya_<?php echo $Stu_Stre_PowerID; ?>">
                                <div class="form-group">
                                  <label class="col-sm-3 control-label">Strength Name</label>
                                   <div class="col-sm-6">
                                  <input type="text" class="form-control" id="Stu_Stre_PowerName"  name="Stu_Stre_PowerName" required="required" value="<?php echo $Stu_Stre_PowerName; ?>"/>
                                  </div>
                                </div>
                            <div>
                               <!-- <input type="button" class="btn btn-danger" id="Remove" value="Remove" onclick="Remove_Details(<?php echo $Stu_Stre_PowerID; ?>)" >-->
						   </div>
                           </div>
                            <?php  } else { ?>
                           
                          
                            <div class="" id="Laliyagiri" >
                               <div class="form-group">
                              <label class="col-sm-3 control-label">Strength Name</label>
                              <div class="col-sm-6">
                                <input type="text" class="form-control" id="Stu_Stre_PowerName"  name="Stu_Stre_PowerName[]" required="required"/>
                              </div>
                            </div>   
                                <div class="align-right">
                                <input type="button" class="btn btn-danger" id="Remove" value="Remove" onclick="Remove_data(this.id)"  style="display:none; float:right; margin:-54px 88px 0 0;" >
							</div>
                                
                            
                            </div>
                            <div id="MyIds"></div> 	
                           		<!--  <div id="MyIds"></div> -->
                          	
                            <div class="cl"></div>
                            <?php } ?>
                </fieldset>
                    <?php /*?><div class="form-group">
                      <label class="col-sm-3 control-label">Status</label>
                      <div class="col-sm-6">
                        <select class="form-control mb15" id="Status" name="Status">
                          <option value="1"  selected="selected" >Active</option>                          
                          <option value="0"  selected="selected" >Inactive</option>                                                
                        </select>
                      </div>
                    </div><?php */?>
                    
                </div>
            
                <div class="panel-footer">
                    <div class="row">
                      <div class="col-sm-9 col-sm-offset-3">
                      	<button type="submit" name="Savebutton" value="Save" id="Save_details" class="btn btn-primary">Save</button>
                        <?php if($Stu_Stre_PowerID==0){ ?>
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

function height()
{
	 $('#Save_details').text('Loading....');
	 $.ajax({
				url:'<?php echo base_url();?>admin/student_athlete_four/update_powerclean',
				type:'POST',
				data:$('#basicForm').serialize(),
				success:function(result){
				  $.fancybox.close();
				  $('#PowerClean_List').html("");
				  $('#PowerClean_List').html(result);
				}

            });
			return false;
}

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