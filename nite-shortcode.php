<?php
/*
Plugin Name: Nite Shortcodes
Plugin URI: http://nitethemes.com/nite-shortcodes/
Description: A free shortcodes plugin - Easily create tabs, buttons, boxes, message box, responsive videos and much, much more with <a href="http://nitethemes.com/nite-shortcodes/">nite shortcode</a>
Author: nitethemes
Version: 1.0
Author URI: http://nitethemes.com
*/

function nite_scripts() {
            
    wp_register_style('nite_shortcodes', plugins_url('css/nite-shortcodes.css', __FILE__));
    wp_enqueue_style('nite_shortcodes');
    
    wp_register_script('nite_shortcodes', plugins_url('js/nite-shortcodes.js', __FILE__), array('jquery'));
    wp_enqueue_script('nite_shortcodes');
}
add_action('wp_enqueue_scripts', 'nite_scripts', 99);

function nite_shortcodes_load_textdomain() {
  load_plugin_textdomain( 'niteshortcode', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' ); 
}
add_action( 'plugins_loaded', 'nite_shortcodes_load_textdomain' );

include('tinymce/tinymce.php');

// override theme shortcodes
add_action( 'after_setup_theme', 'nite_shortcodes_add' );

function nite_shortcodes_add() {
	remove_shortcode('button-pink'); add_shortcode('button-pink', 'nitethemes_button_pink');
	remove_shortcode('button-grey'); add_shortcode('button-grey', 'nitethemes_button_grey');
    remove_shortcode('button-brown'); add_shortcode('button-brown', 'nitethemes_button_brown');
    remove_shortcode('button-blue'); add_shortcode('button-blue', 'nitethemes_button_blue');
	remove_shortcode('button-lightblue'); add_shortcode('button-lightblue', 'nitethemes_button_lightblue');
    remove_shortcode('button-green'); add_shortcode('button-green', 'nitethemes_button_green');
    remove_shortcode('button-red'); add_shortcode('button-red', 'nitethemes_button_red');
    remove_shortcode('button-white'); add_shortcode('button-white', 'nitethemes_button_white');
    remove_shortcode('button-orange'); add_shortcode('button-orange', 'nitethemes_button_orange');
	remove_shortcode('button-yellow'); add_shortcode('button-yellow', 'nitethemes_button_yellow');
	remove_shortcode('button-black'); add_shortcode('button-black', 'nitethemes_button_black');
	remove_shortcode('button-purple'); add_shortcode('button-purple', 'nitethemes_button_purple');
    remove_shortcode('alert-note'); add_shortcode('alert-note', 'nitethemes_alert_note');
    remove_shortcode('alert-announce'); add_shortcode('alert-announce', 'nitethemes_alert_announce');
    remove_shortcode('alert-success'); add_shortcode('alert-success', 'nitethemes_alert_success');
    remove_shortcode('alert-warning'); add_shortcode('alert-warning', 'nitethemes_alert_warning');
    remove_shortcode('dropcaps'); add_shortcode('dropcaps', 'nitethemes_dropcaps');
    remove_shortcode('one_third'); add_shortcode('one_third', 'nitethemes_one_third');
    remove_shortcode('one_third_last'); add_shortcode('one_third_last', 'nitethemes_one_third_last');
    remove_shortcode('two_third'); add_shortcode('two_third', 'nitethemes_two_third');
    remove_shortcode('two_third_last'); add_shortcode('two_third_last', 'nitethemes_two_third_last');
    remove_shortcode('one_half'); add_shortcode('one_half', 'nitethemes_one_half');
    remove_shortcode('one_half_last'); add_shortcode('one_half_last', 'nitethemes_one_half_last');
    remove_shortcode('one_fourth'); add_shortcode('one_fourth', 'nitethemes_one_fourth');
    remove_shortcode('one_fourth_last'); add_shortcode('one_fourth_last', 'nitethemes_one_fourth_last');
    remove_shortcode('three_fourth'); add_shortcode('three_fourth', 'nitethemes_three_fourth');
    remove_shortcode('three_fourth_last'); add_shortcode('three_fourth_last', 'nitethemes_three_fourth_last');
    remove_shortcode('one_fifth'); add_shortcode('one_fifth', 'nitethemes_one_fifth');
    remove_shortcode('one_fifth_last'); add_shortcode('one_fifth_last', 'nitethemes_one_fifth_last');
    remove_shortcode('two_fifth'); add_shortcode('two_fifth', 'nitethemes_two_fifth');
    remove_shortcode('two_fifth_last'); add_shortcode('two_fifth_last', 'nitethemes_two_fifth_last');
    remove_shortcode('three_fifth'); add_shortcode('three_fifth', 'nitethemes_three_fifth');
    remove_shortcode('three_fifth_last'); add_shortcode('three_fifth_last', 'nitethemes_three_fifth_last');
    remove_shortcode('four_fifth'); add_shortcode('four_fifth', 'nitethemes_four_fifth');
    remove_shortcode('four_fifth_last'); add_shortcode('four_fifth_last', 'nitethemes_four_fifth_last');
    remove_shortcode('one_sixth'); add_shortcode('one_sixth', 'nitethemes_one_sixth');
    remove_shortcode('one_sixth_last'); add_shortcode('one_sixth_last', 'nitethemes_one_sixth_last');
    remove_shortcode('five_sixth'); add_shortcode('five_sixth', 'nitethemes_five_sixth');
    remove_shortcode('five_sixth_last'); add_shortcode('five_sixth_last', 'nitethemes_five_sixth_last');
    remove_shortcode('youtube'); add_shortcode('youtube', 'nitethemes_youtube_video');
    remove_shortcode('vimeo'); add_shortcode('vimeo', 'nitethemes_vimeo_video');
    remove_shortcode('googlemap'); add_shortcode('googlemap', 'nitethemes_googleMaps');
    remove_shortcode('tabs'); add_shortcode('tabs', 'nitethemes_tabs');
    remove_shortcode('toggle'); add_shortcode('toggle', 'nitethemes_toggle');
    remove_shortcode('clear'); add_shortcode('clear', 'nitethemes_clear');
}


/*-----------------------------------------------------------------------------------*/
/*	Buttons Shortcodes
/*-----------------------------------------------------------------------------------*/

function nitethemes_button_pink( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'url'     	 => '#',
		'target'     => '_self'
    ), $atts));
	$out = "<a href=\"" .$url. "\" target=\"" .$target. "\" class=\"buttons button_pink\">".do_shortcode($content)."</a>";
	return $out;
}

