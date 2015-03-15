<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Post extends CI_Model {

	public function __construct() {
		$this -> load -> database();
	}

	public function insertPost($username, $post)	{
		$data = array(
			'username' => $username,
			'post' => $post
		);

		$this->db->insert('posts', $data);
	}
}
