<?php
// converte_moeda.php
header('Content-Type: application/json');

if (isset($_GET['valor_reais'])) {
    $reais = floatval($_GET['valor_reais']);
    
    // Taxa de câmbio fictícia/estática para o exercício
    $taxa_cambio = 5.50; 
    $dolares = $reais / $taxa_cambio;

    $resposta = array(
        'status' => 'sucesso',
        'valor_original' => number_format($reais, 2, ',', '.'),
        'valor_convertido' => number_format($dolares, 2, ',', '.')
    );

    echo json_encode($resposta);
} else {
    echo json_encode(array('status' => 'erro', 'mensagem' => 'Parâmetro valor_reais não informado.'));
}
?>
