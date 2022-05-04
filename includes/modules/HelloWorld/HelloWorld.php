<?php

class CUSTOMDIVITITLE_HelloWorld extends ET_Builder_Module
{

    public $slug = 'customdivititle_hello_world';
    public $vb_support = 'on';

    protected $module_credits = array(
        'module_uri' => 'custom-divi-title',
        'author' => 'Rajan Panchal',
        'author_uri' => 'https://profiles.wordpress.org/rajanpanchal2028/',
    );

    public function init()
    {
        $this->name = esc_html__('Custom title', 'customdivititle-custom-title');
    }

    public function get_fields()
    {
        return array(
            'setting_1' => array(
                'label' => esc_html__('Setting 1', 'module-slug'),
                'type' => 'tiny_mce',
                'option_category' => 'basic_option',
                'description' => esc_html__('Content entered here will appear inside the module.', 'nemo-new-module'),
                'toggle_slug' => 'main_content',
            ),
            'setting_2' => array(
                'label' => esc_html__('Textarea Field', 'nemo-new-module'),
                'type' => 'textarea',
                'option_category' => 'basic_option',
                'description' => esc_html__('Description for Textarea field', 'nemo-new-module'),
                'toggle_slug' => 'main_content',
            ),
            'setting_3' => array(
                'label' => esc_html__('Text Field', 'nemo-new-module'),
                'type' => 'text',
                'option_category' => 'basic_option',
                'description' => esc_html__('Description for text field', 'nemo-new-module'),
                'toggle_slug' => 'main_content',
            ),
            'setting_4' => array(
                'label' => esc_html__('Yes No Field', 'nemo-new-module'),
                'type' => 'yes_no_button',
                'options' => array(
                    'no' => esc_html('No', 'nemo-new-module'),
                    'yes' => esc_html('Yes', 'nemo-new-module'),
                ),
                'option_category' => 'basic_option',
                'description' => esc_html__('Description for yes no field', 'nemo-new-module'),
                'toggle_slug' => 'main_content',
            ),
            'setting_5' => array(
                'label' => esc_html__('Image Upload', 'nemo-new-module'),
                'type' => 'upload',
                'option_category' => 'basic_option',
                'choose_text' => esc_attr__('Choose an image', 'nemo-new-module'),
                'upload_button_text' => esc_attr__('Upload an image', 'nemo-new-module'),
                'description' => esc_html__('Upload an image ', 'nemo-new-module'),
                'data_type' => 'image',
                'toggle_slug' => 'main_content',
            ),
            'setting_6' => array(
                'label' => esc_html__('Range Slider', 'nemo-new-module'),
                'type' => 'range',
                'range_settings' => array(
                    'min' => '50px',
                    'max' => '200px',
                    'step' => '10px',
                ),
                'fixed_unit' => 'px',
                'default' => '100px',
                'option_category' => 'basic_option',
                'description' => esc_html__('Description for Range Slider', 'nemo-new-module'),
                'toggle_slug' => 'main_content',
            ),
            'setting_7' => array(
                'label' => esc_html__('Color Field', 'nemo-new-module'),
                'type' => 'color',
                'default' => '#000000',
                'option_category' => 'basic_option',
                'description' => esc_html__('Description for text field', 'nemo-new-module'),
                'toggle_slug' => 'main_content',
            ),

        );
    }

    public function render($attrs, $content = null, $render_slug)
    {
        return sprintf('
		<div>
			<h1>%1$s</h1>
			<p>%2$s</p>
			<p>%3$s</p>
			<p class="%4$s">The class for this text changes on yes/no toggle</p>
			<img alt="change-this" src="%5$s"/>
			<p>%6$s</p>
			<p>The code for this color is: %7$s</p>

		</div>',
            $this->props['setting_1'], $this->props['setting_2'], $this->props['setting_3'], $this->props['setting_4'], $this->props['setting_5'], $this->props['setting_6'], $this->props['setting_7']
        );
    }
}

new CUSTOMDIVITITLE_HelloWorld;
