<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function plugOPB_check_installation_date() {
 
    $userId = get_current_user_id();
    $reviewNoticeOption = get_option('plugOPB_hide_bugs1two_'.$userId);
    $specialOfferNoBugOp = get_option('plugOPB_hide_specialOffer_'.$userId);

    if (!$specialOfferNoBugOp) {

        $install_date = get_option( 'plugOps_activation_date' );
        $past_date = strtotime( '-3 days' );
 
        if ( (int)$past_date > (int)$install_date ) {

            if ( ! function_exists('ulpb_available_pro_widgets') ) {
                add_action( 'admin_notices', 'plugOPB_display_lto_disc_notice' );
            }

        }
    }

    
    // if (!$reviewNoticeOption) {

    //     $install_date = get_option( 'plugOps_activation_date' );
    //     $past_date = strtotime( '-7 days' );
 
    //     if ( (int)$past_date > (int)$install_date ) {
 
    //         add_action( 'admin_notices', 'plugOPB_display_admin_Rev_Notice' );
 
    //     }

    // }

    

   

    
    

    $noWelcomeNotice = get_option('plugOPB_hide_welcomeNotice_'.$userId);
    if ($noWelcomeNotice != 'hideNotice') {
        add_action( 'admin_notices', 'plugOPB_display_admin_welcomeNotice' );
    }

	//update_option('imgLib_db_updated', 'false');
    $is_imgLibDbUpdated = get_option('imgLib_db_updated', 'false');

    if($is_imgLibDbUpdated !== 'true'){
        if(get_option('pluginOps_d_upd_not_req', true)){
            add_action( 'admin_notices', 'pluginops_db_update_notice_imageLib' );
        }
        
    }
 
}
add_action( 'admin_init', 'plugOPB_check_installation_date' );

function plugOPB_display_admin_Rev_Notice() {
 
    $reviewurl = 'https://wordpress.org/support/plugin/page-builder-add/reviews/?rate=5#new-post';
    
    global $wp;
    $nobugurl = home_url( $wp->request ) . '?plugOPB_hide_bugs=1';

    if(strpos($nobugurl, 'wp-admin') == false){
        $nobugurl = get_admin_url() . '?plugOPB_hide_bugs=1';
    }


    $thisAdminURL = get_admin_url();
    $thisDefaultUrlProtocol =  'http://';
    if (strpos($thisAdminURL, 'https') !== false ) {
        $thisDefaultUrlProtocol =  'https://';
    }

    $actual_link = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if (strpos($actual_link, '?') == false) {
        $nobugurl = $actual_link . '?plugOPB_hide_bugs=1';
    }else{
        $nobugurl = $actual_link . '&plugOPB_hide_bugs=1';
    }

    $nobugurl = $thisDefaultUrlProtocol.$nobugurl;

    $install_date = get_option( 'plugOPB_activation_date' );

    echo "<div class='notice notice-success  pluginopsWriteReview'>
        
        <p style='display:inline-block;'>Do you like <strong> PluginOps Landing Page Builder ? </strong> <br> Please help us by posting your feedback here : <b> <a href=".$reviewurl." target='_blank'> Feedback Page </a> </b> </p>

        <a href=".$nobugurl."><button type='button' class='notice-dismiss' style='display:inline-block; position:relative; float:right;'><span class='screen-reader-text'>Dismiss this notice.</span></button></a>
    </div>";

}

function pluginops_db_update_notice_imageLib() {
    
   
    echo "<div class='notice notice-success  pluginopsDbUpdateNotice'>
        
        <p style='display:inline-block;'>PluginOps database upgrade required, Click on the following button to run the database updater automatically. </p>
        <a href='#' target='_blank' id='pluginops_imglib_dataUpdater'> <span style='display:inline-block; text-align:center; padding: 0.3rem 0.9rem; background:#0073aa; color:#fff; border-radius:4px; font-size:0.8rem; margin-left:1rem; '>Run Updater</span> </a>
        
    </div>";

}


