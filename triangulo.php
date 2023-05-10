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
    require_once('triangulo.class.php');
?>
<body>
    <h1>Criação de Triângulos</h1>
    <section>
        <form action="" method="post">
            <fieldset>
                Id <input type="number" name="id" id="id"> <br>
                Tipo de triângulo
                <select name="tipoTriangulo" id="tipoTriangulo">
                    <option value="">Selecione</option>
                    <option value="equilatero">Equilátero</option>
                    <option value="isosceles">Isósceles</option>
                    <option value="escaleno">Escaleno</option>
                </select>
                <br>
                Lado 1 <input type="number" name="lado1" id="lado1"> <br>
                Lado 2 <input type="number" name="lado2" id="lado2"> <br>
                Lado 3 <input type="number" name="lado3" id="lado3"> <br>
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
            $tipoTriangulo = isset($_POST['tipoTriangulo']) ? $_POST['tipoTriangulo'] : '';
            $lado1 = isset($_POST['lado1']) ? $_POST['lado1'] : 0;
            $lado2 = isset($_POST['lado2']) ? $_POST['lado2'] : 0;
            $lado3 = isset($_POST['lado3']) ? $_POST['lado3'] : 0;
            $cor = isset($_POST['cor']) ? $_POST['cor'] : 0;
            $medida = isset($_POST['medida']) ? $_POST['medida'] : 0;
            $acao = isset($_POST['acao']) ? $_POST['acao'] : '';

            if($acao == 'Salvar'){
                try{
                    $triangulo = new Triangulo($id, $tipoTriangulo, $lado1, $lado2, $lado3, $cor, $medida);
                }
                catch(Exception $e){
                    echo 'Erro: ' . $e->getMessage();
                }
            }
            echo "<br>";
            echo $triangulo->getArea();
            echo "<br>";
            echo $triangulo->desenhar($tipoTriangulo);
        }
    ?>
</body>
</html>