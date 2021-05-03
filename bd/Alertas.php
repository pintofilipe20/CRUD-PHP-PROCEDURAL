	<!--==============Cadastro de Carro =============== --->
	 <?php if(isset($_SESSION['sucesso'])){ ?>
	<nav class="sucesso">
			<p>Cadastro efectuado com Sucesso <i id="fecharSucesso" class="fa fa-close"></i></p>
	</nav> 
	<?php }  unset($_SESSION['sucesso']); ?>

	<!--==============Edição de Carro ===============--->
	<?php if(isset($_SESSION['sucesso-edit'])){ ?>
	<nav class="sucesso">
			<p>Carro actualizado com Sucesso <i id="fecharSucesso" class="fa fa-close"></i></p>
	</nav> 
	<?php }  unset($_SESSION['sucesso-edit']); ?>

	<!-- ==============Eliminação de Carro =============== -->
	<?php if(isset($_SESSION['eliminarcarro'])){ ?>
			<nav class="sucesso eliminarcarro">
			<p>Carro eliminado com Sucesso <i id="fecharSucesso" class="fa fa-close"></i></p>
			</nav>
	<?php }  unset($_SESSION['eliminarcarro']); ?>