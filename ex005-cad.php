<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="ex005-style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            //var_dump($_GET);
            $nome = $_GET["nome"] ?? "sem nome";
            $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
            echo "Seja bem-vindo(a), <strong>$nome $sobrenome</strong>!";
        ?>
    </main>
</body>
<section>
        <p>
            <a href="javascript:history.go(-1)"><strong>Voltar</strong></a>
        </p>
    </section>
</html>