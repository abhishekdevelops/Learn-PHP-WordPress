<?php
/*
Plugin Name: My First Plugin
Plugin URI: http://example.com/
Description: A simple custom plugin built from scratch.
Version: 1.0
Author: Abhishek
Author URI: http://example.com/
*/

function myplugin_show_message() {
    return "<p style='padding:10px; background:#eee; border-left:4px solid #0073aa;'>This message is from my custom plugin 🎉</p>";
}
add_shortcode('myplugin_message', 'myplugin_show_message');

function myplugin_register_testimonial_cpt() {
    $labels = array(
        'name' => 'Testimonials',
        'singular_name' => 'Testimonial',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Testimonial',
        'edit_item' => 'Edit Testimonial',
        'new_item' => 'New Testimonial',
        'view_item' => 'View Testimonial',
        'search_items' => 'Search Testimonials',
        'not_found' => 'No testimonials found',
        'menu_name' => 'Testimonials'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-format-quote',
        'supports' => array('title', 'editor'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'testimonials')
    );

    register_post_type('testimonial', $args);
}
add_action('init', 'myplugin_register_testimonial_cpt');

function myplugin_display_testimonials() {
    $query = new WP_Query(array(
        'post_type' => 'testimonial',
        'posts_per_page' => 5
    ));

    if ($query->have_posts()) {
        $output = '<div class="testimonial-list">';
        while ($query->have_posts()) {
            $query->the_post();
            $output .= '<div class="testimonial">';
            $output .= '<h3>' . get_the_title() . '</h3>';
            $output .= '<div>' . get_the_content() . '</div>';
            $output .= '</div>';
        }
        wp_reset_postdata();
        $output .= '</div>';
        return $output;
    } else {
        return '<p>No testimonials found.</p>';
    }
}
add_shortcode('myplugin_testimonials', 'myplugin_display_testimonials');
