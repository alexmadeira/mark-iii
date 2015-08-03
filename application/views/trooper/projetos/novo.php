<?php $this->load->view('trooper/include/_header')?>
	<main class="ls-main ">
	  <div class="container-fluid projeto">
	    <h1 class="ls-title-intro ls-ico-book">Novo Projeto</h1>
	    
		<form action="<?=site_url('trooper/action_projeto/gravaProjeto')?>" class="ls-form ls-form-horizontal row" name="projeto" method="POST">
		  <fieldset>
		    <label class="ls-label col-md-6 col-xs-6">
		      <b class="ls-label-text">Nome</b>
		      <input type="text" name="projeto_nome" placeholder="Nome do projeto" class="ls-field" required>
		    </label>
		    <label class="ls-label col-md-3 col-xs-3">
		      	<b class="ls-label-text">Categoria</b>
				<div class="ls-custom-select">
				    <select class="ls-select" name="projeto_categoria">
					<?php foreach ($categorias->result() as $categoria) {?>
						<option value="<?=$categoria->categoria_id;?>"><?=$categoria->categoria_nome;?></option>
					<?php }?>
				    </select>
				    </select>
				</div>
		    </label>  
		    <label class="ls-label col-md-3 col-xs-3">
		      	<b class="ls-label-text">Projeto</b>
				<div class="ls-custom-select">
				    <select class="ls-select" name="projeto_tipo">
					<?php foreach ($tipos->result() as $tipo) {?>
						<option value="<?=$tipo->tipo_id;?>"><?=$tipo->tipo_nome;?></option>
					<?php }?>
				    </select>
				    </select>
				</div>
		    </label>  
		    <label class="ls-label col-md-6 col-xs-6">
		      	<b class="ls-label-text">Agencia</b>
				<div class="ls-custom-select">
				    <select class="ls-select" name="projeto_agencia">
				    <?php foreach ($agencias->result() as $agencia) {?>
				        <option value="<?=$agencia->agencia_id;?>"><?=$agencia->agencia_nome;?></option>
					<?php }?>
				    </select>
				</div>
			</label>
		    <label class="ls-label col-md-6 col-xs-6">
		      	<b class="ls-label-text">Ano</b>
		    	<input type="text" name="projeto_ano" placeholder="Ano" class="ls-field" required>
			</label>
		    <label class="ls-label col-md-12 col-xs-12">
		      	<b class="ls-label-text">Descrição</b>
		    	<textarea data-ls-module="charCounter" maxlength="160" name="projeto_descricao"></textarea>
			</label>

			<input type="hidden" name="projeto_logo" />
			<input type="hidden" name="projeto_background_principal" />
			<input type="hidden" name="projeto_preview" />
			<input type="hidden" name="projeto_mobile1" />
			<input type="hidden" name="projeto_mobile2" />
			<input type="hidden" name="projeto_produto" />
			<input type="hidden" name="projeto_background" />
			<input type="hidden" name="projeto_desktop" />
		  </fieldset>
		  		  
		  <div class="col-md-12 col-xs-12">
			<div class="ls-box col-md-12 col-xs-12 ls-md-space">
				<div class="preview ls-box col-md-4 col-xs-4 ls-md-space imagemPosicao">
					<h3 class="ls-title-3">Logo</h3>
					<div class="imgBox"></div>
					<a href="#" data-ls-module="modal" data-target="#insertImageModal" class="ls-btn-primary" data-posicao="1">Inseir Imagem</a>
				</div>
				<div class="preview ls-box col-md-8 col-xs-8 ls-md-space imagemPosicao">
					<h3 class="ls-title-3">background 1</h3>
					<div class="imgBox"></div>
					<a href="#" data-ls-module="modal" data-target="#insertImageModal" class="ls-btn-primary" data-posicao="2">Inseir Imagem</a>
				</div>
				<div class="preview ls-box col-md-4 col-xs-4 ls-md-space imagemPosicao">
					<h3 class="ls-title-3">preview</h3>
					<div class="imgBox"></div>
					<a href="#" data-ls-module="modal" data-target="#insertImageModal" class="ls-btn-primary"  data-posicao="3">Inseir Imagem</a>
				</div>
				<div class="preview ls-box col-md-4 col-xs-4 ls-md-space imagemPosicao">
					<h3 class="ls-title-3">Mobile 1</h3>
					<div class="imgBox"></div>
					<a href="#" data-ls-module="modal" data-target="#insertImageModal" class="ls-btn-primary" data-posicao="4">Inseir Imagem</a>
				</div>
				<div class="preview ls-box col-md-4 col-xs-4 ls-md-space imagemPosicao">
					<h3 class="ls-title-3">Mobile 2</h3>
					<div class="imgBox"></div>
					<a href="#" data-ls-module="modal" data-target="#insertImageModal" class="ls-btn-primary" data-posicao="5">Inseir Imagem</a>
				</div>
				<div class="preview ls-box col-md-4 col-xs-4 ls-md-space imagemPosicao">
					<h3 class="ls-title-3">Produto</h3>
					<div class="imgBox"></div>
					<a href="#" data-ls-module="modal" data-target="#insertImageModal" class="ls-btn-primary" data-posicao="6">Inseir Imagem</a>
				</div>
				<div class="preview ls-box col-md-4 col-xs-4 ls-md-space imagemPosicao">
					<h3 class="ls-title-3">background 2</h3>
					<div class="imgBox"></div>
					<a href="#" data-ls-module="modal" data-target="#insertImageModal" class="ls-btn-primary" data-posicao="7">Inseir Imagem</a>
				</div>
				<div class="preview ls-box col-md-4 col-xs-4 ls-md-space imagemPosicao">
					<h3 class="ls-title-3">Desktop</h3>
					<div class="imgBox"></div>
					<a href="#" data-ls-module="modal" data-target="#insertImageModal" class="ls-btn-primary" data-posicao="8">Inseir Imagem</a>
				</div>
			</div>
		  </div>		  
		  
		  <div class="ls-actions-btn">
		    <button class="ls-btn" type="submit">Salvar</button>
		    <button class="ls-btn-danger" type="reset">Cancelar</button>
		  </div>
		</form>	    
		<div class="ls-modal" id="insertImageModal">
		  <div class="ls-modal-box">
		    <div class="ls-modal-header">
		      <button data-dismiss="modal">&times;</button>
		      <h4 class="ls-modal-title">Selecione a imagem</h4>
		    </div>
		    <div class="ls-modal-body" id="myModalBody">
				<div class="row grid">
					<?php foreach ($arquivos->result() as $arquivo) {?>
						<div class="col-sm-6 col-md-3 grid-item">
							<div class="ls-box">
								<img src="<?=base_url('public/upload/'. $arquivo->arquivo_arquivo)?>"  alt="<?=$arquivo->arquivo_nome?>" title="<?=$arquivo->arquivo_nome?>" class="thumbnail" />
								<p class="titulo"><?=imagemNameConvert($arquivo->arquivo_nome)?></p>
								<a href="#" aria-label="Inserir Imagem" class="ls-btn-primary ls-btn-lg ls-btn-block inserirImage" title="inserir Imagem" data-id="<?=$arquivo->arquivo_id?>">Inserir</a>
							</div>
						</div>
					<?php }?>
				</div>	
				<div class="clear"></div>	      
		    </div>
		    <div class="ls-modal-footer">
		      <button class="ls-btn ls-float-right" data-dismiss="modal">Close</button>
		      <button type="submit" class="ls-btn-primary">Save changes</button>
		    </div>
		  </div>
		</div><!-- /.modal -->


	  </div>
	  <?php $this->load->view('trooper/include/copyright')?>
	</main>
<?php $this->load->view('trooper/include/_footer')?>