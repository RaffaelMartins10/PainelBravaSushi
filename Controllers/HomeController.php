<?php
namespace Controllers;

use \Core\Controller;
use \Models\Users;
use \Models\Home;

class HomeController extends Controller {

	private $user;
	private $arrayInfo;

	public function __construct() {
		$this->user = new Users();

		if(!$this->user->isLogged()) {
			header("Location: ".BASE_URL."login");
			exit;
		}

		$this->arrayInfo = array(
			'user' => $this->user,
			'menuActive' => 'home'
		);

	}
	public function index() {
		$Home = new Home();
		
		$this->arrayInfo['list'] = $Home->getAll();

		$this->loadTemplate('home', $this->arrayInfo);
	}

	public function verPedido($id) {
			$Home = new Home();
			
			$this->arrayInfo['list'] = $Home->Pedido($id);
			$this->arrayInfo['dados'] = $Home->DadosUsuario($id);

			$this->loadTemplate('pedido', $this->arrayInfo);

	}

	public function Deletar(){	
		$Home = new Home();
		$this->arrayInfo['list'] = $Home->deleteUsuarios();
		header("Location: ".BASE_URL);
	}

}