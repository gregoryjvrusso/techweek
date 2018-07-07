<?php 
namespace App\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Datasource\ConnectionManager;

class AlunosController extends AppController{
	public function beforeFilter(Event $event)
	{
		parent::beforeFilter($event);
		$this->loadComponent('Auth');
		$this->Auth->allow(['index', 'cadastro', 'salvar']);

	}

	public function index(){ //página inicial do usuário
		
	}

	public function cadastro(){
			$alunoTable = TableRegistry::get('alunos'); 
			$aluno = $alunoTable->newEntity(); 
			$this->set('alunos', $aluno);
	}

	public function salvar(){
		$alunoTable = TableRegistry::get('alunos');
		$aluno = $alunoTable->newEntity($this->request->data());

		if($alunoTable = $alunoTable->save($aluno)){
			$this->Flash->set('Palestras cadastradas com sucesso', ['element' => 'success']);
			return $this->redirect(['controller' => 'Alunos', 'action' => 'index']);
		}else{
			$this->Flash->set('Erro! Palestras não foram cadastradas!', ['element' => 'error']);
			return $this->redirect(['controller' => 'Alunos', 'action' => 'index']);
		}	
	}
}

