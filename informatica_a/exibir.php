<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Exibir</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style type="text/css">
		.page-footer{
			margin-top: 5%;
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
        .efeito:hover{
            background-color: #303f9f;
        }
        #tabela{
             box-sizing: border-box; position: relative;
             margin-left:104px; overflow:auto;
             margin-right: 104px; overflow: auto; 
             box-shadow: 1px;
             margin-top: 2%;
        }
        body{
            background-color: #eeeeee;
        }  
        .header,.footer,.body { width: 100%; }
        th{
            color: white;
        }
        td{
            color: white;
        }
        .kkk{
            margin-left: 500px;
        }
        .kkkk:hover{
            background-color: #00695c;
        }
        
        
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
        <li class="kkkk"><a href="funcionario.php">Relatório Funcionário</a></li>
        
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
            
            
            
            <table class="responsive-table z-depth-4 centered efeito #00695c teal darken-3">
                <center><br><i class="material-icons medium">description</i><H3>LISTAR OS POR DATA<br>
                      <div class="container">
                <div class="col s12" id="kk">  
                    <center>
                    <div class="row">
                        <form action="exibir.php" method="post">
                            <div class="input-field col s6">
                                <input placeholder="Ex: HHH3366" id="first_name" name="data_pesq" type="date" class="validate">
                               <label for="first_name">PESQUISA POR DATA</label>
                            </div>
                            
                                <div class="input-field col s3">
                            
                                <button class="btn waves-effect waves-light #00695c teal darken-3 medium" type="submit" >Pesquisar
                                    <i class="material-icons right medium">send</i>
                                </button>
                                    <div class="input-field col s6">
                            
                        </form>
                    </div>
                </div>
            </div>
                    </center>
                        
            
            
            
            
            </center>
            
            <thead class="efeito">
              <tr>
                
                <th>NOME</th>
                <th>CPF</th>
                <th>RG</th>
                <th>CNPJ</th>
                <th>TELEFONE</th>
         
                <th>RUA</th>
                <th>Nº</th>
                <th>BAIRRO</th>
                <th>FUNCIONÁRIO</th>
                <th>VAL DAS PEÇAS</th>
                <th>PAGAMENTO</th>
                <th>DESCRIÇÃO</th>
                <th>VAL SERVIÇO</th>
                <th>DATA ENTREGA</th>
                <th>DETALHES</th>
               </thead>


              <?php 
                require './conexao.php';
                $data_pesq = @$_POST['data_pesq'];
                
                $consultar= "SELECT * FROM ordemservico where dataatual='$data_pesq'order by dataatual desc";
                $con= $mysqli-> query($consultar) or die ($mysqli->errno);
                while ($dados= $con->fetch_array()) {
                ?>

                <?php 
                require './conexao.php';
                $nome_func = @$_POST['nome_func'];
                
                $consultar= "SELECT * FROM ordemservico where funcionario='$nome_func'order by funcionario desc";
                $con= $mysqli-> query($consultar) or die ($mysqli->errno);
                while ($dados= $con->fetch_array()) {
                ?>



            <tbody class="efeito" border="1">
              <tr>
                  <td><?php echo $dados['id']; ?></td>
                <td><?php echo $dados['nome']; ?></td>
                <td><?php echo $dados['cpf']; ?></td>
                <td><?php echo $dados['rg']; ?></td>
                <td><?php echo $dados['cnpj']; ?></td>
                <td><?php echo $dados['telefone']; ?></td>
                
                <td><?php echo $dados['rua']; ?></td>
                <td><?php echo $dados['numero']; ?></td>
                <td><?php echo $dados['bairro']; ?></td>
                
                
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
               
                <td>
                   <?php echo (date("d/m/Y", strtotime($dados['dataentrega']))) ?>
                
                </td>
                
                 <td>
                     <a href="detalhes.php?id=<?php echo $dados['id']; ?>">
                    <i style="font-size: 30px;" class="material-icons prefix">list</i>
                </a>
            </td>
                
              </tr>
             <?php } ?>     
            </tbody>
          </table>
        </div>
    
 	<footer class="page-footer z-depth-4 #00695c yellow-text teal darken-3">
        
            	 
                	<center><h5 class="white-text">CH Desenvolvimento de Sistemas WEB</h5>
                            © 2020 Todos os direitos reservados<br>
                            TIM (88)9.9915-5630 / Whats OI (85)9.8817-1498
                        </center>
            <br>
              
              	
             
        </div>
         
    </footer>
    
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
    $('select').formSelect();
  });
        $(document).ready(function(){
    $('.datepicker').datepicker();
  });
        $(document).ready(function(){
    $('.sidenav').sidenav();
  });
    </script>
</body>
</html>