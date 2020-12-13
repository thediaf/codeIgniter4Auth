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

	public function register()
	{
		helper(['form']);
		$data = [];

		if ($this->request->getMethod() == 'post')
		{
			$rules = [
				'firstName' => 'required|min_length[3]|max_length[20]',
				'lastName' 	=> 'required|min_length[3]|max_length[20]',
				'email' 	=> 'required|min_length[8]|max_length[50]|valid_email|is_unique[user.email]',
				'password' 		=> 'required|min_length[6]|max_length[250]',
				'passwordConfirm'	=>	'matches[password]'
			];

			if (!$this->validate($rules))
			{
				$data['validation'] = $this->validator;
			}
			else 
			{
					
			}
		}

		echo view('common/header.php', $data);
		echo view('register.php');
		echo view('common/footer.php');
	}

	//--------------------------------------------------------------------

}
