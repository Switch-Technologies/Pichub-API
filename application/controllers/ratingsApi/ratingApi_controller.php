<?php


class ratingApi_controller extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ratings_model','rm');
	}
	public  function index(){

	}
	public function getPictureDetails(){
		/**
		 * this function is going to get the details of the picture*
		 * @var picID
		 *
		 */

	}


}
