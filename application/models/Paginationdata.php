<?php
class Paginationdata extends CI_Model {

 function getClientInfo($limit=null,$offset=NULL){
	$this->db->select("id,project,type,status,progress,remarks,file,started_at");
	$this->db->from('client_info');
	$this->db->limit($limit, $offset);
	$query = $this->db->get();
	return $query->result();
 }

 function totalClientData(){
  return $this->db->count_all_results('client_info');
 }
}
?>