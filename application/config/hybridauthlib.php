<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*!
* HybridAuth
* http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
* (c) 2009-2012, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
*/

// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------

$config =
	array(
		// set on "base_url" the relative url that point to HybridAuth Endpoint
		'base_url' => 'hauth/endpoint',

		"providers" => array (
			// openid providers
			"OpenID" => array (
				"enabled" => true
			),

			"Yahoo" => array (
				"enabled" => true,
				"keys"    => array ( "id" => "", "secret" => "" ),
			),

			"AOL"  => array (
				"enabled" => true
			),

			"Google" => array (
				"enabled" => true,
			//	"keys"    => array ( "id" => "962286338723-7ffnan91q52mtkq4pfmph4amk1hd78s4.apps.googleusercontent.com", "secret" => "GZAIRE3IrbUdtoN45dkrBFTO" ), 		//local
				"keys"    => array ( "id" => "633574665105-5t91c1e8fgj02ic7g6cpu97fn161l938.apps.googleusercontent.com", "secret" => "ECgo73WHs_vyWHDXzZHCVPW1" ),
			),

			"Facebook" => array (
				"enabled" => true,
				//"keys"    => array ( "id" => "1520947594825385", "secret" => "888b4a8f4dbca906dbd521e2a14b461c" ), //local
			//	"keys"    => array ( "id" => "1514303992171476", "secret" => "b67322bdb8557631c08b8cf7aef1cb2b" ),
				"keys"    => array ( "id" => "780834152002252", "secret" => "578c27ad33efd13035e6f49c3ed07442" ),
			),

			"Twitter" => array (
				"enabled" => true,
				"keys"    => array ( "key" => "fRT5Xt3SnaxgmCRl9YASZOxgC", "secret" => "848EmwAWgwDAvXFDurKmohSPRtGvpN5yuoWraG73fzp3ZVat1O" ), 
	//			"keys"    => array ( "key" => "TsV897RuC5ralho29W5tntzDx", "secret" => "25qWYpttjFUrhR45zHlRBCQQPJ0Xl7DnBUWkQhnRfHd3jvPuIE" ), //local
			),

			// windows live
			"Live" => array (
				"enabled" => true,
				"keys"    => array ( "id" => "", "secret" => "" )
			),

			"MySpace" => array (
				"enabled" => true,
				"keys"    => array ( "key" => "", "secret" => "" )
			),

			"LinkedIn" => array (
				"enabled" => true,
				"keys"    => array ( "key" => "", "secret" => "" )
			),

			"Foursquare" => array (
				"enabled" => true,
				"keys"    => array ( "id" => "", "secret" => "" )
			),
		),

		// if you want to enable logging, set 'debug_mode' to true  then provide a writable file by the web server on "debug_file"
		"debug_mode" => (ENVIRONMENT == 'development'),

		"debug_file" => APPPATH.'/logs/hybridauth.log',
	);


/* End of file hybridauthlib.php */
/* Location: ./application/config/hybridauthlib.php */