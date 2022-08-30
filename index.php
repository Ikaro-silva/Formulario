<?php
    if(isset($_POST['submit'])){
        include_once('confg_projeto.php');
        
        $equipamento= $_POST['equipamento'];
        $propietario= $_POST['propietario'];
        $telefone= $_POST['telefone'];
        $dataEntrada= $_POST['dataEntrada'];
        $dataSaida=$_POST['dataSaida'];
        $statos= $_POST['statos'];
        $observacao= $_POST['observacao'];
        
        $result = mysqli_query($conection,"INSERT INTO cadastro(equipamento,propietario,telefone,dataEntrada,dataSaida,statos,observacao)
        VALUES('$equipamento','$propietario','$telefone','$dataEntrada','$dataSaida','$statos','$observacao')");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="index.css" rel="stylesheet">
</read>
<body>
    <form action="index.php" method="POST">
        <div class="main">
            <fieldset>
                <legend>
                    <h3>Cadastro</h3>
                </legend>
                <div id="equip">
                    <P><label for="equipamento">Equipamento</label></P>
                    <br>
                    <input type="text" id="equipamento" name="equipamento" required="">
                </div>

                <div id="Propi">
                    <P><label for="propietario">Propietário</label></P>
                    <br>
                    <input type="text" id="propietario"  name="propietario"  required="">
                </div>
                <div id="tel">
                    <P><label for="telefone">Telefone</label></P>
                    <br>
                    <input type="tel" id="telefone" name="telefone" required="">
                </div>
                <div id = "dtEntrada">
                    <label for="dataEntrada"> Data Entrada</label>
                    <input type="date" id = "dataEntrada" name="dataEntrada" required="">
                </div>
                <div id = "dtSaida">
                    <label for="dataSaida">Data Saida</label>
                    <input type="date" id = "dataSaida"  name="dataSaida" required="">
                </div>

                <div id="stts">
                    <input type="radio" id = "orcamento" name= "statos" required="">
                    <label for="orcamento"> Orçamento</label>
                
                    <input type="radio" id = "pronto" name= "statos" required="">
                    <label for="pronto"> Pronto</label>

                    <input type="radio" id = "avaliado" name= "statos" required="">
                    <label for="avaliado">Avaliado</label>
                </div>
                
                <div id="obs">
                    <p><label for="observacao">Observações</label></p>
                    <textarea id="observacao" placeholder="Texto" name="observacao"></textarea>
                </div>
                <div>
                    <input type="submit" id="button" value="Cadastrar" name="submit">
                </div>
            </fieldset>
        </div>
    </form>
    
</body>
</html>
