<?php class Imagens_model extends CI_Model {
	private $CI;

	public  function __construct(){
        parent::__construct();
		$this->load->database();
		$this->CI =& get_instance();
		$this->CI->load->library('image_lib');
    }
    public function get($where=null){
    	if($where){$this->db->where($where);}
    	$this->db->order_by("arquivo_id", "desc"); 
    	$imagens = $this->db->get("trooper_arquivos");
    	return $imagens;
	}
    public function marcaDagua($config = null){
		
        $configuracoes['source_image']		= '';
		$configuracoes['wm_text'] 			= '';
		$configuracoes['wm_type'] 			= 'text';
		$configuracoes['wm_font_path'] 		= '';
		$configuracoes['wm_font_size']		= '20';
		$configuracoes['wm_font_color'] 	= 'FFFFFF';
		$configuracoes['wm_shadow_color'] 	= '000000';

		$configuracoes['wm_vrt_alignment'] 	= 'bottom';
		$configuracoes['wm_hor_alignment'] 	= 'center';
		$configuracoes['wm_padding'] 		= '20';
		

		foreach ($config as $key => $value) {
			 $configuracoes[$key] = $value;
		}
		debug($configuracoes);
		$this->CI->image_lib->initialize($config); 
		return $this->CI->image_lib->watermark();
	}
	
	public function geraMiniaturaImagem($imagem){
			
			$tamanhos = $this->db->get("trooper_tamanhos_imagens");

			$imagem['new_folder'] = ($imagem['new_folder'])?$imagem['new_folder']:$imagem['folder'];

			$config['source_image']		= $imagem['folder'].$imagem['imagem_nome'];
			$config['image_library'] 	= 'gd2';
			$config['quality']			= '100%';
			$config['create_thumb'] 	= false;
			$config['maintain_ratio'] 	= TRUE;
			
			
			foreach ($tamanhos->result() as $tamanho) {
			
				$config['new_image'] = $imagem['new_folder'].$tamanho->tamanho_imagem_nome.'_'.$imagem['imagem_nome'];
				$config['width']	 = $tamanho->tamanho_imagem_width;
				$config['height']	 = $tamanho->tamanho_imagem_height;

				$this->CI->image_lib->initialize($config);
				$this->CI->image_lib->resize();
			}
			return true;
	}

	public function gravaImagemDB ($imagem){
		if(is_array($imagem)){
			$this->db->insert('trooper_arquivos', $imagem); 
		}
	}

	public function getImagem($where=array(),$like=NULL,$limit=NULL){
		$this->db->where(array('arquivo_tipo' => 1));
		if($where){$this->db->where($where);}
		if($like){
			foreach ($like as $key => $value) {
				switch ($key) {
					case 'like':
							$this->db->like($value);
						break;
					case 'or_like':
							$this->db->or_like($value);
						break;							
					default:
							$this->db->like($like);
						break;
				}
			}
		}

		if($limit){
			if(count($limit)==1){
				$this->db->limit($limit[0]);
			}else{
				$this->db->limit($limit[1],$limit[0]);
			}
		}

		$return = $this->db->get("trooper_arquivos");
		$dados = $return->result();
		
		$return->result = $dados;
		return $return;
    }
	public function updateImagem($imagem_id,$updateData){
		$this->db->where('arquivo_id', $imagem_id);
		$update =  $this->db->update('trooper_arquivos', $updateData); 
		return $update;
    }
	
	public function deletaImagem($imagem_id){
		$imagem = $this->getImagem(array('arquivo_id'=>$imagem_id))->row();
		
		unlink('./public/upload/'.$imagem->arquivo_arquivo);

		$this->db->where('arquivo_id', $imagem->arquivo_id);
		$this->db->delete('trooper_arquivos'); 

		return true;
	}
}
