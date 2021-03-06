<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

//Array of all sections. All sections will be added into sidebar navigation except for the 'header' section.
$rad_all_sections = array(
	'optin'  => array(
		'title'    => __( 'Optin Configuration', 'rapidology' ),
		'contents' => array(
			'setup'   => __( 'Setup', 'rapidology' ),
			'premade' => __( 'Premade Layouts', 'rapidology' ),
			'design'  => __( 'Design', 'rapidology' ),
			'display' => __( 'Display Settings', 'rapidology' ),
		),
	),
	'header' => array(
		'contents' => array(
			'stats'        => __( 'Optin Stats', 'rapidology' ),
			'accounts'     => __( 'Accounts settings', 'rapidology' ),
			'importexport' => __( 'Import & Export', 'rapidology' ),
			'home'         => __( 'Home', 'rapidology' ),
			'edit_account' => __( 'Edit Account', 'rapidology' ),
		),
	),
);

/**
 * Array of all options
 * General format for options:
 * '<option_name>' => array(
 *							'type' => ...,
 *							'name' => ...,
 *							'default' => ...,
 *							'validation_type' => ...,
 *							etc
 *						)
 * <option_name> - just an identifier to add the option into $rad_assigned_options array
 * Array of parameters may contain diffrent attributes depending on option type.
 * 'type' is the required attribute for all options. All other attributes depends on the option type.
 * 'validation_type' and 'name' are required attribute for the option which should be saved into DataBase.
 *
 */

