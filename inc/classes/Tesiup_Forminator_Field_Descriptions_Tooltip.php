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
        add_filter('forminator_field_markup', [$this, 'wpmudev_forminator_field_markup'], 10, 2);
    }

    public function wpmudev_forminator_field_markup($html, $field)
    {
        if(!isset($field['custom-class'])){
            return $html;
        }

        if(strpos($field['custom-class'], 'custom-tooltip') === false){
            return $html;
        }

        if (isset($field['description']) and $field['type'] == 'textarea') {
            $field_id = 'forminator-field-' . $field['element_id'];
            $description = $field['description'];

            $field_id = $this->get_ui_id($html, $field_id);
            if(empty($field_id)){
                return $html;
            }

            $markup = sprintf(
                '<span id="%s-description" class="forminator-description">%s</span>',
                $field_id,
                esc_html($description)
            );

            $html = str_replace($markup, '', $html);
            $html = str_replace(
                '<label for="' . $field_id . '" class="forminator-label">',
                '<label for="' . $field_id . '" class="forminator-label"><i data-tippy-content="' . esc_html($description) . '" class="far fa-question-circle"></i>',
                $html
            );

            if(!empty($field['custom-class'])){
                $classes = explode(' ', $field['custom-class']);
                foreach ($classes as $class){
                    if(strpos($class, 'row') !== false){
                        $row = str_replace('row', '', $class);
                        if(is_numeric($row)){
                            $html = str_replace(
                                'rows="6"',
                                'rows="' . $row . '"',
                                $html
                            );
                        }
                    }
                }
            }

            return $html;
        }

        if (isset($field['description']) and $field['type'] == 'date') {
            $field_id = 'forminator-field-' . $field['element_id'] . '-picker';
            $description = $field['description'];

            $field_id = $this->get_ui_id($html, $field_id);
            if(empty($field_id)){
                return $html;
            }

            $markup = sprintf(
                '<span id="%s-description" class="forminator-description">%s</span>',
                $field_id,
                esc_html($description)
            );

            $html = str_replace($markup, '', $html);
            $html = str_replace(
                '<label for="' . $field_id . '" class="forminator-label">',
                '<label for="' . $field_id . '" class="forminator-label"><i data-tippy-content="' . esc_html($description) . '" class="far fa-question-circle"></i>',
                $html
            );

            return $html;
        }

        if (isset($field['description']) and $field['type'] == 'select') {
            $field_id = $this->get_select_ui_id($html);
            $description = $field['description'];

            if(empty($field_id)){
                return $html;
            }

            $markup = sprintf(
                '<span id="%s-description" class="forminator-description">%s</span>',
                $field_id,
                esc_html($description)
            );

            $html = str_replace($markup, '', $html);
            $html = str_replace(
                '<label for="' . $field_id . '-label" class="forminator-label">',
                '<label for="' . $field_id . '-label" class="forminator-label"><i data-tippy-content="' . esc_html($description) . '" class="far fa-question-circle"></i>',
                $html
            );

            return $html;
        }

        if (isset($field['description'])) {

            $field_id = 'forminator-field-' . $field['element_id'];
            $description = $field['description'];

            $field_id = $this->get_ui_id($html, $field_id);
            if(empty($field_id)){
                return $html;
            }

            $markup = sprintf(
                '<span id="%s-description" class="forminator-description">%s</span>',
                $field_id,
                esc_html($description)
            );

            $html = str_replace($markup, '', $html);
            $html = str_replace(
                '<label for="' . $field_id . '" class="forminator-label">',
                '<label for="' . $field_id . '" class="forminator-label"><i data-tippy-content="' . esc_html($description) . '" class="far fa-question-circle"></i>',
                $html
            );

            return $html;
        }

        return $html;
    }

    private function get_ui_id($html, $field_id){
        $matches = [];
        $reg = '/(for="' . $field_id . '_)\w{1,}/';
        preg_match($reg, $html, $matches);
        $ui_id = 0;

        if(count($matches) >= 2){
            $ui_id = str_replace($matches[1], '', $matches[0]);
            $field_id .= '_' . $ui_id;
            return $field_id;
        }

        return $ui_id;
    }

    private function get_select_ui_id($html){
        $matches = [];
        $reg = "/<select id=\"(\S+)\"/";
        preg_match($reg, $html, $matches);
        $ui_id = 0;

        if(!empty($matches[1])){
            $ui_id = $matches[1];
        }

        return $ui_id;
    }
}



add_action( 'after_setup_theme', function(){
    return Tesiup_Forminator_Field_Descriptions_Tooltip::get_instance();
});