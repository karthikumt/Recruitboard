<section class="content">
 <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="register step9">
                	<div class="reg-title">
                        <h3>To help you become a better student athlete, please tell us the areas in which you need improvement.</h3>
               		</div>
                     <?php if($this->session->flashdata('errormessage')){?> 
                    <div class="errormessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('errormessage');?>
                    </div>  
                <?php }?>
                  <?php if($this->session->flashdata('successmessage')){?> 
                    <div class="successmessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('successmessage');?>
                    </div>  
                <?php }?>
                     <form name="stu_step3" method="post" action="<?php echo base_url('student_athlete/insert_step10'); ?>" onsubmit="return check_stu_validation();" >
                    <div class="reg-frm step10">
                	    <div class="qualification">
                            <h6>What areas of your game do you need developed?</h6>
                            <div class="frm clearfix">
                                <div class="qul-textbox fl"> 
                                    <select name="Stu_DeveloperID" id="Stu_DevlopID">
                                    	<option value="0">
                                       		Select Area of Developement
                                        </option>
                                         <?php $Strength_details=get_table_details('stu_ten_strength','Stu_StrengthID'); ?>
                            	 <?php for($i=0;$i<count($Strength_details);$i++){ ?>
                            	<option value="<?php echo $Strength_details[$i]['Stu_StrengthID']; ?>">
                                	<?php echo $Strength_details[$i]['Stu_StrengthName']; ?>
                                </option>
                                <?php } ?>
                                    </select>
                                </div>
                              <!--  <div class="btn-submit fr">
                                    <input type="submit" value="submit">
                                </div>-->
                            </div>
                        </div>
                        <div class="qualification">
                        	<h6>What academic areas do you need tutored?</h6>
                            <div class="frm clearfix">
                                <div class="qul-textbox fl"> 
                                     <select name="Stu_NeedID" id="Stu_NeedID">
                                    	<option value="0">
                                        	Select Acedmic Area
                                        </option>
                                         <?php $Condition_details=get_table_details('stu_ten_condition','Stu_ConditionID'); ?>
                            	 <?php for($i=0;$i<count($Condition_details);$i++){ ?>
                            	<option value="<?php echo $Condition_details[$i]['Stu_ConditionID']; ?>">
                                	<?php echo $Condition_details[$i]['Stu_ConditionName']; ?>
                                </option>
                                <?php } ?>
                                    </select>
                                </div>
                               <!-- <div class="btn-submit fr">
                                    <input type="submit" value="submit">
                                </div>-->
                            </div>
                        </div>
                        <div class="frm clearfix">
                            <div class="inner-frm fl">
                                <input type="submit" value="Continue" >
                             </div>
                        </div>
                </div>
                    </form>
        		</div>
            </div>
        </div>
    </section>
    
     <script>
     function check_stu_validation()
	  {
		 var sucess = true;
		
					
			
			 if($('#Stu_DevlopID').val()=='0')
			 {
				$('#Stu_DevlopID').css('border','1px solid red');
				sucess = false;
			 } 
			 else {
				$('#Stu_DevlopID').css('border','1px solid #a4a4a4');
				}
			
		
			if(sucess == false)
			 {
				return false;
			 }
			 else
			 {	
			 	$('#ProcessLoaderID').show();
				return true;
			 }	
	return false;	
	
	  
	  }

</script>