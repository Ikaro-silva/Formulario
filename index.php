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
