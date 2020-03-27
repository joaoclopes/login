<?php 
if (!defined('PHP_EOL')) {
    if (strtoupper(substr(PHP_OS,0,3) == 'WIN')) {
        define('PHP_EOL',"\r\n");
    } elseif (strtoupper(substr(PHP_OS,0,3) == 'MAC')) {
        define('PHP_EOL',"\r");
    } elseif (strtoupper(substr(PHP_OS,0,3) == 'DAR')) {
        define('PHP_EOL',"\n");
    } else {
        define('PHP_EOL',"\n");
    }
}

function calcularResultado ($nota) {
    //Retorna se o aluno está aprovado ou não
    if($nota > 6) {
        return "Aluno Aprovado";
    } else if (nota > 5) {
        return "Aluno em Conselho";
    } else {
        return "Aluno Reprovado";
    }
}

echo "começando as atividades";
if(($calcularResultado) == "Aluno Aprovado") {

}
?>

