<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<h2 class="text-center">Cadastro Palestra</h2>	
		<?php 
		echo $this->Form->create('Palestras', ['url' => ['controller' => 'Palestras', 'action' => 'salvar']]);
		?>
		<div class="row formulario">
			<?= $this->Form->input('nome_palestra', ['label' => 'Nome', 'id' => 'nome_palestra', 'class' => 'form-control']); ?>
		</div>
		<div class="row formulario">
			<?= $this->Form->input('local_palestra', ['label' => 'Local', 'id' => 'local_palestra', 'class' => 'form-control']); ?>
		</div>
		
		<div class="row formulario">
			<?= $this->Form->input('data_palestra', ['label' => 'Data', 'id' => 'data_palestra', 'class' => 'form-control']); ?>
		</div>
		
		<div class="row formulario">
			<?= $this->Form->input('horario', ['label' => 'Horário', 'id' => 'horario', 'class' => 'form-control']); ?>
		</div>

		<div class="row formulario">
			<?= $this->Form->input('limite_vagas', ['label' => 'Quantidade de Vagas', 'id' => 'limite_vagas', 'class' => 'form-control']); ?>
		</div>

		<div class="row formulario">
			<?= $this->Form->input('descricao', ['label' => 'Descrição da Palestra', 'id' => 'descricao', 'class' => 'form-control']); ?>
		</div>

		<div class="row formulario">
			<?=  $this->Form->button('Salvar', array('class' => 'btn btn-primary')); ?>
			
			<?=  $this->Html->link('Cancelar', ['controller' => 'Alunos', 'action' => 'index'], ['class' => 'btn btn-danger']);?>
		</div>
	</div>
</div>	