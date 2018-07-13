<?php 
/**
 * Runs on Posts Frontend
 *
 * @package   WP Last Modified Info
 * @author    Sayan Datta
 * @license   http://www.gnu.org/licenses/gpl.html
 */

add_filter( 'the_content', 'lmt_print_last_modified_info_post' );

function lmt_print_last_modified_info_post( $content ) {

    include 'post.php';

    if( isset($options['lmt_show_last_modified_time_date_post']) && ( $options['lmt_show_last_modified_time_date_post'] == 'Manual' ) ) {    
        return $content;
    }

    if( is_single() && (get_the_modified_time('U') > get_the_time('U')) && isset($modified_content) ) {

        if( isset($options['lmt_show_last_modified_time_date_post']) && ($options['lmt_show_last_modified_time_date_post'] == 'Before Content') ) {
            $fullcontent = $modified_content . $content; 
        }
        elseif( isset($options['lmt_show_last_modified_time_date_post']) && ($options['lmt_show_last_modified_time_date_post'] == 'After Content') ) {
            $fullcontent = $content . $modified_content;
        }
    } 

    if ( isset($fullcontent) && is_singular( 'post' ) && !get_post_meta( get_the_ID(), '_lmt_disable', true ) == 'yes' ) { 
        return $fullcontent;
    }

    if( isset($options['lmt_custom_post_types_list']) ) {
        $post_types = $options['lmt_custom_post_types_list'];
        foreach($post_types as $item) {
            if ( isset($fullcontent) && is_singular( $item ) && !get_post_meta( get_the_ID(), '_lmt_disable', true ) == 'yes' ) { 
                return $fullcontent;
            }
        }
    }
    return $content;
}

?>