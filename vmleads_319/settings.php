<?php
class VMLEADS_SETTINGS_319
{
	/**
	 * Holds the values to be used in the fields callbacks
	 */
	private $options;

	/**
	 * Start up
	 */
	public function __construct()
	{
		add_action( 'admin_menu', array( $this, 'add_plugin_page' ) );
		add_action( 'admin_init', array( $this, 'page_init' ) );
	}

	/**
	 * Add options page
	 */
	public function add_plugin_page()
	{
		// This page will be under "Settings"
		add_options_page(
			'Settings Admin', 
			'VMLEADS 319', 
			'manage_options', 
			'vmleads-settings-319', 
			array( $this, 'create_admin_page' )
		);
	}

	/**
	 * Options page callback
	 */
	public function create_admin_page()
	{
		// Set class property
		$this->options = get_option( 'vm_option_319' );
		?>
		<div class="wrap">
			<?php screen_icon(); ?>
			<h2>VMLEADS SETTINGS 319</h2>           
			<form method="post" action="options.php">
			<?php
				// This prints out all hidden setting fields
				settings_fields( 'vm_option_group_319' );   
				do_settings_sections( 'vmleads-settings-319' );
				submit_button(); 
			?>
			</form>
		</div>
		<?php
	}

	/**
	 * Register and add settings
	 */
	public function page_init()
	{
		register_setting(
			'vm_option_group_319', // Option group
			'vm_option_319', // Option name
			array( $this, 'sanitize' ) // Sanitize
		);

		add_settings_section(
			'setting_section_id_319', // ID
			'VMLEADS 319', // Title
			array( $this, 'print_section_info' ), // Callback
			'vmleads-settings-319' // Page
		);

		add_settings_field(
			'site_id', // ID
			'Site ID', // Title 
			array( $this, 'site_id_callback' ), // Callback
			'vmleads-settings-319', // Page
			'setting_section_id_319' // Section           
		);

		add_settings_field(
			'source', // ID
			'Default Source', // Title 
			array( $this, 'source_callback' ), // Callback
			'vmleads-settings-319', // Page
			'setting_section_id_319' // Section           
		);

		add_settings_field(
			'form_title', // ID
			'Form Title', // Title 
			array( $this, 'form_title_callback' ), // Callback
			'vmleads-settings-319', // Page
			'setting_section_id_319' // Section           
		);

		add_settings_field(
			'form_submit', // ID
			'Form Submit Button Text', // Title 
			array( $this, 'form_submit_callback' ), // Callback
			'vmleads-settings-319', // Page
			'setting_section_id_319' // Section           
		);

		add_settings_field(
			'form_loading', // ID
			'Form Loading Text', // Title 
			array( $this, 'form_loading_callback' ), // Callback
			'vmleads-settings-319', // Page
			'setting_section_id_319' // Section           
		);

		add_settings_field(
			'form_style', // ID
			'Form Inline CSS Style', // Title 
			array( $this, 'form_style_callback' ), // Callback
			'vmleads-settings-319', // Page
			'setting_section_id_319' // Section           
		);

		add_settings_field(
			'is_test', // ID
			'Test Mode', // Title 
			array( $this, 'is_test_callback' ), // Callback
			'vmleads-settings-319', // Page
			'setting_section_id_319' // Section           
		);
	}

	/**
	 * Sanitize each setting field as needed
	 *
	 * @param array $input Contains all settings fields as array keys
	 */
	public function sanitize( $input )
	{
		/*$new_input = array();
		if( isset( $input['form_title'] ) )
			$new_input['form_title'] = absint( $input['form_title'] );

		if( isset( $input['title'] ) )
			$new_input['title'] = sanitize_text_field( $input['title'] );*/

		$new_input = $input;
		return $new_input;
	}

	public function print_section_info()
	{
		echo 'Enter your settings below:';
	}

	public function site_id_callback()
	{
		printf(
			'<input type="text" class="regular-text" id="site_id" name="vm_option_319[site_id]" value="%s" />',
			isset( $this->options['site_id'] ) ? esc_attr( $this->options['site_id']) : ''
		);
	}

	public function form_title_callback()
	{
		printf(
			'<input type="text" class="regular-text" id="form_title" name="vm_option_319[form_title]" value="%s" />',
			isset( $this->options['form_title'] ) ? esc_attr( $this->options['form_title']) : ''
		);
	}

	public function source_callback()
	{
		printf(
			'<input type="text" class="regular-text" id="source" name="vm_option_319[source]" value="%s" />',
			isset( $this->options['source'] ) ? esc_attr( $this->options['source']) : ''
		);
	}

	public function form_submit_callback()
	{
		printf(
			'<input type="text" class="regular-text" id="form_submit" name="vm_option_319[form_submit]" value="%s" />',
			isset( $this->options['form_submit'] ) ? esc_attr( $this->options['form_submit']) : 'Submit'
		);
	}

	public function form_loading_callback()
	{
		printf(
			'<input type="text" class="regular-text" id="form_loading" name="vm_option_319[form_loading]" value="%s" />',
			isset( $this->options['form_loading'] ) ? esc_attr( $this->options['form_loading']) : 'Loading, Please wait...'
		);
	}

	public function form_style_callback()
	{
		printf(
			'<textarea rows=5 cols=80 id="form_style" name="vm_option_319[form_style]">%s</textarea>',
			isset( $this->options['form_style'] ) ? esc_attr( $this->options['form_style']) : ''
		);
	}

	public function is_test_callback()
	{
		$is_test = isset( $this->options['is_test'] ) ? $this->options['is_test'] : 0 ;
		$options = '';
		foreach(array('No','Yes') as $k => $v){
			$options .= '<option '.($k == $is_test ? 'selected=selected':'').' value="'.$k.'"">'.$v.'</option>';
		}
		echo '<select id="is_test" name="vm_option_319[is_test]">'.$options.'</select>';
	}
}


