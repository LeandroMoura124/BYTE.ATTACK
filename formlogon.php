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
 <!--   <script src="https://kit.fontawesome.com/a076d05399.js"></script>-->
    
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        
    <style type="text/css">
    @import "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
	.navbar{
		margin-bottom:0px;
        
		
    }
    .navbar img{
		margin-left: 30px;
    }
   body {
        margin: 0;
        padding: 0;
        background:  url(images/david-monje-SdeodksvYwE-unsplash.jpg) no-repeat;
        background-size: cover;
    }
    .login-box{
        width: 550px;
        height: 500px;
        border: 2px solid #00BFFF;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;

    }
    .login-box img{
        height: 105px;
        padding: 30px 10px 10px 300px;
        display: inline;
        top: 20px;
    }
    .login-box h1{
        float: left;
        margin-left: 20px;
        font-size: 40px;
        border-bottom: 6px solid #00BFFF;
        margin-bottom: 50px;
        padding: 13px 0;
    }
    .textbox{
        width: 90%;
        overflow: hidden;
        font-size: 20px;
        padding: 10px 0;
        margin: 8px 0;
        margin-bottom: 20px;
        margin-left: 10px;
        border-bottom: 1px solid #00BFFF;
    }
    .textbox i{
        border: none;
        outline: none;
        background: none;
        color: white;
        font-size: 18px;
        width: 80%;
        float: left;
        margin: 10px;
    }
    .btn{
        width: 90%;
        margin-left: 25px;
        margin-bottom:-100px ;
        background: none;
        border: 2px solid #00BFFF;
        color: white;
        padding:5px;
        font-size: 18px;
        cursor: pointer;
    }
    .btn:hover{
        background: #fff;
        color: #00BFFF;
    }
  
    </style>
        
    
    <body>
    <?php
        
        include 'Conexao.php';	
        include 'nav.php';
        //include 'cabecalho.html';
        
    ?>
       
   
       
        <div class="login-box">
                <h1>Login</h1>
                <img src="images/user.png" alt="">
                <form name="frmusuario" method="post" action="validausuario.php">
                    <div class="textbox">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input name="txtemail" type="email" class="form-control" required id="email" placeholder="Email">
                    </div>
                    
                    <div class="textbox">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input name="txtsenha" type="password" class="form-control" required id="senha" placeholder="Senha">
                    </div>
                            
                   <input type="submit" class="btn" name="" value="Enviar">
                    <!--<a href="formusuario.php">
                    <button type="button" class="btn btn-lg btn-link"> 
                        Ainda não sou cadastrado
                    </button>  
                    </a>-->
                </form>      
        </div>
            
    
        
  
        <?php 
        //include 'rodape.html'
        ?>
    </body>
</html>