<?php
$presidentes = array(
    array('numero' => 16, 'nome' => 'Eurico Gaspar Dutra', 'inicio' => 1946, 'fim' => 1951),
    array('numero' => 17, 'nome' => 'Getúlio Vargas', 'inicio' => 1951, 'fim' => 1954),
    array('numero' => 18, 'nome' => 'Café Filho', 'inicio' => 1954, 'fim' => 1955),
    array('numero' => 19, 'nome' => 'Carlos Luz', 'inicio' => 1955, 'fim' => 1955),
    array('numero' => 20, 'nome' => 'Nereu Ramos', 'inicio' => 1955, 'fim' => 1956),
    array('numero' => 21, 'nome' => 'Juscelino Kubitschek', 'inicio' => 1956, 'fim' => 1961)
);

function gerar_linha_tabela($presidente) {
    $linha = '<tr>';
    $linha .= '<td>' . $presidente['numero'] . '</td>';
    $linha .= '<td>' . $presidente['nome'] . '</td>';
    $linha .= '<td>' . $presidente['inicio'] . '</td>';
    $linha .= '<td>' . $presidente['fim'] . '</td>';
    $linha .= '</tr>';
    return $linha;
}

$html = '<table border="1">';
$html .= '<tr><th>Número</th><th>Nome</th><th>Início</th><th>Fim</th></tr>';

foreach ($presidentes as $presidente) {
    $html .= gerar_linha_tabela($presidente);
}

$html .= '</table>';

echo $html;
?>

