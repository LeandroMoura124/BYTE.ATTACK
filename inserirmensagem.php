<?php 
    include 'Conexao.php';


    //session_start(); // iniciando uma sessão
   

    $email = $_POST['txtemail']; 
  


    //echo $Vemail.'<br>';
    //echo $Vsenha.'<br>';



$consulta = $pdo->query("select ds_email from tbemail where ds_email='$email' ");
$exibe = $consulta ->fetch(PDO::FETCH_ASSOC);

if($consulta->rowCount() == 1){
    header('location:erro1.php');
}
else{
   $incluir = $pdo->query("
   insert into tbemail(ds_email)
   Values             ('$email')");
        
        header('location:index.php');
}

?>
         

