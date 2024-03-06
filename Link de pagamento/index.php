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
