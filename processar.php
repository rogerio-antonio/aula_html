<?php
    $nome = $_POST['nome'];
    echo $nome;

    $email = $_POST['email'];
    echo $email;

    echo "<br>";

    $interesses = $_POST['interesses'];
    /* echo não funciona para array */
    print_r($interesses);

     $interesses = $_POST['interesses'][0];
    /* echo não funciona para array */
    print_r($interesses);

?>

