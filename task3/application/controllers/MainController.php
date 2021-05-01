<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {


	public $data = [];
//	private $formData = [];

	public function __construct()
	{
		parent::__construct();

		$this->load->library('session');
		$this->load->library('pagination');
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->helper('url');

	}

	public function index()
	{
		// connect model
		$this->load->model('CommentModel');

		// load header of the page
		$this->load->view('headerView');

		// validate data from form

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('message', 'Message', 'required');

		// Get data from form if validate done
		if ($this->form_validation->run() == TRUE) {

			if($this->input->post('name')) {
				$formData['user_name'] = trim(strip_tags($this->input->post('name')));
			}
			if($this->input->post('email')) {
				$formData['user_email'] = trim(strip_tags($this->input->post('email')));
			}
			if($this->input->post('message')) {
				$formData['user_message'] = strip_tags($this->input->post('message'));
			}
			$formData['date'] = date('Y-m-d H:i:s');

			// put data to database
			$this->CommentModel->saveComment($formData);

			// success message
			$this->session->set_flashdata('notice', 'Comment published!');

			// redirect after sending
			redirect(base_url());

		} else {
			$this->load->view('formView');
		}

		// set pagination settings
		$pagination_config = [
			'base_url' => base_url() . 'MainController/index/',
			'per_page' => 4,
			'total_rows' => $this->CommentModel->getCommentsCount(),
			'uri_segment' => 3,
			'full_tag_open' => '<div class="pagination">',
			'full_tag_close' => '</div>',
			'cur_tag_open' => '<span class="currentlink">',
			'cur_tag_close' => '</span>'
		];

		$this->pagination->initialize($pagination_config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		// get existing comments with limit on one page
		$comments = $this->CommentModel->getComments($pagination_config['per_page'], $page);

		// put comments to all data
		$this->data = $comments;

		// load comments view with data
		$this->load->view('commentsView', $this->data);

		// load footer view
		$this->load->view('footerView');


	}
}
