<?
if ($_POST) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $datanascimento = $_POST['dt'];
    $senha = $_POST['senha'];
    $senha2 = $_POST['senha2'];


    if ($senha == $senha2) {
        //cadastro usuário
        break;
    } else {
        header('location:../cadastroclientes.php?cod=171');
    }
} else {
    header('location:../cadastroclientes.html?opa');
}
