<?php

include 'base.php';

class User extends GController {

	/**
	 * Show login form
	 */
	public function index() {
		if (empty($_SESSION['admin'])) {
			$this->view('login');
		} else {
			redirect('menu');
		}
	}

	/**
	 * Login action
	 * Redirect to menu controller if login success
	 */
	public function login() {
		if (isset($_POST['login'])) {
			$username = $_POST['user'];
			$password = $_POST['pass'];
			if ($username == ADMIN_USER && $password == ADMIN_PASS) {
				$_SESSION['admin'] = 1;
				redirect('menu');
			} else {
				redirect('user&error=1');
			}
		}
	}

	/**
	 * Logout action
	 * Redirect to user controller
	 */
	public function logout() {
		unset($_SESSION['admin']);
		redirect('user');
	}
}

/* End of user.php */