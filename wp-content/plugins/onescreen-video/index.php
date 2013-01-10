<?php
/*
Plugin Name: OneScreen Video
Plugin URI: http://onescreen.com
Description: Utilize the [onescreen] shortcode to embed OneScreen's video player.
Version: 1.0
Author: Steven Ton
Author URI: http://onescreen.com
*/

class OS_Shortcode {
    public function __construct() {
        add_shortcode('onescreen', array($this, 'shortcode'));
        add_filter('widget_text', 'do_shortcode');
    }

    public function shortcode($attributes) {
        $scripts_to_include = array('os_widgets' => 'http://cdn.onescreen.net/os/static/widgets/widgets.1.0.1.min.js');

        // shortcode_atts is used to set default values for our attributes
        $attributes = shortcode_atts(
            array(
                'widget_id' => '',
                'target_div' => 'os_dmp_embed',
                'css' => 'http://cdn.onescreen.net/os/static/widgets/assets/css/widgets.css',
                'js' => '',
            ), $attributes
        );

        // pulls out all the keys and uses those as variables for the values
        extract( $attributes );

        if (empty($widget_id)) return;

        wp_register_style( 'widget_css', $css );
        wp_print_styles(array('widget_css'));

        if(!empty($js)) {
            $scripts_to_include['widget_js'] = $js;
        }
        foreach ($scripts_to_include as $handler => $script_src) {
            wp_register_script($handler, $script_src);
        }
        $handlers = array_keys($scripts_to_include);
        wp_print_scripts($handlers);


        $widget_load = "<script type='text/javascript'>com.onescreen.widgets.load('$widget_id', '$target_div');</script>";
        $target_div = "<div id='$target_div'></div>";
        $target_div .= $widget_load;

        return $target_div;
    }
}

new OS_Shortcode();
?>
