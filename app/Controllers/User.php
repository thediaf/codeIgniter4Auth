<?php namespace App\Controllers;

class User extends BaseController
{
	public function index()
	{
		helper(['form']);
		$data = [];

		echo view('common/header.php', $data);
		echo view('login.php');
		echo view('common/footer.php');
	}

	//--------------------------------------------------------------------

}
