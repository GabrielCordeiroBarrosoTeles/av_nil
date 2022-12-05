<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Impressão</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style type="text/css">
		.page-footer{
			margin-top: 10%;
			margin-bottom: 0px;
		}
        h5{
            margin-left:  100px;
        }
        h3{
            color:#00695c;
        }
        .footer-copyright{
            margin-left: 400px;
        }
        .kk:hover{
            background-color: #303f9f;
        }
        body{
            background-color: #eeeeee;
        }
        #tabela{
           
            margin-left:104px; overflow:auto;
             margin-right: 104px; overflow: auto; 
             margin-top: 2%;
        }  
        .header,.footer,.body { width: 100%; }
        
       
        .pago{
            background: blue;
            
        }
        .naopago{
            background: red;
            
        }
	</style>
</head>
<body>
    <nav class="z-depth-4">
        <div class="nav-wrapper #00695c teal darken-3">
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul id="nav-mobile" class="hide-on-med-and-down left">
            <li class="kk"><a href="home.php">Home</a></li>
            <li class="kk"><a href="cadastrar.php">Cadastrar OS</a></li>
            <li class="kk"><a href="exibir.php">Exibir OS</a></li>
            <li class="kk"><a href="pesquisar.php">Pesquisar OS</a></li>
            <li class="kk"><a href="editar.php">Editar OS</a></li>
            <li class="kk"><a href="excluir.php">Excluir OS</a></li>
            <li class="kk"><a href="relatorio.php">Relatório OS</a></li>
            <li class="kkkk"><a href="funcionario.php">Relatório Funcionário</a></li>
            <li class="kk"><a href="sair.php">Sair</a></li>
            <?php 
                require './conexao.php';
                session_start();
                if((!isset($_SESSION['login'])==true) and (!isset($_SESSION['senha'])==true)){
                  unset($_SESSION['login']);
                  unset($_SESSION['senha']);
                  header('location:index.php');
                }else{
                  echo "<li class='kkk'>
                  <i class='material-icons'>face</i></li> ".$_SESSION['login'];            
                }
            ?>
          </ul>      
        </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
        <li class="kkkk"><a href="home.php">Home</a></li>
        <li class="kkkk"><a href="cadastrar.php">Cadastrar OS</a></li>
        <li class="kkkk"><a href="exibir.php">Exibir OS</a></li>
        <li class="kkkk"><a href="pesquisar.php">Pesquisar OS</a></li>
        <li class="kkkk"><a href="editar.php">Editar OS</a></li>
        <li class="kkkk"><a href="excluir.php">Excluir OS</a></li>
        <li class="kkkk"><a href="relatorio.php">Relatório OS</a></li>
        <li class="kkkk"><a href="sair.php">Sair</a></li>
        <?php 
            require './conexao.php';
            session_start();
            if((!isset($_SESSION['login'])==true) and (!isset($_SESSION['senha'])==true)){
              unset($_SESSION['login']);
              unset($_SESSION['senha']);
              header('location:index.php');
            }else{
              echo "<li class=''>
              <i class='material-icons'>face</i></li> ".$_SESSION['login'];            
            }
        ?>
    </ul>
    <div class="z-depth-4" id="tabela">
        <table class="responsive-table z-depth-4 centered #00695c teal darken-3">
            <center><h3><i class="material-icons  medium">search</i>Área de Impressão<br></h3></center>
            
            <div class="container">
                <div class="col s12" id="kk">  
                    <div class="row">
                        <form action="impressao.php" method="post">
                            <div class="input-field col s6">
                                <input placeholder="Ex: HHH3366" id="first_name" name="nome_pesq" type="text" class="validate">
                               <label for="first_name">PLACA</label>
                            </div>
                            <center>
                                <div class="input-field col s6">
                            
                                <button class="btn waves-effect waves-light #00695c teal darken-3 medium" type="submit" >Pesquisar
                                    <i class="material-icons right medium">send</i>
                                </button>
                                </div>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
            
            
            <center><h3>Dados do Cliente</h3></center>
            <table class="border">
        
                
                
                
                
            
  <?php 
                require './conexao.php';
                $nome_pesq= @$_POST['nome_pesq'];
                $consultar= "SELECT * FROM ordemservico WHERE cpf LIKE '%$nome_pesq%' OR placa LIKE '%$nome_pesq%'";
                $con= $mysqli-> query($consultar) or die ($mysqli->errno);
                while ($dados= $con->fetch_array()) {
                ?>
            <tbody>
               <tr>
                <td>Cliente</td>    
                <td>CPF</td>    
                <td>RG</td>    
                <td>CNPJ</td>    
                <td>Telefone</td>    
                <td>E-mail</td>    
                <td>Rua</td>    
                <td>Nº</td>    
                <td>Bairro</td>    
               </tr>
                
               <tr>
                <td><?php echo $dados['nome']; ?></td>
                <td><?php echo $dados['cpf']; ?></td>
                <td><?php echo $dados['rg']; ?></td>
                <td><?php echo $dados['cnpj']; ?></td>
                <td><?php echo $dados['telefone']; ?></td>
                <td><?php echo $dados['email']; ?></td>
                <td><?php echo $dados['rua']; ?></td>
                <td><?php echo $dados['numero']; ?></td>
                <td><?php echo $dados['bairro']; ?></td>
               </tr>
               
               <tr>
                   <td>Placa</td>
                   <td>Marca</td>
                   <td>Modelo</td>
                   <td>Quilometragem</td>
                   <td>Ano Fab</td>
               </tr>  
               <tr>
                <td><?php echo $dados['placa']; ?></td>
                <td><?php echo $dados['marca']; ?></td>
                <td><?php echo $dados['modelo']; ?></td>
                <td><?php echo $dados['quilometragem']; ?></td>
                <td><?php echo $dados['anofabricacao']; ?></td>
               </tr>
               <tr>
                   <th>Desc 01</th>
                   <th>R$</th>
               </tr>
               
               <tr>
                <td><?php echo $dados['descricao1']; ?></td>
                <td><?php echo $dados['valor1']; ?></td>
               </tr>                
               
                <tr>
                   <th>Desc 02</th>
                   <th>R$</th>
               </tr>
               <tr>
                <td><?php echo $dados['descricao2']; ?></td>
                <td><?php echo $dados['valor2']; ?></td>
               </tr>                
                <td><?php echo $dados['descricao3']; ?></td>
                <td><?php echo $dados['valor3']; ?></td>
               </tr>
                <td><?php echo $dados['descricao4']; ?></td>
                <td><?php echo $dados['valor4']; ?></td>
                
                <td><?php echo $dados['descricao5']; ?></td>
                <td><?php echo $dados['valor5']; ?></td>
                
                <td><?php echo $dados['descricao6']; ?></td>
                <td><?php echo $dados['valor6']; ?></td>
                
                <td><?php echo $dados['descricao7']; ?></td>
                <td><?php echo $dados['valor7']; ?></td>
                
                <td><?php echo $dados['descricao8']; ?></td>
                <td><?php echo $dados['valor8']; ?></td>
                
                <td><?php echo $dados['descricao9']; ?></td>
                <td><?php echo $dados['valor9']; ?></td>
                
                <td><?php echo $dados['descricao10']; ?></td>
                <td><?php echo $dados['valor10']; ?></td>
                
                <td><?php echo $dados['descricao11']; ?></td>
                <td><?php echo $dados['valor11']; ?></td>
                
                <td><?php echo $dados['descricao12']; ?></td>
                <td><?php echo $dados['valor12']; ?></td>
                
                <td><?php echo $dados['descricao13']; ?></td>
                <td><?php echo $dados['valor13']; ?></td>
                
                <td><?php echo $dados['descricao14']; ?></td>
                <td><?php echo $dados['valor14']; ?></td>
                
                <td><?php echo $dados['descricao15']; ?></td>
                <td><?php echo $dados['valor15']; ?></td>
                
                <td><?php echo $dados['descricao16']; ?></td>
                <td><?php echo $dados['valor16']; ?></td>
                
                <td><?php echo $dados['descricao17']; ?></td>
                <td><?php echo $dados['valor17']; ?></td>
                
                
                <td><?php echo $dados['descricao18']; ?></td>
                <td><?php echo $dados['valor18']; ?></td>
                
                <td><?php echo $dados['descricao19']; ?></td>
                <td><?php echo $dados['valor19']; ?></td>
                
                <td><?php echo $dados['descricao20']; ?></td>
                <td><?php echo $dados['valor20']; ?></td>
                
                <td><?php echo $dados['descricao21']; ?></td>
                <td><?php echo $dados['valor21']; ?></td>
                
                <td><?php echo $dados['descricao22']; ?></td>
                <td><?php echo $dados['valor22']; ?></td>
                
                <td><?php echo $dados['descricao23']; ?></td>
                <td><?php echo $dados['valor23']; ?></td>
                
                <td><?php echo $dados['descricao24']; ?></td>
                <td><?php echo $dados['valor24']; ?></td>
                
                <td><?php echo $dados['descricao25']; ?></td>
                <td><?php echo $dados['valor25']; ?></td>
                
                <td><?php echo $dados['funcionario']; ?></td>
                <td><?php echo $dados['valorpecas']; ?></td>
                <td><?php 
                           if($dados['pagamento'] =="Pago"){
                               echo '<div class="pago">' .$dados['pagamento'].'</div>';
                                     }else  if($dados['pagamento'] =="NaoPago"){ 
                                        echo '<div class="naopago">' .$dados['pagamento'].'</div>';
                           }
                
                ?></td>
                <td><?php echo $dados['descricao']; ?></td>
                <td><?php echo $dados['valorservico']; ?></td>
               
                <td><?php echo (date("d/m/Y", strtotime($dados['dataentrega']))) ?></td>
                  <td>
                <a href="recebe_editar.php?id=<?php echo $dados['id']; ?>">
                    <i style="font-size: 30px;" class="material-icons prefix">edit</i>
                </a>
            </td>
                
              </tr>
             <?php } ?>     
            </tbody>
          </table>
            
            <button type="button" onclick="javascript:window.print();" class="btn btn-danger">Imprimir</button>

    </div>
 	<footer class="page-footer  z-depth-4 #00695c teal darken-3">
        <div class="container  z-depth-4">
            <div class="row">
            	<div class="col l6 s12">
                	<center><h5 class="white-text">CH Desenvolvimento de Sistemas WEB</h5></center>
              </div>
              	
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
            	© 2020 Todos os direitos reservados
            </div>
        </div>
    </footer>
    
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
         $(document).ready(function(){
    $('.sidenav').sidenav();
  });
    </script>
</body>
</html>