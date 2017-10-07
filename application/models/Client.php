<?php
Class Client extends CI_Model
{
	public function saveClient($upload)
	{
		$this->db->insert('client_info', $upload);
	}
}



?>