<section class="content">
<div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        	<div class="register stud-athlete">
            	<div class="reg-title">
                    <h2>Payment Details (processed via PayPal)</h2>
                   
                </div>
                     <?php if($this->session->flashdata('errormessage')){?> 
                    <div class="errormessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('errormessage');?>
                    </div>  
                <?php }?>
                   
                   <form name="stu_step1" method="post" action="<?php echo base_url('student_athlete/insert_step8'); ?>" onsubmit="return check_stu_validation();" class="form-horizontal form-bordered" enctype="multipart/form-data">
                <div class="reg-frm">
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="text" name="CardNumbers" id="CardNumbers" placeholder="Card Number" autocomplete="off" >
                    	</div>
                         <div class="inner-frm fr">
                         	<select class="exp-mnth fl" name="CardNames" id="CardNames">
                                <option value="0" selected="selected">Select Card</option>
                                <option value="VISA">VISA</option>
                                <option value="MasterCard">Master Card</option>
                                <option value="Maestro">Maestro</option>
                                <option value="American Express">  American Express</option>
                         </select>
                    	 </div>	
                    </div>
                    
                    
                    
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<select class="exp-mnth fl" name="ExpMonths" id="Months">
                                <option value="0">Select Month</option>
                                <?php for($i=1;$i<=12;$i++){ ?>
                                 <option value="<?php if ($i < 10) { echo $value = str_pad($i, 2, "0", STR_PAD_LEFT); } else { echo $i; } ?>"><?php if ($i < 10) { echo $value = str_pad($i, 2, "0", STR_PAD_LEFT); } else { echo $i; } ?></option>
                                <?php } ?>
                                
                            </select>
                         </div>
                        <div class="inner-frm fr">
                        	<select class="exp-mnth fr" name="ExpYears" id="Years">
                                <option value="0">Select Year</option>
                                <?php for($i=2015;$i<=2028;$i++){ ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="password" name="CuvNos" id="CuvNos" placeholder="CCV" autocomplete="off" >
                    	    
                        </div>
                        <div class="inner-frm fr">
                        	<select class="exp-mnth fr" name="PaymentType" id="PaymentType">
                                <option value="0">Select Payment Type</option>
                                <option value="1">Monthly Membership - $9.99 </option>
                                <option value="2">Yearly Membership - $99.99 </option>
                                <option value="3">Lifetime Membership - $199.99</option>
                               
                            </select>
                        </div>
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="submit" value="Continue">
                         </div>
                        
                    </div>
                </div>
                </form>
        	</div>
            </div>
        </div>
    </section>
    <script language="javascript">
  
  function check_stu_validation()
  {
	 var flag = true;
		
		if($('#CardNumbers').val()==''){
			$('#CardNumbers').css('border','1px solid red');
			flag = false;
		} else {
			$('#CardNumbers').css('border','1px solid #a4a4a4');
		}
		
		if($('#CardNames').val()==0){
			$('#CardNames').css('border','1px solid red');
			flag = false;
		} else {
			$('#CardNames').css('border','1px solid #a4a4a4');
		}
		
		if($('#Months').val()==0){
			$('#Months').css('border','1px solid red');
			flag = false;
		} else {
			$('#Months').css('border','1px solid #a4a4a4');
		}
		
		if($('#PaymentType').val()==0){
			$('#PaymentType').css('border','1px solid red');
			flag = false;
		} else {
			$('#PaymentType').css('border','1px solid #a4a4a4');
		}
		
		
		if($('#Years').val()==0){
			$('#Years').css('border','1px solid red');
			flag = false;
		} else {
			$('#Years').css('border','1px solid #a4a4a4');
		}
		
		
		
		if($('#CuvNos').val()==''){
			$('#CuvNos').css('border','1px solid red');
			flag = false;
		} else {
			$('#CuvNos').css('border','1px solid #a4a4a4');
		}
		
	
  
 		if(flag == false)
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



function check_email(UserEmail)
{
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(UserEmail.match(filter))
	{
		$.ajax({
			type:'post',
			url:'<?php echo base_url(); ?>student_athlete/check_email',
			data:{UserEmail:UserEmail},
			success:function(resp){
				if(resp==1){
					$('#unnsuccessemail').hide();
					$('#Emailvalid').show();
					$('#UserEmail').css('border','1px solid red');
					$('#Email_val').val(resp);	
					
				} else {
					$('#unnsuccessemail').hide();
					$('#Emailvalid').hide();
					$('#Email').css('border','1px solid #a4a4a4');
					$('#Email_val').val(resp);	
				}
			}
		});
	}
}

  
  
 </script>    