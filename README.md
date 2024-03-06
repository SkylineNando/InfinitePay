# InfinitePay
LINK DE PAGAMENTO Venda online e parcele em até 12x

Claro, podemos criar uma solução usando HTML, PHP e JavaScript. Vou dividir a solução em três partes: o formulário HTML para inserir os dados de pagamento, o script JavaScript para enviar esses dados para o servidor PHP e a página PHP para processar os dados e redirecionar o usuário para o link de pagamento.

HTML (index.html):

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento</title>
</head>
<body>
    <h2>Pagamento</h2>
    <form id="formPagamento">
        <label for="estabelecimento">Estabelecimento:</label>
        <input type="text" id="estabelecimento" name="estabelecimento" required><br><br>
        <label for="valor">Valor:</label>
        <input type="number" id="valor" name="valor" required><br><br>
        <button type="submit">Pagar</button>
    </form>

    <script src="script.js"></script>
</body>
</html>
```

JavaScript (script.js):
```javascript
document.getElementById('formPagamento').addEventListener('submit', function(event) {
    event.preventDefault();
    
    var estabelecimento = document.getElementById('estabelecimento').value;
    var valor = document.getElementById('valor').value;

    // Enviar dados para o servidor PHP
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'processar_pagamento.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Redirecionar para o link de pagamento retornado pelo servidor
            window.location.href = xhr.responseText;
        }
    };
    xhr.send('estabelecimento=' + encodeURIComponent(estabelecimento) + '&valor=' + encodeURIComponent(valor));
});

```
PHP (processar_pagamento.php):

```php
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

```
