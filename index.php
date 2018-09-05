
        <?php
        $peso=$_POST["p"];
        $altura=$_POST["a"];
        
        echo"<br>O peso digitado é: $peso Kg";
        $valor=$altura*$altura;
        echo"<br> A altura digitada é: $altura metros";
        $imc=$peso/$valor;
        echo"<br>IMC correspondente é:".round($imc);
        echo"<br>";
        
        if($imc>=17 && $imc<18.5){
            echo"Muito abaixo do peso";
        }
        if($imc>=18.5 && $imc<25){
            echo"Peso normal";
        }
        ?>
        <br><a href="aula5.html"> voltar </a>
    