		
        <div id="evalution-player-card" class="zoom-anim-dialog card-popup">
    	<form name="evaulation" action="<?php echo base_url('dashboard/insert_Evaluations'); ?>" method="post">

        <div class="card-headin card-show clearfix">
        	
            <div class="main-head">
            	<h3>Evaluations</h3>
               <input type="radio" id="r1" name="r1" value="1" /> Academic
               <input type="radio" id="r1" name="r1" value="2" />Athletic
   
            </div>
            <div class="main-eval clearfix">
                <div class="head-left">
                    <div class="head-row">
                        <div class="ev-frm">
                            <h6>Name :</h6>
                            <input type="text" name="ED_Name" />
                        </div>
                        <div class="ev-frm">
                            <h6>High School :</h6>
                            <input type="text" name="School" />
                        </div>
                        </div>
                </div>
                <div class="head-left">
                    <div class="head-row">
                          <div class="ev-frm">
                            <h6>Position :</h6>
                            <input type="text" name="Position" />
                        </div>
                        <div class="ev-frm">
                            <h6>Email :</h6>
                            <input type="text" name="Email" />
                     </div>
                        </div>
                </div>            
                <div class="head-right">
                    <div class="head-row">
                       <div class="ev-frm">
                            <h6>Phone No :</h6>
                            <input type="text" name="Phone" />
                     </div>
                    </div> 
                </div>
            </div> 
            
             <div class="card-content clearfix">
        	  
                        
           <div class="Academic" id="Academic" style="display:none;"> 
            <div class="center-content">
               <div class="card-details">
                	<h4 align="center">Academic Evaluations</h4>
                   
          
           <?php for($i=0;$i<count($Academic_info);$i++){  ?>
           <div class="eval-qua"><?php echo $i+1; ?><?php echo $Academic_info[$i]['E_Question']; ?></div>
            <ul class="card-listing">
          <li type="a"> <input type="radio" name="<?php echo $Academic_info[$i]['E_ID']; ?>" value="a"/><?php echo $Academic_info[$i]['E_Option1']; ?></li>
           <li type="a"> <input type="radio" name="<?php echo $Academic_info[$i]['E_ID']; ?>" value="b"/><?php echo $Academic_info[$i]['E_Option2']; ?></li>
             <li type="a"><input type="radio" name="<?php echo $Academic_info[$i]['E_ID']; ?>" value="c"/><?php echo $Academic_info[$i]['E_Option3']; ?></li>
             <li type="a"><input type="radio" name="<?php echo $Academic_info[$i]['E_ID']; ?>" value="d"/> <?php echo $Academic_info[$i]['E_Option4']; ?></li>
              <li type="a"><input type="radio" name="<?php echo $Academic_info[$i]['E_ID']; ?>" value="e"/> <?php echo $Academic_info[$i]['E_Option5']; ?></li>
           </ul>
           
           <?php } ?>
           </div>
           </div>
           </div>
           <div class="Athletic" id="Athletic" style="display:none;"> 
            <div class="center-content">
               <div class="card-details">
                	<h4 align="center">Athletic Evaluations</h4>
          
           <?php for($j=0;$j<count($Athletic_info);$j++){  ?>
           <div class="eval-qua"><?php echo $j+1; ?><?php echo $Athletic_info[$j]['E_Question']; ?></div>	
           <ul class="card-listing">
          <li type="a"> <input type="radio" name="<?php echo $Athletic_info[$j]['E_ID']; ?>" value="a"/><?php echo $Athletic_info[$j]['E_Option1']; ?></li>
           <li type="a"><input type="radio" name="<?php echo $Athletic_info[$j]['E_ID']; ?>" value="b"/><?php echo $Athletic_info[$j]['E_Option2']; ?></li>
             <li type="a"><input type="radio" name="<?php echo $Athletic_info[$j]['E_ID']; ?>" value="c"/><?php echo $Athletic_info[$j]['E_Option3']; ?></li>
             <li type="a"><input type="radio" name="<?php echo $Athletic_info[$j]['E_ID']; ?>" value="d"/> <?php echo $Athletic_info[$j]['E_Option4']; ?></li>
              <li type="a"><input type="radio" name="<?php echo $Athletic_info[$j]['E_ID']; ?>" value="e"/> <?php echo $Athletic_info[$j]['E_Option5']; ?></li>
           </ul>
           
           <?php } ?>
           </div>
           </div>
           </div>
           
         </div>
         </div> 
         <input type="submit" value="Submit" class="btn-primary" /> 
     	</form> 
      </div>
   
<script>
$("input:radio[name=r1]").click(function() {
    var value = $(this).val();
	if(value == '1')
	{
	$('#Athletic').hide();
	$('#Academic').show();
	}
	if(value == '2')
	{
	$('#Academic').hide();
	$('#Athletic').show();
	
	}
	
});
</script>
