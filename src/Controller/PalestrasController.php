<?php 
namespace App\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Datasource\ConnectionManager;

class PalestrasController extends AppController{
	public function beforeFilter(Event $event)
	{
		parent::beforeFilter($event);
		$this->loadComponent('Auth');
		$this->Auth->allow(['index', 'cadastro', 'salvar']);

	}

	public function index(){ //página inicial do usuário
		
	}

	public function cadastro(){
			$palestraTable = TableRegistry::get('palestras'); 
			$palestra = $palestraTable->newEntity(); 
			$this->set('Palestras', $palestra);
	}

	public function salvar(){
		$palestraTable = TableRegistry::get('palestras');
		$palestra = $palestraTable->newEntity($this->request->data());

		if($palestraTable = $palestraTable->save($palestra)){
			$this->Flash->set('Palestra cadastradas com sucesso', ['element' => 'success']);
			return $this->redirect(['controller' => 'Alunos', 'action' => 'index']);
		}else{
			$this->Flash->set('Erro! Palestra não foi cadastrada!', ['element' => 'error']);
			return $this->redirect(['controller' => 'Alunos', 'action' => 'index']);
		}	
	}
}

