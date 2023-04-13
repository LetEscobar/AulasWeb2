<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>EXEMPLO DE SITE PHP</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <?php
            $escola = 'IFMS'
        ?>
        <h1>Página <?php echo $escola;?></h1>
        <?php
            for ($i = 1; $i <= 10; $i++){
                echo '<li class = "list-group-item"> Aluno ' . $i . '</li>';
            }
        ?>
    </body>
</html>
