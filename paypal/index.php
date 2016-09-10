<form name="stu_step1" method="post" action="recurring.php" class="form-horizontal form-bordered" enctype="multipart/form-data">
                <div class="reg-frm">
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="text" name="firstname" id="firstname" placeholder="First name" autocomplete="off" >
                    	</div>
                        
                        <div class="inner-frm fl">
                        	<input type="text" name="lastname" id="lastname" placeholder="Last Name" autocomplete="off" >
                    	</div>
                        
                        <div class="inner-frm fl">
                        	<input type="text" name="address" id="address" placeholder="Address" autocomplete="off" >
                    	</div>
                        
                         <div class="inner-frm fl">
                        	<input type="text" name="city" id="city" placeholder="City" autocomplete="off" >
                    	</div>
                        
                         <div class="inner-frm fl">
                        	<input type="text" name="state" id="state" placeholder="State" autocomplete="off" >
                    	</div>
                        
                         <div class="inner-frm fl">
                        	<input type="text" name="zip" id="zip" placeholder="ZipCode" autocomplete="off" >
                    	</div>
                        
                        
                         <div class="inner-frm fl">
                        	<input type="text" name="country" id="country" placeholder="Country" autocomplete="off" >
                    	</div>
                        
                         <div class="inner-frm fl">
                        	<input type="text" name="phone" id="phone" placeholder="Phone" autocomplete="off" >
                    	</div>
                        
                         <div class="inner-frm fl">
                        	<input type="text" name="email" id="email" placeholder="Email" autocomplete="off" >
                    	</div>
                        
                       
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
                                    <option value="<?php echo substr($i, -2); ?>"><?php echo $i; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="password" name="CuvNos" id="CuvNos" placeholder="CCV" autocomplete="off" >
                    	    
                        </div>
                       <!-- <div class="inner-frm fr">
                        	<select class="exp-mnth fr" name="PaymentType" id="PaymentType">
                                <option value="0">Select Payment Type</option>
                                <option value="1">Monthly Membership - $9.99 </option>
                                <option value="2">Yearly Membership - $99.00 </option>
                                <option value="3">Lifetime Membership - $199.00</option>
                               
                            </select>
                        </div>-->
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="submit" value="Continue">
                         </div>
                        
                    </div>
                </div>
                </form>