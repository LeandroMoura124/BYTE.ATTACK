<?php 

    $localhost = "localhost";
    $user = "LeoByteAttack";
    $passw = "ByteAttack123";
    $banco = "ByteAttack";
    

    //orientada a objetos com PDO

    $pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $passw);
    $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   $sql  = $pdo->query("SELECT*FROM tbl_usuario");
    //$sql->execute();

    /*echo $sql->rowCount();*/

?>