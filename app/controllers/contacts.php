<?php namespace controllers;
use core\view;
class Contacts extends \core\controller{

	private $_model;

	public function __construct(){
		$this->_model = new \models\contacts();
	}

	public function index(){
		$postdata = array('name'=>'Dave','email'=>'dave@daveismyname.com');
		$this->_model->insert_contact($postdata);
	}
}
