<?php
$easyweb_webnus_options = easyweb_webnus_options();
$social = array();
$social[1] = strtolower( trim( isset( $easyweb_webnus_options['easyweb_webnus_social_first'] ) ? $easyweb_webnus_options['easyweb_webnus_social_first'] : '' ) );
$social[2] = strtolower( trim( isset( $easyweb_webnus_options['easyweb_webnus_social_second'] ) ? $easyweb_webnus_options['easyweb_webnus_social_second'] : '' ) );
$social[3] = strtolower( trim( isset( $easyweb_webnus_options['easyweb_webnus_social_third'] ) ? $easyweb_webnus_options['easyweb_webnus_social_third'] : '' ) );
$social[4] = strtolower( trim( isset( $easyweb_webnus_options['easyweb_webnus_social_fourth'] ) ? $easyweb_webnus_options['easyweb_webnus_social_fourth'] : '' ) );
$social[5] = strtolower( trim( isset( $easyweb_webnus_options['easyweb_webnus_social_fifth'] ) ? $easyweb_webnus_options['easyweb_webnus_social_fifth'] : '' ) );
$social[6] = strtolower( trim( isset( $easyweb_webnus_options['easyweb_webnus_social_sixth'] ) ? $easyweb_webnus_options['easyweb_webnus_social_sixth'] : '' ) );
$social[7] = strtolower( trim( isset( $easyweb_webnus_options['easyweb_webnus_social_seventh'] ) ? $easyweb_webnus_options['easyweb_webnus_social_seventh'] : '' ) );
$social_url = array();
$social_url[1] = trim( isset( $easyweb_webnus_options['easyweb_webnus_social_first_url'] ) ? $easyweb_webnus_options['easyweb_webnus_social_first_url'] : '' );
$social_url[2] = trim( isset( $easyweb_webnus_options['easyweb_webnus_social_second_url'] ) ? $easyweb_webnus_options['easyweb_webnus_social_second_url'] : '' );
$social_url[3] = trim( isset( $easyweb_webnus_options['easyweb_webnus_social_third_url'] ) ? $easyweb_webnus_options['easyweb_webnus_social_third_url'] : '' );
$social_url[4] = trim( isset( $easyweb_webnus_options['easyweb_webnus_social_fourth_url'] ) ? $easyweb_webnus_options['easyweb_webnus_social_fourth_url'] : '' );
$social_url[5] = trim( isset( $easyweb_webnus_options['easyweb_webnus_social_fifth_url'] ) ? $easyweb_webnus_options['easyweb_webnus_social_fifth_url'] : '' );
$social_url[6] = trim( isset( $easyweb_webnus_options['easyweb_webnus_social_sixth_url'] ) ? $easyweb_webnus_options['easyweb_webnus_social_sixth_url'] : '' );
$social_url[7] = trim( isset( $easyweb_webnus_options['easyweb_webnus_social_seventh_url'] ) ? $easyweb_webnus_options['easyweb_webnus_social_seventh_url'] : '' );

for ($x = 1; $x <= 7; $x++) {
	echo($social[$x] && $social_url[$x])?'<a target="_blank" href="'. $social_url[$x] .'" class="'.$social[$x].'"><i class="fa-'.$social[$x].'"></i></a>':'';
} 
?>