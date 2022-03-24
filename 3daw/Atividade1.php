<!DOCTYPE html>
<html>
   <head>
       <meta charset="UTF-8">
       <title>Alterar Pergunta</title>
 
       <link rel="stylesheet" href="style.css">
 
   </head>
   <body>
       <h1>Exercício de tipos</h1>
 
       <?php
            echo "<h2>Exercício 01</h2>";
            echo"Alo alo bom dia gente esse será um texte para execritar os pontos básicos do php em 3daw";
            //comentário
            $variavel="Está é uma String";
            echo "<br>";
            echo $variavel;
            $variavel=8 + 3;
            echo "<br>";
            echo $variavel;
            $variavelInt=5;
            $variavelFloat=3.14;
            $variavelBool= true;
            echo "<br>";
            echo "Variavel inteira é: ". $variavelInt;
            var_dump ($variavelInt);
            echo "<br>";
            echo "Variavel Flutuabte é: ". $variavelFloat;
            var_dump($variavelFloat);
            echo "<br>";
            echo "Variavel Booleano é: ". $variavelBool;
            var_dump($variavelBool);
            echo "<br>";
            $disciplina= array("3DAW","4MET","3EST");
            var_dump($disciplina);
            for($i=0;$i<3;$i++)
            {
                echo $disciplina [$i];
                echo"<br>";
            }
            class Disciplina{
                public $nome;
                public $sigla;
                public $carga;
                public function __construct($nome,$sigla,$carga){
                    $this->nome = $nome;
                    $this->sigla = $sigla;
                    $this->carga = $carga;
                }
                public function getDisc(){
                     return "nome da disciplina: " . $this->nome . "Sigla da Disciplina: " . $this->sigla . "Carga Horária da Disciplica: " . $this->carga;                 
                }
            }
            $objDisciplina = new Disciplina("Desenvolvimento Web ", "3DAW ", "80");
            echo $objDisciplina->getDisc();
            var_dump($objDisciplina);
            echo "<br>";
            $objDisciplina= new Disciplina("Metodologia ", "4MET ", "20");
            echo $objDisciplina->getDisc();
            var_dump($objDisciplina);
            echo "<br>";
            $objDisciplina= new Disciplina("Estatística ", "3EST ", "80");
            echo $objDisciplina->getDisc();
            var_dump($objDisciplina);
            echo "<br>";       
       ?>
   <br>
   deu certo
   </body>
</html>
