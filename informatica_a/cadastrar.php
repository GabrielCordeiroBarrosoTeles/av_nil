<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style type="text/css">
		.page-footer{
			margin-top: 12%;
			margin-bottom: 0px;
		}
        h5{
            margin-left:  100px;
        }
        .footer-copyright{
            margin-left: 400px;
        }
        #k{
            margin-left: 28%;
        }
        .kk:hover{
            background-color: #303f9f;
        }
        body{
            background-color: #eeeeee;
        }    
        h3{
            color:#00695c;
        }
        .kkk{
            margin-left: 500px;
        }
        .kkkk:hover{
            background-color: #00695c;
        }   
	</style>
    <script type="text/javascript" src="js/script2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
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
    <div class="container z-depth-4">
        <div class="col s12" id="kk">
            <center><h3><i class="material-icons left medium">person</i>Dados do Cliente </h3></center>
            <div class="row">
                <form action="recebe.php" method="post">
                    <div class="input-field col s4">
                        <i class="material-icons prefix">face</i>
                        <input placeholder="Nome do Cliente" id="first_name" name="nome" required="" type="text" class="validate">
                        <label for="first_name">Nome</label>
                    </div>
                    <div class="input-field col s4">
                        <i class="material-icons prefix">face</i>
                        <input  placeholder="Sem . ou -" id="first_name" name="cpf" type="text" 
                        class="validate">
                        <label for="first_name">CPF</label>
                    </div>
                    
                    <div class="input-field col s4">
                        <i class="material-icons prefix">face</i>
                        <input  placeholder="00000000000" id="first_name" name="rg" type="text" 
                        class="validate">
                        <label for="first_name">RG</label>
                    </div>
                    
                    
                    <div class="input-field col s4">
                        <i class="material-icons prefix">face</i>
                        <input  placeholder="XX.XXX.XXX/XXXX-XX" id="first_name" name="cnpj" type="text" 
                        class="validate">
                        <label for="first_name">CNPJ</label>
                    </div>
                    
                    <div class="input-field col s4">
                        <i class="material-icons prefix">phone</i>
                        <input  placeholder="DD + Telefone" id="first_name" name="telefone" type="text"    class="validate">
                       <label for="icon_telephone">Tel</label>
                    </div>
                    
                   
            </div>
        </div>
        <div class="col s12">
            <div class="row">
                <div class="input-field col s4">
                    <i class="material-icons prefix">email</i>
                    <input id="email" name="email" placeholder="exemplo@gmail.com" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
                <div class="input-field col s3">
                    <i class="material-icons prefix">streetview</i>
                    <input id="email"  placeholder="Rua dos Caba Bom" name="rua" type="text" class="validate">
                    <label for="rua">Rua</label>
                </div>
                <div class="input-field col s2">
                    <i class="material-icons prefix">streetview</i>
                    <input id="numero" name="numero" placeholder="000" type="text" class="validate">
                    <label for="numero">Nº</label>
                </div>
                    <div class="input-field col s3">
                        <i class="material-icons prefix">streetview</i>
                         <input id="bairro" name="bairro" placeholder="XXXXXXX" type="text" class="validate">
                        <label>Bairro</label>
                </div>
            </div>
        </div>
        <div class="col s12" >
            <center><h3><i class="material-icons left medium">directions_car</i>Dados do Veículo<i class="material-icons right medium">directions_car</i></h3></center>
            <div class="row">
                <div class="input-field col s2">
                    <i class="material-icons prefix">directions_car</i>
                    <input placeholder="HHH0000" id="first_name" required=""name="placa" type="text" class="validate">
                    <label for="placa">Placa</label>
                </div>
                
                <div class="input-field col s3">
                    <i class="material-icons prefix">directions_car</i>
                     <input id="email" name="marca" placeholder="Volkswagen" type="text" class="validate">
                    <label>Marca</label>
                </div>
                
                <div class="input-field col s3">
                    <i class="material-icons prefix">directions_car</i>
                    <input id="icon_telephone" placeholder="Uno Way 1.0" type="tel" name="modelo" class="validate">
                    <label for="icon_telephone">Modelo</label>
                </div>
                
                <div class="input-field col s2">
                    <i class="material-icons prefix">local_car_wash</i>
                    <input placeholder="100000" id="first_name" name="quilometragem" type="text" class="validate">
                    <label for="first_name">Quilometragem</label>
                </div>
                <div class="input-field col s2">
                    <i class="material-icons prefix">directions_car</i>
                    <input placeholder="2012" type="text" name="anofabricacao">
                    <label for="first_name">Ano de fabricação</label>
                </div>
            </div>
        </div>
        <div class="col s12">
            <center><h3><i class="material-icons left medium">settings</i>Troca de Peças<i class="material-icons right medium">settings</i></h3></center>
            
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">description</i>
                    <input id="email" name="descricao1" placeholder="Descricao 1" type="text" class="validate">
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="icon_prefix" name="valor1" placeholder="Valor 1" valor type="number" class="validate">
                </div>
                
                    
            </div>
            
            
        </div>
        <div class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">description</i>
                    <input id="email" name="descricao2" placeholder="Descrição 2" type="text" class="validate">
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="email" name="valor2" placeholder="Valor 2" valor type="text" class="validate">
                </div>
            </div>
        </div>
       
        
        
        <div class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">description</i>
                    <input id="email" name="descricao3" placeholder="Descrição 3" type="text" class="validate">
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="email" name="valor3" placeholder="Valor 3" valor type="text" class="validate">
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">description</i>
                    <input id="email" name="descricao4" placeholder="Descrição 4" type="text" class="validate">
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="email" name="valor4" placeholder="Valor 4" valor type="text" class="validate">
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">description</i>
                    <input id="email" name="descricao5" placeholder="Descrição 5" type="text" class="validate">
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="email" name="valor5" placeholder="Valor 5" valor type="text" class="validate">
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">description</i>
                    <input id="email" name="descricao6" placeholder="Descrição 6" type="text" class="validate">
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="email" name="valor6" placeholder="Valor 6" valor type="text" class="validate">
                </div>
            </div>
        </div>
        
        
        <div class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">description</i>
                    <input id="email" name="descricao7"  placeholder="Descrição 7" type="text" class="validate">
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="email" name="valor7" placeholder="Valor 7" valor type="text" class="validate">
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">description</i>
                    <input id="email" name="descricao8"  placeholder="Descrição 8" type="text" class="validate">
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="email" name="valor8" placeholder="Valor 8" valor type="text" class="validate">
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">description</i>
                    <input id="email" name="descricao9" placeholder="Descrição 9" type="text" class="validate">
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="email" name="valor9" placeholder="Valor 9" valor type="text" class="validate">
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">description</i>
                    <input id="email" name="descricao10"  placeholder="Descrição 10" type="text" class="validate">
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="email" name="valor10" placeholder="Valor 10" valor type="text" class="validate">
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">description</i>
                    <input id="email" name="descricao11"  placeholder="Descrição 11" type="text" class="validate">
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="email" name="valor11" placeholder="Valor 11" valor type="text" class="validate">
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">description</i>
                    <input id="email" name="descricao12"  placeholder="Descrição 12" type="text" class="validate">
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="email" name="valor12" placeholder="Valor 12" valor type="text" class="validate">
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">description</i>
                    <input id="email" name="descricao13"  placeholder="Descrição 13" type="text" class="validate">
                 </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="email" name="valor13" placeholder="Valor 13" valor type="text" class="validate">
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">description</i>
                    <input id="email" name="descricao14"  placeholder="Descrição 14" type="text" class="validate">
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="email" name="valor14" placeholder="Valor 14" valor type="text" class="validate">
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">description</i>
                    <input id="email" name="descricao15"  placeholder="Descrição 15" type="text" class="validate">
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="email" name="valor15" placeholder="Valor 15" valor type="text" class="validate">
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">description</i>
                    <input id="email" name="descricao16" placeholder="Descrição 16" type="text" class="validate">
                    
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="email" name="valor16" placeholder="Valor 16" valor type="text" class="validate">
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">description</i>
                    <input id="email" placeholder="Descrição 17" name="descricao17" type="text" class="validate">
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="email" placeholder="Valor 17" name="valor17" valor type="text" class="validate">
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">description</i>
                    <input id="email" placeholder="Descrição 18" name="descricao18" type="text" class="validate">
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="email" placeholder="Valor 18" name="valor18" valor type="text" class="validate">
                    
                </div>
            </div>
        </div>
        
        
        <div class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">description</i>
                    <input id="email" placeholder="Descrição 19" name="descricao19" type="text" class="validate">
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="email" placeholder="Valor 19" name="valor19" valor type="text" class="validate">
                    
                </div>
            </div>
        </div>
        
        
        <div class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">description</i>
                    <input id="email" placeholder="Descrição 20" name="descricao20" type="text" class="validate">
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="email" placeholder="Valor 20" name="valor20" valor type="text" class="validate">
                    
                </div>
            </div>
        </div>
        
        
        
        <div class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">description</i>
                    <input id="email" placeholder="Descrição 21" name="descricao21" type="text" class="validate">
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="email" placeholder="Valor 21" name="valor21" valor type="text" class="validate">
                    
                </div>
            </div>
        </div>
        
        
        
        <div class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">description</i>
                    <input id="email" placeholder="Descrição 22" name="descricao22" type="text" class="validate">
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="email" placeholder="Valor 22" name="valor22" valor type="text" class="validate">
                    
                </div>
            </div>
        </div>
        
        
        <div class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">description</i>
                    <input id="email" placeholder="Descrição 23" name="descricao23" type="text" class="validate">
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="email" placeholder="Valor 23" name="valor23" valor type="text" class="validate">
                    
                </div>
            </div>
        </div>
        
        
        <div class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">description</i>
                    <input id="email" placeholder="Descrição 24" name="descricao24" type="text" class="validate">
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="email" placeholder="Valor 24" name="valor24" valor type="text" class="validate">
                    
                </div>
            </div>
        </div>
        
        
        
        <div class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">description</i>
                    <input id="email" placeholder="Descrição 25" name="descricao25" type="text" class="validate">
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="email" placeholder="Valor 25" name="valor25" valor type="text" class="validate">
                    
                </div>
            </div>
        </div>
        
         
        
        <center>
         
   
   <div class="col s5">
            <div class="row">
                <div id="k" class="input-field col s5">
            
      <p>
          <label>SELECIONE UM FUNCIONÁRIO</label><br>
      <label>
        <input name="func" value="ROMULO" type="radio" checked />
        <span>RÔMULO</span>
      </label>
     
      <label>
        <input name="func" value="FELIPE" type="radio" />
        <span>FELIPE</span>
      </label>
          
      <label>
        <input name="func" value="FUNC3" type="radio" />
        <span>FUNC3</span>
      </label>
          
          
          
    </p>
                </div></div></div>
 
        </center>       
          
        
        
        
        <center>
            <label>VALOR TOTAL DAS PEÇAS</label><br>
        <div class="col s5">
            <div class="row">
                <div id="k" class="input-field col s5">
                    <i class="material-icons prefix">attach_money</i>
                    <input placeholder="0000" id="resultado" name="valorpecas" type="text" class="validate">
                </div>                  
            </div>
        </div>
            
            
            
        <center>
        <div class="col s5">
            <div class="row">
                <div id="k" class="input-field col s5">
            
      <p>
          <label>Status do Pagamento</label><br>
      <label>
        <input name="pagamento" value="Pago" type="radio" checked />
        <span>Pago</span>
      </label>
     
      <label>
        <input name="pagamento" value="NaoPago" type="radio" />
        <span>Não pago</span>
      </label>
    </p>
                </div></div></div></center>
            <br>
                    
                    
                    
            
        <div class="col s12">
            <div class="row">
                <div class="input-field col s3">
                    <i class="material-icons prefix">description</i>
                    <input id="email" placeholder="Serviço Completo" name="descricao" type="text" class="validate">
                    <label for="email">Descrição</label>
                </div>
                <div class="input-field col s3">
                    <i class="material-icons prefix">attach_money</i>
                    <input id="valor" name="valorservico" placeholder="1000" type="text" class="validate">
                    <label for="email">Valor do Serviço</label>
                </div>
                <div class="input-field col s3">
                    <i class="material-icons prefix left">today</i>
                    <input type="date" placeholder="01/09/2020" name="dataatual">
                    <label for="first_name">Data Atual</label>
                    
                </div>
                <div class="input-field col s3">
                    <i class="material-icons prefix left">today</i>
                    <input type="date" name="dataentrega" placeholder="09/09/2020">
                    <label for="first_name">Data de Entrega</label>
                    
                </div>                    
            </div>
        </div>
        </center>            
        <center>        
            <button class="btn waves-effect waves-light  teal darken-3 medium" type="submit" >Enviar
                <i class="material-icons right medium">send</i>
            </button>
        </center>
          </form>
    </div>
 	<footer class="page-footer z-depth-4  teal darken-3">
        <div class="container z-depth-4">
            <div class="row">
            	<div class="col l6 s12">
                    <center><h6 class="white-text">CH Desenvolvimento de Sistemas | (88)9.9915-5630</h6></center>
              </div>
              	
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
            	© 2020 Todos os direitos reservados
            </div>
        </div>
    </footer>
    <script src="./js/script.js"></script>
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