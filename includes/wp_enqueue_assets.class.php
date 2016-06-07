<?php
class wp_enqueue_assets {

	/**
	 * Global variables to pass to constructor
	 */

	public $asset_id;
	public $asset_url;
	public $asset_type;
	public $asset_require;
	public $asset_script_style;
	/**
	 * Contructor method for init assets.
	 */
	public function __construct($a, $b, $c, $d, $e) {
		$this->asset_id 			= $a;
		$this->asset_url 			= $b;
		$this->asset_type			= $c;
		$this->asset_require		= $d;
		$this->asset_script_style	= $e;

		$this->handle_asset();
	}

	/**
	 * Method for handling theme or plugin asset.
	 */

	public function handle_asset(){
		if($this->asset_type == 'plugin'):
			$this->handle_plugin_asset();
		endif;
		if($this->asset_type == 'theme'):
			$this->handle_theme_asset();
		endif;
	}


	/**
	 * Method for handling plugin asset.
	 */
	private function handle_plugin_asset() {

		if($this->asset_script_style == 'style'):
			wp_enqueue_style($this->asset_id, plugins_url($this->asset_url) );
		endif;
		if($this->asset_script_style == 'script'):
			wp_enqueue_script($this->asset_id, plugins_url().'/'.$this->asset_url, array($this->asset_require) );
		endif;
	}



	/**
	 * Method for handling theme assets
	 */

	private function handle_theme_asset() {

		if($this->asset_script_style == 'style'):
			wp_enqueue_style($this->asset_id, get_template_directory_uri().'/'.$this->asset_url );
		endif;
		if($this->asset_script_style == 'script'):
			wp_enqueue_script($this->asset_id, get_template_directory_uri().'/'.$this->asset_url, array($this->asset_require) );
		endif;
	}
}

class wp_localize_scripts {
	/**
	 * Register script and localize it
	 */

	public function localize_script_asset($script, $object, $assetArray) {
		wp_localize_script( $script, $object, $assetArray );
	}
}

?>