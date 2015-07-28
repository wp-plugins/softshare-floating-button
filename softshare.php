<?php
/**
 * Plugin Name: Softshare Floating Buttons 
 * Plugin URI: http://www.softwebzone.com
 * Description: This plugin adds all social media network's share button. This won't affect your current design and it never affects the speed of your website. It is pretty small and fast loading script. It will display as floating share buttons.
 * Version: 1.0.0
 * Author: Bijo John
 * Author URI: http://www.softwebzone.com
 * License: GPL2
 */
 

if(!function_exists('softshare_js_script'))
{
	function softshare_js_script() {
    ?><script>var sharebutton_is_horizontal = false; document.write('<script src="http://www.softwebzone.com/plugin/share.js"></scr' + 'ipt>'); document.write("<div style='display: none'>");</script><a href="http://www.softwebzone.com/" class="button-twitter">add share buttons</a><script>document.write("</div>");</script><?php
}

}

add_action('wp_head', 'softshare_js_script');