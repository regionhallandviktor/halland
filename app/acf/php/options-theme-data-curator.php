<?php

if (function_exists('acf_add_local_field_group')) {
	acf_add_local_field_group(array(
		'key' => 'group_5ac48d9ea70de',
		'title' => 'Innehåll',
		'fields' => array(
			array(
				'key' => 'field_5ac48df44d019',
				'label' => 'Innehållsansvarig',
				'name' => 'data_curator',
				'type' => 'select',
				'instructions' => 'Välj en innehållsansvarig i listan.',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					1 => 'Admin Adminsson',
				),
				'default_value' => array(
				),
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'ajax' => 0,
				'return_format' => 'value',
				'placeholder' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
				),
			),
			array(
				array(
					'param' => 'post_type',
					'operator' => '!=',
					'value' => 'post',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));
}
