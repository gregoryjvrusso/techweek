<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<h1 class="text-center">TECHWEEK</h1>	
		<?php 
		echo $this->Form->create('Users', ['url' => ['controller' => 'Users', 'action' => 'login']]);

		echo $this->Form->input('username', ['label' => 'Username', 'id' => 'username', 'class' => 'form-control']);

		echo $this->Form->input('password', ['label' => 'Senha', 'id' => 'username', 'class' => 'form-control']);

		echo $this->Form->button('Loggin', array('class' => 'btn-primary')); 
		?>
	</div>
</div>	