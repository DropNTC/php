<?php

	class produto
	{
		
		public $nomeloja;
		public $preco;
		protected $descricao

		function __construct($Produto){
			$this->nomeloja = $nomeloja;
			$this->preco = $preco;
		}

		public function getDescrição($descricao){
			echo "<br> Descrição do produto <br>"
		} 
	}

	class mouse extends produto{
		function __construct($mouse){
			$this->descricao;
		}
		public function tipo{
			$this->tipo;
		}
	}

	class livro extends produto{
		function __construct($livro){
			$this->descricao;
		}
		public function autor{
			$this->autor;
		}
	}
?>
