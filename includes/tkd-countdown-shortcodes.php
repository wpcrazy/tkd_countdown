<?php

if (!defined('ABSPATH'))
  exit; // if direct access 

function countdown_display($atts) {

  $atts = shortcode_atts(
          array(
      'day' => "31", //day
      'month' => "12", //month
      'year' => "2020", //year
          ), $atts);

  $html = '';
  $html .= '<script>
              jQuery(function(){
                jQuery(".digits").countdown({
                  image: "' . WP_PLUGIN_URL . '/tkd-countdown/img/digits.png",
                  format: "dd:hh:mm:ss",
                  endTime: new Date(' . $atts['year'] . ',' . $atts['month'] . ',' . $atts['day'] . ' )
                });
              });
            </script>';

  $html .= '<div class="digits"></div>';


  return $html;
}

add_shortcode('tkd_countdown', 'countdown_display');
















