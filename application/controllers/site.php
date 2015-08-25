<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
	/**
	 * site Controller
	 *
	 * 
	 * 
	 */
	   public function __construct() {
	 		  error_reporting(0);
				parent::__construct();
				$this->load->model('site/home_site_m');
				$this->load->library('form_validation');
		}
/*
	* @method site Home Page Index (Login page for outreach coordinator)   If coordinator session exist redirecting to profile else Login Page
	* @param  Null 
	* @return object  if success Home page
 * */
		public function index() {
			$ses_data=$this->session->userdata('user_details');
			$this->load->view('site/header',$data);
			$this->load->view('site/home/home',$data);
			$this->load->view('site/footer',$data);
					
	}
		
/*
	* @method  signin   Authenticating coordinator
	* @param   Post Values
	* @return object  if success coordinator Dashboard else Login View 
*/
		public function signin() {
		$this->load->view('site/header',$data);
	    $this->form_validation->set_rules('email', 'E-Mail', 'required|xss_clean');
	    $this->form_validation->set_rules('password', 'Password', 'required|xss_clean');
		if ($this->form_validation->run() == FALSE )
		{
			 $this->load->view('site/site/signin',$data);
		}
		else if ($this -> input ->post())
		{
		$postdata=$this -> input ->post();
		$res=$this->home_site_m->signin($postdata);
		if($res==0){
		$this->session->set_flashdata('msg', 'Invalid User Name or password');
	     $this->load->view('site/site/signin',$data);
		}
		else if($res==1){
		$this->session->set_flashdata('msg', 'Please verify Your Email address for activation');
	    $this->load->view('site/site/change_profile',$data);
		}
		else{
		
			if($res['last_loggedin'] == '')
			{
				redirect('Profile',"refresh");
			}
			else
			{
				$result = $this->home_site_m->updatelogin($res['id']);
				redirect('nodal-coordinator',"refresh");
			}
		}
	}
			$this->load->view('site/footer');
	}
/*
		* @method  forgot password   
		* @param  Post of email
		* @return  object if success redirect to the view  with status
*/
public function forgot_password() {
		$this->load->view('site/header',$data);
	    $this->form_validation->set_rules('email', 'User Name', 'required|xss_clean');
		if ($this->form_validation->run() == FALSE )
		{
			 $this->load->view('site/site/forgot_password',$data);
		}
		else if ($this -> input ->post())
		{
		$email=$this -> input ->post('email');
		$res=$this->home_site_m->check_email($email);
		if($res==0){
		$this->session->set_flashdata('msg', 'Invalid User Name');
	     $this->load->view('site/site/forgot_password',$data);
		}
		else{
		$pwd=rand(000000,999999);
		$det=array(
		'email'=>$res['email'],
		'password'=>md5($pwd)
		);
		$upd=$this->home_site_m->forgot_password($det);
		if($upd>0){
		$this->load->library('amazon_ses');
						$this->amazon_ses->to($res['email']);
						$this->amazon_ses->subject("Request Password");
						$message="<html><head><META http-equiv='Content-Type' content='text/html; charset=utf-8'>
                                   </head><body>
                                      <div style='margin:0;padding:0'>
 	                                <table border='0' cellspacing='0' cellpadding='0'>
    	                           <tbody>
		                           <tr>
				                        <td valign='top'><p>".$res['name']." please click bellow link to activate your TASK Account.</p></td>
		                           </tr>
		                          <tr>
				                       <td valign='top'><p><strong>User Name :</strong> ".$email."</p></td>
		                          </tr>
								  <tr>
				                       <td valign='top'><p><strong>Password :</strong> ".$pwd."</p></td>
		                          </tr>
		                    </tbody>
	                    </table>  
                     </div>
                    </body></html>";
						$this->amazon_ses->message($message);//exit;
					if($this->amazon_ses->send()){
		$this->session->set_flashdata('msg', 'Please check Your Email to receive Password');
	     $this->load->view('site/site/signin',$data);
		}
		else{
		$this->session->set_flashdata('msg', 'Your Request Failed.Please Re-Try.');
	     $this->load->view('site/site/forgot_password',$data);
		}
		}
		else{
		$this->session->set_flashdata('msg', 'Your Request Failed.Please Re-Try.');
	     $this->load->view('site/site/forgot_password',$data);
		}
		}
	}
			$this->load->view('site/footer');
	}
