<?php if($Eligibility_Major_ID!=0 && $Eligibility_Major_ID!=NULL){
		$getEducation=get_row_data('stu_eligibility_major','Eligibility_Major_ID',$Eligibility_Major_ID); 
		$Eligibility_Major_ID=$getEducation['Eligibility_Major_ID'];
		$Eligibility_Intended_ID=$getEducation['Eligibility_Intended_ID'];
		$Eligibility_Major=$getEducation['Eligibility_Major_Name'];
		$Status=$getEducation['Status'];
	}else{
		$Eligibility_Major_ID="";
		$Eligibility_Intended_ID="";
		$Eligibility_Major="";
		$Status="";
	}
?>
		
<div class="contentpanel">
      <form id="basicForm_Major" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return Eligibility_Majors();">
      <input type="hidden" name="Eligibility_Major_ID" value="<?php echo $Eligibility_Major_ID; ?>" />
      
          <div class="panel panel-default">      	
                <div class="panel-heading">          
                  <h4 class="panel-title">Add Education Major Score Details</h4>          
                </div>
            
                <div class="panel-body panel-body-nopadding"> 
                	<div class="form-group">
                      <label class="col-sm-3 control-label">Colleage of Intent</label>
                      <div class="col-sm-6">
                       <?php $sport=get_table_details('stu_eligibility_intended','Eligibility_Intended_ID');?>
                        
                        <select class="form-control mb15" id="Eligibility_Intended_ID" name="Eligibility_Intended_ID">
                          <option value="0">Select Colleage </option>                          	
						  <?php foreach ($sport as $SportName) { ?>
                          		<option value="<?php echo $SportName['Eligibility_Intended_ID']; ?>" <?php if($Eligibility_Intended_ID==$SportName['Eligibility_Intended_ID']){ ?> selected="selected" <?php } ?>>
                                		<?php echo $SportName['Eligibility_Intended_Name']; ?>
                                </option>  
                          <?php } ?>                      
                        </select>
                      </div>
                    </div>
                    
                    <fieldset style="border:none;">
                         <?php 
                           if($Eligibility_Major_ID!=0 && $Eligibility_Major_ID!=NULL){ ?>
						  	  <div class="form-group" id="Laliya_<?php echo $Eligibility_Major_ID; ?>">
                                <div class="form-group">
                                  <label class="col-sm-3 control-label">SCORE</label>
                                   <div class="col-sm-6">
                                  <input type="text" class="form-control" id="Eligibility_Major"  name="Eligibility_Major" required="required" value="<?php echo $Eligibility_Major; ?>"/>
                                  </div>
                                </div>
                            <div>
                           </div>
                           </div>
                            <?php  } else { ?>
                           
                          
                            <div class="" id="Laliyagiri" >
                               <div class="form-group">
                              <label class="col-sm-3 control-label">SCORE</label>
                              <div class="col-sm-6">
                                <input type="text" class="form-control" id="Eligibility_Major"  name="Eligibility_Major[]" required="required"/>
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
                      	<button type="submit" name="Savebutton" id="Save_Major_details" value="Save" class="btn btn-primary">Save</button>
                        <?php if($Eligibility_Major_ID==0){ ?>
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
	
	
  jQuery("#basicForm_Major").validate({
    highlight: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    success: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-error');
    }
  });
});


function Eligibility_Majors()
{
	 $('#Save_Major_details').text('Loading....');
	 $.ajax({
				url:'<?php echo base_url();?>admin/student_athlete_second/update_Eligibility_Major',
				type:'POST',
				data:$('#basicForm_Major').serialize(),
				success:function(Major_result){
				  $.fancybox.close();
				  $('#Eligibility_Major_List').html("");
				  $('#Eligibility_Major_List').html(Major_result);
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