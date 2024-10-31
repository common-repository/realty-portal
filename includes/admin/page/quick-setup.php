
<?php
$list_page = array();
$list_page = apply_filters('rp_quick_setup_list_page', $list_page);
wp_enqueue_script('rp-quick-setup');

?>
<form class="rp-validate-form rp-setting-form" id="<?php echo $id_form = uniqid('id-form-'); ?>">

    <div class="rp-setting-wrap">

        <h1 class="rp-setting-title">
            <?php echo esc_html__('Realty Portal Quick Setup', 'realty-portal'); ?>
        </h1>

        <div class="rp-setting-notice" id="<?php echo $id_notice = uniqid('id-notice-') ?>"></div>

        <div class="rp-setting-content-wrap">

            <div class="rp-setting-content">
                <ul class="rp-quick-setup-content">
                    <li class="li-head">
                        <div class="first"><?php echo esc_html__('Page Name', 'realty-portal'); ?></div>
                        <div class="second"><?php echo esc_html__('Select Page', 'realty-portal'); ?></div>
                    </li>
                    <?php if (!empty($list_page) && is_array($list_page)) : ?>
                        <?php foreach ($list_page as $page): ?>
                            <li>
                                <div class="first"><?php echo $page['label']; ?></div>
                                <div class="second">
                                    <?php

                                    $is_no_shortcode = isset($page['is_no_shortcode']) ? $page['is_no_shortcode'] : false;
                                    $check_page = rp_check_page_setup($page['group'], $page['name'], $page['content'], $is_no_shortcode);
                                    ?>
                                    <?php if (!$check_page) : ?>
                                        <button type="button" class="button button-primary btn-correct-page"
                                                data-option-group="<?php echo $page['group']; ?>"
                                                data-option-name="<?php echo $page['name']; ?>"
                                                data-page-title="<?php echo $page['label']; ?>"
                                                data-page-content="<?php echo $page['content']; ?>"><?php echo esc_html__('Correct now', 'realty-portal'); ?></button>
                                    <?php else: ?>
                                        <?php
                                        $current_page_id = Realty_Portal::get_setting($page['group'], $page['name'], '');
                                        $page = get_post($current_page_id);
                                        $slug = $page->post_name;
                                        ?>
                                        <div class="rpqs-done">
                                            <?php echo esc_html__('Done', 'realty-portal'); ?> - <span
                                                    class="rp-page-slug-label">/<?php echo $slug; ?>/</span>
                                        </div>

                                    <?php endif; ?>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>

</form>

