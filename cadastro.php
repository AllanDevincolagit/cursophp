<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuário</title>
</head>
<body>
    <?php
        echo "Seja Bem vindo ". $_POST['txtnome']. "<br>" . "<br>";
        echo "Já recebemos e verificamos a autenticidade do seu CPF de n° ". $_POST['txtcpf']. "<br>" . "<br>";
        echo "Entraremos em contato no seguinte email informado ". $_POST['txtmail']. "<br>" . "<br>";
        echo  "Entraremos em contato no seguinte telefone informado". $_POST['txtcel']. "<br>" . "<br>";  
    ?>
</body>
</html>