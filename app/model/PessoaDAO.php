<?php 

 namespace app\model;

 use app\model\Conexao;


 class PessoaDAO
 {
 	private $pdo;

 	public function create(Pessoa $pessoa)
 	{
 		$this->pdo = Conexao::conecta();

 		$query = $this->pdo->prepare('insert into pessoa(nome,idade) values(:nome,:idade);');
 		$query->bindValue(':nome',$pessoa->getNome());
 		$query->bindValue(':idade',$pessoa->getIdade());
 		$create = $query->execute();

 		if($create)
 		{
 			echo "Criado";
 		}
 		else{
 			echo "Erro: ".implode($query->errorInfo());
 		}

 	}
 	public function read()
 	{
 		$this->pdo = Conexao::conecta();

 		$query = $this->pdo->prepare('select * from pessoa;');
 		$select = $query->execute();

 		if($select)
 		{
 			if($query->rowCount() > 0)
 			{
 				while ($linha = $query->fetch(\PDO::FETCH_ASSOC)) 
 				{
 					echo "Nome: ".$linha['nome']."  Idade: ".$linha['idade']."<br>";
 				}
 			}
 			else
 			{
 				echo "Sem nenhum registro";
 			}
 		}
 		else
 		{
 			echo "Erro: ".implode($query->errorInfo());
 		}
 		
 	}
 	public function update(Pessoa $pessoa, $id)
 	{
 		$this->pdo = Conexao::conecta();

 		$query = $this->pdo->prepare('update pessoa set nome=:nome,idade=:idade where id=:id;');
 		$query->bindValue(':nome',$pessoa->getNome());
 		$query->bindValue(':idade',$pessoa->getIdade());
 		$query->bindValue(':id',$id);
 		$update = $query->execute();

 		if($update)
 		{
 			echo "Atualizado";
 		}
 		else{
 			echo "Erro: ".implode($query->errorInfo());
 		}
 		
 	}
 	public function delete($id)
 	{
 		$this->pdo = Conexao::conecta();

 		$query = $this->pdo->prepare('delete from pessoa where id=:id;');
 		$query->bindValue(':id',$id);
 		$delete = $query->execute();

 		if($delete)
 		{
 			echo "Excluido";
 		}
 		else{
 			echo "Erro: ".implode($query->errorInfo());
 		}
 		
 	}
 }


?>