$rad_dashboard_options_all = array(
	'optin_name' => array(
		'section_start' => array(
			'type'  => 'section_start',
			'title' => __( 'Optin name', 'rapidology' ),
		),

		'option' => array(
			'type'            => 'text',
			'rows'            => '1',
			'name'            => 'optin_name',
			'placeholder'     => __( 'MyNewOptin', 'rapidology' ),
			'default'         => __( 'MyNewOptin', 'rapidology' ),
			'validation_type' => 'simple_text',
		),
	),

	'form_integration' => array(
		'section_start' => array(
			'type'  => 'section_start',
			'title' => __( 'Form Integration', 'rapidology' ),
			'class' => 'rad_dashboard_child_hidden',
		),
		'email_provider' => array(
			'type'            => 'select',
			'title'           => __( 'Select Email Provider', 'rapidology' ),
			'name'            => 'email_provider',
			'value'           => array(
				'empty'            => __( 'Select One...', 'rapidology' ),
				'mailchimp'        => __( 'MailChimp', 'rapidology' ),
                'hubspot'           => __( 'HubSpot', 'rapidology' ),
				'aweber'           => __( 'AWeber', 'rapidology' ),
				'constant_contact' => __( 'Constant Contact', 'rapidology' ),
				'campaign_monitor' => __( 'Campaign Monitor', 'rapidology' ),
				'madmimi'          => __( 'Mad Mimi', 'rapidology' ),
				'icontact'         => __( 'iContact', 'rapidology' ),
				'getresponse'      => __( 'GetResponse', 'rapidology' ),
				'sendinblue'       => __( 'Sendinblue', 'rapidology' ),
				'mailpoet'         => __( 'MailPoet', 'rapidology' ),
				'feedblitz'        => __( 'Feedblitz', 'rapidology' ),
				'ontraport'        => __( 'Ontraport', 'rapidology' ),
				'infusionsoft'     => __( 'Infusionsoft', 'rapidology' ),
                'emma'     => __( 'Emma', 'rapidology' ),
				'custom_html'      => __( 'Custom HTML Form', 'rapidology' ) ),
			'default'         => 'empty',
			'conditional'     => 'mailchimp_account#aweber_account#constant_contact_account#custom_html#display_name#name_fields',
			'validation_type' => 'simple_text',
			'class'           => 'rad_dashboard_select_provider',
		),
		'select_account' => array(
			'type'            => 'select',
			'title'           => __( 'Select Account', 'rapidology' ),
			'name'            => 'account_name',
			'value'           => array(
				'empty'       => __( 'Select One...', 'rapidology' ),
				'add_account' => __( 'Add Account', 'rapidology' ) ),
			'default'         => 'empty',
			'validation_type' => 'simple_text',
			'class'           => 'rad_dashboard_select_account',
		),
		'email_list' => array(
			'type'            => 'select',
			'title'           => __( 'Select Email List', 'rapidology' ),
			'name'            => 'email_list',
			'value'           => array(
				'empty' => __( 'Select One...', 'rapidology' )
			),
			'default'         => 'empty',
			'validation_type' => 'simple_text',
			'class'           => 'rad_dashboard_select_list',
		),
		'custom_html' => array(
			'type'            => 'text',
			'rows'            => '4',
			'name'            => 'custom_html',
			'placeholder'     => __( 'Insert HTML', 'rapidology' ),
			'default'         => '',
			'display_if'      => 'custom_html',
			'validation_type' => 'html',
		),
	),

	'optin_title' => array(
		'section_start' => array(
			'type'     => 'section_start',
			'title'    => __( 'Optin title', 'rapidology' ),
			'subtitle' => __( 'No title will appear if left blank', 'rapidology' ),
		),

		'option' => array(
			'type'            => 'text',
			'rows'            => '1',
			'name'            => 'optin_title',
			'class'           => 'rad_dashboard_optin_title rad_dashboard_mce',
			'placeholder'     => __( 'Insert Text', 'rapidology' ),
			'default'         => __( 'Subscribe To Our Newsletter', 'rapidology' ),
			'validation_type' => 'html',
			'is_wpml_string'  => true,
		),
	),

	'optin_message' => array(
		'section_start' => array(
			'type'     => 'section_start',
			'title'    => __( 'Optin message', 'rapidology' ),
			'subtitle' => __( 'No message will appear if left blank', 'rapidology' ),
		),

		'option' => array(
			'type'            => 'text',
			'rows'            => '3',
			'name'            => 'optin_message',
			'class'           => 'rad_dashboard_optin_message rad_dashboard_mce',
			'placeholder'     => __( 'Insert Text', 'rapidology' ),
			'default'         => __( 'Join our mailing list to receive the latest news and updates from our team.', 'rapidology' ),
			'validation_type' => 'html',
			'is_wpml_string'  => true,
		),
	),

	'image_settings' => array(
		'section_start' => array(
			'type'  => 'section_start',
			'title' => __( 'Image Settings', 'rapidology' ),
		),
		'image_orientation' => array(
			'type'            => 'select',
			'title'           => __( 'Image Orientation', 'rapidology' ),
			'name'            => 'image_orientation',
			'value'           => array(
				'no_image' => __( 'No Image', 'rapidology' ),
				'above'    => __( 'Image Above Text', 'rapidology' ),
				'below'    => __( 'Image Below Text', 'rapidology' ),
				'right'    => __( 'Image Right of Text', 'rapidology' ),
				'left'     => __( 'Image Left of Text', 'rapidology' ),
			),
			'default'         => 'no_image',
			'conditional'     => 'image_upload',
			'validation_type' => 'simple_text',
			'class'           => 'rad_rapidology_hide_for_widget rad_dashboard_image_orientation',
		),
		'image_orientation_widget' => array(
			'type'            => 'select',
			'title'           => __( 'Image Orientation', 'rapidology' ),
			'name'            => 'image_orientation_widget',
			'value'           => array(
				'no_image' => __( 'No Image', 'rapidology' ),
				'above'    => __( 'Image Above Text', 'rapidology' ),
				'below'    => __( 'Image Below Text', 'rapidology' ),
			),
			'default'         => 'no_image',
			'conditional'     => 'image_upload',
			'validation_type' => 'simple_text',
			'class'           => 'rad_rapidology_widget_only_option rad_dashboard_image_orientation_widget',
		),
	),

	'image_upload' => array(
		'section_start' => array(
			'type'       => 'section_start',
			'name'       => 'image_upload',
			'class'      => 'e_no_top_space',
			'display_if' => 'above#below#right#left',
		),
		'image_url' => array(
			'type'            => 'image_upload',
			'title'           => __( 'Image URL', 'rapidology' ),
			'name'            => 'image_url',
			'class'           => 'rad_dashboard_upload_image',
			'button_text'     => __( 'Upload an Image', 'rapidology' ),
			'wp_media_title'  => __( 'Choose an Optin Image', 'rapidology' ),
			'wp_media_button' => __( 'Set as Optin Image', 'rapidology' ),
			'validation_type' => 'simple_array',
		),
		'image_animation' => array(
			'type'            => 'select',
			'title'           => __( 'Image Load-In Animation', 'rapidology' ),
			'name'            => 'image_animation',
			'value'           => array(
				'no_animation' => __( 'No Animation', 'rapidology' ),
				'fadein'       => __( 'Fade In', 'rapidology' ),
				'slideright'   => __( 'Slide Right', 'rapidology' ),
				'slidedown'    => __( 'Slide Down', 'rapidology' ),
				'slideup'      => __( 'Slide Up', 'rapidology' ),
				'lightspeedin' => __( 'Light Speed', 'rapidology' ),
				'zoomin'       => __( 'Zoom In', 'rapidology' ),
				'flipinx'      => __( 'Flip', 'rapidology' ),
				'bounce'       => __( 'Bounce', 'rapidology' ),
				'swing'        => __( 'Swing', 'rapidology' ),
				'tada'         => __( 'Tada!', 'rapidology' ),
			),
			'hint_text'       => __( 'Define the animation that is used to load the image', 'rapidology' ),
			'default'         => 'slideup',
			'validation_type' => 'simple_text',
		),
		'hide_mobile' => array(
			'type'            => 'checkbox',
			'title'           => __( 'Hide image on mobile', 'rapidology' ),
			'name'            => 'hide_mobile',
			'default'         => false,
			'validation_type' => 'boolean',
		),
	),

	'form_setup' => array(
		'section_start' => array(
			'type'  => 'section_start',
			'title' => __( 'Form setup', 'rapidology' ),
		),
		'form_orientation' => array(
			'type'            => 'select',
			'title'           => __( 'Form Orientation', 'rapidology' ),
			'name'            => 'form_orientation',
			'value'           => array(
				'bottom' => __( 'Form On Bottom', 'rapidology' ),
				'right'  => __( 'Form On Right', 'rapidology' ),
				'left'   => __( 'Form On Left', 'rapidology' ),
			),
			'default'         => 'bottom',
			'validation_type' => 'simple_text',
			'class'           => 'rad_rapidology_hide_for_widget rad_dashboard_form_orientation',
		),
		'display_name' => array(
			'type'            => 'checkbox',
			'title'           => __( 'Display Name Field', 'rapidology' ),
			'name'            => 'display_name',
			'class'           => 'rad_dashboard_name_checkbox',
			'default'         => false,
			'conditional'     => 'single_name_text',
			'validation_type' => 'boolean',
			'display_if'      => 'getresponse#aweber',
		),
		'name_fields' => array(
			'type'            => 'select',
			'title'           => __( 'Name Field(s)', 'rapidology' ),
			'name'            => 'name_fields',
			'class'           => 'rad_dashboard_name_fields',
			'value'           => array(
				'no_name'         => __( 'No Name Field', 'rapidology' ),
				'single_name'     => __( 'Single Name Field', 'rapidology' ),
				'first_last_name' => __( 'First + Last Name Fields', 'rapidology' ),
			),
			'default'         => 'no_name',
			'conditional'     => 'name_text#last_name#single_name_text',
			'validation_type' => 'simple_text',
			'display_if'      => 'constant_contact#sendinblue#feedblitz#mailpoet#campaign_monitor#madmimi#icontact#mailchimp#ontraport#infusionsoft',
		),
		'name_text' => array(
			'type'            => 'input_field',
			'subtype'         => 'text',
			'name'            => 'name_text',
			'class'           => 'rad_dashboard_name_text',
			'title'           => __( 'Name Text', 'rapidology' ),
			'placeholder'     => __( 'First Name', 'rapidology' ),
			'default'         => '',
			'display_if'      => 'first_last_name',
			'validation_type' => 'simple_text',
			'is_wpml_string'  => true,
		),
		'single_name_text' => array(
			'type'            => 'input_field',
			'subtype'         => 'text',
			'name'            => 'single_name_text',
			'class'           => 'rad_dashboard_name_text_single',
			'title'           => __( 'Name Text', 'rapidology' ),
			'placeholder'     => __( 'Name', 'rapidology' ),
			'default'         => '',
			'display_if'      => 'single_name#true',
			'validation_type' => 'simple_text',
			'is_wpml_string'  => true,
		),
		'last_name' => array(
			'type'            => 'input_field',
			'subtype'         => 'text',
			'name'            => 'last_name',
			'class'           => 'rad_dashboard_last_name_text',
			'title'           => __( 'Last Name Text', 'rapidology' ),
			'placeholder'     => __( 'Last Name', 'rapidology' ),
			'default'         => '',
			'display_if'      => 'first_last_name',
			'validation_type' => 'simple_text',
			'is_wpml_string'  => true,
		),
		'email_text' => array(
			'type'            => 'input_field',
			'subtype'         => 'text',
			'name'            => 'email_text',
			'class'           => 'rad_dashboard_email_text',
			'title'           => __( 'Email Text', 'rapidology' ),
			'placeholder'     => __( 'Email', 'rapidology' ),
			'default'         => '',
			'validation_type' => 'simple_text',
			'is_wpml_string'  => true,
		),
		'button_text' => array(
			'type'            => 'input_field',
			'subtype'         => 'text',
			'name'            => 'button_text',
			'class'           => 'rad_dashboard_button_text',
			'title'           => __( 'Button Text', 'rapidology' ),
			'placeholder'     => __( 'SUBSCRIBE!', 'rapidology' ),
			'default'         => '',
			'validation_type' => 'simple_text',
			'is_wpml_string'  => true,
		),
		'button_text_color' => array(
			'type'            => 'select',
			'title'           => __( 'Button Text Color', 'rapidology' ),
			'name'            => 'button_text_color',
			'class'           => 'rad_dashboard_field_button_text_color',
			'value'           => array(
				'light' => __( 'Light', 'rapidology' ),
				'dark'  => __( 'Dark', 'rapidology' ),
			),
			'default'         => 'light',
			'validation_type' => 'simple_text',
		),
	),

	'optin_styling' => array(
		'section_start' => array(
			'type'  => 'section_start',
			'title' => __( 'Optin Styling', 'rapidology' ),
		),
		'header_bg_color' => array(
			'type'            => 'color_picker',
			'title'           =>  __( 'Background Color', 'rapidology' ),
			'name'            => 'header_bg_color',
			'class'           => 'rad_dashboard_optin_bg',
			'placeholder'     => __( 'Hex Value', 'rapidology' ),
			'default'         => '',
			'validation_type' => 'simple_text',
		),
		'header_font' => array(
			'type'            => 'font_select',
			'title'           => __( 'Header Font', 'rapidology' ),
			'name'            => 'header_font',
			'class'           => 'rad_dashboard_header_font',
			'validation_type' => 'simple_text',
		),
		'body_font' => array(
			'type'            => 'font_select',
			'title'           => __( 'Body Font', 'rapidology' ),
			'name'            => 'body_font',
			'class'           => 'rad_dashboard_body_font',
			'validation_type' => 'simple_text',
		),
		'header_text_color' => array(
			'type'            => 'select',
			'title'           => __( 'Text Color', 'rapidology' ),
			'name'            => 'header_text_color',
			'class'           => 'rad_dashboard_text_color',
			'value'           => array(
				'light' => __( 'Light Text', 'rapidology' ),
				'dark'  => __( 'Dark Text', 'rapidology' ),
			),
			'default'         => 'dark',
			'validation_type' => 'simple_text',
		),
		'corner_style' => array(
			'type'            => 'select',
			'title'           => __( 'Corner Style', 'rapidology' ),
			'name'            => 'corner_style',
			'class'           => 'rad_dashboard_corner_style',
			'value'           => array(
				'squared' => __( 'Squared Corners', 'rapidology' ),
				'rounded' => __( 'Rounded Corners', 'rapidology' ),
			),
			'default'         => 'squared',
			'validation_type' => 'simple_text',
		),
		'border_orientation' => array(
			'type'            => 'select',
			'title'           => __( 'Border Orientation', 'rapidology' ),
			'name'            => 'border_orientation',
			'class'           => 'rad_dashboard_border_orientation',
			'value'           => array(
				'no_border'  => __( 'No Border', 'rapidology' ),
				'full'       => __( 'Full Border', 'rapidology' ),
				'top'        => __( 'Top Border', 'rapidology' ),
				'right'      => __( 'Right Border', 'rapidology' ),
				'bottom'     => __( 'Bottom Border', 'rapidology' ),
				'left'       => __( 'Left Border', 'rapidology' ),
				'top_bottom' => __( 'Top + Bottom Border', 'rapidology' ),
				'left_right' => __( 'Left + Right Border', 'rapidology' ),
			),
			'default'         => 'no_border',
			'conditional'     => 'border_color#border_style',
			'validation_type' => 'simple_text',
		),
		'border_color' => array(
			'type'            => 'color_picker',
			'title'           =>  __( 'Border Color', 'rapidology' ),
			'name'            => 'border_color',
			'class'           => 'rad_dashboard_border_color',
			'placeholder'     => __( 'Hex Value', 'rapidology' ),
			'default'         => '',
			'display_if'      => 'full#top#left#right#bottom#top_bottom#left_right',
			'validation_type' => 'simple_text',
		),
	),

	'form_styling' => array(
		'section_start' => array(
			'type'  => 'section_start',
			'title' => __( 'Form Styling', 'rapidology' ),
		),
		'field_orientation' => array(
			'type'            => 'select',
			'title'           => __( 'Form Field Orientation', 'rapidology' ),
			'name'            => 'field_orientation',
			'value'           => array(
				'stacked' => __( 'Stacked Form Fields', 'rapidology' ),
				'inline'  => __( 'Inline Form Fields', 'rapidology' ),
			),
			'default'         => 'inline',
			'validation_type' => 'simple_text',
			'class'           => 'rad_rapidology_hide_for_widget rad_dashboard_field_orientation',
		),
		'field_corner' => array(
			'type'            => 'select',
			'title'           => __( 'Form Field Corner Style', 'rapidology' ),
			'name'            => 'field_corner',
			'class'           => 'rad_dashboard_field_corners',
			'value'           => array(
				'squared' => __( 'Squared Corners', 'rapidology' ),
				'rounded' => __( 'Rounded Corners', 'rapidology' ),
			),
			'default'         => 'rounded',
			'validation_type' => 'simple_text',
		),
		'text_color' => array(
			'type'            => 'select',
			'title'           => __( 'Form Text Color', 'rapidology' ),
			'name'            => 'text_color',
			'class'           => 'rad_dashboard_form_text_color',
			'value'           => array(
				'light' => __( 'Light Text', 'rapidology' ),
				'dark'  => __( 'Dark Text', 'rapidology' ),
			),
			'default'         => 'dark',
			'validation_type' => 'simple_text',
		),
		'form_bg_color' => array(
			'type'            => 'color_picker',
			'title'           =>  __( 'Form Background Color', 'rapidology' ),
			'name'            => 'form_bg_color',
			'class'           => 'rad_dashboard_form_bg_color',
			'placeholder'     => __( 'Hex Value', 'rapidology' ),
			'default'         => '',
			'validation_type' => 'simple_text',
		),
		'form_button_color' => array(
			'type'            => 'color_picker',
			'title'           =>  __( 'Button Color', 'rapidology' ),
			'name'            => 'form_button_color',
			'class'           => 'rad_dashboard_form_button_color',
			'placeholder'     => __( 'Hex Value', 'rapidology' ),
			'default'         => '',
			'validation_type' => 'simple_text',
		),
	),

	'edge_style' => array(
		'type'            => 'select_shape',
		'title'           => __( 'Choose form edge style', 'rapidology' ),
		'name'            => 'edge_style',
		'value'           => array(
			'basic_edge',
			'carrot_edge',
			'wedge_edge',
			'curve_edge',
			'zigzag_edge',
			'breakout_edge',
		),
		'default'         => 'basic_edge',
		'class'           => 'rad_dashboard_optin_edge',
		'validation_type' => 'simple_text',
	),

	'border_style' => array(
		'type'            => 'select_shape',
		'title'           => __( 'Choose border style', 'rapidology' ),
		'name'            => 'border_style',
		'class'           => 'rad_dashboard_border_style',
		'value'           => array(
			'solid',
			'dashed',
			'double',
			'inset',
			'letter',
		),
		'default'         => 'solid',
		'display_if'      => 'full#top#left#right#bottom#top_bottom#left_right',
		'validation_type' => 'simple_text',
	),

	'footer_text' => array(
		'section_start' => array(
			'type'  => 'section_start',
			'title' =>__( 'Form Footer Text', 'rapidology' ),
		),
		'option' => array(
			'type'            => 'text',
			'rows'            => '3',
			'name'            => 'footer_text',
			'class'           => 'rad_dashboard_footer_text',
			'placeholder'     => __( 'insert your footer text', 'rapidology' ),
			'default'         => '',
			'validation_type' => 'simple_text',
			'is_wpml_string'  => true,
		),
	),

	'success_message' => array(
		'section_start' => array(
			'type'  => 'section_start',
			'title' =>__( 'Success Message Text', 'rapidology' ),
		),
		'option' => array(
			'type'            => 'text',
			'rows'            => '1',
			'name'            => 'success_message',
			'class'           => 'rad_dashboard_success_text',
			'placeholder'     => __( 'You have Successfully Subscribed!', 'rapidology' ),
			'default'         => '',
			'validation_type' => 'simple_text',
			'is_wpml_string'  => true,
		),
	),

	'custom_css' => array(
		'section_start' => array(
			'type'  => 'section_start',
			'title' =>__( 'Custom CSS', 'rapidology' ),
		),
		'option' => array(
			'type'            => 'text',
			'rows'            => '7',
			'name'            => 'custom_css',
			'placeholder'     => __( 'insert your custom CSS code', 'rapidology' ),
			'default'         => '',
			'validation_type' => 'simple_text',
		),
	),

	'load_in' => array(
		'section_start' => array(
			'type'  => 'section_start',
			'title' => __( 'Load-in settings', 'rapidology' ),
			'class' => 'rad_dashboard_for_popup',
		),
		'load_animation' => array(
			'type'            => 'select',
			'title'           => __( 'Intro Animation', 'rapidology' ),
			'name'            => 'load_animation',
			'value'           => array(
				'no_animation' => __( 'No Animation', 'rapidology' ),
				'fadein'       => __( 'Fade In', 'rapidology' ),
				'slideright'   => __( 'Slide Right', 'rapidology' ),
				'slideup'      => __( 'Slide Up', 'rapidology' ),
				'slidedown'    => __( 'Slide Down', 'rapidology' ),
				'slideup'      => __( 'Slide Up', 'rapidology' ),
				'lightspeedin' => __( 'Light Speed', 'rapidology' ),
				'zoomin'       => __( 'Zoom In', 'rapidology' ),
				'flipinx'      => __( 'Flip', 'rapidology' ),
				'bounce'       => __( 'Bounce', 'rapidology' ),
				'swing'        => __( 'Swing', 'rapidology' ),
				'tada'         => __( 'Tada!', 'rapidology' ),
			),
			'hint_text'       => __( 'Define the animation that is used, when you load the page.', 'rapidology' ),
			'class'           => 'rad_rapidology_load_in_animation',
			'default'         => 'fadein',
			'validation_type' => 'simple_text',
		),
		'trigger_auto' => array(
			'type'            => 'checkbox',
			'title'           => __( 'Trigger After Time Delay', 'rapidology' ),
			'name'            => 'trigger_auto',
			'default'         => '1',
			'conditional'     => 'load_delay',
			'validation_type' => 'boolean',
		),
		'load_delay' => array(
			'type'            => 'input_field',
			'subtype'         => 'number',
			'title'           => __( 'Delay (in seconds)', 'rapidology' ),
			'name'            => 'load_delay',
			'hint_text'       => __( 'Define how many seconds you want to wait before the pop up appears on the screen.', 'rapidology' ),
			'default'         => '20',
			'display_if'      => 'true',
			'validation_type' => 'number',
		),
		'trigger_idle' => array(
			'type'            => 'checkbox',
			'title'           => __( 'Trigger After Inactivity', 'rapidology' ),
			'name'            => 'trigger_idle',
			'default'         => false,
			'conditional'     => 'idle_timeout',
			'validation_type' => 'boolean',
		),
		'idle_timeout' => array(
			'type'            => 'input_field',
			'subtype'         => 'number',
			'title'           => __( 'Idle Timeout ( in seconds )', 'rapidology' ),
			'name'            => 'idle_timeout',
			'hint_text'       => __( 'Define how many seconds user should be inactive before the pop up appears on screen.', 'rapidology' ),
			'default'         => '15',
			'display_if'      => 'true',
			'validation_type' => 'number',
		),
		'post_bottom' => array(
			'type'            => 'checkbox',
			'title'           => __( 'Trigger At The Bottom of Post', 'rapidology' ),
			'name'            => 'post_bottom',
			'default'         => '1',
			'validation_type' => 'boolean',
		),
		'comment_trigger' => array(
			'type'            => 'checkbox',
			'title'           => __( 'Trigger After Commenting', 'rapidology' ),
			'name'            => 'comment_trigger',
			'default'         => false,
			'validation_type' => 'boolean',
		),
        'exit_trigger' => array(
            'type'            => 'checkbox',
            'title'           => __( 'Trigger Before Leaving Page', 'rapidology' ),
            'name'            => 'exit_trigger',
            'default'         => false,
            'validation_type' => 'boolean',
        ),
		'trigger_scroll' => array(
			'type'            => 'checkbox',
			'title'           => __( 'Trigger After Scrolling', 'rapidology' ),
			'name'            => 'trigger_scroll',
			'default'         => false,
			'conditional'     => 'scroll_pos',
			'validation_type' => 'boolean',
		),
		'scroll_pos' => array(
			'type'            => 'input_field',
			'subtype'         => 'number',
			'title'           => __( 'Percentage Down The Page', 'rapidology' ),
			'name'            => 'scroll_pos',
			'hint_text'       => __( 'Define the % of the page to be scrolled before the pop up appears on the screen.', 'rapidology' ),
			'default'         => '50',
			'display_if'      => 'true',
			'validation_type' => 'number',
		),
		'purchase_trigger' => array(
			'type'            => 'checkbox',
			'title'           => __( 'Trigger After Purchasing', 'rapidology' ),
			'name'            => 'purchase_trigger',
			'default'         => false,
			'hint_text'       => __( 'Display on "Thank you" page of WooCommerce after purchase', 'rapidology' ),
			'validation_type' => 'boolean',
		),
		'session' => array(
			'type'            => 'checkbox',
			'title'           => __( 'Display once per session', 'rapidology' ),
			'name'            => 'session',
			'default'         => false,
			'validation_type' => 'boolean',
			'conditional'     => 'session_duration',
		),
		'session_duration' => array(
			'type'            => 'input_field',
			'subtype'         => 'number',
			'title'           => __( 'Session Duration (in days)', 'rapidology' ),
			'name'            => 'session_duration',
			'hint_text'       => __( 'Define the length of time (in days) that a session lasts for. For example, if you input 2 a user will only see a popup on your site every two days.', 'rapidology' ),
			'default'         => '1',
			'validation_type' => 'number',
			'display_if'      => 'true',
		),
		'hide_mobile' => array(
			'type'            => 'checkbox',
			'title'           => __( 'Hide on Mobile', 'rapidology' ),
			'name'            => 'hide_mobile_optin',
			'default'         => false,
			'validation_type' => 'boolean',
		),
	),

	'flyin_orientation' => array(
		'section_start' => array(
			'type'  => 'section_start',
			'title' => __( 'Fly-In Orientation', 'rapidology' ),
			'class' => 'rad_dashboard_for_flyin',
		),
		'flyin_orientation' => array(
			'type'            => 'select',
			'title'           => __( 'Choose Orientation', 'rapidology' ),
			'name'            => 'flyin_orientation',
			'value'           => array(
				'right'  => __( 'Right', 'rapidology' ),
				'left'   => __( 'Left', 'rapidology' ),
				'center' => __( 'Center', 'rapidology' ),
			),
			'default'         => 'right',
			'validation_type' => 'simple_text',
		),
	),

	'post_types' => array(
		array(
			'type'  => 'section_start',
			'title' => __( 'Display on', 'rapidology' ),
			'class' => 'rad_dashboard_child_hidden display_on_section',
		),
		array(
			'type'            => 'checkbox_set',
			'name'            => 'display_on',
			'value'           => array(
				'everything' => __( 'Everything', 'rapidology' ),
				'home'       => __( 'Homepage', 'rapidology' ),
				'archive'    => __( 'Archives', 'rapidology' ),
				'category'   => __( 'Categories', 'rapidology' ),
				'tags'       => __( 'Tags', 'rapidology' ),
			),
			'default'         => array( '' ),
			'validation_type' => 'simple_array',
			'conditional'     => array(
				'everything' => 'pages_exclude_section#posts_exclude_section#pages_include_section#posts_include_section',
				'category'   => 'categories_include_section',
			),
			'class'           => 'display_on_checkboxes',
		),
		array(
			'type'            => 'checkbox_posts',
			'subtype'         => 'post_types',
			'name'            => 'post_types',
			'default'         => array( 'post' ),
			'validation_type' => 'simple_array',
			'conditional'     => array(
				'page'     => 'pages_exclude_section',
				'post'     => 'categories_include_section#posts_exclude_section',
				'any_post' => 'posts_exclude_section#categories_include_section',
			),
		),
	),

	'post_categories' => array(
		array(
			'type'       => 'section_start',
			'title'      => __( 'Display on these categories', 'rapidology' ),
			'class'      => 'rad_dashboard_child_hidden categories_include_section',
			'name'       => 'categories_include_section',
			'display_if' => 'true',
		),
		array(
			'type'            => 'checkbox_posts',
			'subtype'         => 'post_cats',
			'name'            => 'post_categories',
			'include_custom'  => true,
			'default'         => array(),
			'validation_type' => 'simple_array',
		),
	),

	'pages_exclude' => array(
		array(
			'type'       => 'section_start',
			'title'      => __( 'Do not display on these pages', 'rapidology' ),
			'class'      => 'rad_dashboard_child_hidden',
			'name'       => 'pages_exclude_section',
			'display_if' => 'true',
		),
		array(
			'type'            => 'live_search',
			'name'            => 'pages_exclude',
			'post_type'       => 'only_pages',
			'placeholder'     => __( 'start typing page name...', 'rapidology' ),
			'default'         => '',
			'validation_type' => 'simple_text',
		),
	),

	'pages_include' => array(
		array(
			'type'       => 'section_start',
			'title'      => __( 'Display on these pages', 'rapidology' ),
			'subtitle'   => __( 'Pages defined below will override all settings above', 'rapidology' ),
			'class'      => 'rad_dashboard_child_hidden',
			'name'       => 'pages_include_section',
			'display_if' => 'false',
		),
		array(
			'type'            => 'live_search',
			'name'            => 'pages_include',
			'post_type'       => 'only_pages',
			'placeholder'     => __( 'start typing page name...', 'rapidology' ),
			'default'         => '',
			'validation_type' => 'simple_text',
		),
	),

	'posts_exclude' => array(
		array(
			'type'       => 'section_start',
			'title'      => __( 'Do not display on these posts', 'rapidology' ),
			'class'      => 'rad_dashboard_child_hidden',
			'name'       => 'posts_exclude_section',
			'display_if' => 'true',
		),
		array(
			'type'            => 'live_search',
			'name'            => 'posts_exclude',
			'post_type'       => 'only_posts',
			'placeholder'     => __( 'start typing post name...', 'rapidology' ),
			'default'         => '',
			'validation_type' => 'simple_text',
		),
	),

	'posts_include' => array(
		array(
			'type'       => 'section_start',
			'title'      => __( 'Display on these posts', 'rapidology' ),
			'subtitle'   => __( 'Posts defined below will override all settings above', 'rapidology' ),
			'class'      => 'rad_dashboard_child_hidden',
			'name'       => 'posts_include_section',
			'display_if' => 'false',
		),
		array(
			'type'            => 'live_search',
			'name'            => 'posts_include',
			'post_type'       => 'only_posts',
			'placeholder'     => __( 'start typing post name...', 'rapidology' ),
			'default'         => '',
			'validation_type' => 'simple_text',
		),
	),

	'authorization' => array(
		'authorization_title' => array(
			'type'  => 'main_title',
			'title' => __( 'Setup your accounts', 'rapidology' ),
		),

		'sub_section_mailchimp' => array(
			'type'        => 'section_start',
			'sub_section' => true,
			'title'       => __( 'MailChimp', 'rapidology' ),
		),

		'mailchimp_key' => array(
			'type'                 => 'input_field',
			'subtype'              => 'text',
			'name'                 => 'mailchimp_key',
			'title'                => __( 'MailChimp API Key', 'rapidology' ),
			'default'              => '',
			'class'                => 'api_option api_option_key',
			'hide_contents'        => true,
			'hint_text'            => sprintf(
				'<a href="%2$s" target="_blank">%1$s</a>',
				__( 'Click here for more information', 'rapidology' ),
				esc_url( 'http://www.rapidology.com' )
			),
			'hint_text_with_links' => 'on',
			'validation_type'      => 'simple_text',
		),
		'mailchimp_button' => array(
			'type'      => 'button',
			'title'     => __( 'Authorize', 'Monarch' ),
			'link'      => '#',
			'class'     => 'rad_dashboard_authorize',
			'action'    => 'mailchimp',
			'authorize' => true,
		),

		'sub_section_aweber' => array(
			'type'        => 'section_start',
			'sub_section' => true,
			'title'       => __( 'AWeber', 'rapidology' ),
		),

		'aweber_key' => array(
			'type'                 => 'input_field',
			'subtype'              => 'text',
			'name'                 => 'aweber_key',
			'title'                => __( 'AWeber authorization code', 'rapidology' ),
			'default'              => '',
			'class'                => 'api_option api_option_key',
			'hide_contents'        => true,
			'hint_text'            => sprintf(
				'<a href="%2$s" target="_blank">%1$s</a>',
				__( 'Click here for more information', 'rapidology' ),
				esc_url( 'http://www.rapidology.com' )
			),
			'hint_text_with_links' => 'on',
			'validation_type'      => 'simple_text',
		),
		'aweber_button' => array(
			'type'      => 'button',
			'title'     => __( 'Authorize', 'Monarch' ),
			'link'      => '#',
			'class'     => 'rad_dashboard_authorize',
			'action'    => 'aweber',
			'authorize' => true,
		),
	),

	'optin_type' => array(
		'type'            => 'hidden_option',
		'subtype'         => 'string',
		'name'            => 'optin_type',
		'validation_type' => 'simple_text',
	),

	'optin_status' => array(
		'type'            => 'hidden_option',
		'subtype'         => 'string',
		'name'            => 'optin_status',
		'validation_type' => 'simple_text',
	),

	'test_status' => array(
		'type'            => 'hidden_option',
		'subtype'         => 'string',
		'name'            => 'test_status',
		'validation_type' => 'simple_text',
	),

	'next_optin' => array(
		'type'            => 'hidden_option',
		'subtype'         => 'string',
		'name'            => 'next_optin',
		'default'         => '-1',
		'validation_type' => 'simple_text',
	),

	'child_of' => array(
		'type'            => 'hidden_option',
		'subtype'         => 'string',
		'name'            => 'child_of',
		'validation_type' => 'simple_text',
	),

	'child_optins' => array(
		'type'            => 'hidden_option',
		'subtype'         => 'array',
		'name'            => 'child_optins',
		'validation_type' => 'simple_array',
	),

	'setup_title' => array(
		'type'     => 'main_title',
		'title'    => __( 'Setup your optin form', 'rapidology' ),
		'subtitle' => __( 'Name your optin and configure your form integration.', 'rapidology' ),
	),

	'design_title' => array(
		'type'     => 'main_title',
		'title'    => __( 'Design your optin form', 'rapidology' ),
		'subtitle' => __( 'Configure your content, layout, and optin styling below.', 'rapidology' ),
		'class'    => 'rad_dashboard_design_title',
	),

	'display_title' => array(
		'type'     => 'main_title',
		'title'    => __( 'Display Settings', 'rapidology' ),
		'subtitle' => __( 'Define when and where to display this optin on your website.', 'rapidology' ),
	),

	'import_export' => array(
		'type'  => 'import_export',
		'title' => __( 'Import/Export', 'rapidology' ),
	),

	'home' => array(
		'type'  => 'home',
		'title' => __( 'Home', 'rapidology' ),
	),

	'stats' => array(
		'type'  => 'stats',
		'title' => __( 'Optin Stats', 'rapidology' ),
	),

	'accounts' => array(
		'type'  => 'account',
		'title' => __( 'Accounts', 'rapidology' ),
	),

	'edit_account' => array(
		'type'  => 'edit_account',
		'title' => __( 'Edit Account', 'rapidology' ),
	),

	'preview_optin' => array(
		'type'  => 'preview_optin',
		'title' => __( 'Preview', 'rapidology' ),
	),

	'premade_templates_start' => array(
		'type'     => 'main_title',
		'title'    => __( 'Choose a template', 'rapidology' ),
		'subtitle' => __( 'These are just starting points that you can full customize on the next step.', 'rapidology' ),
	),

	'premade_templates_main' => array(
		'type'  => 'premade_templates',
		'title' => __( 'Choose a template', 'rapidology' ),
	),

	'end_of_section' => array(
		'type' => 'section_end',
	),

	'end_of_sub_section' => array(
		'type'        => 'section_end',
		'sub_section' => 'true',
	),
);

