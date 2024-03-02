<?php

    $nome = addcslashes($_POST['nome']);
    $emaill = addcslashes($_POST['emaill']);
    $celular = addcslashes($_POST['celular']);
    $mensagem = addcslashes($_POST['mensagem']);

    $para = "diegoaxelbsr@gmail.com";
    $assunto = "Coleta de dados - Site_Portifólio";

    $corpo = "Nome: ".$nome."\n"."E-mail ".$emaill."\n"."Celular: ".$celular."\n"."Mensagem: ".$mensagem.

    $cabeca = "From: diego.axel.bernardo.097@ufrn.edu"."\n"."Reply-to: ".$emaill."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o e-mail!");
    }

?>