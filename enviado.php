<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<?php 

	$nome= $_GET['nome']; 
	$data= $_GET['outra_data'];
	$sexo= $_GET['sexo'];
	$cpf= $_GET['cpf'];
	$rg= $_GET['rg'];
	$cartao= $_GET['cartao'];

	 ?>

	 <style type="text/css">
	 	span.form{
	 		color: #5c5b5f;
	 		font-family: Verdana;
	 		font-size: 10pt;
	 	}
	 	p{
	 		text-align: center;
	 		color: #414740;
	 		font-family: Verdana;
	 		font-size: 14pt;
	 	}
	 	a{
			position: relative;
			top: 15px;
			color:#004c7b;
			font-family: verdana;
			font-size: 17pt;
		}
		h3{
			text-align: center;
	 		color: #414740;
	 		font-family: Verdana;
	 		font-size: 17pt;	
		}
	 </style>
</head>
<body>
	<?php 

		echo"<span class='form'>
			<h3>Nome:</h3> <p>$nome</p> 
			<h3>Data de nascimento:</h3> <p>$data</p> 
			<h3>Sexo:</h3> <p>$sexo</p> 
			<h3>CPF:</h3> <p>$cpf</p>  
			<h3>RG:</h3> <p>$rg</p> 
			<h3>Número do cartão:</h3> <p>$cartao</p> </span>";

	 ?>
	 <center><a href="E:/Site_Definitivo/index.html">Voltar a página inicial</a></center>
</body>
</html>