/**
 * Array of options assigned to sections. Format of option key is following:
 * 	<section>_<sub_section>_options
 * where:
 *	<section> = $rad_ -> $key
 *	<sub_section> = $rad_ -> $value['contents'] -> $key
 *
 * Note: name of this array shouldn't be changed. $rad_assigned_options variable is being used in RAD_Dashboard class as options container.
 */
$rad_assigned_options = array(
	'optin_setup_options' => array(
		$rad_dashboard_options_all[ 'setup_title' ],
		$rad_dashboard_options_all[ 'optin_type' ],
		$rad_dashboard_options_all[ 'optin_status' ],
		$rad_dashboard_options_all[ 'test_status' ],
		$rad_dashboard_options_all[ 'child_of' ],
		$rad_dashboard_options_all[ 'child_optins' ],
		$rad_dashboard_options_all[ 'next_optin' ],
		$rad_dashboard_options_all[ 'optin_name' ][ 'section_start' ],
			$rad_dashboard_options_all[ 'optin_name' ][ 'option' ],
		$rad_dashboard_options_all[ 'end_of_section' ],
		$rad_dashboard_options_all[ 'form_integration' ][ 'section_start' ],
			$rad_dashboard_options_all[ 'form_integration' ][ 'email_provider' ],
			$rad_dashboard_options_all[ 'form_integration' ][ 'select_account' ],
			$rad_dashboard_options_all[ 'form_integration' ][ 'email_list' ],
			$rad_dashboard_options_all[ 'form_integration' ][ 'custom_html' ],
		$rad_dashboard_options_all[ 'end_of_section' ],
	),
	'optin_premade_options' => array(
		$rad_dashboard_options_all[ 'premade_templates_start' ],
		$rad_dashboard_options_all[ 'premade_templates_main' ],
	),
	'optin_design_options' => array(
		$rad_dashboard_options_all[ 'preview_optin' ],
		$rad_dashboard_options_all[ 'design_title' ],
		$rad_dashboard_options_all[ 'optin_title' ][ 'section_start' ],
			$rad_dashboard_options_all[ 'optin_title' ][ 'option' ],
		$rad_dashboard_options_all[ 'end_of_section' ],
		$rad_dashboard_options_all[ 'optin_message' ][ 'section_start' ],
			$rad_dashboard_options_all[ 'optin_message' ][ 'option' ],
		$rad_dashboard_options_all[ 'end_of_section' ],
		$rad_dashboard_options_all[ 'image_settings' ][ 'section_start' ],
			$rad_dashboard_options_all[ 'image_settings' ][ 'image_orientation' ],
			$rad_dashboard_options_all[ 'image_settings' ][ 'image_orientation_widget' ],
		$rad_dashboard_options_all[ 'end_of_section' ],
		$rad_dashboard_options_all[ 'image_upload' ][ 'section_start' ],
			$rad_dashboard_options_all[ 'image_upload' ][ 'image_url' ],
			$rad_dashboard_options_all[ 'image_upload' ][ 'image_animation' ],
			$rad_dashboard_options_all[ 'image_upload' ][ 'hide_mobile' ],
		$rad_dashboard_options_all[ 'end_of_section' ],
		$rad_dashboard_options_all[ 'optin_styling' ][ 'section_start' ],
			$rad_dashboard_options_all[ 'optin_styling' ][ 'header_bg_color' ],
			$rad_dashboard_options_all[ 'optin_styling' ][ 'header_font' ],
			$rad_dashboard_options_all[ 'optin_styling' ][ 'body_font' ],
			$rad_dashboard_options_all[ 'optin_styling' ][ 'header_text_color' ],
			$rad_dashboard_options_all[ 'optin_styling' ][ 'corner_style' ],
			$rad_dashboard_options_all[ 'optin_styling' ][ 'border_orientation' ],
			$rad_dashboard_options_all[ 'optin_styling' ][ 'border_color' ],
		$rad_dashboard_options_all[ 'end_of_section' ],
		$rad_dashboard_options_all[ 'border_style' ],
		$rad_dashboard_options_all[ 'form_setup' ][ 'section_start' ],
			$rad_dashboard_options_all[ 'form_setup' ][ 'form_orientation' ],
			$rad_dashboard_options_all[ 'form_setup' ][ 'display_name' ],
			$rad_dashboard_options_all[ 'form_setup' ][ 'name_fields' ],
			$rad_dashboard_options_all[ 'form_setup' ][ 'name_text' ],
			$rad_dashboard_options_all[ 'form_setup' ][ 'single_name_text' ],
			$rad_dashboard_options_all[ 'form_setup' ][ 'last_name' ],
			$rad_dashboard_options_all[ 'form_setup' ][ 'email_text' ],
			$rad_dashboard_options_all[ 'form_setup' ][ 'button_text' ],
		$rad_dashboard_options_all[ 'end_of_section' ],
		$rad_dashboard_options_all[ 'form_styling' ][ 'section_start' ],
			$rad_dashboard_options_all[ 'form_styling' ][ 'field_orientation' ],
			$rad_dashboard_options_all[ 'form_styling' ][ 'field_corner' ],
			$rad_dashboard_options_all[ 'form_styling' ][ 'text_color' ],
			$rad_dashboard_options_all[ 'form_styling' ][ 'form_bg_color' ],
			$rad_dashboard_options_all[ 'form_styling' ][ 'form_button_color' ],
			$rad_dashboard_options_all[ 'form_setup' ][ 'button_text_color' ],
		$rad_dashboard_options_all[ 'end_of_section' ],
		$rad_dashboard_options_all[ 'edge_style' ],
		$rad_dashboard_options_all[ 'footer_text' ][ 'section_start' ],
			$rad_dashboard_options_all[ 'footer_text' ][ 'option' ],
		$rad_dashboard_options_all[ 'end_of_section' ],
		$rad_dashboard_options_all[ 'success_message' ][ 'section_start' ],
			$rad_dashboard_options_all[ 'success_message' ][ 'option' ],
		$rad_dashboard_options_all[ 'end_of_section' ],
		$rad_dashboard_options_all[ 'custom_css' ][ 'section_start' ],
			$rad_dashboard_options_all[ 'custom_css' ][ 'option' ],
		$rad_dashboard_options_all[ 'end_of_section' ],
	),
	'optin_display_options' => array(
		$rad_dashboard_options_all[ 'display_title' ],
		$rad_dashboard_options_all[ 'flyin_orientation' ][ 'section_start' ],
			$rad_dashboard_options_all[ 'flyin_orientation' ][ 'flyin_orientation' ],
		$rad_dashboard_options_all[ 'end_of_section' ],
		$rad_dashboard_options_all[ 'load_in' ][ 'section_start' ],
			$rad_dashboard_options_all[ 'load_in' ][ 'load_animation' ],
			$rad_dashboard_options_all[ 'load_in' ][ 'trigger_auto' ],
			$rad_dashboard_options_all[ 'load_in' ][ 'load_delay' ],
			$rad_dashboard_options_all[ 'load_in' ][ 'trigger_idle' ],
			$rad_dashboard_options_all[ 'load_in' ][ 'idle_timeout' ],
			$rad_dashboard_options_all[ 'load_in' ][ 'post_bottom' ],
			$rad_dashboard_options_all[ 'load_in' ][ 'comment_trigger' ],
            $rad_dashboard_options_all[ 'load_in' ][ 'exit_trigger' ],
			$rad_dashboard_options_all[ 'load_in' ][ 'trigger_scroll' ],
			$rad_dashboard_options_all[ 'load_in' ][ 'scroll_pos' ],
			$rad_dashboard_options_all[ 'load_in' ][ 'purchase_trigger' ],
			$rad_dashboard_options_all[ 'load_in' ][ 'session' ],
			$rad_dashboard_options_all[ 'load_in' ][ 'session_duration' ],
			$rad_dashboard_options_all[ 'load_in' ][ 'hide_mobile' ],
		$rad_dashboard_options_all[ 'end_of_section' ],
		$rad_dashboard_options_all[ 'post_types' ][0],
			$rad_dashboard_options_all[ 'post_types' ][1],
			$rad_dashboard_options_all[ 'post_types' ][2],
		$rad_dashboard_options_all[ 'end_of_section' ],
		$rad_dashboard_options_all[ 'post_categories' ][0],
			$rad_dashboard_options_all[ 'post_categories' ][1],
		$rad_dashboard_options_all[ 'end_of_section' ],
		$rad_dashboard_options_all[ 'pages_include' ][0],
			$rad_dashboard_options_all[ 'pages_include' ][1],
		$rad_dashboard_options_all[ 'end_of_section' ],
		$rad_dashboard_options_all[ 'pages_exclude' ][0],
			$rad_dashboard_options_all[ 'pages_exclude' ][1],
		$rad_dashboard_options_all[ 'end_of_section' ],
		$rad_dashboard_options_all[ 'posts_exclude' ][0],
			$rad_dashboard_options_all[ 'posts_exclude' ][1],
		$rad_dashboard_options_all[ 'end_of_section' ],
		$rad_dashboard_options_all[ 'posts_include' ][0],
			$rad_dashboard_options_all[ 'posts_include' ][1],
		$rad_dashboard_options_all[ 'end_of_section' ],
	),
	'header_importexport_options' => array(
		$rad_dashboard_options_all[ 'import_export' ],
	),
	'header_home_options' => array(
		$rad_dashboard_options_all[ 'home' ],
	),
	'header_accounts_options' => array(
		$rad_dashboard_options_all[ 'accounts' ],
	),
	'header_edit_account_options' => array(
		$rad_dashboard_options_all[ 'edit_account' ],
	),
	'header_stats_options' => array(
		$rad_dashboard_options_all[ 'stats' ],
	),
);