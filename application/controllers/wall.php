<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wall extends CI_Controller {
	public function index()
	{
		$this->load->view('wall.php');
	}

	public function insertPost($username, $post)	{
		$this->load->model('Post');

		$this->Post->insertPost($username, $post);
	}
}