 <style type="text/css">
 
#share-buttons img {
width: initial;
padding: 5px;
margin: 25px 0 0 25px;
border: 0;
box-shadow: 0;
display: inline;
}
div#share-buttons a:first-child img {
    /* padding-left: 0; */
    /*margin-left: 0;*/
        margin-left: 36px;
}
.sharebtn{
    margin-top: -10px !important;
    cursor: pointer;
}
#sharelink textarea{
    font-weight: bold;
    font-size: 20px;
}
.socialicons{
        margin-top: 10px;
    margin-right: 10px;

}
 
</style>
<script>
$(document).ready(function(){
    $('.play-icon').embedly({
      key:'0abdd71eae8b4f7b81db0ee51f352b74',
      query: {
        autoplay:true
      },
      display: function(data, elem){
        //Adds the image to the a tag and then sets up the sizing.
        $('#athe').html('<img src="'+data.thumbnail_url+'"/>')
         
      }
    })
    
    
    
    });

    

</script>
 
  <form name="Get_student" id="upgrade" method="post" action="<?php echo base_url(); ?>dashboard_admin/upgrade_student" enctype="multipart/form-data" >
    <div class="frm clearfix">
     <div class="frm clearfix" id="Video_Up">
        <input class="fl" type="text" id="email_id" name="email_id" placeholder="email" style="max-width:40%;margin-left: 5%"/> 

        <select class="exp-mnth fr" name="payment_type" id="payment_type" style="max-width:45%; margin-right: 5%">
              <option value="0">Select Subscription Type</option>
              <option value="1">Monthly Membership - $9.99 </option>
              <option value="2">Yearly Membership - $99.99 </option>
              <option value="3">Lifetime Membership - $199.99</option>
        </select>
     </div>
    
    <div class="post-btn fl clearfix" style="margin-right: 5%;">
        <a href="javascript:void(0);" onclick="$('#upgrade').submit();">Post</a>
    </div>
</div>
</form>

