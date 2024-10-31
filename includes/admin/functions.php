<?php
function rp_check_page_setup($option_group, $option_name, $shotcode_content = '', $is_no_shortcode = false)
{
    $check_page = false;
    $option_page_id = Realty_Portal::get_setting($option_group, $option_name, '');
    if (!empty($option_page_id)) {
        $get_page = get_post($option_page_id);

        if(!empty($get_page)){
            $check_page = (strpos($get_page->post_content, $shotcode_content) !== false) ? true : false;
            if ($is_no_shortcode) {
                $check_page = true;
            }
        }

    }

    return $check_page;
}

function rp_correct_page_quick_setup($option_group, $option_name, $shotcode_content = '', $page_title = '')
{
    $page_id = 0;
    // Check page already exists
    $pages = get_pages(array('post_type' => 'page'));
    foreach ($pages as $page) {
        $page_id = $page->ID;

        $check_page = (strpos($page->post_content, $shotcode_content) !== false) ? true : false;
        if ($check_page) {
            break;
        } else{
            $page_id = 0;
        }
    }


    // Create page
    if (empty($page_id)) {
        $page_data = array(
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_author' => 1,
            'post_title' => $page_title,
            'post_content' => $shotcode_content,
            'comment_status' => 'closed',
        );

        $page_id = wp_insert_post($page_data);
    }

    // Update option
    $old_option = get_option($option_group);
    $old_option[$option_name] = $page_id;
    update_option($option_group, $old_option);

    return $page_id;
}
function rp_admin_quick_correct_page()
{

    $_POST = wp_kses_post_deep($_POST);

    $option_group = isset($_POST['option_group']) ? $_POST['option_group'] : '';
    $option_name = isset($_POST['option_name']) ? $_POST['option_name'] : '';
    $page_content = isset($_POST['page_content']) ? $_POST['page_content'] : '';
    $page_title = isset($_POST['page_title']) ? $_POST['page_title'] : '';

    $page_id = rp_correct_page_quick_setup($option_group, $option_name, $page_content, $page_title);

    $response = array();
    $response['status'] = 'error';
    $response['page_id'] = 0;
    $response['page_title'] = '';
    if ($page_id > 0) {
        $page_info = get_post($page_id);
        $response['status'] = 'success';
        $response['page_id'] = $page_id;
        $response['page_title'] = $page_title;
        $response['page_title'] = $page_title;
        $response['html'] = '';
        $response['html'] .= '<div class="rpqs-done">' . esc_html__("Done", "realty-portal") . ' - <span class="rp-page-slug-label">/' . $page_info->post_name . '/</span></div>';
    }
    wp_send_json($response);

}

add_action('wp_ajax_rp_admin_quick_correct_page', 'rp_admin_quick_correct_page');