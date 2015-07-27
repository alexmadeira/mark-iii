<?php $this->load->view('trooper/include/_header')?>
	<main class="ls-main ">
		<div class="container-fluid">
			<h1 class="ls-title-intro ls-ico-book">Dados de Acesso</h1>
			<form action="" class="ls-form ls-form-inline" name="usuario">
			  <label class="ls-label col-md-5">
			    <b class="ls-label-text">Nome</b>
			    <input type="text" name="usuario_nome" placeholder="Nome e sobrenome" required >
			  </label>
			  <label class="ls-label col-md-4">
			    <b class="ls-label-text">E-mail</b>
			    <input type="email" name="usuario_email" placeholder="Escreva seu email" required >
			  </label>
			  <div class="ls-actions-btn">
			    <button class="ls-btn" type="submit">Salvar</button>
			    <button class="ls-btn-danger" type="reset">Cancelar</button>
			  </div>
			</form>
			<br>
			<form action="" class="ls-form ls-form-inline" name="senha">
				<label class="ls-label col-md-5">
					<b class="ls-label-text">Senha</b>
	    			<input type="password" maxlength="20" id="senha_senha" name="senha_senha" value="********" >
			        <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#senha_senha" href="#"></a>
				</label>
				<label class="ls-label col-md-4">
					<b class="ls-label-text">Confirmação</b>
	    			<input type="password" maxlength="20" id="senha_confirmacao" name="senha_confirmacao" value="********" >
			        <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#senha_confirmacao" href="#"></a>
				</label>
				<div class="ls-actions-btn">
					<button class="ls-btn" type="submit">Salvar</button>
					<button class="ls-btn-danger" type="reset">Cancelar</button>
				</div>
			</form>

	
	  	</div>
		<?php $this->load->view('trooper/include/copyright')?>
	</main>
<?php $this->load->view('trooper/include/_footer')?>