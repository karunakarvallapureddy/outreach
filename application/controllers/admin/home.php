<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {

	/**
	 * Home Controller
	 * Login Method
	 * Dashboard Method
	 */
	 public function __construct() {
		parent::__construct();
		$this->load->model(array('homemodel','logmodel'));
		$this->load->library('form_validation');
	}
	 /*
		@method  Home Page Index (Login page for outreach Admin)   If Admin session exist redirecting to dashboard else Login Page
		@param  Null 
		@return object  if success Dashboard else Login View 
	 */
	public function index()
	{
		$logged = $this->session->userdata('adminDetails');
	
		if ( $logged === FALSE)
		{
			$this->load->view('home/login_v');
		}
		else
		{
			redirect("admin/home/dashboard");
		}
	}
	 /*
		@method  checkLogin   Authenticating Admin
		@param   Post Values
		@return object  if success Dashboard else Login View 
	 */
	public function check_login()
	{
		$home_page_data=$this->homemodel->login($this->input->post('email'),$this->input->post('password'));
        if($home_page_data!=0)
		{
			$this->session->set_userdata('adminDetails',$home_page_data);
			redirect('admin/home/dashboard', 'location');
		}
		else
		{
			$result['msg'] = 'The E-mail or Password you entered is incorrect';
			$this->load->view('home/login_v',$result);
		}
	}

	 /*
		@method  profile   outreach admin Profile
		@param   Null and Session admin id
		@return  object Listing Admin Profile Details 
	 */
	public function profile()
	{
		$this->loggedIn();
		$home_page_data['menu'] = "dashboard";
		$session_data = $this->session->userdata('adminDetails');
		if($this->session->flashdata('msg')){
			$home_page_data['msg']=$this->session->flashdata('msg');
		}
		$home_page_data['profile_details'] = element(0,$this->homemodel->getAdmin($session_data['admin_id']));
		$this->layout->view('home/profile_v',$home_page_data);
	}
	/*
		@method  editProfile   Updating outreach admin Profile
		@param  Null and Session admin id
		@return object if no Post values View page if post values exits and if it success redirect to Profile Page 
	 */
	public function editProfile()
	{
		
		$this->loggedIn();
		$home_page_data['menu'] = "dashboard";
		$config_rules = array(
            array(
                'field' => 'first_name',
                'label' => 'First Name',
                'rules' => 'required'
            ),
			array(
                'field' => 'last_name',
                'label' => 'Last Name',
                'rules' => ''
            ),
            
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email'
            )
        );
		$this->form_validation->set_rules($config_rules);
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
		
		$session_data = $this->session->userdata('adminDetails');
		$home_page_data['profile_details'] = element(0,$this->homemodel->getAdmin($session_data['admin_id'],$session_data['permission_id']));
	   if($this->form_validation->run() == FALSE)
	   { 
			$this->layout->view('home/editProfile',$home_page_data);
	   }
	   else
	   {
			$postdata             = $this->input->post();
			$postdata['admin_id'] = $session_data['admin_id'];
			
			if(isset($_FILES) && $_FILES['image']['name'] != '' )
			{    
				$upload_path = "images/admin_images/";
				$newFileName = $_FILES['image']['name'];
				$fileExt = array_pop(explode(".", $newFileName));
				$filename = time().rand(0000,9990).".".$fileExt;
				$config['file_name'] = $filename;
				$config['upload_path'] = $upload_path;
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['overwrite'] = TRUE;
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('image')) 
			    {
					$postdata['image'] = $filename;
					$result = $this->homemodel->editProfile($postdata);
					if($result >= 0)
					{
						/* Add Logs */
						$page = ucfirst($this -> input -> post('first_name'))." account has been updated. ";
						$notification = array('subject' => $page, 'type' => 'Profile', 'msg_type' => 'success');
						$this -> logmodel -> add_record($notification);
						/* End Logs */
						
						$this->session->set_flashdata('msg', 'Successfully Updated');
						redirect('admin/home/profile');
					}
					else
					{
						$home_page_data['msg'] = "Sorry try again";
						$this->layout->view('home/editProfile',$home_page_data);
					}
				}
				else
				{
					$home_page_data['msg'] = "File type not allowed";
					$this->layout->view('home/editProfile',$home_page_data);
				}
			}
			else
			{
				$result = $this->homemodel->editProfile($postdata);
				if($result >= 0)
				{
					$this->session->set_flashdata('msg', 'Successfully Updated');
					redirect('admin/home/profile');
				}
				else
				{
					$home_page_data['msg'] = "Sorry try again";
					$this->layout->view('home/editProfile',$home_page_data);
				} 
			}
	   }
	}
	
	/*
		@method  changePassword   Changing Admin Password
		@param   Null,Session Admin id and Password Post data
		@return object  if success Dashboard else Change Password View 
	 */

	public function changePassword()
	{
		
		$this->loggedIn();
		$home_page_data['menu'] = "dashboard";
		$config_rules = array(
            array(
                'field' => 'curr_password',
                'label' => 'Current Password',
                'rules' => 'required|min_length[5]|max_length[20]'
            ),
			array(
                'field' => 'new_password',
                'label' => 'New Password',
                'rules' => 'required|min_length[5]|max_length[20]|matches[retype_password]'
            ),
            
            array(
                'field' => 'retype_password',
                'label' => 'Re-type New Password',
                'rules' => 'required|min_length[5]|max_length[20]'
            )
        );
		$this->form_validation->set_rules($config_rules);
	   
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
		$session_data = $this->session->userdata('adminDetails');
		$profile_details = element(0,$this->homemodel->getAdmin($session_data['admin_id']));
	   if($this->form_validation->run() == FALSE)
	   { 
			$this->layout->view('home/change_password_v',$home_page_data);
	   }
	   else
	   {
			$curr_password = md5($this->input->post('curr_password'));
			$new_password = md5($this->input->post('new_password'));
			if($curr_password == $new_password)
			{
				$home_page_data['msg'] = "Existing password and New Password is not be the same";
				$this->layout->view('home/change_password_v',$home_page_data);
			}
			if($curr_password != $profile_details['password'])
			{
				$home_page_data['msg'] = "Existing password is wrong";
				$this->layout->view('home/change_password_v',$home_page_data);
			}
			else
			{
				$postdata             = $this->input->post();
				$postdata['admin_id'] = $session_data['admin_id'];
				$result = $this->homemodel->changePassword($postdata);
				if($result == 1)
				{
					/* Add Logs */
					$page = " Password has been updated. ";
					$notification = array('subject' => $page, 'type' => 'Admin', 'msg_type' => 'success');
					$this -> logmodel -> add_record($notification);
					/* End Logs */
					$this->session->set_flashdata('msg', 'Password Successfully Changed');
					redirect('admin/home/dashboard');
				}
				else
				{
					$home_page_data['msg'] = "Sorry try again";
					$this->layout->view('home/change_password_v',$home_page_data);
				} 
			}
	   
	   }
	
	}
	

	 /*
		@method  dashboard   outreach admin Dashboard after success login
		@param  Null 
		@return object Dashboard Page 
	 */
	public function dashboard()
	{
		 $this->loggedIn();
		 $home_page_data['menu'] = "dashboard";
		 $this->load->model('usermodel');
		 $home_page_data['user_count'] = $this->usermodel->getUserCount();
		 if($this->session->flashdata('msg')){
			$home_page_data['msg']=$this->session->flashdata('msg');
		}
  		 $this->layout->view('home/dashboard_v', $home_page_data);
	}
	
	/* 
		@method  outreach coordinator  
		@param  Null 
		@return  object outreach coordinator Listing View
	 */
	public function coordinator()
	{

		$this->loggedIn();
		$home_page_data['menu'] = "staff";
		if($this->session->flashdata('msg')){
			$home_page_data['msg']=$this->session->flashdata('msg');
		}
		if($this->input->post("reset")){
			$this->session->unset_userdata('staff_filter_data');
		} else {
				if($this->input->post()) {
					$post_data = $this->input->post();
					$staff_filter_data=array(
					'staff_name' => $post_data['staff_name'],
					'date_range' => $post_data['date_range'],
					);
					$this->session->set_userdata('staff_filter_data', $staff_filter_data);
				}
		}
		$this->load->library('my_pagination');
		$config['base_url'] = base_url().'home/coordinator';
		$config['total_rows'] = count($this->homemodel->getCoordinator());
		$config['per_page'] = 10;
		$config['full_tag_open'] = '<div id = "datatable2_paginate" class="dataTables_paginate paging_bs_full "><ul class="pagination">';
		$config['full_tag_close'] = '</ul></div>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</a><li>';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Prev';
		$config['num_links'] = 6; 
		$config['uri_segment'] = 4; 
		
		$limit=$config['per_page'];
		$offset=$this->uri->segment(4);
		$this->my_pagination->initialize($config); 
		
		$home_page_data['coordinatorList']=$this->homemodel->getcoordinator($id="",$limit,$offset);
		$home_page_data['pagination'] = $this->my_pagination->create_links();
		
		$this->layout->view('coordinator/coordinatorList',$home_page_data);
	}

	/*
		@method  addCoordinator   
		@param   Post Values
		@return object  if success redirect to outreach coordinator Listing  else add outreach coordinator View 
	 */ 
	public function addCoordinator()
	{
		$home_page_data['menu'] = "Coordinator";
		//$home_page_data['superadminPermissionList'] =$this->homemodel->getPermissions();
		$this->form_validation->set_rules('last_name', 'Last Name', 'xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'required|xss_clean|valid_email');	
		
		if ($this->form_validation->run() == FALSE )				//if validates,  adding.
		{
			$this->layout->view('coordinator/addCoordinator',$home_page_data);
		}
		else
		{
			$session_data = $this->session->userdata('adminDetails');
			$postdata = $this->input->post();
			$postdata['admin_id'] = $session_data['admin_id'];
			$postdata['password'] = rand('000000','999999');
			$result = $this->homemodel->addCoordinator($postdata);
			if($result > 0)			
			{
				 $this->load->library('email');
				$this->email->to($postdata['email']);
				$this->email->from('noreply@outreach.com');
				$this->email->subject('Your Outreach  account Password');
				$message = "Hi								
Your Outreach Admin Email-id is : ".$postdata['email']."
Your Outreach Admin Password is : ".$postdata['password']."

Thanks & Regards ,
Thub Team
 "; 
				$this->email->message($message);
				$this->email->send();
				
				/* Add Logs */
				$page = ucfirst($this -> input -> post('las_name'))." has been added. ";
				$notification = array('subject' => $page, 'type' => 'Staff', 'msg_type' => 'success');
				$this -> logmodel -> add_record($notification);
				/* End Logs */
						
						
				$this->session->set_flashdata('msg', 'Outreach Coordinator Added Successfully');
				redirect('admin/home/coordinator', 'refresh');	//on success, redirect to view page.
			}
			else
			{
				$this->session->set_flashdata('msg', 'coordinator already Exists');
				redirect('admin/home/addCoordinator', 'refresh'); // on failure   				
			}
		}
	}
	/*
		@method  edit outreach Coordinator   Updating coordinator Data
		@param  Coordinator id and  Post Values
		@return object  if success redirect to outreach coordinator listing else outreach coordinator Edit View 
	 */
	public function editCoordinator()
	{
		$this->loggedIn();
		$home_page_data['menu'] = "staff";
		//$home_page_data['superadminPermissionList'] =$this->homemodel->getPermissions();
		$this->form_validation->set_rules('first_name', 'First Name', 'required|xss_clean|min_length[3]');
		$this->form_validation->set_rules('email', 'Email', 'required|xss_clean|valid_email');
		$this->form_validation->set_error_delimiters('<span class="error">', '</span>');
		
		if($this->input->post())
			$hidden_coordinator_id = $this->input->post('hidden_staff_id');
		else
			$hidden_coordinator_id = base64_decode($this->uri->segment(4));
			
		$home_page_data['hidden_coordinator_id'] = $hidden_coordinator_id;
		$home_page_data['coordinatorList'] = element(0,$this->homemodel->getcoordinator($hidden_coordinator_id));
		if ($this->form_validation->run() == FALSE )				
		{
			$this->layout->view('coordinator/editCoordinator',$home_page_data);
		}
		else
		{
			$session_data = $this->session->userdata('adminDetails');
			$postdata = $this->input->post();
			$postdata['admin_id'] = $session_data['admin_id'];
			$result = $this->homemodel->editCoordinator($postdata);
			if($result  >= 0)			
			{
					/* Add Logs */
				$page = ucfirst($this -> input -> post('name'))." has been updated. ";
				$notification = array('subject' => $page, 'type' => 'Staff', 'msg_type' => 'success');
				$this -> logmodel -> add_record($notification);
				/* End Logs */
				$this->session->set_flashdata('msg', 'coordinator Updated Successfully');
				redirect('admin/home/coordinator', 'refresh');	//on success, redirect to view page.
			}
			else
			{
				$this->session->set_flashdata('msg', 'Sorry try again');
				redirect('admin/home/coordinator', 'refresh'); // on failure   				
			}
		}
	}
	/*
		@method  deleteCoordinator  deleting Coordinator (changing status)
		@param  Coordinator id 
		@return object  if success redirect to Coordinator listing
	 */
	public function deleteCoordinator()
	{
		$this->loggedIn();
		$staff_id = base64_decode($this->uri->segment(4));
		$session_data = $this->session->userdata('adminDetails');
		$admin_id = $session_data['admin_id'];
		$result = $this->homemodel->deleteCoordinator($staff_id,$admin_id);
		if($result > 0)			
		{
				/* Add Logs */
				$page = " has been deleted. ";
				$notification = array('subject' => $page, 'type' => 'Coordinator', 'msg_type' => 'success');
				$this -> logmodel -> add_record($notification);
				/* End Logs */
			$this->session->set_flashdata('msg', 'Coordinator deleted Successfully');
			redirect('admin/home/coordinator', 'refresh');	//on success, redirect to view page.
		}
		else
		{
			$this->session->set_flashdata('msg', 'Sorry try again');
			redirect('admin/home/coordinator', 'refresh'); // on failure   				
		}
	}
	
	/*
		@method  loggedIn   check if admin session exists or not
		@param  Null 
		@return object  redirect to index method if session not exits
	 */
	public function loggedIn()
	{
	   $logged = $this->session->userdata('adminDetails');
		if ( $logged === FALSE){
			
				redirect("admin", 'refresh');
			}
	}
	/*
		@method  logout   killing admin session data
		@param  Null 
		@return object  redirect to index method if session killing
	 */
	function logout()
	{
		$this->loggedIn();
		$this->session->unset_userdata('adminDetails');
		$this->session->sess_destroy();
		redirect('admin', 'refresh');
	}
	
}

/* End of file home.php */
/* Location: ./application/controllers/admin/home.php */