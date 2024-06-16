<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeCliente = ($_POST['nomeCliente']);
    $telefone = ($_POST['telefone']);
    $nomeAnimal = ($_POST['nomeAnimal']);
    $servicos = isset($_POST['servicos']) ? implode(", ", $_POST['servicos']) : "Nenhum serviço selecionado";
    $data = ($_POST['data']);
    $observacoes = ($_POST['observacoes']);

    echo "<fieldset>";
    echo "<legend>Dados da Ordem de Serviço</legend>";
    echo "<p><strong>Nome do Cliente:</strong> $nomeCliente</p>";
    echo "<p><strong>Telefone:</strong> $telefone</p>";
    echo "<p><strong>Animal:</strong> $nomeAnimal</p>";
    echo "<p><strong>Serviços:</strong> $servicos</p>";
    echo "<p><strong>Data:</strong> $data</p>";
    echo "<p><strong>Observações:</strong> $observacoes</p>";
    echo "</fieldset>";
} else {
    echo "Método de requisição inválido.";
}

?>