<?php
/**
 * Template Name: Homepage
 *
 * This is a home page template which uses slider with featured posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sidebar
 */

get_header();  

              get_template_part( 'sections/section', 'one' );   
              get_template_part( 'sections/section', 'two' );   
              get_template_part( 'sections/section', 'three' );   			  			  			  			  
              get_template_part( 'sections/section', 'four' );   			  


get_footer(); ?>