function plugOPB_display_lto_disc_notice() {
 
    $current_screen = get_current_screen();        
    if($current_screen){
        if($current_screen->id == 'dashboard' || $current_screen->id == 'edit-ulpb_post' || $current_screen->id == 'ulpb_post' || $current_screen->id == 'ulpb_post_page_page-builder-new-landing-page' ){

            include "lto-notice.php";
            echo ltoNoticeDefault();
            
        }
    }

}

function plugOPB_display_admin_welcomeNotice() {
 
    
    global $wp;


    $thisAdminURL = get_admin_url();
    $thisDefaultUrlProtocol =  'http://';
    if (strpos($thisAdminURL, 'https') !== false ) {
        $thisDefaultUrlProtocol =  'https://';
    }

    $actual_link = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if (strpos($actual_link, '?') === false) {
        $nobugurl = $actual_link . '?plugOPB_hide_welcome_notice=hidewelcomenotice';
    }else{
        $nobugurl = $actual_link . '&plugOPB_hide_welcome_notice=hidewelcomenotice';
    }

    $nobugurl = $thisDefaultUrlProtocol.$nobugurl;


    $install_date = get_option( 'plugOPB_activation_date' );

    echo "<div class='notice notice-success  pluginopsWelcomeNotice'>
        
        <p style='display:inline-block;'>Welcome  😀  - Thanks for installing PluginOps Landing Page Builder   | <b> <a href='https://pluginops.com/docs/home/' target='_blank'> Documentation </a> </b> </p>

        <a href=".$nobugurl."><button type='button' class='notice-dismiss' style='display:inline-block; position:relative; float:right;'><span class='screen-reader-text'>Dismiss this notice.</span></button></a>
    </div>";

}


function plugOPB_set_no_bug() {
 
    $nobug = "";
    if ( isset( $_GET['plugOPB_hide_bugs'] ) ) {
        $nobug = esc_attr( $_GET['plugOPB_hide_bugs'] );
    }

    $welcomeNoticeNobug  = '';
    if ( isset( $_GET['plugOPB_hide_welcome_notice'] ) ) {
        $welcomeNoticeNobug = esc_attr( $_GET['plugOPB_hide_welcome_notice'] );
    }  

    $holidaybug = '';
    if ( isset( $_GET['plugOPB_hide_holiday'] ) ) {
        $holidaybug = esc_attr( $_GET['plugOPB_hide_holiday'] );
    }

    //delete_option( 'plugOpB_hide_plugin_install_notice' );
    $pluginInstallNoBug = '';
    if ( isset( $_GET['plugOPB_hide_plugin_install_notice'] ) ) {
        if ( 1 == esc_attr( $_GET['plugOPB_hide_plugin_install_notice'] ) ) {
            add_option( 'plugOpB_hide_plugin_install_notice', TRUE );
        }
    }

    if ( 1 == $nobug ) {
        $userId = get_current_user_id();
        add_option( 'plugOPB_hide_bugs1two_'.$userId, TRUE );
    }

    if ( 1 == $holidaybug ) {
        $userId = get_current_user_id();
        add_option( 'plugOPB_hide_specialOffer_'.$userId, TRUE );
    }

    
    // delete_option( 'plugOPB_hide_bugs1two_'.get_current_user_id() );
    // delete_option( 'plugOPB_hide_specialOffer_'.get_current_user_id() );
    // delete_option( 'plugOPB_hide_welcomeNotice_'.get_current_user_id() );

    if ($welcomeNoticeNobug == 'hidewelcomenotice') {
        $userId = get_current_user_id();
        update_option( 'plugOPB_hide_welcomeNotice_'.$userId, 'hideNotice' );
    }

    
    //delete_option( 'plugOPB_hide_welcomeNotice_'.get_current_user_id() );
 
 
} add_action( 'admin_init', 'plugOPB_set_no_bug', 5 );

?>