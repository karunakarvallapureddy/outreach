<?php 

	/**
	 * CMS Controller
	 **/

class cms extends CI_Controller
{ 
	public function __construct() {

		parent::__construct();
		$this->loggedIn();
		$this->load->library(array('form_validation','session','Layout'));
		 // load form lidation libaray & session 
		$this->load->helper(array('url','html','form'));  // load url,html,form helpers optional
		$this->load->model(array('cmsmodel'));
	}	

	/*
		@method  CMS index   Listing outreach CMS
		@param  URI Segment (@ pagination) 
		@return object CMS Listing View 
	 */
	 		
	public function index() { 
	
		$cmsData['menu'] = "cms";
		//print_r($cmsData['menu']);exit;
        $this->load->library('my_pagination');
        $config['base_url'] = base_url().'admin/cms/index';
        $config['total_rows'] = $this->cmsmodel->cmsCount();
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
		
		if($this->input->post("reset")){
			$this->session->unset_userdata('cms_filter_data');
			} else {
				if($this->input->post()) {
					$post_data = $this->input->post();
					$cms_filter_data=array(
					'date_range' => $post_data['date_range'],
					);
			$this->session->set_userdata('cms_filter_data', $cms_filter_data);
			}
		}
        
        $cmsData['cms_details']=$this->cmsmodel->getCms($id="",$limit,$offset);
        $cmsData['pagination'] = $this->my_pagination->create_links();
       
		$cmsData['menu'] = "cms";
		$this->layout->view('cms/cmsView',$cmsData);
	}
	
	/*
		@method  createCms   Create CMS Page
		@param   Post Values
		@return object  if success redirect to CMS Listing View with Success Message else Create CMS View 
	 */
	 	
	
	public function createCms() {
		$this->form_validation->set_rules('title', 'Title', 'trim|xss_clean|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|xss_clean|required');
		$this->form_validation->set_rules('seo_title', 'SEO Title', 'trim|xss_clean|required');
		$this->form_validation->set_rules('seo_tags', 'SEO Tags', 'trim|xss_clean|required');
		
		$this->form_validation->set_error_delimiters('<span  class="error">', '</span >'); 

		$cmsData['menu'] = "cms";
		
		if ($this->form_validation->run() == FALSE )                //if validates,  adding.
        {
        		$this->layout->view('cms/createCmsView',$cmsData);
        }
		else
		if(!empty($_POST)) { 
			$cmsPostData  = $this->input->post();
			if(isset($_FILES['cms_file']['name']) && ($_FILES['cms_file']['name']!="")){
					$userfile_extn = explode(".",$_FILES['cms_file']['name']);
				$filename=time()."-".rand(00,99).".".end($userfile_extn);
					$config['upload_path']		= 'uploads/cms/';
					$config['allowed_types']	= 'pdf|doc|docx';
					$config['file_name'] = $filename;
				  $_FILES['file_var_name']['name']=$filename;
					$this->load->library('upload', $config);
					$uploadres=$this->upload->do_upload('cms_file');
					if($uploadres){
					$cmsPostData['cms_file']=$filename;
					}
					else{
					$cmsPostData['cms_file']=null;
					}
					}
			$cms_status=$this->cmsmodel->createCms($cmsPostData);
			if($cms_status > 0) {
				/* Add Logs */
				$page = ucfirst($this->input->post('title'))." has been added. ";
				$notification = array('subject' => $page, 'type' => 'CMS', 'msg_type' => 'success');
				
				/* End Logs */
				$this->session->set_flashdata('msg', 'CMS Added Successfully');
				redirect('admin/cms/index');
				} else {
					$this->session->set_flashdata('msg', 'CMS Creation Fails');
					redirect('admin/cms/index');
					}
		}
	}
	
	/*
		@method  updateCms   Updating CMS Page
		@param  CMS Page Id and  Post Values
		@return object  if success redirect to CMS Listing View with Success Message else Update CMS View 
	 */	
	
