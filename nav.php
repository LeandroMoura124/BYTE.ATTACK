<nav class="navbar navbar-expand-sm navbar-light bg-white">
  <img src="images/LogoByte.jpeg" width="220px" alt="">
  <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
      aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavId">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="padding-left: 10px;">
      <li class="nav-item active">
        <a class="navbar-brand" href="index.php#myCarousel" style="padding-left:20px;" style="height:100px">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="navbar-brand" href="index.php#welcome">Sobre nós</a>
      </li>
      <li class="nav-item dropdown">
        <a class="navbar-brand dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Serviços</a>
        <div class="dropdown-menu" aria-labelledby="dropdownId">
          <a class="dropdown-item  navbar-brand" href="index.php#services">Designer</a>
          <a class="dropdown-item navbar-brand" href="index.php#services">Front-end</a>
        </div>
      </li>
    </ul>
    <!--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->
    <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php#footer" style="padding: 10px;" class="navbar-brand"><span class="glyphicon glyphicon-envelope" style="padding-top: 6px;"> Contato</a></li>


        <?php if(empty($_SESSION['ID'])) { ?>
		    <li><a href="formlogon.php" class="navbar-brand"><span class="glyphicon glyphicon-user" style="padding-top: 0px;"> Logon</a></li>
        <?php } else {
      if($_SESSION['Status']==0){
        $consulta_usuario = $pdo->query("select nm_usuario from tbl_usuario where cd_usuario = '$_SESSION[ID]' ");
        $exibe_usuario = $consulta_usuario->fetch(PDO::FETCH_ASSOC);
          ?>
       		<li><a href="#" class="navbar-brand"><span class="glyphicon glyphicon-user"> <?php echo $exibe_usuario['nm_usuario'];?></a></li>
          <li><a href="sair.php" class="navbar-brand"><span class="glyphicon glyphicon-log-out"> Sair</a></li>
        <?php } else {?>
          <li><a href="adm.php"><button class="btn btn-sm btn-danger">Administrador</button></a></li>
          <li><a href="sair.php"><span class="glyphicon glyphicon-log-out"> Sair</a></li>
        <?php } }?>
  </ul>
  </div>
</nav>