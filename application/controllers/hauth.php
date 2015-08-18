<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Hauth extends CI_Controller {
	public function index() {
		$this->load->view('site/home/header');
		$this->load->view('site/home/home');
		$this->load->view('site/home/footer');
		}

/**
@method login 
**/
	public function login($provider="")
	{
		$this->load->library('form_validation');
		$this->load->model('site/home_site_m');
error_reporting(E_ALL);		
		log_message('debug', "site.controllers.HAuth.login($provider) called");
		try
		{
			log_message('debug', 'site.controllers.HAuth.login: loading HybridAuthLib');
			$this->load->library('HybridAuthLib');//echo "HIHIHIH";exit;

			if ($this->hybridauthlib->providerEnabled($provider))
			{
				log_message('debug', "controllers.HAuth.login: service $provider enabled, trying to authenticate.");
				$service = $this->hybridauthlib->authenticate($provider);
				//echo "<pre>";print_r($service);exit;

				if ($service->isUserConnected()) {
					log_message('debug', 'controller.HAuth.login: user authenticated.');

					$user_profile = $service->getUserProfile();
					
					log_message('info', 'controllers.HAuth.login: user profile:'.PHP_EOL.print_r($user_profile, TRUE));

					//$data['user_profile'] = $user_profile;
					//echo "<pre>";print_r($data['user_profile']); echo $data['user_profile']->email;exit;
					
					$mailid=$user_profile->email;
					if(!empty($mailid)) {
						$mailid_status = $this->home_site_m->emailValidation($mailid); 
						if ($mailid_status > 0)	{
							$user_data = $this->home_site_m->login_id($mailid_status);
								$this->session->set_userdata('userdetails',$user_data);
		     //$data['msg'] = 'Thank you for register with Volyty.<br/><br/>Please check your Email. We have sent you access details of Volyty.';
			redirect('home');
								/*	if($provider!='volyty') {
										$u_data = array('u_id'=>$user_id,'loged_in'=>'login','l_type'=>$provider);
										$this->session->set_userdata('u_data',$u_data);
									}*/
							} else {
								$this->load->library('amazon_ses');
								$user_data['user_agent']=$this->input->user_agent();
								$user_data['ip']=$this->input->ip_address();
								$user_data['agency_email']=$mailid;
								$user_data['address']=$user_profile->address;
								$user_data['city']=$user_profile->city;
								$user_data['country']=$user_profile->country;
								$user_data['travelagency_name']=$user_profile->firstName;
								$user_data['password'] = rand(000000,999999);

								$data = $this->home_site_m->addFbAgent($user_data,$provider);
								if($data > 0) {
							    
								$user_data = $this->home_site_m->login_id($data);
								$this->session->set_userdata('userdetails',$user_data);
		    // $data['msg'] = 'Thank you for register with Volyty.<br/><br/>Please check your Email. We have sent you access details of Volyty.';
			 redirect('home');
									/* $this->amazon_ses->to($user_data['agency_email']);
									$this->amazon_ses->subject('Welcome to flyeasy ');
									$message1 = "Hi,
									
Thank you for registering with Flyeasy.
Your Flyeasy Email-id is : ".$user_data['agency_email']."
Your Flyeasy Password is : ".$user_data['password']."

Thanks & Regards ,
Flyeasy Team
 ";
									$this->amazon_ses->message($message1);
									$ress=$this->amazon_ses->send();
									if($ress) {  */
									//echo 'success'; exit;
									
										
									// }
								} else {
								echo 'eeee'; exit;
									$data['msg'] = "Sorry try again";
									$this->load->view('site/home/header');
									$this->load->view('site/home/login',$data);
									$this->load->view('site/home/footer');
									}

			
								}
					}
					

				}
				else // Cannot authenticate user
				{
					show_error('Cannot authenticate user');
				}
			}
			else // This service is not enabled.
			{
				log_message('error', 'controllers.HAuth.login: This provider is not enabled ('.$provider.')');
				show_404($_SERVER['REQUEST_URI']);
			}
		}
		catch(Exception $e)
		{//echo "HIHI<pre>";print_r($e->getCode());exit;
			$error = 'Unexpected error';
			switch($e->getCode())
			{
				case 0 : $error = 'Unspecified error.'; break;
				case 1 : $error = 'Hybriauth configuration error.'; break;
				case 2 : $error = 'Provider not properly configured.'; break;
				case 3 : $error = 'Unknown or disabled provider.'; break;
				case 4 : $error = 'Missing provider application credentials.'; break;
				case 5 : log_message('debug', 'controllers.HAuth.login: Authentification failed. The user has canceled the authentication or the provider refused the connection.');
				         //redirect();
				         if (isset($service))
				         {
				         	log_message('debug', 'controllers.HAuth.login: logging out from service.');
				         	$service->logout();
				         }
				         show_error('User has cancelled the authentication or the provider refused the connection.');
				         break;
				case 6 : $error = 'User profile request failed. Most likely the user is not connected to the provider and he should to authenticate again.';
				         break;
				case 7 : $error = 'User not connected to the provider.';
				         break;
			}

			if (isset($service))
			{
				$service->logout();
			}

			log_message('error', 'controllers.HAuth.login: '.$error);
			show_error('Error authenticating user.');
		}
	}

	public function endpoint()
	{

		log_message('debug', 'site/controllers.HAuth.endpoint called.');
		log_message('info', 'site/controllers.HAuth.endpoint: $_REQUEST: '.print_r($_REQUEST, TRUE));

		if ($_SERVER['REQUEST_METHOD'] === 'GET')
		{
			log_message('debug', 'site/controllers.HAuth.endpoint: the request method is GET, copying REQUEST array into GET array.');
			$_GET = $_REQUEST;
		}

		log_message('debug', 'site/controllers.HAuth.endpoint: loading the original HybridAuth endpoint script.');
		require_once APPPATH.'/third_party/hybridauth/index.php';

	}

	
}

/* End of file hauth.php */
/* Location: ./application/controllers/hauth.php */
