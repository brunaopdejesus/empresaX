<?php

    require("./funcao.php");
    $funcionarios = lerArquivo("empresaX.json");

    if (isset($_GET["buscarFuncionario"])) {
        $funcionarios = buscarFuncionario($funcionarios, $_GET["buscarFuncionario"])
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Empresa X</title>
</head>
<body>

    <header>
        <h1>Funcionários da Empresa X</h1>
        <p>A empresa conta com 1001 funcionários.</p>
    </header>

    <main>
        <form>
            <label for="">Pesquisa por nome:</label>
            <input type="text"
                value="<?= isset($_GET["buscarFuncionario"]) ? $_GET["buscarFuncionario"] : "" ?>"
                name="buscarFuncionario"
                id="buscarFuncionario"
                placeholder="Digite o nome...">
            <button class="btn"><i class="fa fa-search"></i></button>
        </form>

        <table border="10">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last name</th>
                <th>E-mail</th>
                <th>Gender</th>
                <th>IP Address</th>
                <th>Country</th>
                <th>Departament</th>
            </tr>

            <?php
                foreach($funcionarios as $funcionario) :
            ?>
            
            <tr>
                <td> <?= $funcionario->id; ?> </td>
                <td> <?= $funcionario->first_name; ?> </td>
                <td> <?= $funcionario->last_name; ?> </td>
                <td> <?= $funcionario->email; ?> </td>
                <td> <?= $funcionario->gender; ?> </td>
                <td> <?= $funcionario->ip_adress; ?> </td>
                <td> <?= $funcionario->country; ?> </td>
                <td> <?= $funcionario->departament; ?> </td>
            </tr>

            <?php
                endforeach;
            ?>
            
        </table>
    </main>

    <footer>
        <p>Copyright &copy; Bruna Oliveira</p>
    </footer>

</body>
</html>