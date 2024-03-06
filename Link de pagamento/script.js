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
