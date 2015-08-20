<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH.'/third_party/hybridauth/Hybrid/Auth.php';

class HybridAuthLib extends Hybrid_Auth
{
	function __construct($config = array())
	{
		$ci =& get_instance();
		$ci->load->helper('url_helper');
		//$config['base_url']=$config['base_url'];
		//echo $config['base_url']."<br>".config_item('index_page')."<br>".base_url()."<br>";
		//$config['base_url'] = site_url((config_item('index_page') == '' ? SELF : '').$config['base_url']);
		$config['base_url'] = base_url(/*(config_item('index_page') == '' ? SELF : '').*/$config['base_url']);
		//echo $config['base_url'];exit;
		//$config['base_url'] = "http://www.ideativedigital.net/crowdarch/site/hauth/login";
		//$config['base_url'] = "http://www.ideativedigital.net/crowdarch/hauth/login";
		parent::__construct($config);

		log_message('debug', 'HybridAuthLib Class Initalized');
	}

	/**
	 * @deprecated
	 */
	public static function serviceEnabled($service)
	{
		return self::providerEnabled($service);
	}

	public static function providerEnabled($provider)
	{
		return isset(parent::$config['providers'][$provider]) && parent::$config['providers'][$provider]['enabled'];
	}
}

/* End of file HybridAuthLib.php */
/* Location: ./application/libraries/HybridAuthLib.php */