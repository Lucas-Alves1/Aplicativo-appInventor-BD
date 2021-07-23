<?php
    include_once 'conexao.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];

    /* echo "Nome: $nome <br>";
    echo "E-mail: $email <br>";
    echo "Senha: $senha <br>"; */
    
    $sql2 = $dbcon->query("SELECT * FROM tblogin WHERE email='$email'");

    if(mysqli_num_rows($sql2)>0){
        echo "email_erro";
    }else{
        /* echo "continuará..."; */
        $sql3 = $dbcon->query("INSERT INTO tblogin(nome,email,senha) VALUES ('$nome','$email','$senha')");
        
        if ($sql3) {
            echo "registro_ok";
        }else{
            echo "registro_erro";
        }



    }

?>