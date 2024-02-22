<?php 
    $nome = "Antonio";
    const ESTADO = "RJ";
    echo "Olá, $nome <br>"; //double quoted (interpreta conteúdo e interpola a variável)
    echo 'Olá, $nome <br>'; // single queted (não interpreta e não interpola)
    echo "Moro no ESTADO <br>"; // apesar de ser double quoted, não existe interpretação de constante
    echo "Moro no " . ESTADO; // é possível trazer o resultado "RJ" ao concatenar a constante
    echo "<br>Estamos no ano de " .date('Y');


    $nome2 = "Rodrigo";
    $apelido = "Minotauro";
    $sobrenome2 = "Nogueira";
    echo "<br>$nome2 \"$apelido\" $sobrenome2"; //assim  \"  é possível utilizar aspas duplas dentro de outras aspas
?>