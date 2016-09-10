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
                   <li class=""><a href="<?php echo base_url(); ?>admin/student_athlete"><span>Step 1</span></a></li>
                  <li class=""><a href="<?php echo base_url(); ?>admin/student_athlete_second"><span>Step 2</span></a></li>
                  <li class=""><a href="<?php echo base_url(); ?>admin/student_athlete_three"><span>Step 3</span></a></li>
                   <li class=""><a href="<?php echo base_url(); ?>admin/student_athlete_four"><span>Step 4</span></a></li>	
                   <li class=""><a href="<?php echo base_url(); ?>admin/student_athlete_six"><span>Step 6</span></a></li>	
                   <li class="active"><a href="<?php echo base_url(); ?>admin/student_athlete_ten"><span>Step 10</span></a></li>	
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
                              <a href="#collapsetwelve" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                               Hitting OnBase  List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapsetwelve" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addonbase">Add Hitting OnBase </button>				  
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
                        <tbody id="OnBase_List">
                            <?php $Gender_details=get_table_details('stu_hitting_onbase','Stu_OnBaseID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="OnBase_<?php echo $Gender['Stu_OnBaseID']; ?>">
                            <td><?php echo $Gender['Stu_OnBaseID']; ?></td>
                            <td><?php echo $Gender['Stu_OnBaseName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_test/add_onbase/<?php echo $Gender['Stu_OnBaseID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_onbase('<?php echo $Gender['Stu_OnBaseID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".addonbase").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_test/add_onbase/',
                                    }
                                ]);
                            });
                        function remove_onbase(Stu_OnBaseID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_test/delete_onbase/',
                                    type:'POST',
                                    data:{Stu_OnBaseID:Stu_OnBaseID},
                                    success:function(result){
                                      $('#OnBase_'+Stu_OnBaseID).remove();
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
                              <a href="#collapsethirteen" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                               Hitting Yardbase  List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapsethirteen" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addyardbase">Add Hitting Yardbase </button>				  
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
                        <tbody id="YardBase_List">
                            <?php $Gender_details=get_table_details('stu_hitting_yardbase','Stu_YardBaseID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="YardBase_<?php echo $Gender['Stu_YardBaseID']; ?>">
                            <td><?php echo $Gender['Stu_YardBaseID']; ?></td>
                            <td><?php echo $Gender['Stu_YardBaseName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_test/add_yardbase/<?php echo $Gender['Stu_YardBaseID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_yardbase('<?php echo $Gender['Stu_YardBaseID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".addyardbase").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_test/add_yardbase/',
                                    }
                                ]);
                            });
                        function remove_yardbase(Stu_YardBaseID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_test/delete_yardbase/',
                                    type:'POST',
                                    data:{Stu_YardBaseID:Stu_YardBaseID},
                                    success:function(result){
                                      $('#YardBase_'+Stu_YardBaseID).remove();
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
                              <a href="#collapsefourteen" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                               Hitting Speed  List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapsefourteen" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addspeed">Add Hitting Speed </button>				  
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
                        <tbody id="Speed_List">
                            <?php $Gender_details=get_table_details('stu_hitting_speed','Stu_SpeedID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Speed_<?php echo $Gender['Stu_SpeedID']; ?>">
                            <td><?php echo $Gender['Stu_SpeedID']; ?></td>
                            <td><?php echo $Gender['Stu_SpeedName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_test/add_speed/<?php echo $Gender['Stu_SpeedID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_speed('<?php echo $Gender['Stu_SpeedID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".addspeed").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_test/add_speed/',
                                    }
                                ]);
                            });
                        function remove_speed(Stu_SpeedID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_test/delete_speed/',
                                    type:'POST',
                                    data:{Stu_SpeedID:Stu_SpeedID},
                                    success:function(result){
                                      $('#Speed_'+Stu_SpeedID).remove();
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
                        
                        <!-----------------> 
                        
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a href="#collapsefifteen" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                Field Assist List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapsefifteen" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addassist">Add Field Assist </button>				  
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
                        <tbody id="Assist_List">
                            <?php $Gender_details=get_table_details('stu_field_assist','Stu_AssistID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Assist_<?php echo $Gender['Stu_AssistID']; ?>">
                            <td><?php echo $Gender['Stu_AssistID']; ?></td>
                            <td><?php echo $Gender['Stu_AssistName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_test/add_assist/<?php echo $Gender['Stu_AssistID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_assist('<?php echo $Gender['Stu_AssistID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".addassist").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_test/add_assist/',
                                    }
                                ]);
                            });
                        function remove_assist(Stu_AssistID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_test/delete_assist/',
                                    type:'POST',
                                    data:{Stu_AssistID:Stu_AssistID},
                                    success:function(result){
                                      $('#Strength_'+Stu_AssistID).remove();
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
                              <a href="#collapseSixteen" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                Field Put List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseSixteen" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addput">Add Field Put </button>				  
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
                        <tbody id="Put_List">
                            <?php $Gender_details=get_table_details('stu_field_put','Stu_PutID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Put_<?php echo $Gender['Stu_PutID']; ?>">
                            <td><?php echo $Gender['Stu_PutID']; ?></td>
                            <td><?php echo $Gender['Stu_PutName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_test/add_put/<?php echo $Gender['Stu_PutID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_put('<?php echo $Gender['Stu_PutID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".addput").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_test/add_put/',
                                    }
                                ]);
                            });
                        function remove_put(Stu_PutID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_test/delete_put/',
                                    type:'POST',
                                    data:{Stu_PutID:Stu_PutID},
                                    success:function(result){
                                      $('#Put_'+Stu_PutID).remove();
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
                              <a href="#collapseSeventeen" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                Field Double List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseSeventeen" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary adddouble">Add Field Double </button>				  
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
                        <tbody id="Double_List">
                            <?php $Gender_details=get_table_details('stu_field_double','Stu_DoubleID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Double_<?php echo $Gender['Stu_DoubleID']; ?>">
                            <td><?php echo $Gender['Stu_DoubleID']; ?></td>
                            <td><?php echo $Gender['Stu_DoubleName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_test/add_double/<?php echo $Gender['Stu_DoubleID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_double('<?php echo $Gender['Stu_DoubleID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".adddouble").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_test/add_double/',
                                    }
                                ]);
                            });
                        function remove_double(Stu_DoubleID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_test/delete_double/',
                                    type:'POST',
                                    data:{Stu_DoubleID:Stu_DoubleID},
                                    success:function(result){
                                      $('#Double_'+Stu_DoubleID).remove();
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
                              <a href="#collapseeighteen" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                Field Triple List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseeighteen" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addtriple">Add Field Triple </button>				  
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
                        <tbody id="Triple_List">
                            <?php $Gender_details=get_table_details('stu_field_triple','Stu_TripleID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Triple_<?php echo $Gender['Stu_TripleID']; ?>">
                            <td><?php echo $Gender['Stu_TripleID']; ?></td>
                            <td><?php echo $Gender['Stu_TripleName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_test/add_triple/<?php echo $Gender['Stu_TripleID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_triple('<?php echo $Gender['Stu_TripleID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".addtriple").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_test/add_triple/',
                                    }
                                ]);
                            });
                        function remove_triple(Stu_TripleID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_test/delete_triple/',
                                    type:'POST',
                                    data:{Stu_TripleID:Stu_TripleID},
                                    success:function(result){
                                      $('#Triple_'+Stu_TripleID).remove();
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
                              <a href="#collapsenineteen" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                Field  List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapsenineteen" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addfiled">Add Triple </button>				  
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
                        <tbody id="Filed_List">
                            <?php $Gender_details=get_table_details('stu_field_filed','Stu_FiledID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Filed_<?php echo $Gender['Stu_FiledID']; ?>">
                            <td><?php echo $Gender['Stu_FiledID']; ?></td>
                            <td><?php echo $Gender['Stu_FiledName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_test/add_filed/<?php echo $Gender['Stu_FiledID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_filed('<?php echo $Gender['Stu_FiledID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".addfiled").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_test/add_filed/',
                                    }
                                ]);
                            });
                        function remove_filed(Stu_FiledID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_test/delete_filed/',
                                    type:'POST',
                                    data:{Stu_FiledID:Stu_FiledID},
                                    success:function(result){
                                      $('#Filed_'+Stu_FiledID).remove();
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


