<?php
//require_once ("person_controller.php");
class book extends Controller
{
	function __construct()
	{
		parent::__construct('book');
	}
	
	function index()
	{
		$this->load->view('book/manage');
	}
	
	
}
?>