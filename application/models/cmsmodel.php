<?php 
class Cmsmodel extends CI_Model
{/*
  * Cmsmodel
  * method 
  * 
  *
  * 
  */
	function __construct() {
        parent::__construct();
    	}
		/**
  * signin method:  Authenticating coordinator 
  * Submits an HTTP POST method to server
  * @param   $id 
  * @param   $limit
  * @param   $offset
  * @return array  value
  */
	public function getCms($id="",$limit="",$offset="") {
		if ($this->session->userdata('cms_filter_data') !== FALSE) {
			   $filters=$this->session->userdata('cms_filter_data');
			   if($filters['date_range'] != "") {
					$daterange=explode("_",$filters['date_range']); 
					$from_date=date("Y-m-d H:i:s", strtotime($daterange[0]));
					
					$to_date=date("Y-m-d H:i:s", strtotime("23:59:59",strtotime($daterange[1]))); 
					
					$this->db->where('added_on >=', $from_date);
					$this->db->where('added_on <=', $to_date);  
			   		}
			   $this->db->like('title', $filters['name'],'both');
			   }
		
		if($id != '') {	
			$this->db->where('cms_id',$id);
			}
		
		if($limit != "" || $offset != "") {
			$this->db->limit($limit,$offset);
			}
		$this->db->where('status != 3');
		$query = $this->db->select('*')
						  ->from('va_cms')
						  ->order_by('cms_id','desc')
						  ->get();
		return $query->result_array();
	}
	
	public function createCms($reg) {
			$cms_det=array(
						
							'title'=>$reg['title'],
							'description'=>$reg['description'],
							'seo_title'=>$reg['seo_title'],
							'seo_tags'=>$reg['seo_tags'],
							'cms_file'=>$reg['cms_file'],
							'added_on'=>date('Y-m-d H:i:s')
						);
	
			 $this->db->insert('va_cms', $cms_det);
			 return $this->db->affected_rows();
	}
	
	public function  cmsCount() {
			$this->db->where('status != 3');
        	$query = $this->db->get('va_cms');
		return $query->num_rows();
		}
		
	public function  cmsGetUpd($id) {
				$this->db->where('cms_id',$id);
				$query = $this->db->get('va_cms');
				return   $query->row();
		}
		
	public function cmsUpdStatus($cms_id,$st_val)	{
			$this->db->where('cms_id', $cms_id);
			$this->db->set('status', $st_val);
			$this->db->set('edited_on',date('Y-m-d H:i:s'));
			$this->db->update('va_cms');
			//echo $this->db->last_query();
			return $this->db->affected_rows();
		}
	
	public function  getCmsName($cms_name)	{
				$this->db->where('title',$cms_name);
				$this->db->where('status !=3');
				$query = $this->db->get('va_cms');
				return  $query->num_rows();
		}	
	
	public function cmsUpdate($id,$cms)	{
			$cms['edited_on']=date('Y-m-d H:i:s');
			$this->db->where('cms_id', $id);
			$this->db->update('va_cms', $cms);
			return $this->db->affected_rows();
		}
			
}
?>