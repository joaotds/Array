<?php
// Definindo os dados dos presidentes em um array associativo
$presidentes = array(
    array('numero' => 16, 'nome' => 'Eurico Gaspar Dutra', 'inicio' => 1946, 'fim' => 1951),
    array('numero' => 17, 'nome' => 'Getúlio Vargas', 'inicio' => 1951, 'fim' => 1954),
    array('numero' => 18, 'nome' => 'Café Filho', 'inicio' => 1954, 'fim' => 1955),
    array('numero' => 19, 'nome' => 'Carlos Luz', 'inicio' => 1955, 'fim' => 1955),
    array('numero' => 20, 'nome' => 'Nereu Ramos', 'inicio' => 1955, 'fim' => 1956),
    array('numero' => 21, 'nome' => 'Juscelino Kubitschek', 'inicio' => 1956, 'fim' => 1961)
);

// Função para gerar linhas da tabela HTML
function gerar_linha_tabela($presidente) {
    $linha = '<tr>';
    $linha .= '<td>' . $presidente['numero'] . '</td>';
    $linha .= '<td>' . $presidente['nome'] . '</td>';
    $linha .= '<td>' . $presidente['inicio'] . '</td>';
    $linha .= '<td>' . $presidente['fim'] . '</td>';
    $linha .= '</tr>';
    return $linha;
}

// Início da construção da tabela HTML
$html = '<table border="1">';
$html .= '<tr><th>Número</th><th>Nome</th><th>Início</th><th>Fim</th></tr>';

// Percorrer a matriz de presidentes e gerar linhas da tabela
foreach ($presidentes as $presidente) {
    $html .= gerar_linha_tabela($presidente);
}

$html .= '</table>';

// Exibir a tabela HTML
echo $html;
?>

