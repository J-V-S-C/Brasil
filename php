<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula01 - PHP</title>
</head>

<body>

    <?php
        $idade = 15;
        if($idade >= 18){
            echo 'Maior de idade.';
        }
        else{
        echo 'Menor de idade.';
        }
        echo '<hr>';
    ?>
    <a href="formularios.php">Trabalhando com formulários</a>
</body>
</html>


2222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario com POST</title>
</head>
<body>
    <form method="post" action="formularios.php">
        <label>E-mail</label>
        <input type="text" name="E-mail" placeholder="Informe seu E-mail">
        <input type="submit" value="Enviar dados">
         <?php
             if($_POST){
                $email = $_POST['E-mail']; //captura o name do input
                echo '<br>';
                echo 'Seu e-mail é: '.$email;
             }

          ?>
    
</body>
</html>
