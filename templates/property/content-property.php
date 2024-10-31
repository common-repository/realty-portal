<?php
/**
 * Content Property
 *
 * @package Realty_Portal
 * @author  NooTeam <suppport@nootheme.com>
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

global $property;

// Ensure visibility
if (empty($property)) {
    return;
}

$sub_style = get_theme_mod('noo_property_grid_style', 'grid');

?>
<?php if('grid-2' == $sub_style): ?>

    <div class="noo-property-item noo-md-6 noo-sm-6 noo-xs-12">
        <div class="noo-property-item-wrap">

            <div class="noo-item-featured">
                <a href="<?php echo $property->permalink() ?>" title="<?php echo $property->title() ?>">
                    <?php echo $property->thumbnail('rp-property-medium', true, '433x315'); ?>
                </a>
                <?php echo $property->listing_offers() ?>
                <div class="property-price-style2">
                    <?php echo $property->get_price_html(); ?>
                </div>

            </div>
            <div class="noo-item-head-style2">
                <h4 class="item-title">
                    <?php echo $property->is_featured() ?>
                    <a href="<?php echo $property->permalink() ?>" title="<?php echo $property->title() ?>">
                        <?php echo $property->title() ?>
                    </a>
                </h4>
                <?php echo $property->address(); ?>
            </div>
            <hr width="100%" style="border-top: 1px solid #f1f0f0;">
            <div class="noo-info">
                <?php echo $property->get_list_field_meta(); ?>
            </div>

        </div>
    </div>

<?php else: ?>
    <div class="noo-property-item noo-md-6 noo-sm-6 noo-xs-12">
        <div class="noo-property-item-wrap">
            <div class="noo-item-head">
                <h4 class="item-title">
                    <?php echo $property->is_featured() ?>
                    <a href="<?php echo $property->permalink() ?>" title="<?php echo $property->title() ?>">
                        <?php echo $property->title() ?>
                    </a>
                </h4>
                <?php echo $property->address(); ?>
            </div>
            <div class="noo-item-featured">
                <a href="<?php echo $property->permalink() ?>" title="<?php echo $property->title() ?>">
                    <?php echo $property->thumbnail('rp-property-medium', true, '433x315'); ?>
                </a>
                <?php echo $property->listing_offers() ?>
            </div>

            <div class="noo-info">
                <?php echo $property->get_list_field_meta(); ?>
            </div>

            <div class="noo-action">
                <?php echo $property->get_price_html(); ?>
                <div class="noo-action-post more-action">
                    <?php do_action('rp_property_list_more_action', $property); ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
