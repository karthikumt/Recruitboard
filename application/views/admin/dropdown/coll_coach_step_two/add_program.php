<?php if($Coll_ProgramID!=0 && $Coll_ProgramID!=NULL){
		$getColl_Program=get_row_data('coll_cotch_program','Coll_ProgramID',$Coll_ProgramID); 
		$Coll_ProgramID=$getColl_Program['Coll_ProgramID'];
		$Coll_Program=$getColl_Program['Coll_ProgramName'];
		$Status=$getColl_Program['Status'];
	}else{
		$Coll_ProgramID="";
		$Coll_Program="";
		$Status="";
	}
?>
		
<div class="contentpanel">
      <form id="basicForm_Coll_Program" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return Coll_Programs();">
      <input type="hidden" name="Coll_ProgramID" value="<?php echo $Coll_ProgramID; ?>" />
      
          <div class="panel panel-default">      	
                <div class="panel-heading">          
                  <h4 class="panel-title">Add Program Details</h4>          
                </div>
            
                <div class="panel-body panel-body-nopadding"> 
                	<fieldset style="border:none;">
                         <?php 
                           if($Coll_ProgramID!=0 && $Coll_ProgramID!=NULL){ ?>
						  	  <div class="form-group" id="Laliya_<?php echo $Coll_ProgramID; ?>">
                                <div class="form-group">
                                  <label class="col-sm-3 control-label">Program</label>
                                   <div class="col-sm-6">
                                  <input type="text" class="form-control" id="Coll_Program"  name="Coll_Program" required="required" value="<?php echo $Coll_Program; ?>"/>
                                  </div>
                                </div>
                            <div>
                           </div>
                           </div>
                            <?php  } else { ?>
                           
                          
                            <div class="" id="Laliyagiri" >
                               <div class="form-group">
                              <label class="col-sm-3 control-label">program</label>
                              <div class="col-sm-6">
                                <input type="text" class="form-control" id="Coll_Program"  name="Coll_Program[]" required="required"/>
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
                        <?php if($Coll_ProgramID==0){ ?>
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
	
	
  jQuery("#basicForm_Coll_Program").validate({
    highlight: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    success: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-error');
    }
  });
});


function Coll_Programs()
{
	 $('#Save_details').text('Loading....');
	 $.ajax({
				url:'<?php echo base_url();?>admin/colleage_cotch_two/update_Coll_Program',
				type:'POST',
				data:$('#basicForm_Coll_Program').serialize(),
				success:function(Coll_Program_result){
		
				  $.fancybox.close();
				  $('#Coll_Program_List').html("");
				  $('#Coll_Program_List').html(Coll_Program_result);
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