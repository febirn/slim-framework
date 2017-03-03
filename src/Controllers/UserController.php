<?php

namespace Shop\Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

use Shop\Models\User;

class UserController extends AbstractController
{
	public function getAll(Request $request, Response $response)
	{
		$user = new User($this->db);

		$userAll = $user->getAll();

		$data['user'] = $userAll;

		return $this->view->render('user/all', $data);
	}

	public function findById(Request $request, Response $response, $args)
	{
		$user = new User($this->db);

		$userById = $user->findById($args['id']);

		$data['id'] = $userById;

		if (!empty($userById)) {
			return $this->view->render('user/profile', $data);
		} else {
			return $this->view->render('error/data_not_found', $data);
		}
	}
}