<?php
/*
        Template Name: L'agenda
*/
get_header();
?>

<section class="wrapper">
<?php get_template_part('part', 'events');?>
<?php get_template_part('part', 'actions');?>
<?php get_footer(); ?>