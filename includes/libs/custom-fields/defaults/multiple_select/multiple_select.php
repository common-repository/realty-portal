<?php
/**
 * Field: Multiple Select
 *
 * @package     Custom Fields
 * @author      NooTheme
 * @version     1.0
 */

if ( ! function_exists( 'rp_render_multiple_select_field' ) ) :
	function rp_render_multiple_select_field( $field = array(), $value = null, $show_front_end = true ) {
		if ( empty( $field ) ) {
			return false;
		}

		if ( !empty( $field['class_child'] ) ) {
			echo '<div class="rp-child ' . esc_attr( $field['class_child'] ) . '">';
		}

		if ( ! empty( $field[ 'title' ] ) ) {
			echo '<label>' . esc_html( $field[ 'title' ] ) . '</label>';
		}
		if ( ! empty( $show_front_end ) ) {
			?>
			<select id="multi-select" <?php echo RP_Custom_Fields::validate_field( $field ) ?>>
				<?php
				if ( ! empty( $field[ 'list' ] ) ) {

					foreach ( $field[ 'options' ] as $item => $value_item ) {
						if ( empty( $value_item[ 'label' ] ) ) {
							continue;
						}
						echo '<option value="' . esc_attr( $value_item[ 'value' ] ) . '" ' . selected( $value, $value_item[ 'value' ], false ) . '>' . esc_html( $value_item[ 'label' ] ) . '</option>';
					}

				} else {

					foreach ( $field[ 'options' ] as $key => $value_item ) {
						if ( empty( $value_item ) ) {
							continue;
						}
						echo '<option value="' . esc_attr( $key ) . '"' . ( is_array($value) && in_array( $key, $value, false ) ? ' selected="selected"' : '' ) . '>' . esc_html( $value_item ) . '</option>';
					}
				}
				?>
			</select>
			<?php
		} else {
			echo '<select id="' . esc_attr( $field[ 'name' ] ) . '" name="' . esc_attr( $field[ 'name' ] ) . '[multiple][]" multiple>';
			foreach ( $field[ 'options' ] as $key => $value_item ) {
						if ( empty( $value_item ) ) {
							continue;
						}
						echo '<option value="' . esc_attr( $key ) . '"' . ( is_array($value['multiple']) && in_array( $key, $value['multiple'], false ) ? ' selected="selected"' : '' ) . '>' . esc_html( $value_item ) . '</option>';
					}
			echo '</select>';
			if ( ! empty( $field[ 'notice' ] ) ) {
				echo '<div class="notice">' . wp_kses( $field[ 'notice' ], rp_allowed_html() ) . '</div>';
			}
		}

		if ( !empty( $field['class_child'] ) ) {
			echo '</div>';
		}

	}

	rp_add_custom_field_type( 'multiple_select', __( 'Multiple Select', 'realty-portal' ), array( 'form' => 'rp_render_multiple_select_field' ), array(
		'has_choice'  => true,
		'is_multiple' => true,
	) );
endif;
?>