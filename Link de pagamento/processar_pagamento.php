<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $estabelecimento = $_POST['estabelecimento'];
    $valor = $_POST['valor'];

    // Verifique e valide os dados conforme necessário

    // Redirecione para o link de pagamento
    $link_pagamento = "https://pay.infinitepay.io/{$estabelecimento}/{$valor}/";
    echo $link_pagamento;
} else {
    http_response_code(405); // Método não permitido
}
?>