function nitethemes_button_grey( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'url'     	 => '#',
		'target'     => '_self'
    ), $atts));
	$out = "<a href=\"" .$url. "\" target=\"" .$target. "\" class=\"buttons button_grey\">".do_shortcode($content)."</a>";
	return $out;
}

function nitethemes_button_brown( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'url'     	 => '#',
		'target'     => '_self'
    ), $atts));
	$out = "<a href=\"" .$url. "\" target=\"" .$target. "\" class=\"buttons button_brown\">".do_shortcode($content)."</a>";
	return $out;
}

function nitethemes_button_blue( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'url'     	 => '#',
		'target'     => '_self'
    ), $atts));
	$out = "<a href=\"" .$url. "\" target=\"" .$target. "\" class=\"buttons button_blue\">".do_shortcode($content)."</a>";
	return $out;
}

function nitethemes_button_lightblue( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'url'     	 => '#',
		'target'     => '_self'
    ), $atts));
	$out = "<a href=\"" .$url. "\" target=\"" .$target. "\" class=\"buttons button_lightblue\">".do_shortcode($content)."</a>";
	return $out;
}

function nitethemes_button_green( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'url'     	 => '#',
		'target'     => '_self'
    ), $atts));
	$out = "<a href=\"" .$url. "\" target=\"" .$target. "\" class=\"buttons button_green\">".do_shortcode($content)."</a>";
	return $out;
}

function nitethemes_button_red( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'url'     	 => '#',
		'target'     => '_self'
    ), $atts));
	$out = "<a href=\"" .$url. "\" target=\"" .$target. "\" class=\"buttons button_red\">".do_shortcode($content)."</a>";
	return $out;
}

function nitethemes_button_white( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'url'     	 => '#',
		'target'     => '_self'
    ), $atts));
	$out = "<a href=\"" .$url. "\" target=\"" .$target. "\" class=\"buttons button_white\">".do_shortcode($content)."</a>";
	return $out;
}

function nitethemes_button_orange( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'url'     	 => '#',
		'target'     => '_self'
    ), $atts));
	$out = "<a href=\"" .$url. "\" target=\"" .$target. "\" class=\"buttons button_orange\">".do_shortcode($content)."</a>";
	return $out;
}

function nitethemes_button_yellow( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'url'     	 => '#',
		'target'     => '_self'
    ), $atts));
	$out = "<a href=\"" .$url. "\" target=\"" .$target. "\" class=\"buttons button_yellow\">".do_shortcode($content)."</a>";
	return $out;
}

