<?php if($Secondary_PitchID!=0 && $Secondary_PitchID!=NULL ){
		$getSecondary_Pitch=get_row_data('stu_pitching_secondary_pitch','Secondary_PitchID',$Secondary_PitchID); 
		$Secondary_PitchID=$getSecondary_Pitch['Secondary_PitchID'];
		$Secondary_Pitch=$getSecondary_Pitch['Secondary_PitchName'];
		$Status=$getSecondary_Pitch['Status'];
	}else{
		$Secondary_PitchID="";
		$Secondary_Pitch="";
		$Status="";
	}
?>
		
<div class="contentpanel">
      <form id="basicForm_Secondary_Pitch" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return Secondary_Pitchs();">
      <input type="hidden" name="Secondary_PitchID" value="<?php echo $Secondary_PitchID; ?>" />
      
          <div class="panel panel-default">      	
                <div class="panel-heading">          
                  <h4 class="panel-title">Add Pitching Secondary_Pitch Details</h4>          
                </div>
            
                <div class="panel-body panel-body-nopadding"> 
                	<fieldset style="border:none;">
                         <?php 
                           if($Secondary_PitchID!=0 && $Secondary_PitchID!=NULL){ ?>
						  	  <div class="form-group" id="Laliya_<?php echo $Secondary_PitchID; ?>">
                                <div class="form-group">
                                  <label class="col-sm-3 control-label">Secondary_Pitch</label>
                                   <div class="col-sm-6">
                                  <input type="text" class="form-control" id="Secondary_Pitch"  name="Secondary_Pitch" required="required" value="<?php echo $Secondary_Pitch; ?>"/>
                                  </div>
                                </div>
                            <div>
                           </div>
                           </div>
                            <?php  } else { ?>
                           
                          
                            <div class="" id="Laliyagiri" >
                               <div class="form-group">
                              <label class="col-sm-3 control-label">Secondary_Pitch</label>
                              <div class="col-sm-6">
                                <input type="text" class="form-control" id="Secondary_Pitch"  name="Secondary_Pitch[]" required="required"/>
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
                        <?php if($Secondary_PitchID==0){ ?>
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
	
	
  jQuery("#basicForm_Secondary_Pitch").validate({
    highlight: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    success: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-error');
    }
  });
});


function Secondary_Pitchs()
{
	 $('#Save_details').text('Loading....');
	 $.ajax({
				url:'<?php echo base_url();?>admin/student_athlete_six/update_Secondary_Pitch',
				type:'POST',
				data:$('#basicForm_Secondary_Pitch').serialize(),
				success:function(Secondary_Pitch_result){
		
				  $.fancybox.close();
				  $('#Secondary_Pitch_List').html("");
				  $('#Secondary_Pitch_List').html(Secondary_Pitch_result);
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