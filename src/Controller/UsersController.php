<?php 

namespace App\Controller;

use Cake\ORM\TableRegistry;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Auth\DefaultPasswordHasher;

class UsersController extends AppController {

	public function beforeFilter(Event $event)
	{
		parent::beforeFilter($event);
		
		$this->Auth->allow(['login']);
	}

	public function initialize()
	{
		parent::initialize();
		$this->loadComponent('Auth');
		$this->Auth->allow(['logout']);

		if ($this->Auth->user('id'))
		{
			$login = "logado";       
		}
		else 
		{
			$login = "deslogado";      
		}
		$this->set('login', $login);
	}

	public function index()
	{
		if ($this->Auth->user('id_users'))
		{
			return $this->redirect(['controller' => 'Alunos', 'action' => 'index']);
		}
		else 
		{
			return $this->redirect(['controller' => 'Users', 'action' => 'login']);
		}
	}

	public function login()
	{    
		if ($this->request->is('post')) {
			$user = $this->Auth->identify();
			if($user)
			{
				$this->Auth->setUser($user);
				$this->Flash->set('Bem vindo! Você está logado como ' . $this->Auth->user('nome'), ['element' => 'success']);

				if($this->Auth->user('role') == 'admin'){
					return $this->redirect(['controller' => 'Administradores', 'action' => 'index']);
				}

				return $this->redirect($this->Auth->redirectUrl());
			}
			else 
			{
				$this->Flash->set('Usuário ou senha inválido!', ['element' => 'error']);
				return $this->redirect(['controller' => 'Users', 'action' => 'index']);
			}
		}

	}

	public function logout(){
		$this->redirect($this->Auth->logout());
		$this->Flash->set('Sua sessão encerrou!', ['element' => 'error']);
		return $this->redirect(['controller' => 'Users', 'action' => 'index']);
	}
}
