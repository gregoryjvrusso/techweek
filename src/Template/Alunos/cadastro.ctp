<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<h2 class="text-center">Cadastro</h2>	
		<?php 
		echo $this->Form->create('Alunos', ['url' => ['controller' => 'Alunos', 'action' => 'salvar']]);
		?>
		<div class="row formulario">
			<?= $this->Form->input('nome_aluno', ['label' => 'Nome', 'id' => 'nome_aluno', 'class' => 'form-control']); ?>
		</div>
		<div class="row formulario">
			<?= $this->Form->input('email', ['label' => 'Email', 'id' => 'username', 'class' => 'form-control']); ?>
		</div>
		<div class="row">
			<div class="form-group formulario">
				<label>Faculdade</label>
				<?php
					$options = [
					    ['text' => 'Instituto Federal de SP', 'value' => 'IFSP', 'class' => 'secundario'],
					    ['text' => 'Outra', 'value' => 'Outra', 'class' => 'secundario']
					];
					echo $this->Form->select(
						'faculdade', 
						 $options,[
						 'empty' => ' - ', 'id' => 'faculdade', 'class' => 'form-control'
						]
					); 
				?>
			</div>
		</div>
		<div class="row">
		<?= $this->Form->input('sala', ['label' => 'Sala', 'id' => 'sala', 'class' => 'form-control']); ?>
		</div>
		<div class="row">
		<?= $this->Form->input('outros', ['label' => 'Nome da Faculdade', 'id' => 'outra_faculdade', 'class' => 'form-control']); ?>
		</div>
		<div class="row formulario">
			<?=  $this->Form->button('Salvar', array('class' => 'btn btn-primary')); ?>
			
			<?=  $this->Html->link('Cancelar', ['controller' => 'Alunos', 'action' => 'index'], ['class' => 'btn btn-danger']);?>
		</div>
	</div>
</div>	