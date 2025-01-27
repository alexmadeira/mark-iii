<?php $this->load->view('trooper/include/_header')?>
	<main class="ls-main ">
	  <div class="container-fluid">
	    <h1 class="ls-title-intro ls-ico-images">Imagens</h1>
		<div class="ls-box ls-box-gray ls-lg-space">
			<h2 class="ls-title-3">Cadastro de imagem</h2>
			<div class="ls-box">
				<form action="<?=site_url('/trooper/Action_projeto/imagen_upload/')?>" class="dropzone" method="post" enctype="multipart/form-data">
					<div class="fallback">
						<input name="file" type="file" multiple />
					</div>
				</form>
			</div>
		</div>
		<div class="ls-box ls-lg-space">
			<div class="row grid">
				<?php foreach ($arquivos->result() as $arquivo) {?>
					<div class="col-sm-6 col-md-3 grid-item">
						<div class="ls-box">
							<img src="<?=base_url('public/upload/'. $arquivo->arquivo_arquivo)?>"  alt="<?=$arquivo->arquivo_nome?>" title="<?=$arquivo->arquivo_nome?>" class="thumbnail" />
							<p class="titulo"><?=imagemNameConvert($arquivo->arquivo_nome)?></p>
							<a href="#" aria-label="Deletar Imagem" class="ls-btn-danger ls-btn-lg ls-btn-block deleteImage" title="Deletar Imagem" data-id="<?=$arquivo->arquivo_id?>">Deletar</a>
							</div>
					</div>
				<?php }?>
			</div>
		</div>
	  </div>
	  <?php $this->load->view('trooper/include/copyright')?>
	</main>
<div class="hidden">
<div class="grid-item-modelo col-sm-6 col-md-3">
	<div class="ls-box">
		<img src=""  alt="" title="" class="thumbnail" />
		<p class="titulo"></p>
<!--		<a href="#" aria-label="Deletar Imagem" class="ls-btn-danger ls-btn-lg ls-btn-block deleteImage" title="Deletar Imagem" data-id="" >Deletar</a>-->
	</div>
</div>
</div>
<?php $this->load->view('trooper/include/_footer')?>