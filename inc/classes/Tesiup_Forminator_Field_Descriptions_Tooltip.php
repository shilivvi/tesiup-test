<?php

class Tesiup_Forminator_Field_Descriptions_Tooltip
{
    private static $_instance = null;

    public static function get_instance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new Tesiup_Forminator_Field_Descriptions_Tooltip();
        }

        return self::$_instance;
    }

    private function __construct()
    {
        $this->init();
    }

    public function init()
    {
        add_filter('forminator_field_markup', array($this, 'wpmudev_forminator_field_markup'), 10, 2);
        //add_action('wp_footer', array($this, 'wpmudev_forminator_tooltip_assets'), 99);
    }

    public function wpmudev_forminator_field_markup($html, $field)
    {
        if (isset($field['description'])) {

            $field_id = 'forminator-field-' . $field['element_id'];
            $description = $field['description'];

            $markup = sprintf(
                '<span class="forminator-description" aria-describedby="%s">%s</span>',
                $field_id,
                esc_html($description)
            );

            //error_log(print_r($options, 1));

            $html = str_replace($markup, '', $html);
            $html = str_replace('id="' . $field_id . '"', 'id="' . $field_id . '" data-tippy-content="' . esc_html($description) . '" ', $html);
        }

        return $html;
    }
}



add_action( 'after_setup_theme', function(){
    //return Tesiup_Forminator_Field_Descriptions_Tooltip::get_instance();
});