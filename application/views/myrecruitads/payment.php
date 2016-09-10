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
                   
                   <form name="stu_step1" method="post" action="<?php echo base_url('myrecruitads/upgrade_payment'); ?>" onsubmit="return check_stu_validation();" class="form-horizontal form-bordered" enctype="multipart/form-data">
                <div class="reg-frm">
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="text" name="CardNumbers" id="CardNumbers" placeholder="Card Number" autocomplete="off" >
                    	</div>
                         <div class="inner-frm fr">
                         	<select class="exp-mnth fl" name="CardNames" id="CardNames">
                                <option value="0" selected="selected">Select Card</option>
                                <option value="MasterCard">Master Card</option>
                                <option value="VISA">VISA</option>
                                
                               <!--  <option value="Maestro">Maestro</option> -->
                               <option value="Discover">Discover</option>
                                <option value="American Express">  American Express</option>
                         </select>
                    	 </div>	
                    </div>
                    
                    
                    
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<select class="exp-mnth fl" name="ExpMonths" id="Months">
                                <option value="0">Expiration Month</option>
                                <?php for($i=1;$i<=12;$i++){ ?>
                                 <option value="<?php if ($i < 10) { echo $value = str_pad($i, 2, "0", STR_PAD_LEFT); } else { echo $i; } ?>"><?php if ($i < 10) { echo $value = str_pad($i, 2, "0", STR_PAD_LEFT); } else { echo $i; } ?></option>
                                <?php } ?>
                                
                            </select>
                         </div>
                        <div class="inner-frm fr">
                        	<select class="exp-mnth fr" name="ExpYears" id="Years">
                                <option value="0">Expiration Year</option>
                                <?php for($i=15;$i<=28;$i++){ ?>
                                    <option value="<?php echo $i; ?>">20<?php echo $i; ?></option>
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
                                <option value="0">Select Subscription Type</option>
                                <option value="1">Monthly Membership - $9.99 </option>
                                <option value="2">Yearly Membership - $99.99 </option>
                                <option value="3">Lifetime Membership - $199.99</option>
                               
                            </select>
                        </div>
                    </div>

                    <!--user details-->

                        <div class="frm clearfix">
	                    	<div class="inner-frm fl">
	                        	<input type="text" name="FirstName" id="FirstName" placeholder="First Name on Card" autocomplete="off" >
	                        </div> 

	                        <div class="inner-frm fr">
	                        	<input type="text" name="LastName" id="LastName" placeholder="Last Name on Card" autocomplete="off" >
	                        </div>
                       </div>



                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="text" name="StrAdd" id="StrAdd" placeholder="Cardholder's Street Address" autocomplete="off" >
                        </div> 

                        <div class="inner-frm fr">
                        	<input type="text" name="City" id="City" placeholder="Cardholder's City" autocomplete="off" >
                        </div>
                       </div>
                       <div class="frm clearfix">
                         <div class="inner-frm fl">
                        	<input type="text" name="Zip" id="Zip" placeholder="Cardholder's Zip" autocomplete="off" >
                        </div>

                         <div class="inner-frm fr">
                         	<select name="Country" id="Country" placeholder="Country" autocomplete="off">
                         		<option value="0">Select Your Counrty</option>
                         		<option value="AL">ALBANIA	</option>
<option value="DZ">ALGERIA	</option>
<option value="AD">ANDORRA	</option>
<option value="AO">ANGOLA	</option>
<option value="AI">ANGUILLA	</option>
<option value="AG">ANTIGUA AND BARBUDA	</option>
<option value="AR">ARGENTINA	</option>
<option value="AM">ARMENIA	</option>
<option value="AW">ARUBA	</option>
<option value="AU">AUSTRALIA	</option>
<option value="AT">AUSTRIA	</option>
<option value="AZ">AZERBAIJAN	</option>
<option value="BS">BAHAMAS	</option>
<option value="BH">BAHRAIN	</option>
<option value="BB">BARBADOS	</option>
<option value="BE">BELGIUM	</option>
<option value="BZ">BELIZE	</option>
<option value="BJ">BENIN	</option>
<option value="BM">BERMUDA	</option>
<option value="BT">BHUTAN	</option>
<option value="BO">BOLIVIA	</option>
<option value="BA">BOSNIA-HERZEGOVINA	</option>
<option value="BW">BOTSWANA	</option>
<option value="BR">BRAZIL	</option>
<option value="BN">BRUNEI DARUSSALAM	</option>
<option value="BG">BULGARIA	</option>
<option value="BF">BURKINA FASO	</option>
<option value="BI">BURUNDI	</option>
<option value="KH">CAMBODIA	</option>
<option value="CA">CANADA	</option>
<option value="CV">CAPE VERDE	</option>
<option value="KY">CAYMAN ISLANDS	</option>
<option value="TD">CHAD	</option>
<option value="CL">CHILE	</option>
<option value="CN">CHINA	 (For domestic Chinese bank transactions only)</option>
<option value="C2"> CHINA (For CUP, bank card and cross-border transactions)</option>
<option value="CO">COLOMBIA	</option>
<option value="KM">COMOROS	</option>
<option value="CD">DEMOCRATIC REPUBLIC OF CONGO	</option>
<option value="CG">CONGO	</option>
<option value="CK">COOK ISLANDS	</option>
<option value="CR">COSTA RICA	</option>
<option value="HR">CROATIA	</option>
<option value="CY">CYPRUS	</option>
<option value="CZ">CZECH REPUBLIC	</option>
<option value="DK">DENMARK	</option>
<option value="DJ">DJIBOUTI	</option>
<option value="DM">DOMINICA	</option>
<option value="DO">DOMINICAN REPUBLIC	</option>
<option value="EC">ECUADOR	</option>
<option value="EG">EGYPT	</option>
<option value="SV">EL SALVADOR	</option>
<option value="ER">ERITERIA	</option>
<option value="EE">ESTONIA	</option>
<option value="ET">ETHIOPIA	</option>
<option value="FK">FALKLAND ISLANDS (MALVINAS)	</option>
<option value="FJ">FIJI	</option>
<option value="FI">FINLAND	</option>
<option value="FR">FRANCE	</option>
<option value="GF">FRENCH GUIANA	</option>
<option value="PF">FRENCH POLYNESIA	</option>
<option value="GA">GABON	</option>
<option value="GM">GAMBIA	</option>
<option value="GE">GEORGIA	</option>
<option value="DE">GERMANY	</option>
<option value="GI">GIBRALTAR	</option>
<option value="GR">GREECE	</option>
<option value="GL">GREENLAND	</option>
<option value="GD">GRENADA	</option>
<option value="GP">GUADELOUPE	</option>
<option value="GU">GUAM	</option>
<option value="GT">GUATEMALA	</option>
<option value="GN">GUINEA	</option>
<option value="GW">GUINEA BISSAU	</option>
<option value="GY">GUYANA	</option>
<option value="VA">HOLY SEE (VATICAN CITY STATE)	</option>
<option value="HN">HONDURAS	</option>
<option value="HK">HONG KONG	</option>
<option value="HU">HUNGARY	</option>
<option value="IS">ICELAND	</option>
<option value="IN">INDIA	</option>
<option value="ID">INDONESIA	</option>
<option value="IE">IRELAND	</option>
<option value="IL">ISRAEL	</option>
<option value="IT">ITALY	</option>
<option value="JM">JAMAICA	</option>
<option value="JP">JAPAN	</option>
<option value="JO">JORDAN	</option>
<option value="KZ">KAZAKHSTAN	</option>
<option value="KE">KENYA	</option>
<option value="KI">KIRIBATI	</option>
<option value="KR">KOREA, REPUBLIC OF	</option>
<option value="KW">KUWAIT	</option>
<option value="KG">KYRGYZSTAN	</option>
<option value="LA">LAOS	</option>
<option value="LV">LATVIA	</option>
<option value="LS">LESOTHO	</option>
<option value="LI">LIECHTENSTEIN	</option>
<option value="LT">LITHUANIA	</option>
<option value="LU">LUXEMBOURG	</option>
<option value="MG">MADAGASCAR	</option>
<option value="MW">MALAWI	</option>
<option value="MY">MALAYSIA	</option>
<option value="MV">MALDIVES	</option>
<option value="ML">MALI	</option>
<option value="MT">MALTA	</option>
<option value="MH">MARSHALL ISLANDS	</option>
<option value="MQ">MARTINIQUE	</option>
<option value="MR">MAURITANIA	</option>
<option value="MU">MAURITIUS	</option>
<option value="YT">MAYOTTE	</option>
<option value="MX">MEXICO	</option>
<option value="FM">MICRONESIA, FEDERATED STATES OF	</option>
<option value="MN">MONGOLIA	</option>
<option value="MS">MONTSERRAT	</option>
<option value="MA">MOROCCO	</option>
<option value="MZ">MOZAMBIQUE	</option>
<option value="NA">NAMIBIA	</option>
<option value="NR">NAURU	</option>
<option value="NP">NEPAL	</option>
<option value="NL">NETHERLANDS	</option>
<option value="AN">NETHERLANDS ANTILLES	</option>
<option value="NC">NEW CALEDONIA	</option>
<option value="NZ">NEW ZEALAND	</option>
<option value="NI">NICARAGUA	</option>
<option value="NE">NIGER	</option>
<option value="NU">NIUE	</option>
<option value="NF">NORFOLK ISLAND	</option>
<option value="NO">NORWAY	</option>
<option value="OM">OMAN	</option>
<option value="PW">PALAU	</option>
<option value="PA">PANAMA	</option>
<option value="PG">PAPUA NEW GUINEA	</option>
<option value="PE">PERU	</option>
<option value="PH">PHILIPPINES	</option>
<option value="PN">PITCAIRN	</option>
<option value="PL">POLAND	</option>
<option value="PT">PORTUGAL	</option>
<option value="QA">QATAR	</option>
<option value="RE">REUNION	</option>
<option value="RO">ROMANIA	</option>
<option value="RU">RUSSIAN FEDERATION	</option>
<option value="RW">RWANDA	</option>
<option value="SH">SAINT HELENA	</option>
<option value="KN">SAINT KITTS AND NEVIS	</option>
<option value="LC">SAINT LUCIA	</option>
<option value="PM">SAINT PIERRE AND MIQUELON	</option>
<option value="VC">SAINT VINCENT AND THE GRENADINES	</option>
<option value="WS">SAMOA	</option>
<option value="SM">SAN MARINO	</option>
<option value="ST">SAO TOME AND PRINCIPE	</option>
<option value="SA">SAUDI ARABIA	</option>
<option value="SN">SENEGAL	</option>
<option value="RS">SERBIA	</option>
<option value="SC">SEYCHELLES	</option>
<option value="SL">SIERRA LEONE	</option>
<option value="SG">SINGAPORE	</option>
<option value="SK">SLOVAKIA	</option>
<option value="SI">SLOVENIA	</option>
<option value="SB">SOLOMON ISLANDS	</option>
<option value="SO">SOMALIA	</option>
<option value="ZA">SOUTH AFRICA	</option>
<option value="KR">SOUTH KOREA	</option>
<option value="ES">SPAIN	</option>
<option value="LK">SRI LANKA	</option>
<option value="SR">SURINAME	</option>
<option value="SJ">SVALBARD AND JAN MAYEN	</option>
<option value="SZ">SWAZILAND	</option>
<option value="SE">SWEDEN	</option>
<option value="CH">SWITZERLAND	</option>
<option value="TW">TAIWAN, PROVINCE OF CHINA	</option>
<option value="TJ">TAJIKISTAN	</option>
<option value="TZ">TANZANIA, UNITED REPUBLIC OF	</option>
<option value="TH">THAILAND	</option>
<option value="TG">TOGO	</option>
<option value="TO">TONGA	</option>
<option value="TT">TRINIDAD AND TOBAGO	</option>
<option value="TN">TUNISIA	</option>
<option value="TR">TURKEY	</option>
<option value="TM">TURKMENISTAN	</option>
<option value="TC">TURKS AND CAICOS ISLANDS	</option>
<option value="TV">TUVALU	</option>
<option value="UG">UGANDA	</option>
<option value="UA">UKRAINE	</option>
<option value="AE">UNITED ARAB EMIRATES	</option>
<option value="GB">UNITED KINGDOM	</option>
<option value="US">UNITED STATES	</option>
<option value="UY">URUGUAY	</option>
<option value="VU">VANUATU	</option>
<option value="VE">VENEZUELA	</option>
<option value="VN">VIETNAM	</option>
<option value="VG">VIRGIN ISLANDS, BRITISH	</option>
<option value="WF">WALLIS AND FUTUNA	</option>
<option value="YE">YEMEN	</option>
<option value="ZM">ZAMBIA	</option>
                         	</select>
                        	
                        </div>



                        
                        
                    </div>


                    <!-- user detils close-->

                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="submit" value="Continue">
                         </div>
                        
                    </div>
                </div>
                </form>
                <div id="payment_notice " class="membershipAlerts">
                <i color="gray">There is a one time $9.99 processing fee</i>
                <div class="alert">
                <p id="paymentComment" class="hide">
                	An amount of <strong>$<span id="pay-amount"></span></strong> will be charged now <span id="pay-recur"  class="hide"> and <strong>$</strong><span id="pay-recur-month"  class="hide"><strong>9.99/month</strong> starting from next month</span><span id="pay-recur-year"  class="hide"><strong>99.99/year</strong> starting from next year</span></span>. 
                </p>
                </div>
                </div>
        	</div>
            </div>
        </div>
    </section>
    <script language="javascript">

	$(document).ready( function (){
		$('#PaymentType').change( function (){
			switch($(this).val()){
				case '0':
					$('#paymentComment, #pay-recur, #pay-recur-month, #pay-recur-year ').hide();
				break;
				case '1':
					$('#pay-recur-year ').hide();
					$('#pay-amount ').html('19.98 <small>(9.99+9.99)</small>');
					$('#paymentComment, #pay-recur, #pay-recur-month').show();
				break;
				case '2':
					$('#pay-recur-month ').hide();
					$('#pay-amount ').html('109.98 <small>(99.99+9.99)</small>' );
					$('#paymentComment, #pay-recur, #pay-recur-year').show();
				break;	
				case '3':
					$('#pay-recur, #pay-recur-month, #pay-recur-year ').hide(); 
					$('#pay-amount ').html('209.98 <small>(199.99+9.99)</small>');
					$('#paymentComment').show();
				break;								
			}
		});
	}); 
  
  function check_stu_validation()
  {
	 var flag = true;
		
		if($('#CardNumbers').val()==''){
			$('#CardNumbers').css('border','1px solid red');
			flag = false;
		} else {
			$('#CardNumbers').css('border','1px solid #a4a4a4');
		}




		if($('#FirstName').val()==''){
			$('#FirstName').css('border','1px solid red');
			flag = false;
		} else {
			$('#FirstName').css('border','1px solid #a4a4a4');
		}

		if($('#LastName').val()==''){
			$('#LastName').css('border','1px solid red');
			flag = false;
		} else {
			$('#LastName').css('border','1px solid #a4a4a4');
		}





		if($('#StrAdd').val()==''){
			$('#StrAdd').css('border','1px solid red');
			flag = false;
		} else {
			$('#StrAdd').css('border','1px solid #a4a4a4');
		}
if($('#Zip').val()==''){
			$('#Zip').css('border','1px solid red');
			flag = false;
		} else {
			$('#Zip').css('border','1px solid #a4a4a4');
		}

		if($('#Country').val()==0){
			$('#Country').css('border','1px solid red');
			flag = false;
		} else {
			$('#Country').css('border','1px solid #a4a4a4');
		}

		if($('#City').val()==''){
			$('#City').css('border','1px solid red');
			flag = false;
		} else {
			$('#City').css('border','1px solid #a4a4a4');
		}

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