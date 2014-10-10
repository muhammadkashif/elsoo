<?php
class books extends Model
{
	function add_recard($data)
	{
		$this->db->insert('book', $data);
		return ;
	}	
	
	function update($data)
	{
		$this->db->where('id', 1);
		$this->db->update('data',$data);
	}
	
	function delete_row()
	{
		$this->db->where('id', $this->uri->segement(3));
		$this->db->delete('data');
	}
}
?>
