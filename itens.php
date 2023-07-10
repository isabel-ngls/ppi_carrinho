<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itens para compra</title>
</head>
<body>

    <form action = "" method = "post">
    <table>
        <tr>
            <th colspan = "6">ITENS PARA COMPRA</th>
        </tr>
        <tr>
            <th>[X]</th>
            <th colspan = "3">Descrição</th>
            <th>Quantidade</th>
            <th>Valor</th>
        </tr>
        <tr>
            <td><input type = "checkbox" name = "item1" value = "Item 1"></td>
            <td>Air Jordan 1 High '85</td>
            <td>Tamanho: 43</td>
            <td>Cor: Preto</td>
            <td><input type = "number" id = "valor1" name = "valor1"/></td>
            <td>R$ 1.699,00</td>
        </tr>
        <tr>
            <td><input type = "checkbox" name = "item1" value = "Item 1"></td>
            <td>Chuck Taylor All Star Rosa</td>
            <td>Tamanho: 38</td>
            <td>Cor: Rosa</td>
            <td><input type = "number" id = "valor2" name = "valor2"/></td>
            <td>R$ 298,00<td>
            </tr>
        </tr>
        <tr>
            <td><input type = "checkbox" name = "item1" value = "Item 1"></td>
            <td>Tênis Adidas Grand Court</td>
            <td>Tamanho: 42</td>
            <td>Cor: Preto</td>
            <td><input type = "number" id = "valor3" name = "valor3"/></td>
            <td>R$ 399,00</td>
        </tr>
    </table>
    </form>

</body>
</html>