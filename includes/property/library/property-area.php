<?php
if ( ! function_exists( 'rp_get_property_area' ) ) :

	/**
	 * This function show area
	 *
	 * @param $property_id
	 *
	 * @return string
	 */
	function rp_get_property_area( $property_id ) {

		if ( empty( $property_id ) ) {
			global $post;
			$property_id = $post->ID;
		}

		$area      = get_post_meta( $property_id, apply_filters( 'rp_property_post_type', 'rp_property' ) . '_area', true );
		return ( $area );
	}

endif;

if ( ! function_exists( 'rp_get_property_area_html' ) ) :

	/**
	 * This function show area
	 *
	 * @param $property_id
	 *
	 * @return string
	 */
	function rp_get_property_area_html( $property_id ) {

		if ( empty( $property_id ) ) {
			global $post;
			$property_id = $post->ID;
		}

		$area      = rp_get_property_area( $property_id );
		$area_unit = RP_Property::get_setting( 'property_setting', 'property_area_unit' );

		return empty( $area ) ? '' : esc_html( $area ) . ' ' . esc_html( $area_unit );
	}

endif;

if ( ! function_exists( 'rp_format_area' ) ) :

	/**
	 * This function get format area
	 *
	 * @param string $area
	 *
	 * @return bool|string
	 */
	function rp_format_area( $area = '' ) {

		if ( empty( $area ) ) {
			return false;
		}

		$area_unit = RP_Property::get_setting( 'property_setting', 'property_area_unit' );

		return empty( $area ) ? '' : esc_html( $area ) . ' ' . esc_html( $area_unit );
	}

endif;

/**
 * This function show field area to form search
 *
 * @package       Realty_Portal
 * @author        NooTeam <suppport@nootheme.com>
 * @version       0.1
 */

if ( ! function_exists( 'rp_property_render_area_search_field' ) ) :

	function rp_property_render_area_search_field( $field ) {

		global $wpdb;

		$min_area = $max_area = 0;
		$max_area = ceil( $wpdb->get_var( '
				SELECT max(meta_value + 0)
				FROM ' . $wpdb->posts . '
				LEFT JOIN ' . $wpdb->postmeta . ' ON ' . $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id AND post_status = \'publish\'
				WHERE meta_key = \'' . apply_filters( 'rp_property_post_type', 'rp_property' ) . '_area' . '\' AND post_type = \'' . apply_filters( 'rp_property_post_type', 'rp_property' ) . '\'
				' ) );

		$g_min_area = isset( $_GET[ 'area_min' ] ) ? esc_attr( $_GET[ 'area_min' ] ) : $min_area;
		$g_max_area = isset( $_GET[ 'area_max' ] ) ? esc_attr( $_GET[ 'area_max' ] ) : $max_area;

		$area_unit = RP_Property::get_setting( 'property_setting', 'property_area_unit', 'm2' );
		?>
        <div id="rp-item-area-wrap"
             class="rp-control rp-item-wrap <?php echo ! empty( $field[ 'class' ] ) ? esc_attr( $field[ 'class' ] ) : '' ?>">
            <!--<?php echo( ! empty( $field[ 'label' ] ) ? '<label>' . esc_html( $field[ 'label' ] ) . '</label>' : '' ) ?>-->
            <div class="rp-area">
                <div class="area-slider-range"></div>
                <input type="hidden" name="area_min" class="area_min" data-min="<?php echo $min_area ?>"
                       value="<?php echo $g_min_area ?>"/>
                <input type="hidden" name="area_max" class="area_max" data-max="<?php echo $max_area ?>"
                       value="<?php echo $g_max_area ?>"/>
                <div class="area-results">
					<span class="min-area">
						<?php echo esc_html( $g_min_area ) . ' ' . $area_unit; ?>
					</span> -
                    <span class="max-area">
						<?php echo esc_html( $g_max_area ) . ' ' . $area_unit; ?>
					</span>
                </div>
            </div>
        </div>
		<?php
	}

endif;