<?php
/*
Plugin Name: LUNA RADIO PLAYER
Plugin URI: https://radioplayer.luna-universe.com
Description: Native internet web radio player built in HTML5/Javascript/CSS for shoutcast 2, icecast2, radiojar, radionomy & radio.co. 
Version: 6.22.04.11
Author: Sodah
Author URI: https://www.sodah.de
Text Domain: lu_radioplayer
Update URI: false
*/


/**
 * shortcode  
 * 
 *
 * @param  array $atts
 *
 * @return string
 */
function lunaradio_shortcode($atts=array()){	
    global $post;
    global $data;
    $id = lunaradio_default($atts['id'], "lunaradio".rand());
    $borderposition = lunaradio_default($atts['borderposition'], "none");
    $bordercolor = lunaradio_default($atts['bordercolor'], "#ffffff");
    $bordersize = lunaradio_default($atts['bordersize'], "0px");

    $myborder = "border:";
    switch ($borderposition) {
        case "all":
            $myborder = "border: ".$bordersize." solid ".$bordercolor.";";
            break;
        case "none":
            $myborder = "border: none;" ;
            break;
        default:
            $myborder = "border-".$borderposition.": ".$bordersize." solid ".$bordercolor.";";
            break;
    }
    
	$content1 = "
	<div class='wp-lunaradio' id='".$id."' style='width:".lunaradio_default($atts['width'], "100%")."; height:".lunaradio_default($atts['height'], "0px")."; 
  -webkit-border-top-left-radius: ".lunaradio_default($atts['radiustopleft'], "0px").";
  -webkit-border-top-right-radius: ".lunaradio_default($atts['radiustopright'], "0px").";
  -webkit-border-bottom-right-radius: ".lunaradio_default($atts['radiusbottomright'], "0px").";
  -webkit-border-bottom-left-radius: ".lunaradio_default($atts['radiusbottomleft'], "0px").";
  -moz-border-radius-topleft: ".lunaradio_default($atts['radiustopleft'], "0px").";
  -moz-border-radius-topright: ".lunaradio_default($atts['radiustopright'], "0px").";
  -moz-border-radius-bottomright: ".lunaradio_default($atts['radiusbottomright'], "0px").";
  -moz-border-radius-bottomleft: ".lunaradio_default($atts['radiusbottomleft'], "0px").";
  border-top-left-radius: ".lunaradio_default($atts['radiustopleft'], "0px").";
  border-top-right-radius: ".lunaradio_default($atts['radiustopright'], "0px").";
  border-bottom-right-radius: ".lunaradio_default($atts['radiusbottomright'], "0px").";
  border-bottom-left-radius: ".lunaradio_default($atts['radiusbottomleft'], "0px").";
  ".$myborder."'>
  <div style='height: 0px; width:0px; overflow: hidden;'>  
  <a href='https://radioplayer.luna-universe.com' title='html Radio Player'>JQUERY RADIO PLAYER</a> and <a href='https://www.sodah.de/work/radio-player-plugin/' title='wordpress radio player plugin'>WORDPRESS RADIO PLUGIN</a> powered by <a href='https://www.sodah.de/services/wordpress-webdesign/' title='wordpress webdesign Dexheim'>WordPress Webdesign Dexheim</a> and <a href='https://www.die-leadagenten.de' title='full service digital agentur Mainz'>FULL SERVICE ONLINE AGENTUR MAINZ</a>
  </div>
  </div>

<script>
window.addEventListener('load', function () {
    lunaRadio('".@$id."', {
		token: '".lunaradio_default($atts['token'], "")."',
		userinterface: '".lunaradio_default($atts['userinterface'], "small")."',
		backgroundcolor: '".lunaradio_default($atts['backgroundcolor'], "rgba(0,0,0,0)")."',
		fontcolor: '".lunaradio_default($atts['fontcolor'], "#ffffff")."',
		hightlightcolor: '".lunaradio_default($atts['hightlightcolor'], "#5f87c5")."',
		fontname: '".lunaradio_default($atts['fontname'], "")."',
		googlefont: '".lunaradio_default($atts['googlefont'], "")."',
		fontratio: '".lunaradio_default($atts['fontratio'], "0.4")."',
		radioname: '".lunaradio_default($atts['radioname'], "")."',
		scroll: '".lunaradio_default($atts['scroll'], "true")."',
		coverimage: '".lunaradio_default($atts['coverimage'], "")."',
		onlycoverimage: '".lunaradio_default($atts['onlycoverimage'], "")."',
		coverstyle: '".lunaradio_default($atts['coverstyle'], "circle")."',
		usevisualizer: '".lunaradio_default($atts['usevisualizer'], "fake")."',
		visualizertype: '".lunaradio_default($atts['visualizertype'], "4")."',
		multicolorvisualizer: '".lunaradio_default($atts['multicolorvisualizer'], "false")."',
		color1: '".lunaradio_default($atts['color1'], "#e66c35")."',
		color2: '".lunaradio_default($atts['color2'], "#d04345")."',
		color3: '".lunaradio_default($atts['color3'], "#85a752")."',
		color4: '".lunaradio_default($atts['color4'], "#067dcc")."',
		visualizeropacity: '".lunaradio_default($atts['visualizeropacity'], "0.4")."',
		visualizerghost: '".lunaradio_default($atts['visualizerghost'], "0.0")."',
		itunestoken: '".lunaradio_default($atts['itunestoken'], "")."',
		metadatatechnic: '".lunaradio_default($atts['metadatatechnic'], "fallback")."',
		ownmetadataurl: '".lunaradio_default($atts['ownmetadataurl'], "")."',
		streamurl: '".lunaradio_default($atts['streamurl'], "")."',
		streamtype: '".lunaradio_default($atts['streamtype'], "other")."',
		icecastmountpoint: '".lunaradio_default($atts['icecastmountpoint'], "")."',
		radionomyid: '".lunaradio_default($atts['radionomyid'], "")."',
		radionomyapikey: '".lunaradio_default($atts['radionomyapikey'], "")."',
		radiojarid: '".lunaradio_default($atts['radiojarid'], "")."',
		radiocoid: '".lunaradio_default($atts['radiocoid'], "")."',
		shoutcastpath: '".lunaradio_default($atts['shoutcastpath'], "")."',
		shoutcastid: '".lunaradio_default($atts['shoutcastid'], "")."',
		streamsuffix: '".lunaradio_default($atts['streamsuffix'], "")."',
		metadatainterval: '".lunaradio_default($atts['metadatainterval'], "20000")."',
		volume: '".lunaradio_default($atts['volume'], "90")."',
		debug: '".lunaradio_default($atts['debug'], "false")."',
		autoplay: '".lunaradio_default($atts['autoplay'], "false")."',
		displayliveicon: '".lunaradio_default($atts['displayliveicon'], "true")."',
		displayvisualizericon: '".lunaradio_default($atts['displayvisualizericon'], "true")."',
	    usestreamcorsproxy: '".lunaradio_default($atts['usestreamcorsproxy'], "false")."', 
	    corsproxy: '".lunaradio_default($atts['corsproxy'], "")."',
	});   
})
</script>
	";
	wp_reset_query();
	return $content1;
}



/**
 * Add links to admin plugins page.
 *
 * @param  array $links
 *
 * @return array
 */
function add_action_links_lunaradio( $links ) {
    $plugin_links = array(
        '<a href="https://radioplayer.luna-universe.com/documentation/wp/" target="_blank">Documentation</a>',
        '<a href="https://radioplayer.luna-universe.com/shortcode" target="_blank">Shortcode Generator</a>'
    );
    return array_merge( $links, $plugin_links );
}

/**
 * Add footer with scripts to site
 *
 * 
 *
 * 
 */
function lunaradio_footer() {
  	if(!wp_script_is('lunaradio')) {
  		wp_enqueue_script('lunaradio',plugin_dir_url(__FILE__)."js/lunaradio.min.js");
	}
}


function lunaradio_default($myvalue, $mydefault){
    if (!isset($myvalue)){
        $myvalue = $mydefault;
    }
    return $myvalue;
}



add_action( 'wp_footer', 'lunaradio_footer'); 
add_shortcode("lunaradio", "lunaradio_shortcode");
add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'add_action_links_lunaradio' );
?>