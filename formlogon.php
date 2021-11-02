<!doctype html>
<html lang="pt-br">
<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        
    <style type="text/css">
	.navbar{
		margin-bottom:0px;
        
		
    }
    .navbar img{
		margin-left: 30px;
    }
    
    </style>
        
    
    <body>
       
    <?php
        
        include 'Conexao.php';	
        include 'nav.php';
        //include 'cabecalho.html';
        
    ?>
       
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4"> 
                    <h2>Logon de Usuário</h2>
                <form name="frmusuario" method="post" action="validausuario.php">
                    <div class="form-group">
                            <label for="email">Email</label>
                            <input name="txtemail" type="email" class="form-control" required id="email">
                        </div>
                    
                    <div class="form-group">
                            <label for="senha">Senha</label>
                            <input name="txtsenha" type="password" class="form-control" required id="senha">
                    </div>
                            
                    <button type="submit" class="btn btn-lg btn-default">
                        <span class="glyphicon glyphicon-ok"> Entrar</span>
                        
                    </button>
                    
                    <!--<a href="formusuario.php">
                    <button type="button" class="btn btn-lg btn-link"> 
                        Ainda não sou cadastrado
                    </button>  
                    </a>-->
                </form>      
                </div>
            </div>
        </div>
        
  
        <?php 
        //include 'rodape.html'
        ?>
    </body>
</html>