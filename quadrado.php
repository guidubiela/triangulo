<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário</title>
</head>
<?php
    require_once('quadrado.class.php');
?>
<body>
    <h1>Criação de Quadrados</h1>
    <section>
        <form action="" method="post">
            <fieldset>
                Id <input type="number" name="id" id="id"> <br>
                Lado <input type="number" name="lado" id="lado"> <br>
                Cor <input type="color" name="cor" id="cor"> <br>
                Medida
                <select name="medida" id="medida">
                    <option value="">Selecione</option>
                    <option value="%">Porcentagem</option>
                    <option value="px">px</option>
                    <option value="vh">View Port Height</option>
                    <option value="vw">View Port Width</option>
                </select>
                <br>
                <input type="submit" name="acao" value="Salvar">
            </fieldset>
        </form>
    </section>
    <?php
        if(isset($_POST['acao'])){

            $id = isset($_POST['id']) ? $_POST['id'] : 0;
            $lado = isset($_POST['lado']) ? $_POST['lado'] : 0;
            $cor = isset($_POST['cor']) ? $_POST['cor'] : 0;
            $medida = isset($_POST['medida']) ? $_POST['medida'] : 0;
            $acao = isset($_POST['acao']) ? $_POST['acao'] : '';

            if($acao == 'Salvar'){
                try{
                    $quadrado = new Quadrado($id, $lado, $cor, $medida);
                }
                catch(Exception $e){
                    echo 'Erro: ' . $e->getMessage();
                }
            }
            echo "<br>";
            echo "Área: " . $quadrado->area($lado);
            echo "<br>";
            echo "Perímetro: " . $quadrado->perimetro($lado);
            echo "<br>";
            echo $quadrado->desenhar();
        }
    ?>
</body>
</html>