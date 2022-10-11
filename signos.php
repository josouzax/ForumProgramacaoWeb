<?php
$data = $_POST['dataNasc'];
$date = new DateTime($data);
$dateSig = $date->format('m-d');
$xml = simplexml_load_file('signos.xml');
echo '<h2>' . $xml->titulo . '</h2>';
echo '<h1>';
foreach ($xml->signo as $registro) :
    if ($dateSig >= $registro->dataInicio and $dateSig <= $registro->dataFim) {
        echo $registro->signoNome . '</h1>';
        echo '<p>' . $registro->descricao . '<p>';
    }
endforeach;
?>