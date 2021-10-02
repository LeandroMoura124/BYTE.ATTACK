
<nav class="navbar navbar-default" >
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">BYTE.ATTACK</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" style="position: left;">
        <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="lancamento.php">Sobre nós</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Serviços <span class="caret"></span></a>
          <ul class="dropdown-menu">
		        <li><a href="categoria.php?cat=Design">Front-End</a></li>
            <li><a href="categoria.php?cat=Infraestrutura">Back-End</a></li>
            <li><a href="categoria.php?cat=Dados">Designer</a></li>
            <li><a href="categoria.php?cat=Front-end">Desenvolvedor Java</a></li>
			      <li><a href="categoria.php?cat=Mobile">Contato</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar...">
        </div>
        <button type="submit" class="btn btn-default" >Pesquisar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Contato</a></li>


        <?php if(empty($_SESSION['ID'])) { ?>
		    <li><a href="formlogon.php"><span class="glyphicon glyphicon-log-in"> Logon</a></li>
        <?php } else {
      if($_SESSION['Status']==0){
        $consulta_usuario = $pdo->query("select nm_usuario from tbL_usuario where cd_usuario = '$_SESSION[ID]' ");
        $exibe_usuario = $consulta_usuario->fetch(PDO::FETCH_ASSOC);
          ?>
       		<li><a href="#"><span class="glyphicon glyphicon-user"><?php echo $exibe_usuario['nm_usuario'];?> Logon</a></li>
          <li><a href="sair.php"><span class="glyphicon glyphicon-log-out"> Sair</a></li>
        <?php } else {?>
          <li><a href="adm.php"><button class="btn btn-sm btn-danger">Administrador</button></a></li>
          <li><a href="sair.php"><span class="glyphicon glyphicon-log-out"> Sair</a></li>
        <?php } }?>
  </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<script>
  
    
</script>