function nitethemes_button_black( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'url'     	 => '#',
		'target'     => '_self'
    ), $atts));
	$out = "<a href=\"" .$url. "\" target=\"" .$target. "\" class=\"buttons button_black\">".do_shortcode($content)."</a>";
	return $out;
}

function nitethemes_button_purple( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'url'     	 => '#',
		'target'     => '_self',
		'position'   => 'left'
    ), $atts));
	$out = "<a href=\"" .$url. "\" target=\"" .$target. "\" class=\"buttons button_purple\">".do_shortcode($content)."</a>";
    return $out;
}
/*-----------------------------------------------------------------------------------*/
/*	Alert Shortcodes
/*-----------------------------------------------------------------------------------*/

function nitethemes_alert_note( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'style'    	 => 'note'
    ), $atts));
	$out = "<div class=\"message_box note\"><p>".do_shortcode($content)."</p></div>";
    return $out;
}

function nitethemes_alert_announce( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'style'    	 => 'announce'
    ), $atts));
	$out = "<div class=\"message_box announce\"><p>".do_shortcode($content)."</p></div>";
    return $out;
}

function nitethemes_alert_success( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'style'    	 => 'success'
    ), $atts));
	$out = "<div class=\"message_box success\"><p>".do_shortcode($content)."</p></div>";
    return $out;
}

function nitethemes_alert_warning( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'style'    	 => 'warning'
    ), $atts));
	$out = "<div class=\"message_box warning\"><p>".do_shortcode($content)."</p></div>";
    return $out;
}

/*-----------------------------------------------------------------------------------*/
/*	Dropcaps Shortcodes
/*-----------------------------------------------------------------------------------*/
function nitethemes_dropcaps( $atts, $content = null ) {
    return '<span class="dropcaps">' . do_shortcode($content) . '</span>';
}
/*-----------------------------------------------------------------------------------*/
/*	Column Shortcodes
/*-----------------------------------------------------------------------------------*/

function nitethemes_one_third( $atts, $content = null ) {
   return '<div class="one_third">' . do_shortcode($content) . '</div>';
}

function nitethemes_one_third_last( $atts, $content = null ) {
   return '<div class="one_third column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function nitethemes_two_third( $atts, $content = null ) {
   return '<div class="two_third">' . do_shortcode($content) . '</div>';
}

function nitethemes_two_third_last( $atts, $content = null ) {
   return '<div class="two_third column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function nitethemes_one_half( $atts, $content = null ) {
   return '<div class="one_half">' . do_shortcode($content) . '</div>';
}

function nitethemes_one_half_last( $atts, $content = null ) {
   return '<div class="one_half column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function nitethemes_one_fourth( $atts, $content = null ) {
   return '<div class="one_fourth">' . do_shortcode($content) . '</div>';
}

function nitethemes_one_fourth_last( $atts, $content = null ) {
   return '<div class="one_fourth column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function nitethemes_three_fourth( $atts, $content = null ) {
   return '<div class="three_fourth">' . do_shortcode($content) . '</div>';
}

function nitethemes_three_fourth_last( $atts, $content = null ) {
   return '<div class="three_fourth column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function nitethemes_one_fifth( $atts, $content = null ) {
   return '<div class="one_fifth">' . do_shortcode($content) . '</div>';
}

function nitethemes_one_fifth_last( $atts, $content = null ) {
   return '<div class="one_fifth column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function nitethemes_two_fifth( $atts, $content = null ) {
   return '<div class="two_fifth">' . do_shortcode($content) . '</div>';
}

function nitethemes_two_fifth_last( $atts, $content = null ) {
   return '<div class="two_fifth column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function nitethemes_three_fifth( $atts, $content = null ) {
   return '<div class="three_fifth">' . do_shortcode($content) . '</div>';
}

function nitethemes_three_fifth_last( $atts, $content = null ) {
   return '<div class="three_fifth column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function nitethemes_four_fifth( $atts, $content = null ) {
   return '<div class="four_fifth">' . do_shortcode($content) . '</div>';
}

function nitethemes_four_fifth_last( $atts, $content = null ) {
   return '<div class="four_fifth column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function nitethemes_one_sixth( $atts, $content = null ) {
   return '<div class="one_sixth">' . do_shortcode($content) . '</div>';
}

function nitethemes_one_sixth_last( $atts, $content = null ) {
   return '<div class="one_sixth column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function nitethemes_five_sixth( $atts, $content = null ) {
   return '<div class="five_sixth">' . do_shortcode($content) . '</div>';
}

