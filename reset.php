function scratchcode_run_code_one_time() {
    if ( !get_option('run_only_once_01') ):
 
        // Execute your one time code here
        $user_id= 100;
        $login_count = intval(200);
        update_user_meta( $user_id, 'wp_login_count', ( (int) $login_count ) );
        add_option('run_only_once_01', 1); 
    endif;
}
add_action( 'init', 'scratchcode_run_code_one_time' );
