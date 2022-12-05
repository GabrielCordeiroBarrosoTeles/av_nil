<!DOCTYPE html>
<html>
<head>
	<title>Confirmação de Login</title>
	<script type="text/javascript">
		function ok(){
			setTimeout("window.location='home.php'",3000);
		}
		function erro(){
			setTimeout("window.location='index.php'",3000);
		}
	</script>
	<meta charset="utf-8">
	<style type="text/css">
		img{
            margin-top: 2%;
        }
        h2{  
            margin-top: 10%;            
        }
	</style>
</head>
<body>
</body>
</html>
<?php 
	require './conexao.php';
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$resultado = $mysqli -> query("SELECT * FROM usuario WHERE login='$login' AND senha='$senha'");
	if(mysqli_num_rows($resultado)>0){
		session_start();
		$_SESSION['login'] = $_POST['login'];
		$_SESSION['senha'] = $_POST['senha'];
		echo "<center><h2>Login Efetuado com Sucesso!</h2></center>";
		echo "<center><img src='img/carregando.gif'></center>";
		echo "<script>ok()</script>";
	}else{
		echo "<center><h2>Usuário e/ou senha incorreto(s)</h2></center>";
		echo "<center><img src='img/carregando.gif'></center>";
		echo "<script>erro()</script>";
	}
?>