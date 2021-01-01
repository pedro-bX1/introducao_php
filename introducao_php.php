<?php

//crie um projeto em PHP para uma competição de natação. O sistema deverá permitir a inserção de competidores
//com seu nome e idade, e o sistema deverá identificar em qual categoria o nadador irá competir, por exemplo
//6 a 12 anos para a categoria infantil, de 13 a 18 categoria adolescente e acima de 18 categoria adulto
//, o sistema deverá retornar a categoria para cada nadador que for cadastrado.

$categorias = [];
$categorias = 'infantil';
$categorias = 'adolescente';
$categorias = 'adulto';
//print_r($categorias);

$nome = 'Eduardo';
$idade = 15;

if($idade >= 6 && $idade <= 12){
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'infantil'){
            echo "O nadador ".$nome."compete na categoria infantil";
        }
    }
}
elseif($idade >= 13 && $idade <= 18){
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adolescente'){
            echo "O nadador ".$nome. "compete na categoria adolescente";
        }

    }

}else{
    echo "compete na categoria adulto";
}