<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2 || Variaveis</title>
</head>
<body>
    <?php
        //Declarando variáveis

        $var1 = 1; //Inteiros
        $varX = 9.50; //Ponto Flutuante
        $varY = 9.50; // Ponto Flutuante
        $_Soma = $varX + $varY; //Recebe o Resultado de Uma Expressão
        $diga = "Eu sou uma string";
        $real = false;

        print "Exemplo de variáveis em php";
        print "<p>";
        echo "Numero inteiro: ", $var1;
        print "<p>";
        echo "O resultado da operação matemática entre as variáveis foi: ".$_Soma;
        print "<p>";
        echo "É Real ?".$real;
        echo "<p>";
        echo "Hurr".$diga;
    ?>
</body>
</html>