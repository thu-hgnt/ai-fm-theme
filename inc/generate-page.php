<?php
if (isset($_GET['activated']) && is_admin()) {

    $new_page_title = 'Login page';
    $new_page_name = 'login';
    $new_page_content = 'login';
    $new_page_template = './template-parts/login.php'; 

    $page_check = get_page_by_title($new_page_title);
    $new_page = array(
        'post_type' => 'page',
        'post_title' => $new_page_title,
        'post_name' => $new_page_name,
        'post_content' => $new_page_content,
        'post_status' => 'publish',
        'post_author' => 1,
    );
    if (!isset($page_check->ID)) {
        $new_page_id = wp_insert_post($new_page);
        if (!empty($new_page_template)) {
            update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
        }
    }
}
