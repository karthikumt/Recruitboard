<div class="pageheader">
  <h2><i class="fa fa-pencil"></i> Add or Edit Drop-Down List </h2>
  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>admin/">MyRecruitBoard</a></li>
      <li class="active">Add or Edit Drop-Down List</li>
    </ol>
  </div>
</div>

  
  
  <div class="contentpanel">
     
  <div class="col-md-12">
          <div class="panel panel-default">
            
            <div class="panel-body panel-body-nopadding">
              
              <!-- BASIC WIZARD -->
              <div class="basic-wizard" id="basicWizard">
                
                <ul class="nav nav-pills nav-justified">
                    <li class=""><a href="<?php echo base_url(); ?>admin/student_athlete"><span>Step 3</span></a></li>
                  <li class=""><a href="<?php echo base_url(); ?>admin/student_athlete_second"><span>Step 4</span></a></li>
                  <li class="active"><a href="<?php echo base_url(); ?>admin/student_athlete_three"><span>Step 4a</span></a></li>
                   <li class=""><a href="<?php echo base_url(); ?>admin/student_athlete_four"><span>Step 5</span></a></li>	
                <li class=""><a href="<?php echo base_url(); ?>admin/student_athlete_six"><span>Step 6</span></a></li>	
                <li class=""><a href="<?php echo base_url(); ?>admin/student_athlete_ten"><span>Step 10</span></a></li>	
                  
                </ul>
                
               
                <div class="tab-content">
               
                <?php if($this->session->flashdata('successmessage')){?>	
                      <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <?php echo $this->session->flashdata('successmessage');?>
                      </div>
                      <?php } ?>  
                      
                      <?php if($this->session->flashdata('errormessage')){?>	
                      <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?php echo $this->session->flashdata('errormessage');?>
                      </div>  
                      <?php }?>  
                  <div id="accordion" class="panel-group">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a href="#collapseOne" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                Tofel List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseOne" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addtofel">Add Tofel</button>				  
                            </div>
                            <br /><br />
                              <div class="table-responsive">
                      <table class="table mb30">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="Tofel_List">
                            <?php $Gender_details=get_table_details('stu_academic_tofel','Stu_TofelID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Tofel_<?php echo $Gender['Stu_TofelID']; ?>">
                            <td><?php echo $Gender['Stu_TofelID']; ?></td>
                            <td><?php echo $Gender['Stu_TofelName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_three/add_tofel/<?php echo $Gender['Stu_TofelID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_tofel('<?php echo $Gender['Stu_TofelID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".addtofel").click(function() {
                                jQuery.fancybox.open([
                                    {
                                        maxWidth: 800,
                                        maxHeight: 600,
                                        fitToView: false,
                                        width: '70%',
                                        height: '70%',
                                        autoSize: false,
                                        closeClick: false,
                                        openEffect: 'none',
                                        closeEffect: 'none',
                                        type: 'ajax',
                                        href: '<?php echo base_url(); ?>admin/student_athlete_three/add_tofel/',
                                    }
                                ]);
                            });
                        function remove_tofel(Stu_TofelID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_three/delete_tofel/',
                                    type:'POST',
                                    data:{Stu_TofelID:Stu_TofelID},
                                    success:function(result){
                                      $('#Tofel_'+Stu_TofelID).remove();
                                    }
            
                        });
                        return false;
                            }
                        }
                      </script>
                      </div>
                            </div>
                          </div>
                          
                        </div>
             
            			<div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a href="#collapseTwo" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                Read List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseTwo" style="height: 0px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addread">Add Read</button>				  
                            </div>
                            <br /><br />
                              <div class="table-responsive">
                      <table class="table mb30">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="Read_List">
                            <?php $Gender_details=get_table_details('stu_academic_read','Stu_ReadID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Read_<?php echo $Gender['Stu_ReadID']; ?>">
                            <td><?php echo $Gender['Stu_ReadID']; ?></td>
                            <td><?php echo $Gender['Stu_ReadName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_three/add_read/<?php echo $Gender['Stu_ReadID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_read('<?php echo $Gender['Stu_ReadID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
						 <script>
                            jQuery(".addread").click(function() {
                                    jQuery.fancybox.open([
                                        {
                                            maxWidth: 800,
                                            maxHeight: 600,
                                            fitToView: false,
                                            width: '70%',
                                            height: '70%',
                                            autoSize: false,
                                            closeClick: false,
                                            openEffect: 'none',
                                            closeEffect: 'none',
                                            type: 'ajax',
                                            href: '<?php echo base_url(); ?>admin/student_athlete_three/add_read/',
                                        }
                                    ]);
                                });
                            function remove_read(Stu_ReadID)
                            {
                                if(confirm("Are You Sure?"))
                                {
                                     $.ajax({
                                        url:'<?php echo base_url(); ?>admin/student_athlete_three/delete_read/',
                                        type:'POST',
                                        data:{Stu_ReadID:Stu_ReadID},
                                        success:function(result){
                                          $('#Read_'+Stu_ReadID).remove();
                                        }
                
                            });
                            return false;
                                }
                            }
                          </script>
                      </div>
                     </div>
                  </div>
               </div>
               
               			
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a href="#collapseThree" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                Listen List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseThree" style="height: 0px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addlisten">Add Listen</button>				  
                            </div>
                            <br /><br />
                              <div class="table-responsive">
                      <table class="table mb30">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="Listen_List">
                            <?php $Gender_details=get_table_details('stu_academic_listen','Stu_ListenID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Listen_<?php echo $Gender['Stu_ListenID']; ?>">
                            <td><?php echo $Gender['Stu_ListenID']; ?></td>
                            <td><?php echo $Gender['Stu_ListenName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_three/add_listen/<?php echo $Gender['Stu_ListenID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_listen('<?php echo $Gender['Stu_ListenID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
						 <script>
                            jQuery(".addlisten").click(function() {
                                    jQuery.fancybox.open([
                                        {
                                            maxWidth: 800,
                                            maxHeight: 600,
                                            fitToView: false,
                                            width: '70%',
                                            height: '70%',
                                            autoSize: false,
                                            closeClick: false,
                                            openEffect: 'none',
                                            closeEffect: 'none',
                                            type: 'ajax',
                                            href: '<?php echo base_url(); ?>admin/student_athlete_three/add_listen/',
                                        }
                                    ]);
                                });
                            function remove_listen(Stu_ListenID)
                            {
                                if(confirm("Are You Sure?"))
                                {
                                     $.ajax({
                                        url:'<?php echo base_url(); ?>admin/student_athlete_three/delete_listen/',
                                        type:'POST',
                                        data:{Stu_ListenID:Stu_ListenID},
                                        success:function(result){
                                          $('#Listen_'+Stu_ListenID).remove();
                                        }
                
                            });
                            return false;
                                }
                            }
                          </script>
                      </div>
                     </div>
                  </div>
               </div>
               
               			
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a href="#collapseFour" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                Speak List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseFour" style="height: 0px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addspeak">Add Speak</button>				  
                            </div>
                            <br /><br />
                              <div class="table-responsive">
                      <table class="table mb30">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="Speak_List">
                            <?php $Gender_details=get_table_details('stu_academic_speak','Stu_SpeakID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Speak_<?php echo $Gender['Stu_SpeakID']; ?>">
                            <td><?php echo $Gender['Stu_SpeakID']; ?></td>
                            <td><?php echo $Gender['Stu_SpeakName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_three/add_speak/<?php echo $Gender['Stu_SpeakID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_speak('<?php echo $Gender['Stu_SpeakID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
						 <script>
                            jQuery(".addspeak").click(function() {
                                    jQuery.fancybox.open([
                                        {
                                            maxWidth: 800,
                                            maxHeight: 600,
                                            fitToView: false,
                                            width: '70%',
                                            height: '70%',
                                            autoSize: false,
                                            closeClick: false,
                                            openEffect: 'none',
                                            closeEffect: 'none',
                                            type: 'ajax',
                                            href: '<?php echo base_url(); ?>admin/student_athlete_three/add_speak/',
                                        }
                                    ]);
                                });
                            function remove_speak(Stu_SpeakID)
                            {
                                if(confirm("Are You Sure?"))
                                {
                                     $.ajax({
                                        url:'<?php echo base_url(); ?>admin/student_athlete_three/delete_speak/',
                                        type:'POST',
                                        data:{Stu_SpeakID:Stu_SpeakID},
                                        success:function(result){
                                          $('#Speak_'+Stu_SpeakID).remove();
                                        }
                
                            });
                            return false;
                                }
                            }
                          </script>
                      </div>
                     </div>
                  </div>
               </div>
               
               			
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a href="#collapseFive" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                Write List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseFive" style="height: 0px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addwrite">Add Write</button>				  
                            </div>
                            <br /><br />
                              <div class="table-responsive">
                      <table class="table mb30">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="Write_List">
                            <?php $Gender_details=get_table_details('stu_academic_write','Stu_WriteID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Write_<?php echo $Gender['Stu_WriteID']; ?>">
                            <td><?php echo $Gender['Stu_WriteID']; ?></td>
                            <td><?php echo $Gender['Stu_WriteName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_three/add_write/<?php echo $Gender['Stu_WriteID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_write('<?php echo $Gender['Stu_WriteID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
						 <script>
                            jQuery(".addwrite").click(function() {
                                    jQuery.fancybox.open([
                                        {
                                            maxWidth: 800,
                                            maxHeight: 600,
                                            fitToView: false,
                                            width: '70%',
                                            height: '70%',
                                            autoSize: false,
                                            closeClick: false,
                                            openEffect: 'none',
                                            closeEffect: 'none',
                                            type: 'ajax',
                                            href: '<?php echo base_url(); ?>admin/student_athlete_three/add_write/',
                                        }
                                    ]);
                                });
                            function remove_write(Stu_WriteID)
                            {
                                if(confirm("Are You Sure?"))
                                {
                                     $.ajax({
                                        url:'<?php echo base_url(); ?>admin/student_athlete_three/delete_write/',
                                        type:'POST',
                                        data:{Stu_WriteID:Stu_WriteID},
                                        success:function(result){
                                          $('#Write_'+Stu_WriteID).remove();
                                        }
                
                            });
                            return false;
                                }
                            }
                          </script>
                      </div>
                     </div>
                  </div>
               </div>
               
               			
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a href="#collapseSix" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                YourSpeak List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseSix" style="height: 0px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addyourspeak">Add YourSpeak</button>				  
                            </div>
                            <br /><br />
                              <div class="table-responsive">
                      <table class="table mb30">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="YourSpeak_List">
                            <?php $Gender_details=get_table_details('stu_academic_yourspeak','Stu_YourSpeakID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="YourSpeak_<?php echo $Gender['Stu_YourSpeakID']; ?>">
                            <td><?php echo $Gender['Stu_YourSpeakID']; ?></td>
                            <td><?php echo $Gender['Stu_YourSpeakName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_three/add_yourspeak/<?php echo $Gender['Stu_YourSpeakID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_yourspeak('<?php echo $Gender['Stu_YourSpeakID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
						 <script>
                            jQuery(".addyourspeak").click(function() {
                                    jQuery.fancybox.open([
                                        {
                                            maxWidth: 800,
                                            maxHeight: 600,
                                            fitToView: false,
                                            width: '70%',
                                            height: '70%',
                                            autoSize: false,
                                            closeClick: false,
                                            openEffect: 'none',
                                            closeEffect: 'none',
                                            type: 'ajax',
                                            href: '<?php echo base_url(); ?>admin/student_athlete_three/add_yourspeak/',
                                        }
                                    ]);
                                });
                            function remove_yourspeak(Stu_YourSpeakID)
                            {
                                if(confirm("Are You Sure?"))
                                {
                                     $.ajax({
                                        url:'<?php echo base_url(); ?>admin/student_athlete_three/delete_yourspeak/',
                                        type:'POST',
                                        data:{Stu_YourSpeakID:Stu_YourSpeakID},
                                        success:function(result){
                                          $('#YourSpeak_'+Stu_YourSpeakID).remove();
                                        }
                
                            });
                            return false;
                                }
                            }
                          </script>
                      </div>
                     </div>
                  </div>
               </div>
               
               
               			<div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a href="#collapseSeven" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                YourWrite List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseSeven" style="height: 0px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addyourwrite">Add YourWrite</button>				  
                            </div>
                            <br /><br />
                              <div class="table-responsive">
                      <table class="table mb30">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="YourWrite_List">
                            <?php $Gender_details=get_table_details('stu_academic_yourwrite','Stu_YourWriteID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="YourWrite_<?php echo $Gender['Stu_YourWriteID']; ?>">
                            <td><?php echo $Gender['Stu_YourWriteID']; ?></td>
                            <td><?php echo $Gender['Stu_YourWriteName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_three/add_yourwrite/<?php echo $Gender['Stu_YourWriteID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_yourwrite('<?php echo $Gender['Stu_YourWriteID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
						 <script>
                            jQuery(".addyourwrite").click(function() {
                                    jQuery.fancybox.open([
                                        {
                                            maxWidth: 800,
                                            maxHeight: 600,
                                            fitToView: false,
                                            width: '70%',
                                            height: '70%',
                                            autoSize: false,
                                            closeClick: false,
                                            openEffect: 'none',
                                            closeEffect: 'none',
                                            type: 'ajax',
                                            href: '<?php echo base_url(); ?>admin/student_athlete_three/add_yourwrite/',
                                        }
                                    ]);
                                });
                            function remove_yourwrite(Stu_YourWriteID)
                            {
                                if(confirm("Are You Sure?"))
                                {
                                     $.ajax({
                                        url:'<?php echo base_url(); ?>admin/student_athlete_three/delete_yourwrite/',
                                        type:'POST',
                                        data:{Stu_YourWriteID:Stu_YourWriteID},
                                        success:function(result){
                                          $('#YourWrite_'+Stu_YourWriteID).remove();
                                        }
                
                            });
                            return false;
                                }
                            }
                          </script>
                      </div>
                     </div>
                  </div>
               </div>
               
               
               			<div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a href="#collapseeight" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                YourRead List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseeight" style="height: 0px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addyourread">Add YourRead</button>				  
                            </div>
                            <br /><br />
                              <div class="table-responsive">
                      <table class="table mb30">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="YourRead_List">
                            <?php $Gender_details=get_table_details('stu_academic_yourread','Stu_YourReadID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="YourRead_<?php echo $Gender['Stu_YourReadID']; ?>">
                            <td><?php echo $Gender['Stu_YourReadID']; ?></td>
                            <td><?php echo $Gender['Stu_YourReadName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_three/add_yourwrite/<?php echo $Gender['Stu_YourReadID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_yourread('<?php echo $Gender['Stu_YourReadID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
						 <script>
                            jQuery(".addyourread").click(function() {
                                    jQuery.fancybox.open([
                                        {
                                            maxWidth: 800,
                                            maxHeight: 600,
                                            fitToView: false,
                                            width: '70%',
                                            height: '70%',
                                            autoSize: false,
                                            closeClick: false,
                                            openEffect: 'none',
                                            closeEffect: 'none',
                                            type: 'ajax',
                                            href: '<?php echo base_url(); ?>admin/student_athlete_three/add_yourread/',
                                        }
                                    ]);
                                });
                            function remove_yourread(Stu_YourReadID)
                            {
                                if(confirm("Are You Sure?"))
                                {
                                     $.ajax({
                                        url:'<?php echo base_url(); ?>admin/student_athlete_three/delete_yourread/',
                                        type:'POST',
                                        data:{Stu_YourReadID:Stu_YourReadID},
                                        success:function(result){
                                          $('#YourRead_'+Stu_YourReadID).remove();
                                        }
                
                            });
                            return false;
                                }
                            }
                          </script>
                      </div>
                     </div>
                  </div>
               </div>
               
               
               			<div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a href="#collapseNine" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                Wes List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseNine" style="height: 0px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addwes">Add Wes</button>				  
                            </div>
                            <br /><br />
                              <div class="table-responsive">
                      <table class="table mb30">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="Wes_List">
                            <?php $Gender_details=get_table_details('stu_academic_wes','Stu_WesID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Wes_<?php echo $Gender['Stu_WesID']; ?>">
                            <td><?php echo $Gender['Stu_WesID']; ?></td>
                            <td><?php echo $Gender['Stu_WesName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_three/add_wes/<?php echo $Gender['Stu_WesID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_wes('<?php echo $Gender['Stu_WesID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
						 <script>
                            jQuery(".addwes").click(function() {
                                    jQuery.fancybox.open([
                                        {
                                            maxWidth: 800,
                                            maxHeight: 600,
                                            fitToView: false,
                                            width: '70%',
                                            height: '70%',
                                            autoSize: false,
                                            closeClick: false,
                                            openEffect: 'none',
                                            closeEffect: 'none',
                                            type: 'ajax',
                                            href: '<?php echo base_url(); ?>admin/student_athlete_three/add_wes/',
                                        }
                                    ]);
                                });
                            function remove_wes(Stu_WesID)
                            {
                                if(confirm("Are You Sure?"))
                                {
                                     $.ajax({
                                        url:'<?php echo base_url(); ?>admin/student_athlete_three/delete_wes/',
                                        type:'POST',
                                        data:{Stu_WesID:Stu_WesID},
                                        success:function(result){
                                          $('#Wes_'+Stu_WesID).remove();
                                        }
                
                            });
                            return false;
                                }
                            }
                          </script>
                      </div>
                     </div>
                  </div>
               </div>
               
               	
            
            
          </div>
                  
                  
                </div><!-- tab-content -->
                
              </div><!-- #basicWizard -->
              
            </div><!-- panel-body -->
          </div><!-- panel -->
          

	          
          
        </div>   
   </div><!-- contentpanel -->
 

<script src="<?php echo base_url();?>js/admin/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url();?>js/admin/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo base_url();?>js/admin/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>js/admin/modernizr.min.js"></script>
<script src="<?php echo base_url();?>js/admin/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url();?>js/admin/toggles.min.js"></script>
<script src="<?php echo base_url();?>js/admin/retina.min.js"></script>
<script src="<?php echo base_url();?>js/admin/jquery.cookies.js"></script>

<script src="<?php echo base_url();?>js/admin/jquery.validate.min.js"></script>

<script src="<?php echo base_url();?>js/admin/custom.js"></script>
 
 
 <!--------------------- fancy Box  ------------------------->

<script src="<?php echo base_url();?>js/jquery.fancybox.pack.js"></script>
<script src="<?php echo base_url();?>js/jquery.fancybox-thumbs.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>css/jquery.fancybox.css" type="text/css" media="screen" />

<link rel="stylesheet" href="<?php echo base_url();?>css/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
<script>
$(document).ready(function() {
	$(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});



</script>	    

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
<!----------------------Gender ---------------------------->


</script>


