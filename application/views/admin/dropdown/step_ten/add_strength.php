<?php if($Stu_StrengthID!=0 && $Stu_StrengthID!=NULL ){
		$getStu_StrengthName=get_row_data('stu_ten_strength','Stu_StrengthID',$Stu_StrengthID); 
		$Stu_StrengthID=$getStu_StrengthName['Stu_StrengthID'];
		$Stu_StrengthName=$getStu_StrengthName['Stu_StrengthNameName'];
		$Status=$getStu_StrengthName['Status'];
	}else{
		$Stu_StrengthID="";
		$Stu_StrengthName="";
		$Status="";
	}
?>
		
<div class="contentpanel">
      <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return education();">
      <input type="hidden" name="Stu_StrengthID" value="<?php echo $Stu_StrengthID; ?>" />
      
          <div class="panel panel-default">      	
                <div class="panel-heading">          
                  <h4 class="panel-title">Add Strength Details</h4>          
                </div>
            
                <div class="panel-body panel-body-nopadding"> 
                	<fieldset style="border:none;">
                         <?php 
                           if($Stu_StrengthID!=0 && $Stu_StrengthID!=NULL){ ?>
						  	  <div class="form-group" id="Laliya_<?php echo $Stu_StrengthID; ?>">
                                <div class="form-group">
                                  <label class="col-sm-3 control-label">Strength</label>
                                   <div class="col-sm-6">
                                  <input type="text" class="form-control" id="Stu_StrengthName"  name="Stu_StrengthName" required="required" value="<?php echo $Stu_StrengthName; ?>"/>
                                  </div>
                                </div>
                            <div>
                           </div>
                           </div>
                            <?php  } else { ?>
                           
                          
                            <div class="" id="Laliyagiri" >
                               <div class="form-group">
                              <label class="col-sm-3 control-label">Strength</label>
                              <div class="col-sm-6">
                                <input type="text" class="form-control" id="Stu_StrengthName"  name="Stu_StrengthName[]" required="required"/>
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
                        <?php if($Stu_StrengthID==0){ ?>
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
				url:'<?php echo base_url();?>admin/student_athlete_ten/update_strength',
				type:'POST',
				data:$('#basicForm').serialize(),
				success:function(result){
		
				  $.fancybox.close();
				  $('#Strength_List').html("");
				  $('#Strength_List').html(result);
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