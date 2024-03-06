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
