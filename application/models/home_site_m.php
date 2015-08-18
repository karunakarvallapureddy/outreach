<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home_site_m extends CI_Model{
    function __construct(){
        parent::__construct();
    }
	function get_cms($id){
	$query = $this->db->get_where('va_cms', array('title' =>$id));	
	if($query->num_rows() > 0){	 
	return  $query->row_array();
	}	
	else{	
	return 0;	
	}
	}
	function get_cms_title(){
	$query = $this->db->get('va_cms');	
	if($query->num_rows() > 0){	 
	return  $query->result_array();
	}	
	else{	
	return 0;	
	}
	}
	
	 
	 function save_contact($data){
	 		$data = array(
					'name'=>$data['name'],
					'email'=>$data['email'],
					'comment'=>$data['comment']
					);	
	$this->db->insert('va_contacts',$data);
	 return  $this->db->insert_id();
	 }	
	 function signin($postdata){
        $names = array('1', '2');	
		$this->db->where_in("status",$names);
		$this->db->where(array("email"=>$postdata['email'],"password"=>md5($postdata['password'])));
		$query = $this->db->get("va_users");
		if ($query->num_rows() > 0)
		{
			$data=$query->row_array();
			$this->session->set_userdata('user_details',$data);
		   $row =$data;
		}else{
		  $row=0;
		}
		return $row;
	}
	
	public function verifyemail($id) {
			 $this->db->where('va_users.id',$id);
			 $qry=$this->db->get('va_users')->row_array();
			 if($qry['status']==0){
			 $this->db->where('va_users.id',$id);
			 $this->db->update('va_users', array('status'=>2));
			 return $this->db->affected_rows();
			 }
			 else{
			 return 0;
			 }
	}
	
	public function check_email($email) {
			 $this->db->where('va_users.email',$email);
			 $qry=$this->db->get('va_users')->row_array();
			 if($qry){
			  return $qry;
			 }
			 else{
			 return 0;
			 }
	}
	
	public function forgot_password($data) {
			 $this->db->where('va_users.email',$data['email']);
			 $this->db->update('va_users', array('password'=>$data['password']));
			 if($this->db->affected_rows()>0){
			 return 1;
			 }
			 else{
			 return 0;
			 }
	}
	
	public function change_password($id,$data) {
			 $this->db->where('va_users.id',$id);
			 $this->db->update('va_users', array('password'=>md5($data['password'])));
			 if($this->db->affected_rows()>0){
			 return 1;
			 }
			 else{
			 return 0;
			 }
	}
public function profileedit($postdata){
$data = array(
               'password' => md5($postdata['password']),
               'profile_image' => $postdata['profile_image'],
               'last_loggedin' => date('Y-m-d H:i:s')
            );
			
$this->db->where('id', $postdata['userid']);
$this->db->update('va_users', $data); 
 if($this->db->affected_rows()>0){
			 return 1;
			 }
			 else{
			 return 0;
			 }
}	

	public function updatelogin($user_id)
	{
		$data = array(
		'last_loggedin' => date('Y-m-d H:i:s')
		);
		$this->db->where('id', $user_id);
		$this->db->update('va_users', $data); 
		if($this->db->affected_rows()>0){
		return 1;
		}
		else{
		return 0;
		}
	}
	
	
	
	public function addNodal($inputdata='')
	{
		if($this->db->insert('nodal_centers',$inputdata))
		return $this->db->insert_id();
		else
		return 0;
	}
	public function get_nodal($value='')
	{
			$ses_data= $this->session->userdata("user_details"); 
			$outreachid = $ses_data['id'];
			 $this->db->order_by('id','asc');
			 $query = $this->db->get_where('va_users',array('user_type'=>2,'outreach_id'=>$outreachid));	
		 return  $query->result_array(); 
	 	
	}
	public function addNodalcenter_m($postdata)
	{
		if(!empty($postdata['permission_id'])) {
			$permission_id=$postdata['permission_id'];
		} else  {
			$permission_id=0;
			}

		$data = array(
					'email'=>$postdata['email'],
					'name'=>$postdata['lastname'],
					'center'=>$postdata['fname'],
					'workshop'=>$postdata['workshop'],
					'participants'=>$postdata['participants'],
					'experiments'=>$postdata['experiments'],
					'outreach_id'=>$postdata['outreach_id'],
					'user_type'=>2,
					'password'=>md5($postdata['password']),
					'status'=>1,
					'created_on'=>date('Y-m-d H:i:s'));
		$this->db->insert('va_users',$data);		
		$insert_id = $this->db->insert_id();
		if($insert_id)
		{
			$data1 = array(
						'user_id'=>$insert_id,
						'last_name'=>$postdata['lastname']
						);
			$this->db->insert('va_user_details',$data1);
						

		}
		return $insert_id;
	}
	
	public function deleteNodalcenter($staff_id)
	{
		$data = array('status'=>3);
		$this->db->where('id',$staff_id);
		$this->db->update('va_users',$data);
		return $this->db->affected_rows();
	}
public function editWorkshop($value='')
	{
	 $query = $this->db->get_where('workshop',array('workshop_id'=>$value));	
	 return  $query->result_array();
	 	
	}
public function addWorkshop1($value)
	{
$this->db->insert('workshop',$value);
return $submitreportid= $this->db->insert_id();
	}

	
	public function get_report($value='')
	{
	$ses_data=$this->session->userdata('user_details');
	 $query = $this->db->get_where('workshop_report',array('workshop_id'=>$value,'uid'=>$ses_data['id']));	
	 return  $query->result_array();
	}
	
	public function getWorkshop($value='')
	{
		$ses_data=$this->session->userdata('user_details'); 
		 $query = $this->db->get_where('workshop',array('outreach_id'=>$ses_data['id']));	
	 return  $query->result_array();
		 
	
	 	
	}
	
	public function getWorkshop_m($value='')
	{ 
	 	$ses_data=$this->session->userdata('user_details'); 
	 $this->db->select('workshop.*,workshop_report.*');
$this->db->from('workshop');
$this->db->join('workshop_report', 'workshop.workshop_id = workshop_report.workshop_id', 'left'); 
$this->db->where('workshop.outreach_id',$ses_data['id']);
$this->db->where('workshop.workshop_status',1);
$query = $this->db->get();
return $query->result_array();	 
	} 
public function getWorkshopHistory(){
		$ses_data=$this->session->userdata('user_details'); 
		 $query = $this->db->get_where('workshop',array('outreach_id'=>$ses_data['id'],'workshop_status'=>2));	
	 return  $query->result_array();
}

public function getworkshopgr(){
		$ses_data=$this->session->userdata('user_details'); 
 $this->db->select('workshop');
		 $query = $this->db->get_where('va_users',array('outreach_id'=>$ses_data['id']));	
	 return  $query->result_array();
}
public function getnames(){
		$ses_data=$this->session->userdata('user_details'); 
 $this->db->select('name');
		 $query = $this->db->get_where('workshop',array('outreach_id'=>$ses_data['id'],'workshop_status'=>2));	
	 return  $query->result_array();
}

	public function getupcomingWorkshop($value='')
	{ 
	$ses_data=$this->session->userdata('user_details');
	 $query = $this->db->get_where('workshop',array('uid'=>$ses_data['id']));	
	 return  $query->result_array();
	
	}
public function getHomeWorkshop($value='')
{
	 $query = $this->db->get_where('workshop',array('workshop_status'=>1));	
	 return  $query->result_array();
	
}
	public function updateWorkshop($value='')
	{
		 $this->db->where('workshop.workshop_id',$value['workshop_id']);
			 $this->db->update('workshop', $value);
			 return $this->db->affected_rows();
	}
	public function editProfile($value='')
	{
		 $this->db->where('va_users.id',$value['id']);
			 $this->db->update('va_users', $value);
			 return $this->db->affected_rows();
	}
	public function deleteWorkshop($value=''){
		$this->db->delete('workshop', array('workshop_id' => $value)); 
		return $this->db->affected_rows();
	}
	public function activeworkshop($value1=''){
		$value =array(
						'report_status'=>1
						);
		 $this->db->where('workshop_report.workshop_id',$value1);
			 $this->db->update('workshop_report', $value);
			 return $this->db->affected_rows();
	}
	public function submitReport_m($inputdata=''){	
	$ses_data=$this->session->userdata('user_details'); 
	$report_data=$this->session->userdata('report_data');	
	$inputdata['uid']=$ses_data['id'];
	$inputdata['status']=1;
	if(!empty($report_data)){
	$this->db->where('report_id',$report_data[0]['report_id']);
	$this->db->update('workshop_report',$inputdata);
	$submitreportid=$report_data[0]['report_id'];
	}
	else{
		if($this->db->insert('workshop_report',$inputdata))
 $submitreportid= $this->db->insert_id();
 }
$value = array(
'report_id'=>$submitreportid
);
$this->db->where('workshop.workshop_id',$inputdata['workshop_id']);
			 $this->db->update('workshop', $value);
			 return $this->db->affected_rows();
	}
	public function editReport_m($inputdata=''){ 
	$ses_data=$this->session->userdata('user_details'); 
	$report_data=$this->session->userdata('report_data');	
	$inputdata['uid']=$ses_data['id'];
	$inputdata['status']=0;
	if(!empty($report_data)){
	$this->db->where('report_id',$report_data[0]['report_id']);
	$this->db->update('workshop_report',$inputdata);
	return $this->db->affected_rows();
	}
	else{
if($this->db->insert('workshop_report',$inputdata))
 return $this->db->insert_id();
	}
	}

	public  function getViewReport($value1=''){
			 $this->db->select('workshop.*,workshop_report.*');
			 $this->db->from('workshop');
			 $this->db->join('workshop_report', 'workshop.workshop_id = workshop_report.workshop_id', 'left'); 
			 $this->db->where('workshop.workshop_id',$value1);
		 	 $query = $this->db->get();
			 return $query->result_array();	 
 		}
	public function approverepost_m($value1=""){
	    $value = array(
			'workshop_status'=>2
			);
			$this->db->where('workshop.workshop_id',$value1['workshort_report']);
			 $this->db->update('workshop', $value);
			 return $this->db->affected_rows();
			}
			//29-07-15
			public function getGuidesMaterial()
{
	 $query = $this->db->get_where('workshop_documents',array('status'=>1));	
	 return  $query->result_array();
	
}

public function getPresentationReporting()
{
	 $query = $this->db->get_where('presentation_reporting_documents',array('status'=>1));	
	 return  $query->result_array();
	
}

public function getWorkshopMetirial()
{
	 $query = $this->db->get_where('workshop_metirial_documents',array('status'=>1));	
	 return  $query->result_array();
	
}


}
?>
