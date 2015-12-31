<?php
/*--------------------------------------------------------------
    HIDE ACF MENU ITEM FROM THE ADMIN MENU
--------------------------------------------------------------*/
// add_action( 'admin_menu', 'btwp_hide_acf_menu', 999 );

// function btwp_hide_acf_menu(){

//     // users can view the menu
//     $admins = array( 
//         'name-admin'
//     );

//     // get the current user
//     $current_user = wp_get_current_user();

//     // match and remove if needed
//     if( !in_array( $current_user->user_login, $admins ) )
//     {
//         remove_menu_page('edit.php?post_type=acf');
//     }

// }

/*--------------------------------------------------------------
    HIDE USERNAMES FROM COMMENT CLASS
--------------------------------------------------------------*/ 
add_filter('comment_class', 'btwp_true_completely_remove_css_class');

function btwp_true_completely_remove_css_class( $classes ) {
    
    foreach( $classes as $key => $class ) {
        if(strstr( $class, "comment-author-" ) ) {
            unset( $classes[$key] );
        }
    }
    
    return $classes;

}