/*
	* @method  logout   killing admin session data
	* @param  Null 
	* @return object  redirect to index method if session killing
 */	
		public function logout(){
			$this->session->unset_userdata('user_details');
			$this->session->sess_destroy();
			redirect(base_url(),'refresh');
		}
/*
	* @method profile 
	* @param  Post Values 
	* @return object  if success redirect to profile page
*/
	public function profile() {
				$ses_data=$this->session->userdata('user_details');
				if (empty($ses_data)){
				redirect('Login');
				}
				$data['student_details']=$ses_data;
				$this->load->view('site/header',$data);
			    $this->load->view('site/site/change_profile',$data);
				$this->load->view('site/footer');
		}
/*
	* @method authentic_coordinator 
	* @param  Post Values 
	* @return object  if success profile page
*/
	public function authentic_coordinator(){
							$ses_data=$this->session->userdata('user_details');
							 if (empty($ses_data)){
							redirect('Login');
							} 
							$data['get_workshop']=$this->home_site_m->get_nodal();	 
						 		$postdata=$this -> input ->post();
								$uploads_dir = '/images/outreach-profile-images/';
								$target_dir = 'images/outreach-profile-images/';
								$target_file = $target_dir . basename($_FILES["profile_image"]["name"]);
								 if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file)) {
					  			  } else {
					        
					 				   }
							$postdata['profile_image'] = ($_FILES['profile_image']['name']);
							$res=$this->home_site_m->profileedit($postdata);
							if($res==0){
								$ses_data= $this->session->userdata("user_details");
								if($ses_data['user_type']==1){
								redirect('manage-workshop');
									 
									}else{
										$data['getPresentationReporting']=$this->home_site_m->getPresentationReporting();
										$data['getGuidesMaterial']=$this->home_site_m->getGuidesMaterial();
										$data['getWorkshopMetirial']=$this->home_site_m->getWorkshopMetirial();
										//$data['get_workshop_history']=$this->home_site_m->getWorkshopHistory();
										$demoa = $data['get_workshop_history']=$this->home_site_m->getWorkshopHistoryNodal();
									
														$data['get_workshop_upcoming1']=$this->home_site_m->getupcomingWorkshop();
										$this->load->view('site/header',$data);
							$this->load->view('site/nodal-coordinator/nodal_workshop.php',$data);
						    $this->load->view('site/footer');	
								}
				}else{
					$this->logout();
					}
			}	
/*
	* @method manage_workshop 
	* @param  Post Values 
	* @return object  if success redirecting to manage workshop  page
*/		
		public function manage_workshop(){
			$ses_data=$this->session->userdata('user_details');
			if (empty($ses_data)){
			redirect('Login');
			}
			$data['get_workshop']=$this->home_site_m->getWorkshop();
			$data['get_workshop_upcoming']=$this->home_site_m->getWorkshop_m();
			$data['get_workshop_history']=$this->home_site_m->getWorkshopHistoryOutreach();
$data['get_name']=$this->home_site_m->getnames();
$data['get_getworkshopgr']=$this->home_site_m->getworkshopgr();
$data['getworkshopcreated']=$this->home_site_m->getworkshopcreated();
	$data['get_workshop1']=$this->home_site_m->get_nodal();	
			//echo "<pre>";print_r($data['get_workshop_history']);exit;
			$postdata=$this -> input ->post();
				$res=$this->home_site_m->profileedit($postdata);
				if($res==0){
				$this->load->view('site/header',$data);
				$this->load->view('site/outreachcoordinator/manage_workshop',$data);
			    $this->load->view('site/footer');
				}
		}
/*
	* @method  addNodal   Create nodal Page
	* @param   Post Values
	* @return object  if success redirect to Nodal Listing View with Success Message else Create Nodal View 
 */
	 	

	public function addNodal(){
		$this->load->view('site/header',$data);
		$this->load->view('site/outreachcoordinator/addnodlcenter',$data);
	    $this->load->view('site/footer');
		
	}
/*
	* @method  nodalCoordinatorListing  
	* @param   
	* @return object  if success redirect to nodal coordinator Listing View
 */	
	public function nodalCoordinatorListing(){
	$data['get_workshop']=$this->home_site_m->get_nodal();	
									 $this->load->view('site/header',$data);
									 $this->load->view('site/outreachcoordinator/outreachcoordinatorview',$data);
						   			 $this->load->view('site/footer');
	}

}
