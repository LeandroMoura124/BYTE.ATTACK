
<style>
        .subscribe{
            margin-top: 200px;
            padding: 40px 20px;
            background-color: #013f7e ;
            position: relative;
            box-shadow: 0 0 20px 7px rgba(0, 0, 0, 0.2);
        }
        .subscribe h3{
            font-size: 25px;
        }
        .subscribe p{
            font-size: medium;
        }
        
        .subscribe h3, .subscribe p{
            color: #fff;
        }
        .subscribe .form-group{
            border-radius: 20px;
            background: #fff;
            max-width: 700px;
            margin: 10px auto;
            padding: 15px;
            height: 120px;
            
        }
        .subscribe .form-control{
            border: none;
            box-shadow: none;
            font-size: 20px;
            background: transparent;
            color: blue;
        }
        .subscribe .form-control:focus{
            box-shadow: none;
           
        }
        
        .subscribe .input-group-append{
            background-image: linear-gradient(to right, #0e0d13, #135dfc);
            font-size: medium;
            width: 150px;
            border-radius: 30px;
            margin-left: 42%;
            
            
        }
        .subscribe .input-group-text{
            background:transparent;
            border: none;
            color: #fff;
            margin-left: 33%;
            
            
        }
        .subscribe .btn:focus{
          box-shadow: none;
          
        }

        @media (max-width:600px){
            .subscribe{
                margin-top: 300px;
                padding: 40px 30px;
            }
            .subscribe .input-group-append{
            
                margin-left: 30%;
                
                
            }
        }
</style>



<!--Envie uma mensagem-->

<?php
	include 'Conexao.php';




?>
<body>
    
<section class="subscribe">
        <div class="container">
            <div class="subscribe text-center">
            <form method="post" action="inserirmensagem.php"  name="">
                <h3>Envie-nos seu e-mail abaixo!</h3>
                <p>Informe-nos seu email se deseja contratar nossos serviços ou trabalhar conosco! Entraremos em contato.</p>
               
                <div class="form-group">
                    <label for="email"></label>
                    <input name="txtemail" type="email" class="form-control" required id="email" placeholder="Email">
                </div>
            
             
                <div class="input-group-append">
                    <button type="submit" class="input-group-text btn" style="font-size: 15px;">Enviar</button>
                </div>
                </div>
               
            </form>    
            </div>  


          
        </div>
    </section>


</body>
</html>