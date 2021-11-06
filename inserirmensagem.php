<?php 
    include 'Conexao.php';


    //session_start(); // iniciando uma sessão
   

    $text = $_POST['txttext']; 
  


    //echo $Vemail.'<br>';
    //echo $Vsenha.'<br>';

        $incluir = $pdo->query("
             insert into tbtext(txt_text)
             Values             ('$text')");
            
            header('location:index.php');
         
?>