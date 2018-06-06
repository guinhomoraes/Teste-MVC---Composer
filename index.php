<?php 

	require_once 'vendor/autoload.php';

	use app\model\Pessoa;
	use app\model\PessoaDAO;

	$pessoa = new Pessoa();
	$pessoa->setNome("Julio");
	$pessoa->setIdade(18);

	echo "<br>";

	$pessoadao = new PessoaDAO();
	$pessoadao->update($pessoa, 2);

	echo "<br>";

	$pessoadao->read();

?>