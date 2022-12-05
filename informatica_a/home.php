<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Home</title>
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
        .footer-copyright{
            margin-left: 400px;
        }
        .kk:hover{
            background-color: #303f9f;
        }
        body{
            background-color: #eeeeee;
        }
        .kkk{
            margin-left: 500px;
        }
        .kkkk:hover{
            background-color: #00695c;
        }
        .card-content{
            color: #00695c;
        }
        div.slider{
            display: flex;
            justify-content: center;
        }
        img.logo{
            width: 60%;
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
                <li class="kkk"><a href="pesquisa_nome.php">pesquisa nome</a></li>
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
    </nav><br>

    <div class="slider">
    <ul class="slides">
      <li>
        <img src="img/logo2.png" class="logo"> <!-- random image -->
        <div class="caption center-align">
        </div>
      </li>
      <li>
        <img src="img/logo2.png"> <!-- random image -->
        <div class="caption left-align">
        </div>
      </li>
      <li>
        <img src="img/logo2.png"> <!-- random image -->
        <div class="caption right-align">
        </div>
      </li>
      <li>
        <img src="img/logo2.png"> <!-- random image -->
        <div class="caption center-align">
        </div>
      </li>
    </ul>
  </div>

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
    <div class="carousel">
        <a class="carousel-item" href="home.php">
            <div class="row">
                <div class="card">
                    <div class="card-image N/A transparent">
                        <img src="img/home.png">
                    </div>
                    <div class="card-content">
                        <p>Esta é a home, clique sobre a imagem e voltará aqui.</p>
                    </div>
                </div>
            </div>
        </a>
        <a class="carousel-item" href="cadastrar.php">
            <div class="row">
                <div class="card">
                    <div class="card-image">
                        <img src="img/cadastro.png">
                    </div>
                    <div class="card-content">
                        <p>Esta é a cadastrar, clique sobre a imagem e cadastre um cliente.</p>
                    </div>
                </div>
            </div>
        </a>
        <a class="carousel-item" href="exibir.php">
            <div class="row">
                <div class="card">
                    <div class="card-image">
                        <img src="img/exibir.png">
                    </div>
                    <div class="card-content">
                        <p>Esta é a exibir, clique sobre a imagem e veja todos os clientes cadastrados.</p>
                    </div>
                </div>
            </div>
        </a>
        <a class="carousel-item" href="pesquisar.php">
            <div class="row">
                <div class="card">
                    <div class="card-image">
                        <img src="img/pesquisar.png">
                    </div>
                    <div class="card-content">
                        <p>Esta é a pesquisar, clique sobre a imagem e pesquise os clientes cadastrados.</p>
                    </div>
                </div>
            </div>
        </a>
        <a class="carousel-item" href="editar.php">
            <div class="row">
                <div class="card">
                    <div class="card-image">
                        <img src="img/editar.png">
                    </div>
                    <div class="card-content">
                        <p>Esta é a editar, clique sobre a imagem e edite os dados</p>
                    </div>
                </div>
            </div>
        </a>
        <a class="carousel-item" href="excluir.php">
            <div class="row">
                <div class="card">
                    <div class="card-image">
                        <img src="img/deletar.png">
                    </div>
                    <div class="card-content">
                        <p>Esta é a excluir, clique sobre a imagem e exclua os dados</p>
                    </div>
                </div>
            </div>
        </a>
        <a class="carousel-item" href="relatorio.php">
            <div class="row">
                <div class="card">
                    <div class="card-image">
                        <img src="img/relatorio.png">
                    </div>
                    <div class="card-content">
                        <p>Este é o relatório, clique sobre a imagem e veja o gráfico</p>
                    </div>
                </div>
            </div>
        </a>
        <a class="carousel-item" href="sair.php">
            <div class="row">
                <div class="card">
                    <div class="card-image">
                        <img src="img/sair.png">
                    </div>
                    <div class="card-content">
                        <p>Esta é a sair, clique sobre a imagem e sairá para a login</p>
                    </div>
                </div>
            </div>
        </a>
      </div>
 	<footer class="page-footer  z-depth-4 #00695c teal darken-3">
        <div class="container  z-depth-4">
            <div class="row">
            	<div class="col l6 s12">
                    <center><h6 class="white-text">CH Desenvolvimento de Sistemas WEB<br> (88)9.9915-5630</h6></center>
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
    $('.carousel').carousel();
  });
    $('.carousel.carousel-slider').carousel({
    indicators: true
  });
    $(document).ready(function(){
    $('.sidenav').sidenav();
  });
  $(document).ready(function(){
      $('.slider').slider();
    });
    </script>
</body>
</html>

