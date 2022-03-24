<!DOCTYPE html>
<html>
<head>
</head>

<body>
<h1>3DAW</h1>
<?php
echo "<h2> Exercicio Object </h2>";

Class Disciplina {
	public $nome;
	public $sigla;
	public $cargaH;
	public function __construct ($nome, $sigla, $cargaH)
	{
		$this->nome = $nome;
		$this->sigla = $sigla;
		$this->cargaH = $cargaH;
	}
	public function getDisc(){
		return "Nome da disciplina :" . $this->nome .
		", Sigla da disciplina :" . $this->sigla.
		", Carga horaria da disciplina :" . $this->cargaH;
	}
	

}

$objDisciplina = new Disciplina("Desenvolvimento WEB ", "3DAW ", 80);
echo $objDisciplina-> getDisc();
echo "<br>";

$objDisciplina2 = new Disciplina("Algebra Linear ", "3ALG ", 40);
echo $objDisciplina2-> getDisc();
echo "<br>";

$objDisciplina3 = new Disciplina("Redes ", "3RSD ", 40);
echo $objDisciplina3-> getDisc();
echo "<br>";

?>

</body>
</html>