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
                  <li class=""><a href="<?php echo base_url(); ?>admin/student_athlete_three"><span>Step 4a</span></a></li>
                   <li class="active"><a href="<?php echo base_url(); ?>admin/student_athlete_four"><span>Step 5</span></a></li>	
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
                                Weight List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseOne" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addweight">Add Weight</button>				  
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
                        <tbody id="Weight_List">
                            <?php $Gender_details=get_table_details('stu_biometric_weight',
							'Stu_Bio_WeigthID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Weight_<?php echo $Gender['Stu_Bio_WeigthID']; ?>">
                            <td><?php echo $Gender['Stu_Bio_WeigthID']; ?></td>
                            <td><?php echo $Gender['Stu_Bio_WeightName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_weight/<?php echo $Gender['Stu_Bio_WeigthID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_weight('<?php echo $Gender['Stu_Bio_WeigthID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".addweight").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_four/add_weight/',
                                    }
                                ]);
                            });
                        function remove_weight(Stu_Bio_WeigthID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_four/delete_weight/',
                                    type:'POST',
                                    data:{Stu_Bio_WeigthID:Stu_Bio_WeigthID},
                                    success:function(result){
                                      $('#Weight_'+Stu_Bio_WeigthID).remove();
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
                                Height List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseTwo" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addheight">Add Height</button>				  
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
                        <tbody id="Height_List">
                            <?php $Gender_details=get_table_details('stu_biometric_height',
							'Stu_Bio_HeigthID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Height_<?php echo $Gender['Stu_Bio_HeigthID']; ?>">
                            <td><?php echo $Gender['Stu_Bio_HeigthID']; ?></td>
                            <td><?php echo $Gender['Stu_Bio_HeightName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_weight/<?php echo $Gender['Stu_Bio_HeigthID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_height('<?php echo $Gender['Stu_Bio_HeigthID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".addheight").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_four/add_height/',
                                    }
                                ]);
                            });
                        function remove_height(Stu_Bio_HeigthID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_four/delete_height/',
                                    type:'POST',
                                    data:{Stu_Bio_HeigthID:Stu_Bio_HeigthID},
                                    success:function(result){
                                      $('#Height_'+Stu_Bio_HeigthID).remove();
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
                              <a href="#collapseTw" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                HeightInche List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseTw" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addheightinche">Add Inche</button>				  
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
                        <tbody id="HeightInche_List">
                            <?php $Gender_details=get_table_details('stu_biometric_heightinche',
							'Stu_Bio_HeightIncheID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="HeightInche_<?php echo $Gender['Stu_Bio_HeightIncheID']; ?>">
                            <td><?php echo $Gender['Stu_Bio_HeightIncheID']; ?></td>
                            <td><?php echo $Gender['Stu_Bio_HeightIncheName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_heightinche/<?php echo $Gender['Stu_Bio_HeightIncheID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_heightinche('<?php echo $Gender['Stu_Bio_HeightIncheID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".addheightinche").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_four/add_heightinche/',
                                    }
                                ]);
                            });
                        function remove_heightinche(Stu_Bio_HeightIncheID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_four/delete_heightinche/',
                                    type:'POST',
                                    data:{Stu_Bio_HeightIncheID:Stu_Bio_HeightIncheID},
                                    success:function(result){
                                      $('#HeightInche_'+Stu_Bio_HeightIncheID).remove();
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
                                Hand Width List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseThree" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addhand">Add Hand Width</button>				  
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
                        <tbody id="Hand_List">
                            <?php $Gender_details=get_table_details('stu_biometric_handwidth',
							'Stu_Bio_HandWidthID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Hand_<?php echo $Gender['Stu_Bio_HandWidthID']; ?>">
                            <td><?php echo $Gender['Stu_Bio_HandWidthID']; ?></td>
                            <td><?php echo $Gender['Stu_Bio_HandWidthName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_hand/<?php echo $Gender['Stu_Bio_HandWidthID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_hand('<?php echo $Gender['Stu_Bio_HandWidthID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".addhand").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_four/add_hand/',
                                    }
                                ]);
                            });
                        function remove_hand(Stu_Bio_HandWidthID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_four/delete_hand/',
                                    type:'POST',
                                    data:{Stu_Bio_HandWidthID:Stu_Bio_HandWidthID},
                                    success:function(result){
                                      $('#Hand_'+Stu_Bio_HandWidthID).remove();
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
                              <a href="#collapseThre" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                                Hand Width Inche List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseThre" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addhandinche">Add Hand Width Inche</button>				  
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
                        <tbody id="HandWidthInche_List">
                            <?php $Gender_details=get_table_details('stu_biometric_handwidthinche',
							'Stu_Bio_HandWidthIncheID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="HandWidthInche_<?php echo $Gender['Stu_Bio_HandWidthIncheID']; ?>">
                            <td><?php echo $Gender['Stu_Bio_HandWidthIncheID']; ?></td>
                            <td><?php echo $Gender['Stu_Bio_HandWidthIncheName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_handinche/<?php echo $Gender['Stu_Bio_HandWidthIncheID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_handinche('<?php echo $Gender['Stu_Bio_HandWidthIncheID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".addhandinche").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_four/add_handinche/',
                                    }
                                ]);
                            });
                        function remove_handinche(Stu_Bio_HandWidthIncheID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_four/delete_handinche/',
                                    type:'POST',
                                    data:{Stu_Bio_HandWidthIncheID:Stu_Bio_HandWidthIncheID},
                                    success:function(result){
                                      $('#HandWidthInche_'+Stu_Bio_HandWidthIncheID).remove();
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
                               Domain Hand List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseFour" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary addd_hand">AddDomain Hand</button>				  
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
                        <tbody id="Domain_Hand__List">
                            <?php $Gender_details=get_table_details('stu_biometric_domainthand',
							'Stu_Bio_DomaintHandID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Domain_Hand_<?php echo $Gender['Stu_Bio_DomaintHandID']; ?>">
                            <td><?php echo $Gender['Stu_Bio_DomaintHandID']; ?></td>
                            <td><?php echo $Gender['Stu_Bio_DomaintHandName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_domain_hand/<?php echo $Gender['Stu_Bio_DomaintHandID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_domain_hand('<?php echo $Gender['Stu_Bio_DomaintHandID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".addd_hand").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_four/add_domain_hand/',
                                    }
                                ]);
                            });
                        function remove_domain_hand(Stu_Bio_DomaintHandID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_four/delete_domain_hand/',
                                    type:'POST',
                                    data:{Stu_Bio_DomaintHandID:Stu_Bio_DomaintHandID},
                                    success:function(result){
                                      $('#Domain_Hand_'+Stu_Bio_DomaintHandID).remove();
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
                               Height Without List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseFive" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary add_heithwith">Add Height Without</button>				  
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
                        <tbody id="HeightWith__List">
                            <?php $Gender_details=get_table_details('stu_biometric_heightwithout',
							'Stu_Bio_HeightWithoutID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="HeightWith_<?php echo $Gender['Stu_Bio_HeightWithoutID']; ?>">
                            <td><?php echo $Gender['Stu_Bio_HeightWithoutID']; ?></td>
                            <td><?php echo $Gender['Stu_Bio_HeightWithoutName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_heightwith/<?php echo $Gender['Stu_Bio_HeightWithoutID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_heightwith('<?php echo $Gender['Stu_Bio_HeightWithoutID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".add_heithwith").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_four/add_heightwith/',
                                    }
                                ]);
                            });
                        function remove_heightwith(Stu_Bio_HeightWithoutID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_four/delete_Heightwith/',
                                    type:'POST',
                                    data:{Stu_Bio_HeightWithoutID:Stu_Bio_HeightWithoutID},
                                    success:function(result){
                                      $('#HeightWith_'+Stu_Bio_HeightWithoutID).remove();
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
                              <a href="#collapseFiv" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                               Inche Without List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseFiv" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary add_heithinchwith">Add Inche Without</button>				  
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
                        <tbody id="HeightIncheWith__List">
                            <?php $Gender_details=get_table_details('stu_biometric_heightwithoutinche',
							'Stu_Bio_HeightIncheWithoutID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="HeightIncheWith__List<?php echo $Gender['Stu_Bio_HeightIncheWithoutID']; ?>">
                            <td><?php echo $Gender['Stu_Bio_HeightIncheWithoutID']; ?></td>
                            <td><?php echo $Gender['Stu_Bio_HeightIncheWithoutName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_heightinchewith/<?php echo $Gender['Stu_Bio_HeightIncheWithoutID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_heightinchewith('<?php echo $Gender['Stu_Bio_HeightIncheWithoutID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".add_heithinchwith").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_four/add_heightinchewith/',
                                    }
                                ]);
                            });
                        function remove_heightinchewith(Stu_Bio_HeightIncheWithoutID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_four/delete_heightinchewith/',
                                    type:'POST',
                                    data:{Stu_Bio_HeightIncheWithoutID:Stu_Bio_HeightIncheWithoutID},
                                    success:function(result){
                                      $('#HeightIncheWith__List'+Stu_Bio_HeightIncheWithoutID).remove();
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
                              WingSpan List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseSix" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary add_wingspan">Add WingSpan</button>				  
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
                        <tbody id="WingSpan_List">
                            <?php $Gender_details=get_table_details('stu_biometric_wingspan',
							'Stu_Bio_WingSpanID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="WingSpan_<?php echo $Gender['Stu_Bio_WingSpanID']; ?>">
                            <td><?php echo $Gender['Stu_Bio_WingSpanID']; ?></td>
                            <td><?php echo $Gender['Stu_Bio_WingSpanName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_wingspan/<?php echo $Gender['Stu_Bio_WingSpanID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_wingspan('<?php echo $Gender['Stu_Bio_WingSpanID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".add_wingspan").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_four/add_wingspan/',
                                    }
                                ]);
                            });
                        function remove_wingspan(Stu_Bio_WingSpanID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_four/delete_wingspan/',
                                    type:'POST',
                                    data:{Stu_Bio_WingSpanID:Stu_Bio_WingSpanID},
                                    success:function(result){
                                      $('#WingSpan_'+Stu_Bio_WingSpanID).remove();
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
                              <a href="#collapseSi" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                              WingSpanInche List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseSi" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary add_wingspaninche">Add WingSpanInche</button>				  
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
                        <tbody id="WingSpanInche_List">
                            <?php $Gender_details=get_table_details('stu_biometric_wingspaninche',
							'Stu_Bio_WingSpanIncheID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="WingSpanInche_<?php echo $Gender['Stu_Bio_WingSpanIncheID']; ?>">
                            <td><?php echo $Gender['Stu_Bio_WingSpanIncheID']; ?></td>
                            <td><?php echo $Gender['Stu_Bio_WingSpanIncheName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_wingspaninche/<?php echo $Gender['Stu_Bio_WingSpanIncheID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_wingspaninche('<?php echo $Gender['Stu_Bio_WingSpanIncheID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".add_wingspaninche").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_four/add_wingspaninche/',
                                    }
                                ]);
                            });
                        function remove_wingspaninche(Stu_Bio_WingSpanIncheID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_four/delete_wingspaninche/',
                                    type:'POST',
                                    data:{Stu_Bio_WingSpanIncheID:Stu_Bio_WingSpanIncheID},
                                    success:function(result){
                                      $('#WingSpanInche_'+Stu_Bio_WingSpanIncheID).remove();
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
                              Hand Length List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseSeven" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary add_handlength">Add Height Length</button>				  
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
                        <tbody id="HandLength_List">
                            <?php $Gender_details=get_table_details('stu_biometric_handlength',
							'Stu_Bio_HandLengthID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="HandLength_<?php echo $Gender['Stu_Bio_HandLengthID']; ?>">
                            <td><?php echo $Gender['Stu_Bio_HandLengthID']; ?></td>
                            <td><?php echo $Gender['Stu_Bio_HandLengthName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_handlength/<?php echo $Gender['Stu_Bio_HandLengthID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_handlength('<?php echo $Gender['Stu_Bio_HandLengthID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".add_handlength").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_four/add_handlength/',
                                    }
                                ]);
                            });
                        function remove_handlength(Stu_Bio_HandLengthID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_four/delete_handlength/',
                                    type:'POST',
                                    data:{Stu_Bio_HandLengthID:Stu_Bio_HandLengthID},
                                    success:function(result){
                                      $('#HandLength_'+Stu_Bio_HandLengthID).remove();
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
                              <a href="#collapseSev" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                              Hand Length Inche List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseSev" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary add_handlengthinche">Add Length Inche</button>				  
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
                        <tbody id="HandLengthInche_List">
                            <?php $Gender_details=get_table_details('stu_biometric_handlengthinche',
							'Stu_Bio_HandLengthIncheID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="HandLengthInche_<?php echo $Gender['Stu_Bio_HandLengthIncheID']; ?>">
                            <td><?php echo $Gender['Stu_Bio_HandLengthIncheID']; ?></td>
                            <td><?php echo $Gender['Stu_Bio_HandLengthIncheName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_handlengthinche/<?php echo $Gender['Stu_Bio_HandLengthIncheID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_handlengthinche('<?php echo $Gender['Stu_Bio_HandLengthIncheID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".add_handlengthinche").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_four/add_handlengthinche/',
                                    }
                                ]);
                            });
                        function remove_handlengthinche(Stu_Bio_HandLengthIncheID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_four/delete_handlengthinche/',
                                    type:'POST',
                                    data:{Stu_Bio_HandLengthIncheID:Stu_Bio_HandLengthIncheID},
                                    success:function(result){
                                      $('#HandLengthInche_'+Stu_Bio_HandLengthIncheID).remove();
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
                              <a href="#collapseEight" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                              Domaint Leg List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseEight" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary add_domaintleg">Add Domaint Leg </button>				  
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
                        <tbody id="DomaintLeg_List">
                            <?php $Gender_details=get_table_details('stu_biometric_domainleg',
							'Stu_Bio_DomaintLegID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="DomaintLeg_<?php echo $Gender['Stu_Bio_DomaintLegID']; ?>">
                            <td><?php echo $Gender['Stu_Bio_DomaintLegID']; ?></td>
                            <td><?php echo $Gender['Stu_Bio_DomaintLegName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_domaintleg/<?php echo $Gender['Stu_Bio_DomaintLegID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_domaintleg('<?php echo $Gender['Stu_Bio_DomaintLegID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".add_domaintleg").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_four/add_domaintleg/',
                                    }
                                ]);
                            });
                        function remove_domaintleg(Stu_Bio_DomaintLegID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_four/delete_domaintleg/',
                                    type:'POST',
                                    data:{Stu_Bio_DomaintLegID:Stu_Bio_DomaintLegID},
                                    success:function(result){
                                      $('#DomaintLeg_'+Stu_Bio_DomaintLegID).remove();
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
                             Strength Vertical List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseNine" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary add_strvertical">Add Strength Vertical </button>				  
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
                        <tbody id="Vertical_List">
                            <?php $Gender_details=get_table_details('stu_strength_vertical',
							'Stu_Stre_VerticalID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Vertical_<?php echo $Gender['Stu_Stre_VerticalID']; ?>">
                            <td><?php echo $Gender['Stu_Stre_VerticalID']; ?></td>
                            <td><?php echo $Gender['Stu_Stre_VerticalName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_vertical/<?php echo $Gender['Stu_Stre_VerticalID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_vertical('<?php echo $Gender['Stu_Stre_VerticalID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".add_strvertical").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_four/add_vertical/',
                                    }
                                ]);
                            });
                        function remove_vertical(Stu_Stre_VerticalID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_four/delete_vertical/',
                                    type:'POST',
                                    data:{Stu_Stre_VerticalID:Stu_Stre_VerticalID},
                                    success:function(result){
                                      $('#Vertical_'+Stu_Stre_VerticalID).remove();
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
                              <a href="#collapseNinesd" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                             Strength VerticalInche List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseNinesd" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary add_strverticalinche">Add Strength VerticalInche </button>				  
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
                        <tbody id="VerticalInche_List">
                            <?php $Gender_details=get_table_details('stu_strength_verticalinche',
							'Stu_Stre_VerticalIncheID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="VerticalInche_<?php echo $Gender['Stu_Stre_VerticalIncheID']; ?>">
                            <td><?php echo $Gender['Stu_Stre_VerticalIncheID']; ?></td>
                            <td><?php echo $Gender['Stu_Stre_VerticalIncheName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_verticalinche/<?php echo $Gender['Stu_Stre_VerticalIncheID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_verticalinche('<?php echo $Gender['Stu_Stre_VerticalIncheID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".add_strverticalinche").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_four/add_verticalinche/',
                                    }
                                ]);
                            });
                        function remove_verticalinche(Stu_Stre_VerticalIncheID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_four/delete_verticalinche/',
                                    type:'POST',
                                    data:{Stu_Stre_VerticalIncheID:Stu_Stre_VerticalIncheID},
                                    success:function(result){
                                      $('#VerticalInche_'+Stu_Stre_VerticalIncheID).remove();
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
                              <a href="#collapseTen" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                             Strength PowerClean List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseTen" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary add_strpowerclean">Add Strength PowerClean </button>				  
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
                        <tbody id="PowerClean_List">
                            <?php $Gender_details=get_table_details('stu_strength_powerclean',
							'Stu_Stre_PowerID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="PowerClean_<?php echo $Gender['Stu_Stre_PowerID']; ?>">
                            <td><?php echo $Gender['Stu_Stre_PowerID']; ?></td>
                            <td><?php echo $Gender['Stu_Stre_PowerName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_powerclean/<?php echo $Gender['Stu_Stre_PowerID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_powerclean('<?php echo $Gender['Stu_Stre_PowerID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".add_strpowerclean").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_four/add_powerclean/',
                                    }
                                ]);
                            });
                        function remove_powerclean(Stu_Stre_PowerID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_four/delete_powerclean/',
                                    type:'POST',
                                    data:{Stu_Stre_PowerID:Stu_Stre_PowerID},
                                    success:function(result){
                                      $('#PowerClean_'+Stu_Stre_PowerID).remove();
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
                              <a href="#collapseEleven" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                             Strength Standing List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseEleven" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary add_strStand">Add Strength Standing </button>				  
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
                        <tbody id="Stand_List">
                            <?php $Gender_details=get_table_details('stu_strength_stand',
							'Stu_Stre_StandID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Stand_<?php echo $Gender['Stu_Stre_StandID']; ?>">
                            <td><?php echo $Gender['Stu_Stre_StandID']; ?></td>
                            <td><?php echo $Gender['Stu_Stre_StandName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_stand/<?php echo $Gender['Stu_Stre_StandID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_stand('<?php echo $Gender['Stu_Stre_StandID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".add_strStand").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_four/add_stand/',
                                    }
                                ]);
                            });
                        function remove_stand(Stu_Stre_StandID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_four/delete_stand/',
                                    type:'POST',
                                    data:{Stu_Stre_StandID:Stu_Stre_StandID},
                                    success:function(result){
                                      $('#Stand_'+Stu_Stre_StandID).remove();
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
                              <a href="#collapseElevensasa" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                             Strength StandIncheing List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseElevensasa" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary add_strStandInche">Add Strength StandIncheing </button>				  
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
                        <tbody id="StandInche_List">
                            <?php $Gender_details=get_table_details('stu_strength_standinche',
							'Stu_Stre_StandIncheID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="StandInche_<?php echo $Gender['Stu_Stre_StandIncheID']; ?>">
                            <td><?php echo $Gender['Stu_Stre_StandIncheID']; ?></td>
                            <td><?php echo $Gender['Stu_Stre_StandIncheName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_standinche/<?php echo $Gender['Stu_Stre_StandIncheID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_standinche('<?php echo $Gender['Stu_Stre_StandIncheID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".add_strStandInche").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_four/add_standinche/',
                                    }
                                ]);
                            });
                        function remove_standinche(Stu_Stre_StandIncheID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_four/delete_standinche/',
                                    type:'POST',
                                    data:{Stu_Stre_StandIncheID:Stu_Stre_StandIncheID},
                                    success:function(result){
                                      $('#StandInche_'+Stu_Stre_StandIncheID).remove();
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
                              <a href="#collapseEle" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                             Strength Squat List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseEle" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary add_strSquat">Add Strength Squat </button>				  
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
                        <tbody id="Squat_List">
                            <?php $Gender_details=get_table_details('stu_strength_squat',
							'Stu_Stre_SquatID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Squat_<?php echo $Gender['Stu_Stre_SquatID']; ?>">
                            <td><?php echo $Gender['Stu_Stre_SquatID']; ?></td>
                            <td><?php echo $Gender['Stu_Stre_SquatName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_squat/<?php echo $Gender['Stu_Stre_SquatID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_squat('<?php echo $Gender['Stu_Stre_SquatID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".add_strSquat").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_four/add_squat/',
                                    }
                                ]);
                            });
                        function remove_squat(Stu_Stre_SquatID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_four/delete_squat/',
                                    type:'POST',
                                    data:{Stu_Stre_SquatID:Stu_Stre_SquatID},
                                    success:function(result){
                                      $('#Squat_'+Stu_Stre_SquatID).remove();
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
                              <a href="#collapseTwelve" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                             Strength Bench List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseTwelve" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary add_strbench">Add Strength Bench </button>				  
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
                        <tbody id="Bench_List">
                            <?php $Gender_details=get_table_details('stu_strength_bench',
							'Stu_Stre_BenchID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Bench_<?php echo $Gender['Stu_Stre_BenchID']; ?>">
                            <td><?php echo $Gender['Stu_Stre_BenchID']; ?></td>
                            <td><?php echo $Gender['Stu_Stre_BenchName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_bench/<?php echo $Gender['Stu_Stre_BenchID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_bench('<?php echo $Gender['Stu_Stre_BenchID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".add_strbench").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_four/add_bench/',
                                    }
                                ]);
                            });
                        function remove_bench(Stu_Stre_BenchID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_four/delete_bench/',
                                    type:'POST',
                                    data:{Stu_Stre_BenchID:Stu_Stre_BenchID},
                                    success:function(result){
                                      $('#Bench_'+Stu_Stre_BenchID).remove();
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
                              <a href="#collapseThirteen" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                             Speed Mile List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseThirteen" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary add_strmile">Add Speed Mile </button>				  
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
                        <tbody id="Mile_List">
                            <?php $Gender_details=get_table_details('stu_speed_mile',
							'Stu_Speed_MileID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Mile_<?php echo $Gender['Stu_Speed_MileID']; ?>">
                            <td><?php echo $Gender['Stu_Speed_MileID']; ?></td>
                            <td><?php echo $Gender['Stu_Speed_MileName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_mile/<?php echo $Gender['Stu_Speed_MileID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_mile('<?php echo $Gender['Stu_Speed_MileID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".add_strmile").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_four/add_mile/',
                                    }
                                ]);
                            });
                        function remove_mile(Stu_Speed_MileID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_four/delete_mile/',
                                    type:'POST',
                                    data:{Stu_Speed_MileID:Stu_Speed_MileID},
                                    success:function(result){
                                      $('#Mile_'+Stu_Speed_MileID).remove();
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
                              <a href="#collapseThir" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                             Speed MileInche List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseThir" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary add_strmileinche">Add Speed MileInche </button>				  
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
                        <tbody id="MileInche_List">
                            <?php $Gender_details=get_table_details('stu_speed_mileinche',
							'Stu_Speed_MileIncheID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="MileInche_<?php echo $Gender['Stu_Speed_MileIncheID']; ?>">
                            <td><?php echo $Gender['Stu_Speed_MileIncheID']; ?></td>
                            <td><?php echo $Gender['Stu_Speed_MileIncheName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_mileinche/<?php echo $Gender['Stu_Speed_MileIncheID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_mileinche('<?php echo $Gender['Stu_Speed_MileIncheID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".add_strmileinche").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_four/add_mileinche/',
                                    }
                                ]);
                            });
                        function remove_mileinche(Stu_Speed_MileIncheID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_four/delete_mileinche/',
                                    type:'POST',
                                    data:{Stu_Speed_MileIncheID:Stu_Speed_MileIncheID},
                                    success:function(result){
                                      $('#MileInche_'+Stu_Speed_MileIncheID).remove();
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
                              <a href="#collapseFourteen" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                             Speed Yard List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseFourteen" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary add_stryard">Add Yard Mile </button>				  
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
                        <tbody id="Yard_List">
                            <?php $Gender_details=get_table_details('stu_speed_yard',
							'Stu_Speed_YardID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Yard_<?php echo $Gender['Stu_Speed_YardID']; ?>">
                            <td><?php echo $Gender['Stu_Speed_YardID']; ?></td>
                            <td><?php echo $Gender['Stu_Speed_YardName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_yard/<?php echo $Gender['Stu_Speed_YardID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_yard('<?php echo $Gender['Stu_Speed_YardID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".add_stryard").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_four/add_yard/',
                                    }
                                ]);
                            });
                        function remove_yard(Stu_Speed_YardID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_four/delete_yard/',
                                    type:'POST',
                                    data:{Stu_Speed_YardID:Stu_Speed_YardID},
                                    success:function(result){
                                      $('#Yard_'+Stu_Speed_YardID).remove();
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
                              <a href="#collapseFourte" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                             Speed YardInche List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseFourte" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary add_stryardinche">Add YardInche Mile </button>				  
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
                        <tbody id="YardInche_List">
                            <?php $Gender_details=get_table_details('stu_speed_yardinche',
							'Stu_Speed_YardIncheID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="YardInche_<?php echo $Gender['Stu_Speed_YardIncheID']; ?>">
                            <td><?php echo $Gender['Stu_Speed_YardIncheID']; ?></td>
                            <td><?php echo $Gender['Stu_Speed_YardIncheName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_yardinche/<?php echo $Gender['Stu_Speed_YardIncheID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_yardinche('<?php echo $Gender['Stu_Speed_YardIncheID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".add_stryardinche").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_four/add_yardinche/',
                                    }
                                ]);
                            });
                        function remove_yardinche(Stu_Speed_YardIncheID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_four/delete_yardinche/',
                                    type:'POST',
                                    data:{Stu_Speed_YardIncheID:Stu_Speed_YardIncheID},
                                    success:function(result){
                                      $('#YardInche_'+Stu_Speed_YardIncheID).remove();
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
                              <a href="#collapseFifteen" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                             Speed YardDash List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseFifteen" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary add_stryarddash">Add YardDash Mile </button>				  
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
                        <tbody id="YardDash_List">
                            <?php $Gender_details=get_table_details('stu_speed_yarddash',
							'Stu_Speed_YardDashID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="YardDash_<?php echo $Gender['Stu_Speed_YardDashID']; ?>">
                            <td><?php echo $Gender['Stu_Speed_YardDashID']; ?></td>
                            <td><?php echo $Gender['Stu_Speed_YardDashName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_yarddash/<?php echo $Gender['Stu_Speed_YardDashID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_yarddash('<?php echo $Gender['Stu_Speed_YardDashID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".add_stryarddash").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_four/add_yarddash/',
                                    }
                                ]);
                            });
                        function remove_yarddash(Stu_Speed_YardDashID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_four/delete_yarddash/',
                                    type:'POST',
                                    data:{Stu_Speed_YardDashID:Stu_Speed_YardDashID},
                                    success:function(result){
                                      $('#YardDash_'+Stu_Speed_YardDashID).remove();
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
                              <a href="#collapseFifte" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                             Speed YardDashInche List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseFifte" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary add_stryarddashinche">Add YardDashInche Mile </button>				  
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
                        <tbody id="YardDashInche_List">
                            <?php $Gender_details=get_table_details('stu_speed_yarddashinche',
							'Stu_Speed_YardDashIncheID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="YardDashInche_<?php echo $Gender['Stu_Speed_YardDashIncheID']; ?>">
                            <td><?php echo $Gender['Stu_Speed_YardDashIncheID']; ?></td>
                            <td><?php echo $Gender['Stu_Speed_YardDashIncheName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_yarddashinche/<?php echo $Gender['Stu_Speed_YardDashIncheID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_yarddashinche('<?php echo $Gender['Stu_Speed_YardDashIncheID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".add_stryarddashinche").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_four/add_yarddashinche/',
                                    }
                                ]);
                            });
                        function remove_yarddashinche(Stu_Speed_YardDashIncheID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_four/delete_yarddashinche/',
                                    type:'POST',
                                    data:{Stu_Speed_YardDashIncheID:Stu_Speed_YardDashIncheID},
                                    success:function(result){
                                      $('#YardDashInche_'+Stu_Speed_YardDashIncheID).remove();
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
                             Endurance Push List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseSixteen" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary add_endpush">Add Endurance Push </button>				  
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
                        <tbody id="Push_List">
                            <?php $Gender_details=get_table_details('stu_endurance_push',
							'Stu_Endu_PushID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Push_<?php echo $Gender['Stu_Endu_PushID']; ?>">
                            <td><?php echo $Gender['Stu_Endu_PushID']; ?></td>
                            <td><?php echo $Gender['Stu_Endu_PushName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_push/<?php echo $Gender['Stu_Endu_PushID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_push('<?php echo $Gender['Stu_Endu_PushID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".add_endpush").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_four/add_push/',
                                    }
                                ]);
                            });
                        function remove_push(Stu_Endu_PushID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_four/delete_push/',
                                    type:'POST',
                                    data:{Stu_Endu_PushID:Stu_Endu_PushID},
                                    success:function(result){
                                      $('#Push_'+Stu_Endu_PushID).remove();
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
                             Endurance Pull List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseSeventeen" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary add_endpull">Add Endurance Pull </button>				  
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
                        <tbody id="Pull_List">
                            <?php $Gender_details=get_table_details('stu_endurance_pull',
							'Stu_Endu_PullID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Pull_<?php echo $Gender['Stu_Endu_PullID']; ?>">
                            <td><?php echo $Gender['Stu_Endu_PullID']; ?></td>
                            <td><?php echo $Gender['Stu_Endu_PullName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_pull/<?php echo $Gender['Stu_Endu_PullID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_pull('<?php echo $Gender['Stu_Endu_PullID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".add_endpull").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_four/add_pull/',
                                    }
                                ]);
                            });
                        function remove_pull(Stu_Endu_PullID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_four/delete_pull/',
                                    type:'POST',
                                    data:{Stu_Endu_PullID:Stu_Endu_PullID},
                                    success:function(result){
                                      $('#Pull_'+Stu_Endu_PullID).remove();
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
                              <a href="#collapseeightteen" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                             Endurance Sit List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseeightteen" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary add_endsit">Add Endurance Sit </button>				  
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
                        <tbody id="Sit_List">
                            <?php $Gender_details=get_table_details('stu_endurance_sit',
							'Stu_Endu_SitID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Sit_<?php echo $Gender['Stu_Endu_SitID']; ?>">
                            <td><?php echo $Gender['Stu_Endu_SitID']; ?></td>
                            <td><?php echo $Gender['Stu_Endu_SitName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_sit/<?php echo $Gender['Stu_Endu_SitID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_sit('<?php echo $Gender['Stu_Endu_SitID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".add_endsit").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_four/add_sit/',
                                    }
                                ]);
                            });
                        function remove_sit(Stu_Endu_SitID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_four/delete_sit/',
                                    type:'POST',
                                    data:{Stu_Endu_SitID:Stu_Endu_SitID},
                                    success:function(result){
                                      $('#Sit_'+Stu_Endu_SitID).remove();
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
                              <a href="#collapseeighttee" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                             Flexibility Reach List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseeighttee" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary add_endreach">Add Flexibility Reach </button>				  
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
                        <tbody id="Reach_List">
                            <?php $Gender_details=get_table_details('stu_flexibility_reach',
							'Stu_Fle_ReachID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Reach_<?php echo $Gender['Stu_Fle_ReachID']; ?>">
                            <td><?php echo $Gender['Stu_Fle_ReachID']; ?></td>
                            <td><?php echo $Gender['Stu_Fle_ReachName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_reach/<?php echo $Gender['Stu_Fle_ReachID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_reach('<?php echo $Gender['Stu_Fle_ReachID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".add_endreach").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_four/add_reach/',
                                    }
                                ]);
                            });
                        function remove_reach(Stu_Fle_ReachID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_four/delete_reach/',
                                    type:'POST',
                                    data:{Stu_Fle_ReachID:Stu_Fle_ReachID},
                                    success:function(result){
                                      $('#Reach_'+Stu_Fle_ReachID).remove();
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
                              <a href="#collapseeightt" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                             Flexibility Sit List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseeightt" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary add_endfle_sit">Add Flexibility Sit </button>				  
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
                        <tbody id="Fle_Sit_List">
                            <?php $Gender_details=get_table_details('stu_flexibility_sit',
							'Stu_Fle_SitID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Fle_Sit_<?php echo $Gender['Stu_Fle_SitID']; ?>">
                            <td><?php echo $Gender['Stu_Fle_SitID']; ?></td>
                            <td><?php echo $Gender['Stu_Fle_SitName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_fle_sit/<?php echo $Gender['Stu_Fle_SitID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_fle_sit('<?php echo $Gender['Stu_Fle_SitID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".add_endfle_sit").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_four/add_fle_sit/',
                                    }
                                ]);
                            });
                        function remove_fle_sit(Stu_Fle_SitID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_four/delete_fle_sit/',
                                    type:'POST',
                                    data:{Stu_Fle_SitID:Stu_Fle_SitID},
                                    success:function(result){
                                      $('#Fle_Sit_'+Stu_Fle_SitID).remove();
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
                              <a href="#collapseeigh" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                             Flexibility Back List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseeigh" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary add_endfle_back">Add Flexibility Back </button>				  
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
                        <tbody id="Fle_Back_List">
                            <?php $Gender_details=get_table_details('stu_flexibility_back',
							'Stu_Fle_BackID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Fle_Back_<?php echo $Gender['Stu_Fle_BackID']; ?>">
                            <td><?php echo $Gender['Stu_Fle_BackID']; ?></td>
                            <td><?php echo $Gender['Stu_Fle_BackName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_fle_back/<?php echo $Gender['Stu_Fle_BackID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_fle_back('<?php echo $Gender['Stu_Fle_BackID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".add_endfle_back").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_four/add_fle_back/',
                                    }
                                ]);
                            });
                        function remove_fle_back(Stu_Fle_BackID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_four/delete_fle_back/',
                                    type:'POST',
                                    data:{Stu_Fle_BackID:Stu_Fle_BackID},
                                    success:function(result){
                                      $('#Fle_Back_'+Stu_Fle_BackID).remove();
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
                              <a href="#collapseeigas" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                             Flexibility Scartch List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseeigas" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary add_endfle_scartch">Add Flexibility Scartch </button>				  
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
                        <tbody id="Fle_Scartch_List">
                            <?php $Gender_details=get_table_details('stu_flexibility_scartch',
							'Stu_Fle_ScartchID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Fle_Scartch_<?php echo $Gender['Stu_Fle_ScartchID']; ?>">
                            <td><?php echo $Gender['Stu_Fle_ScartchID']; ?></td>
                            <td><?php echo $Gender['Stu_Fle_ScartchName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_fle_scartch/<?php echo $Gender['Stu_Fle_ScartchID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_fle_scartch('<?php echo $Gender['Stu_Fle_ScartchID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".add_endfle_scartch").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_four/add_fle_scartch/',
                                    }
                                ]);
                            });
                        function remove_fle_scartch(Stu_Fle_ScartchID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_four/delete_fle_scartch/',
                                    type:'POST',
                                    data:{Stu_Fle_ScartchID:Stu_Fle_ScartchID},
                                    success:function(result){
                                      $('#Fle_Scartch_'+Stu_Fle_ScartchID).remove();
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
                              <a href="#collapseeigasf" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                             Body Mass List
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseeigasf" style="height: 0 px;">
                            <div class="panel-body">
                           <div class="buttoncss" style="padding:0 25px 0 0;">
                              <button class="btn btn-primary add_endbody_mass">Add Body Mass </button>				  
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
                        <tbody id="Body_Mass_List">
                            <?php $Gender_details=get_table_details('stu_body_mass',
							'Stu_Body_MassID'); ?>
                           <?php if(empty($Gender_details)) { echo " <tr><td colspan='3'>No Record Found.</td></tr>"; } else {  ?>
                           <?php foreach($Gender_details as $Gender){ ?>
                          <tr id="Body_Mass_<?php echo $Gender['Stu_Body_MassID']; ?>">
                            <td><?php echo $Gender['Stu_Body_MassID']; ?></td>
                            <td><?php echo $Gender['Stu_Body_MassName']; ?></td>
                            <td>
                              <a class="various fancybox.ajax" href="<?php echo base_url(); ?>admin/student_athlete_four/add_body_mass/<?php echo $Gender['Stu_Body_MassID']; ?> "><i class="fa fa-pencil"></i></a>
                              <a class="delete-row" href="javascript:void(0);" onclick="remove_body_mass('<?php echo $Gender['Stu_Body_MassID']; ?>')" ><i class="fa fa-trash-o"></i></a>
                            </td>
                          </tr>
                          <?php } } ?>
                        </tbody>
                      </table>
                     <script>
                        jQuery(".add_endbody_mass").click(function() {
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
                                        href: '<?php echo base_url(); ?>admin/student_athlete_four/add_body_mass/',
                                    }
                                ]);
                            });
                        function remove_body_mass(Stu_Body_MassID)
                        {
                            if(confirm("Are You Sure?"))
                            {
                                 $.ajax({
                                    url:'<?php echo base_url(); ?>admin/student_athlete_four/delete_body_mass/',
                                    type:'POST',
                                    data:{Stu_Body_MassID:Stu_Body_MassID},
                                    success:function(result){
                                      $('#Body_Mass_'+Stu_Body_MassID).remove();
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


