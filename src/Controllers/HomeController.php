<?php

namespace Shop\Controllers;

use Shop\Models\UserModel;

class HomeController extends AbstractController
{
	public function index()
	{
		return $this->view->render('home/home');
	}
}