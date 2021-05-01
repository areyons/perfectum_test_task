<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CommentModel extends CI_Model
{

	public function saveComment($formData)
	{
		$this->db->insert('comments', $formData);
	}

	public function getComments($lim, $offset)
	{
		$query = $this->db->select('*')->from('comments')->order_by('date', 'DESC')->limit($lim, $offset)->get();
		return $query;
	}

	public function getCommentsCount()
	{
		$query = $this->db->select('*')->from('comments')->get();
		return $query->num_rows();
	}

}
