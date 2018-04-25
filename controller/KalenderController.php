<?php

require(ROOT . "model/KalenderModel.php");

function index(){
	$birthdays = getAllBirthdays();
	render("kalender/index", array("birthdays" => getAllBirthdays()));	
}

function create(){
	render("kalender/create");
}

function createSave()
{
	if (createBirthday()) {
		header("location:" . URL . "kalender/index");
		exit();		
	} else {
		header("location:" . URL . "error/error_404");
		exit();	
	}
}
function deleteSave($id) {
	if (deleteBirthday($id)) {
		header("location:" . URL . "kalender/index");
		exit();

	} else {
		header("location:" . URL . "error/error_404");
		exit();	
	}
}
function edit($id)
{
	render("kalender/edit", array(
		'mand' => getBirthday($id)
	));
}
function editSave($id) {
	if (editBirthday($id)) {
		header("Location:" . URL . "kalender/index");
		exit();
	}
		else{
			require(ROOT . 'controller/ErrorController.php');
		call_user_func('error_404');
			exit();
		}
}