		public function updateCms() {
			
		$id=base64_decode($this->uri->segment(4));
		$this->form_validation->set_rules('title', 'Title', 'trim|xss_clean|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|xss_clean|required');
		$this->form_validation->set_rules('seo_title', 'SEO Title', 'trim|xss_clean|required');
		$this->form_validation->set_rules('seo_tags', 'SEO Tags', 'trim|xss_clean|required');
		
		$this->form_validation->set_error_delimiters('<span  class="error">', '</span >'); 

		$cmsData['menu'] = "cms";
		$cmsData['cms_details']=$this->cmsmodel->cmsGetUpd($id);

		if ($this->form_validation->run() == FALSE ) {
				$cmsData['cms_details']=$this->cmsmodel->cmsGetUpd($id);
        		$this->layout->view('cms/updateCmsView',$cmsData);
        } else {
			if(!empty($_POST)) {
			$post_data=$this->input->post();
              if(isset($_FILES['cms_file']['name']) && ($_FILES['cms_file']['name']!="")){
					$userfile_extn = explode(".",$_FILES['cms_file']['name']);
				$filename=time()."-".rand(00,99).".".end($userfile_extn);
					$config['upload_path']		= 'uploads/cms/';
					$config['allowed_types']	= 'pdf|doc|docx';
					$config['file_name'] = $filename;
				  $_FILES['file_var_name']['name']=$filename;
					$this->load->library('upload', $config);
					$uploadres=$this->upload->do_upload('cms_file');
					if($uploadres){
					$post_data['cms_file']=$filename;
					}
					else{
					$post_data['cms_file']=$cmsData['cms_details']->cms_file;
					}
					}			
				$upd_status=$this->cmsmodel->cmsUpdate($id,$post_data);
				if($upd_status >=0) {
				/* Add Logs */
				$page = ucfirst($this->input->post('title'))." has been updated. ";
				$notification = array('subject' => $page, 'type' => 'CMS', 'msg_type' => 'success');
			
				/* End Logs */
				$this->session->set_flashdata('msg', 'CMS Updated Successfully');
				redirect('admin/cms/index');  
				}else {
				$this->session->set_flashdata('msg', 'CMS Update Fails');
				redirect('admin/cms/index');
				}
			}
		}
	}
	
	/*
		@method  cms_name_check   Call back function while adding CMS to check duplicates of name
		@param  cms Name  
		@return boolean  TRUE if sucess else FALSE
	 */
	
	public function cms_name_check($cms_name) {	
		if($this->cmsmodel->getCmsName($cms_name) > 0 ) { 
			$this->form_validation->set_message('cms_name_check', 'CMS "'.$cms_name.'" already Created');
			return false;
			} else return true;
		}
		
	/*
		@method  cmsStatus   Activating and Inactivating CMS Page status (changing status)
		@param  CMS Page id 
		@return object  if success redirect to CMS listing
	 */ 
	 
	public function cmsStatus() {
		if(isset($_POST['status_bus_id'])) {
			$status_id=$this->cmsmodel->cmsGetUpd($_POST['status_bus_id']);
			if($status_id->status==1)
			$st_val=2;
			else 
			$st_val=1;
				$status_update=$this->cmsmodel->cmsUpdStatus($_POST['status_bus_id'],$st_val);
				
				/* Add Logs */
				$page = " has been toggled. ";
				$notification = array('subject' => $page, 'type' => 'CMS', 'msg_type' => 'success');
				
				/* End Logs */
				echo $status_update; //echo for ajax respond
		}
	}
	
	/*
		@method  cmsDelete   deleting CMS (changing status)
		@param  CMS id 
		@return object  if success redirect to CMS listing
	 */
	 
	public function cmsDelete() {
			$id=base64_decode($this->uri->segment(4));
			$st_val=3; //set status = 3 for delete
			$status_delete=$this->cmsmodel->cmsUpdStatus($id,$st_val);
			if($status_delete >=0) {
			$this->session->set_flashdata('msg', 'CMS deleted Successfully');
				redirect('admin/cms/index', 'refresh');	//on success, redirect to view page.
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
			
				redirect("admin/home/index");
			}
	}
	
}

/* End of file cmsController.php */
/* Location: ./application/controllers/admin/cmsController.php */



