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
	public function getPictureDetails_get($id){
		/**
		 * GET method
		 * this function is going to get the details of the picture*
		 * @var picID
		 *
		 */
		$pictureDetails= $this->ratings_model->getPhotographerDetails();
	}
	public function avgPicRating(){
		/**
		 * this function calculate the avergae picture rating of a particular Picture
		 * return the rating value
		 */

	}
	public  function  getPicrating(){
		/**
		 * get the rating of the Top 50 pics by the photographer and does the everage
		 */
	}
	public function  photographerRating(){
		/**
		 * function to get the the ratings of the top 50 pics by the photgrapher
		 */

	}



}
