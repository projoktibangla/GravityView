<?php

/**
 * Add custom options for date fields
 */
class GravityView_Field_Date extends GravityView_Field {

	var $name = 'date';

	function field_options( $field_options, $template_id, $field_id, $context, $input_type ) {

		$this->add_field_support('date_display', $field_options );

		return $field_options;
	}

}

new GravityView_Field_Date;