function nitethemes_five_sixth_last( $atts, $content = null ) {
   return '<div class="five_sixth column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

/*-----------------------------------------------------------------------------------*/
/*	Video Shortcodes
/*-----------------------------------------------------------------------------------*/
function nitethemes_youtube_video( $atts, $content = null ) {  
    extract(shortcode_atts( array(  
        'id' => '',  
        'width' => '600',  
        'height' => '340',
		'position'   => 'left'
    ), $atts));  
    $out = "<div class=\"youtube-video " .$position . "\"><iframe width=\"" .$width . "\" height=\"" .$height ."\" src=\"http://www.youtube.com/embed/" . $id . "?rel=0\" frameborder=\"0\" allowfullscreen></iframe></div>";
	return $out;
}  

function nitethemes_vimeo_video( $atts, $content = null ) {  
    extract(shortcode_atts( array(  
        'id' => '',  
        'width' => '600',  
        'height' => '340',
		'position'   => 'left'
    ), $atts));  
    $out = "<div class=\"vimeo-video " .$position . "\"><iframe width=\"" .$width . "\" height=\"" .$height ."\" src=\"http://player.vimeo.com/video/" . $id . "?title=0&amp;byline=0&amp;portrait=0\" frameborder=\"0\" allowfullscreen></iframe></div>";
	return $out;
}  

/*-----------------------------------------------------------------------------------*/
/*	GoogleMaps Shortcode
/*-----------------------------------------------------------------------------------*/
function nitethemes_googleMaps($atts, $content = null) {
   extract(shortcode_atts(array(
      'width' => '640',
      'height' => '480',
      'address' => '',
      'src' => '', // for backwards compatibility
	  'position' => 'left'
   ), $atts));
   if (!empty($src)) {
     $out = "<div class=\"googlemaps " .$position . "\"><iframe width=\"".$width."\" height=\"".$height."\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"".$src."&output=embed\"></iframe></div>";
   } else {
     $out = "<div class=\"googlemaps " .$position . "\"><iframe width=\"".$width."\" height=\"".$height."\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"//maps.google.com/maps?q=".urlencode($address)."&output=embed\"></iframe></div>";
   }
   return $out;
}

/*-----------------------------------------------------------------------------------*/
/*	Tabs
/*-----------------------------------------------------------------------------------*/
function nitethemes_tabs( $atts, $content = null ) {
	
	if (!preg_match_all("/(.?)\[(tab)\b(.*?)(?:(\/))?\](?:(.+?)\[\/tab\])?(.?)/s", $content, $matches)) {
		return do_shortcode($content);
	} else {
		for($i = 0; $i < count($matches[0]); $i++) {
			$matches[3][$i] = shortcode_parse_atts($matches[3][$i]);
			$tabid[$i] = 'tab-'.$i.'-'.strtolower(sanitize_title($matches[3][$i]['title']));
		}
		$tabnav = '<ul class="wps_tabs">';
		
		for($i = 0; $i < count($matches[0]); $i++) {
			$tabnav .= '<li><a href="#" data-tab="'.$tabid[$i].'">' . $matches[3][$i]['title'] . '</a></li>';
		}
		$tabnav .= '</ul>';
		
		$tabcontent = '<div class="tab_container">';
		for($i = 0; $i < count($matches[0]); $i++) {
			$tabcontent .= '<div id="'.$tabid[$i].'" class="tab_content clearfix">' . do_shortcode(trim($matches[5][$i])) . '</div>';
		}
		$tabcontent .= '</div>';

		return '<div class="tab_widget nite_shortcodes_tabs">' . $tabnav . $tabcontent . '</div><div class="clear"></div>';
	}
    
}

/*--------------------------------------------------------
    Toggles
--------------------------------------------------------*/

function nitethemes_toggle( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'title' => __('Toggle Title', 'niteshortcode')
	), $atts));
    
	return '<div class="toggle clearfix nite_shortcodes_toggle"><div class="wps_togglet"><span>' . $title . '</span></div><div class="togglec clearfix">' . do_shortcode(trim($content)) . '</div></div><div class="clear"></div>';
}

/*-----------------------------------------------------------------------------------*/
/*	Clear
/*-----------------------------------------------------------------------------------*/


// Used to clear an element of its neighbors, no floating elements are allowed on the left or the right side.
function nitethemes_clear( $atts ) {
    return '<div class="clear"></div>';
}

?>