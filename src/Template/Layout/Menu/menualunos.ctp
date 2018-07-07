<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">TECHWEEK</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li>
					<?php 
					echo $this->Html->link('Palestras', ['controller' => 'Alunos', 'action' => 'palestras']); 
					?>
				</li>
				<li>
					<?php 
					echo $this->Html->link('Cadastrar', ['controller' => 'Alunos', 'action' => 'cadastro']); 
					?>
				</li>
				<li>
					<?php 
					echo $this->Html->link('Cadastrar Palestra', ['controller' => 'Palestras', 'action' => 'cadastro']); 
					?>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>


