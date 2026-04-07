<?php
    //cabecalho
    header("Content-Type: application/json");

    $metodo = $_SERVER['REQUEST_METHOD'];

    //echo "metodo de requisicao: ". $metodo

    switch ($metodo) {
        case 'GET';
            echo "aqui acoes do metodo get";
            break;
        case 'POST';
            echo "aqui acoes do metodo post";
            break;
        default:
            echo "metodo nao encontrado";
            break;

    }


    //conteudo
    // $usuarios = [
    //     ["id" =>1, "nome" => "Maria", "email" => "maria@gmail.com"],
    //     ["id" =>2, "nome" => "Joao", "email" => "joao@gmail.com"]
    // ];

    // //converte para json e retorna
    // echo json_encode($usuarios);


?>