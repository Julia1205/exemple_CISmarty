<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Accueil_model;
use App\Entities\accueil_entity;

class Pages extends BaseController{
	public function __construct(){
		
	}
	
	public function accueil(){
	$this->_smarty->assign("title", "Accueil");
	$this->_smarty->assign("h1", "Hi");
	$objAccueil = new accueil_entity;
	$objAccueilModel = new accueil_model;
	$this->_data['result'] = $objAccueilModel->calcul();
	var_dump($this->_data);
	$this->display("accueil.tpl");

	}
}