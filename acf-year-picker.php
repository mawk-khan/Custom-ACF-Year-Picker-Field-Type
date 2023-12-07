<?php
/**
 * Custom ACF Field Type: Year Picker
 *
 * This class extends the ACF field functionality to create a custom field type named 'Year Picker'.
 * The Year Picker is designed to allow users to select a year from a dropdown, using the jQuery UI Datepicker,
 * but modified to only display the year part.
 */

if( !class_exists('acf_field_year_picker') && class_exists('acf_field') ) :

    class acf_field_year_picker extends acf_field {

        /**
         * Constructor for the ACF Year Picker field.
         *
         * Sets up the field type name and label, and initializes the field.
         */
        function __construct() {
            // Unique name identifying the custom field type
            $this->name = 'year_picker';

            // Visible name for the custom field type
            $this->label = __('Year Picker', 'acf');

            // Category to which this field type belongs. Can be 'basic', 'content', 'choice', etc.
            $this->category = 'basic';

            // Call parent constructor to initialize the field type
            parent::__construct();
        }

        /**
         * Renders the field input in the WordPress admin.
         *
         * @param array $field The field settings provided by ACF.
         */
        function render_field($field) {
            // Output an input field with class 'acf-year-picker-input'
            echo '<input type="text" class="acf-year-picker-input" name="' . esc_attr($field['name']) . '" value="' . esc_attr($field['value']) . '" />';
        }

        /**
         * Enqueues scripts and styles in the WordPress admin for the field.
         *
         * This function ensures that necessary scripts and styles for the jQuery UI Datepicker are enqueued,
         * as well as custom scripts for this field type.
         */
        function input_admin_enqueue_scripts() {
            // Enqueue jQuery UI Datepicker script if not already enqueued
            if (!wp_script_is('jquery-ui-datepicker', 'enqueued')) {
                wp_enqueue_script('jquery-ui-datepicker');
            }

            // Enqueue the ACF date picker CSS
            wp_enqueue_style('acf-jquery-ui-datepicker', '/wp-content/plugins/advanced-custom-fields-pro/assets/inc/datepicker/jquery-ui.min.css', array(), '1.11.4');
            // Enqueue custom JavaScript file for the Year Picker
            wp_enqueue_script('acf-input-year_picker', get_template_directory_uri() . 'acf-year-picker.js', array('acf-input', 'jquery-ui-datepicker'), false, true);
        }
    }
    // Instantiate the field type
    new acf_field_year_picker();

endif;
