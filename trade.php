<?php
// trade.php
header('Content-Type: application/json');

if (isset($_POST['valor'])) {
    $reais = floatval($_POST['valor']);
    $retorno = 0;

    if($reais > 100) {
        $retorno = $reais * 0.95;
    } 
    elseif ($reais > 50) {
        $retorno = $reais * 1.01;
    } 
    elseif ($reais > 10) {
        $retorno = $reais * 1.1;
    }

    $resposta = array(
        'status' => 'sucesso',
        'rendimento' => number_format($retorno, 2, ',', '.'),
    );

    echo json_encode($resposta);
} else {
    echo json_encode(array('status' => 'erro', 'mensagem' => 'Valor do investimento não informado.'));
}
?>
