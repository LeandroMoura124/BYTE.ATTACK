
<!DOCTYPE HTML>
<html lang="pt-br"> <!-- indicando a linguagem que iremos usar no codigo html -->
<head>
<title>Minha Loja</title>
<meta charset="utf-8"> <!-- indicando o sistema de caractere utf-8 -->

<!--
	o nosso site será responsivo, para isto precisaremos usar uma metatag
	que irá conter informações da viewport(area que o site aparece no browser)
	Na viewport informaremos que a largura sera = a largura da janela
    do meu navegador (Browser), seja em um tablet ou celular.
 -->
<meta name="viewport" content="width=device-width,initial-scale-1">

<!-- CSS -->

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery livraria -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- JavaScript compilado-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
	.navbar{
		margin-bottom: 0px;
		background-color: #fff;
}
</style>

</head>

<body>
	<!--A funcionalidade do uso "include", tem como finalidades chamar um arquivo atraves de outro. EX - Coloquei minha nav-bar em outro arquivo e chamei pelo código include 'nav.php'-->
	<?php 
	// Chamando outros componentes
	session_start();
//	include 'conexao2.php';
	
	
    include 'nav.php';
    include 'banner.html';
	
	
	

	// Variavel $consulta vai receber variavel $cn que receberá resultado de uma query.
   // $consulta  = $pdo->query("select nm_livro, vl_preco, ds_capa, qt_estoque from vw_livro");

	?>

	


</body>
</html>

<script>

</script>

