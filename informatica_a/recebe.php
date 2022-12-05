<!DOCTYPE html>
<html>
<head>
    <title>Recebe</title>
    <link rel="stylesheet" type="text/css" href="css/materialize.css">
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style type="text/css">
        img{
            margin-top: 2%;
        }
        h2{  
            margin-top: 10%;            
        }
        body{
            background-color: #eeeeee;
        }
    </style>
    <script type="text/javascript">
        function ok(){
            setTimeout("window.location='exibir.php'",4000);
        }
        function erro(){
            setTimeout("window.location='cadastrar.php'",4000);
        }
    </script>
</head>
<body>
    <script src="./js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
<?php
   require './conexao.php';
    # Cliente
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $cnpj = $_POST['cnpj'];
    $telefone = $_POST['telefone']; #42
    $email = $_POST['email'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];

    # Veículo
    $placa = $_POST['placa'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $quilometragem = $_POST['quilometragem'];
    $anofabricacao = $_POST['anofabricacao'];

    $descricao1 = $_POST['descricao1'];
    $valor1 = $_POST['valor1'];

    $descricao2 = $_POST['descricao2'];
    $valor2 = $_POST['valor2'];

    $descricao3 = $_POST['descricao3'];
    $valor3 = $_POST['valor3'];

    $descricao4 = $_POST['descricao4'];
    $valor4 = $_POST['valor4'];

    $descricao5 = $_POST['descricao5'];
    $valor5 = $_POST['valor5'];

    $descricao6 = $_POST['descricao6'];
    $valor6 = $_POST['valor6'];

    $descricao7 = $_POST['descricao7'];
    $valor7 = $_POST['valor7'];
    
    $descricao8 = $_POST['descricao8'];
    $valor8 = $_POST['valor8'];

    $descricao9 = $_POST['descricao9'];
    $valor9 = $_POST['valor9'];
    
    $descricao10 = $_POST['descricao10'];
    $valor10 = $_POST['valor10'];

    $descricao11 = $_POST['descricao11'];
    $valor11 = $_POST['valor11'];

    $descricao12 = $_POST['descricao12'];
    $valor12 = $_POST['valor12'];
    
    $descricao13 = $_POST['descricao13'];
    $valor13 = $_POST['valor13'];

    $descricao14 = $_POST['descricao14'];
    $valor14 = $_POST['valor14'];

    $descricao15 = $_POST['descricao15'];
    $valor15 = $_POST['valor15'];

    $descricao16 = $_POST['descricao16'];
    $valor16 = $_POST['valor16'];

    $descricao17 = $_POST['descricao17'];
    $valor17 = $_POST['valor17'];

    $descricao18 = $_POST['descricao18'];
    $valor18 = $_POST['valor18'];

    $descricao19 = $_POST['descricao19'];
    $valor19 = $_POST['valor19'];

    $descricao20 = $_POST['descricao20'];
    $valor20 = $_POST['valor20'];

    $descricao21 = $_POST['descricao21'];
    $valor21 = $_POST['valor21'];

    $descricao22 = $_POST['descricao22'];
    $valor22 = $_POST['valor22'];

    $descricao23 = $_POST['descricao23'];
    $valor23 = $_POST['valor23'];

    $descricao24 = $_POST['descricao24'];
    $valor24 = $_POST['valor24'];

    $descricao25 = $_POST['descricao25'];
    $valor25 = $_POST['valor25'];

    
    $funcionario  = $_POST['func'];
    $valorpecas   = $_POST['valorpecas'];
    $pagamento    = $_POST['pagamento'];
    $descricao    = $_POST['descricao'];
    $valorservico = $_POST['valorservico'];
    $dataatual    = $_POST['dataatual'];
    $dataentrega  = $_POST['dataentrega'];
    
    
    
    
    
    
 $inserir = $mysqli->query("INSERT INTO ordemservico VALUES (
         '0','$nome','$cpf ', '$rg' , '$cnpj','$telefone','$email','$rua','$numero' , '$bairro',"
         . " '$placa',  '$marca', '$modelo', '$quilometragem' ,  '$anofabricacao' ,
         
             '$descricao1',  '$valor1',     '$descricao2',   '$valor2',    '$descricao3',    '$valor3', "
         . " '$descricao4',  '$valor4',     '$descricao5',   '$valor5',    '$descricao6',    '$valor6', "
         . " '$descricao7',  '$valor7',     '$descricao8',   '$valor8',    '$descricao9',    '$valor9',  "
         . " '$descricao10',  '$valor10',   '$descricao11',  '$valor11',   '$descricao12',   '$valor12',
             '$descricao13', '$valor13',    '$descricao14',  '$valor14',   '$descricao15',   '$valor15',"
         . " '$descricao16', '$valor16',    '$descricao17',  '$valor17',   '$descricao18',   '$valor18', "
         . " '$descricao19', '$valor19',    '$descricao20',  '$valor20',   '$descricao21',   '$valor21',"
         . " '$descricao22', '$valor22',    '$descricao23',  '$valor23',   '$descricao24',   '$valor24' ,"
         . " '$descricao25', '$valor25',
             
         '$funcionario' ,'$valorpecas','$pagamento' ,'$descricao','$valorservico','$dataatual', '$dataentrega')");


    if ($inserir) {
      
        echo "<center><h2>Cadastro Realizado</h2></center>";
        echo "<center><img src='img/carregando.gif'></center>";
        echo "<script>ok()</script>";
    }else{
        
        echo "Erro ao cadastrar".  $mysqli->mysql_errno();
        echo "Erro ao cadastrar". mysql_error();
        #echo "<center><h2>Erro no Cadastro</h2></center>";
        #echo "<center><img src='img/carregando.gif'></center>";
        #echo "<script>erro()</script>";

    }       
    ?>

