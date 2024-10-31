<?php
/**
 * Field: Upload Image
 *
 * @package     Custom Fields
 * @author      NooTheme
 * @version     1.0
 */

if ( ! function_exists( 'rp_render_upload_image_field' ) ) :
	function rp_render_upload_image_field( $field = array(), $value = null, $show_front_end = true ) {
		if ( empty( $field ) ) {
			return false;
		}

		if ( ! empty( $field[ 'class_child' ] ) ) {
			echo '<div class="rp-child ' . esc_attr( $field[ 'class_child' ] ) . '">';
		}

		// if ( ! empty( $field[ 'title' ] ) ) {
		// 	echo '<label>' . esc_html( $field[ 'title' ] ) . '</label>';
		// }

		$default = array(
			'post_id'            => '',
			'btn_text'           => esc_html__( 'Upload', 'realty-portal' ),
			'show_btn'       => 'false',
			'multi_upload'       => 'true',
			'multi_input'        => 'false',
			'slider'             => 'true',
			'set_featured'       => 'false',
			'notice'             => '',
			'size_image'         => 'rp-agent-avatar',
			'size_image_default' => '268x210',
		);
		$field   = array_merge( $default, $field );

		rp_box_upload_form_ajax( array(
			'btn_text'           => esc_html( $field[ 'btn_text' ] ),
			'multi_upload'       => esc_attr( $field[ 'multi_upload' ] ),
			'multi_input'        => esc_attr( $field[ 'multi_input' ] ),
			'name'               => esc_attr( $field[ 'name' ] ),
			'show_btn'           => esc_attr( $field[ 'show_btn' ] ),
			'set_featured'       => esc_attr( $field[ 'set_featured' ] ),
			'post_id'            => esc_attr( $field[ 'post_id' ] ),
			'slider'             => esc_attr( $field[ 'slider' ] ),
			'notice'             => esc_html( $field[ 'notice' ] ),
			'size_image'         => esc_html( $field[ 'size_image' ] ),
			'size_image_default' => esc_html( $field[ 'size_image_default' ] ),
		), $value );

		if ( ! empty( $field[ 'class_child' ] ) ) {
			echo '</div>';
		}
	}

	rp_add_custom_field_type( 'upload_image', __( 'Upload Image', 'realty-portal' ), array( 'form' => 'rp_render_upload_image_field' ), array(
		'can_search' => false,
		'is_system'  => true,
	) );
endif;