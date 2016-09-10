<?php if($PositionID!=0 && $PositionID!=NULL ){
		$getPosition=get_row_data('stu_athlete_position','PositionID',$PositionID); 
		$PositionID=$getPosition['PositionID'];
		$SportID=$getPosition['SportID'];
		$Position=$getPosition['Position'];
		$Status=$getPosition['Status'];
	}else{
		$PositionID="";
		$SportID="";
		$Position="";
		$Status="";
	}
?>
		
<div class="contentpanel">
      <form id="basicForm" method="post"  enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return position();">
      <input type="hidden" name="PositionID" value="<?php echo $PositionID; ?>" />
      <input type="hidden" name="type" value="action" />
      <input type="hidden" name="a" value="AddEvent" />
		        
          <div class="panel panel-default">      	
                <div class="panel-heading">          
                  <h4 class="panel-title">Add Position Details</h4>          
                </div>
            
                <div class="panel-body panel-body-nopadding"> 
                	
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Colleage Name</label>
                      <div class="col-sm-6">
                        <?php $sport=get_table_details('stu_athlete_sport','SportID');?>
                        
                        <select class="form-control mb15" id="SportID" name="SportID">
                          <option value="0">Select Sport</option>                          	
						  <?php foreach ($sport as $SportName) { ?>
                          		<option value="<?php echo $SportName['SportID']; ?>" <?php if($SportID==$SportName['SportID']){ ?> selected="selected" <?php } ?>>
                                		<?php echo $SportName['SportName']; ?>
                                </option>  
                          <?php } ?>                      
                        </select>
                      </div>
                    </div>
                    
                    <fieldset style="border:none;">
                          
                   		  <?php 
                           if($PositionID!=0 && $PositionID!=NULL){ ?>
						  	
                              <div class="form-group" id="Laliya_<?php echo $PositionID; ?>">
                                <div class="form-group">
                                  <label class="col-sm-3 control-label">Position</label>
                                   <div class="col-sm-6">
                                  <input type="text" class="form-control" id="Position"  name="Position"  value="<?php echo $Position; ?>"/>
                                  </div>
                                </div>
                            <div>
                               <!-- <input type="button" class="btn btn-danger" id="Remove" value="Remove" onclick="Remove_Details(<?php echo $PositionID; ?>)" >-->
						   </div>
                           </div>
                            <?php  } else { ?>
                           
                          
                            <div class="" id="Laliyagiri" >
                               <div class="form-group">
                              <label class="col-sm-3 control-label">Position</label>
                              <div class="col-sm-6">
                                <input type="text" class="form-control" id="Position"  name="Position[]" />
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
                        <?php if($PositionID==0){ ?>
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
function position()
{
	 $('#Save_details').text('Loading....');
	 $.ajax({
				url:'<?php echo base_url();?>admin/student_athlete/update_position',
				type:'POST',
				data:$('#basicForm').serialize(),
				success:function(result){
				  $.fancybox.close();
				  $('#Position_List').html("");
				  $('#Position_List').html(result);
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