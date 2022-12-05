<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Index</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style type="text/css">
		.page-footer{
			margin-top: 34%;
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
            background-color: #00695c;
        }
        h3{
            color: #00695c;
            padding-top: 30px;
        }
        .container{
            margin-top: 8%;
            height: 350px;
            width: 800px;
            background-color: white;
        }
        #kk{
            color: #00695c;
            background-color: #ffffff;   
        }
        form{
            margin-top: 70px;
        }
	</style>
</head>
<body>
    <div class="container z-depth-5">
        <div class="col s12" id="kk">
            <center><h3><i class="material-icons left medium">person</i>Área de Login <i class="material-icons right medium">person</i></h3></center>
            <div class="row">
                <form action="recebe_login.php" method="post">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">face</i>
                        <input placeholder="Login" id="first_name" name="login" type="text" class="validate">
                        <label for="first_name">Usuário</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">lock</i>
                        <input placeholder="Senha" id="first_name" name="senha" type="password" class="validate">
                        <label for="first_name">Senha</label>
                    </div>
                    <center>        
                        <button class="btn waves-effect waves-light #00695c teal darken-3 medium" type="submit" >Logar
                            <i class="material-icons right medium">send</i>
                        </button>
                    </center>
                </form>
            </div>
        </div>
    </div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>