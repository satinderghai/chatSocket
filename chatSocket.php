<?php
  ob_start();
/*
    Plugin Name: Chat Websocket
    Description: .
    Version: 1.0
    Author: Sanctuaryappbackend
*/
    include "vendor/autoload.php";

add_filter('theme_page_templates', 'add_page_template_for_websocket');
add_filter('template_include', 'socket_change_page_template', 99);

// Add render id filed in user profile which save render id from WebSocket
    function extra_profile_fields( $user ) { ?>

      <table class="form-table">
        <tr>
          <th><label for="gmail">Render ID</label></th>
          <td>
            <input type="text" name="render_id" id="render_id" value="<?php echo esc_attr( get_the_author_meta( 'render_id', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description">Enter Render Id</span>
          </td>
        </tr>

      </table>
      <?php

    }

// Then we hook the function to "show_user_profile" and "edit_user_profile"
    add_action( 'show_user_profile', 'extra_profile_fields', 10 );
    add_action( 'edit_user_profile', 'extra_profile_fields', 10 );


    function save_extra_profile_fields( $user_id ) {

      if ( !current_user_can( 'edit_user', $user_id ) )
        return false;

      /* Edit the following lines according to your set fields */
      update_usermeta( $user_id, 'render_id', $_POST['render_id'] );
    }

    add_action( 'personal_options_update', 'save_extra_profile_fields' );
    add_action( 'edit_user_profile_update', 'save_extra_profile_fields' );

    /* AJAX request */

// Fetch all records of websocket
    add_action( 'wp_ajax_websocketResponseGet', 'websocketResponseGet_callback' );
    add_action( 'wp_ajax_nopriv_websocketResponseGet', 'websocketResponseGet_callback' );

    function websocketResponseGet_callback() {
     ob_clean();
     $client = new WebSocket\Client("wss://staging.sanctuaryappbackend.com/web/reading/v1/readers/status/ws?auth=FBt%7Cvuj%23=wZk%23iPs%23^8*K@^");
     echo $res = $client->receive();
     $client->close();
     wp_die(); 

   }

// Websocket call URL

   function init_web_socket()
   {
    ?>
 
    <script type="text/javascript">

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
  </script>

  <?php
}


add_action('wp_footer', 'init_web_socket'); 

/**
 * Add page templates.
 *
 * @param  array  $templates  The list of page templates
 *
 * @return array  $templates  The modified list of page templates
 */
function add_page_template_for_websocket($templates)
{
    $templates[dirname(__FILE__).'/templates/web-socket-template.php'] = __('Web Socket Template', 'text-domain');

    return $templates;
}

/**
 * Change the page template to the selected template on the dropdown
 * 
 * @param $template
 *
 * @return mixed
 */
function socket_change_page_template($template)
{
    if (is_page()) {
        $meta = get_post_meta(get_the_ID());

        if (!empty($meta['_wp_page_template'][0]) && $meta['_wp_page_template'][0] != $template) {
            $template = $meta['_wp_page_template'][0];
        }
    }

    return $template;
}

?>
