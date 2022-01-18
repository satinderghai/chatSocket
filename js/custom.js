    jQuery(document).ready(function(){

      setInterval(function()
      { 
       var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";

       jQuery.ajax({
        type: 'GET',
        url: ajaxurl,
        data: { action: 'websocketResponseGet' },
        dataType: 'json',
        success:function(response)
        {

         var data = JSON.stringify(response);
   // console.log(data);
   jQuery.each(JSON.parse(data), function (key, value) {   

    // console.log(value.reader_id);

    if(value.status == 'available'){
     jQuery('#'+value.reader_id).find('.online-status').addClass('status-green');
     jQuery('#'+value.reader_id).find('.online-status').removeClass('status-black');
     jQuery('#'+value.reader_id).find('.online-status').removeClass('status-yellow');
    // jQuery('.status-green').find('.online-status').css("background-color", "yellow");



    jQuery('#'+value.reader_id).find('.user-status-section').addClass('status-green');
    jQuery('#'+value.reader_id).find('.user-status-section').removeClass('status-black');
    jQuery('#'+value.reader_id).find('.user-status-section').removeClass('status-yellow');

  }else if(value.status == 'offline'){
   jQuery('#'+value.reader_id).find('.online-status').addClass('status-black');
   jQuery('#'+value.reader_id).find('.online-status').removeClass('status-green');
   jQuery('.user-section-'+value.reader_id).find('.online-status').removeClass('status-yellow');


   jQuery('#'+value.reader_id).find('.user-status-section').addClass('status-black');
   jQuery('#'+value.reader_id).find('.user-status-section').removeClass('status-green');
   jQuery('#'+value.reader_id).find('.user-status-section').removeClass('status-yellow');
 }else{
   jQuery('#'+value.reader_id).find('.online-status').addClass('status-yellow');
   jQuery('#'+value.reader_id).find('.online-status').removeClass('status-green');
   jQuery('#'+value.reader_id).find('.online-status').removeClass('status-black');

   jQuery('#'+value.reader_id).find('.user-status-section').addClass('status-yellow');

   jQuery('#'+value.reader_id).find('.user-status-section').removeClass('status-green');
   jQuery('#'+value.reader_id).find('.user-status-section').removeClass('status-black');
 }


 jQuery('#'+value.reader_id).find('.user-status-section').html(value.status);
});    

 }
});
}, 3000);//time in milliseconds 


    });