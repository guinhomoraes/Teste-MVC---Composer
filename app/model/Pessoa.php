<?php 

	namespace app\model;

	class Pessoa
	{

		private $nome;
		private $idade;


		public function setNome($nome)
		{
			$this->nome = $nome;	
		}
		public function setIdade($idade)
		{
			$this->idade = $idade;	
		}

		public function getNome()
		{
			return $this->nome;

		}
		public function getIdade()
		{
			return $this->idade;			
		}
	}


 ?>