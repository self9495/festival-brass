<?php

function cwpai_enqueue_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'cwpai_enqueue_styles');

function cwpai_music_booking_menu() {
    add_menu_page(
        __('Festival Brass Band', 'codewp'),
        __('Festival Brass Band', 'codewp'),
        'manage_options',
        'cwpai_festival_brass_band',
        'cwpai_render_music_booking_page',
        'dashicons-microphone',
        6
    );
}
add_action('admin_menu', 'cwpai_music_booking_menu');

function cwpai_render_music_booking_page() {
    ?>
    <div class="wrap">
        <h1><?php _e('Festival Brass Band', 'codewp'); ?></h1>
        <h2><?php _e('About Us', 'codewp'); ?></h2>
        <p><?php _e('We are a brass band that performs at various festivals.', 'codewp'); ?></p>
        
        <h2><?php _e('Upcoming Shows', 'codewp'); ?></h2>
        <ul>
            <li><?php _e('Show 1: Date, Location', 'codewp'); ?></li>
            <li><?php _e('Show 2: Date, Location', 'codewp'); ?></li>
        </ul>
        
        <h2><?php _e('Booking Form', 'codewp'); ?></h2>
        <form>
            <label for="name"><?php _e('Name', 'codewp'); ?>:</label>
            <input type="text" id="name" name="name"><br>
            <label for="email"><?php _e('Email', 'codewp'); ?>:</label>
            <input type="email" id="email" name="email"><br>
            <label for="message"><?php _e('Message', 'codewp'); ?>:</label><br>
            <textarea id="message" name="message"></textarea><br>
            <input type="submit" value="<?php _e('Submit', 'codewp'); ?>">
        </form>
        
        <h2><?php _e('Media Library', 'codewp'); ?></h2>
        <div>
            <h3><?php _e('Videos', 'codewp'); ?></h3>
            <video controls>
                <source src="video1.mp4" type="video/mp4">
                <?php _e('Your browser does not support the video tag.', 'codewp'); ?>
            </video>
            <h3><?php _e('Pictures', 'codewp'); ?></h3>
            <img src="image1.jpg" alt="<?php _e('Show Image', 'codewp'); ?>">
        </div>
    </div>
    <?php
}