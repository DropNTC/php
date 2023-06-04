<?php
	class conta{
		public $numero;
		protected $saldo;
		protected $valoraplicado;

		function __construct($valorinteiro){
			$this->numero = $valorinteiro;
			$this->saldo = 0;
			$this->valoraplicado = 0;

		}

		public function imprimir_saldo(){
			echo "<br> Saldo Atual = ".$this->saldo;
		}
		public function imprimir_aplicado(){
			echo "<br> Saldo Atual = ".$this->valoraplicado;
		}

		public function sacar($valor){
			if($this->saldo>=$valor){
				echo "<br> Sucesso <br>";
				$this->saldo -= $valor;
			}else{
				echo "<br> Saldo Insuficiente <br>";
			}
		}

		public function depositar($valor){
			$this->saldo += $valor;
			echo "<br> Valor adicionado com sucesso <br>";
		}

		public function aplicar($valor){
			if($this->saldo>=$valor){
				$this->valoraplicado += ($valor += $valor * 0.05);
				$this->saldo += $this->valoraplicado;
				echo "<br> Valor aplicado com sucesso <br> ";
			}else{
				echo "<br> Saldo Insuficiente";
			}
		}

		public function resgatar($valor){
			if($this->valoraplicado>=$valor){
				$this->saldo -= $valor;
				echo "<br> Resgatado com sucesso <br>";
			}else{
				echo "<br> Saldo Insuficiente <br>";
			}
		}

		public function resgatetotal(){
			$this->saldo = 0;
			echo "<br> Saldo resgatado com sucesso <br>";

		}

		public function extrato(){
			echo "<br> Saldo Disponível = ".$this->saldo;
			echo "<br> Valor Aplicado = ".$this->valoraplicado;
			if($this->saldo>0){
				echo "<br> Dica: Aplique dinheiro e ganhe 5% de lucro <br>";
			}
		}



	}

	class contaespecial extends conta{
		public function bonus(){
			$this->saldo = $this->saldo + ($this->saldo * 0.05);
		}
	}
?>