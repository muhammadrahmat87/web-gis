
<?php
 

class M_reklame extends CI_Model {
    public function get_riau(){

        $this->db->select('*');
        $this->db->from('t_riau');
        return $this->db->get()->result();
        
    }
	
	function save()
		{
			 
			$this->db->insert($this->table, $data);
		}



	
}
