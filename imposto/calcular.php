<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="icon" type="image/png" href="./imagem/MONEY.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


<title>Calcular</title>

</head>
<body>
<nav>
	<img class="logo" src="./imagem/MONEY.png" width="115" height="110" alt="Logo da Empresa">
	<ul>

		<li><a href="./index.html" target="-blank" rel="external">Home</a></li>
		<li><a href="./calcular.php" target="-blank" rel="external">Calcular</a></li>
		<li><a href="./sobre.html" target="-blank" rel="external">Sobre</a></li>
	</ul>
</nav>
<main>
<div class="wrapp">

<h1 class="text-center"> Calculando o Imposto de Renda </h1>

<form name="IRRF" action="" method="POST">

	<table class="table table-striped table-hover">

		<br><br><br><br>


		<div class="row">

			<div class="col-sm-5">

			</div>

			<div class="col-sm-2">

				<label for="salario" class="form-label">Digite o seu salário:</label>

				<input type="text" class="form-control" id="s" name="s"/>  

			</div>

			<div class="col-sm-5">

			</div>
		   

			<div class="row">

			<div class="col-sm-5">

			</div>

			<div class="col-sm-2">

				<br/>

				<hr class="text-center">
				&nbsp;&nbsp;&nbsp;
				<button type="submit" class="btn btn-light" name="cal">Calcular</button>

				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


				<button type="submit" class="btn btn-light" name="lim">Limpar</button>
				

			</div>

			<div class="col-sm-5">

			</div>

		</div>

	</table>

	<?php
	if(isset($_POST["cal"])){
	
	$s = $_POST["s"];
	
	$descontoP = 0;
	
	 $resultado=0;
	
	//calculando o desconto
	
	 if($s <= 1903.98){
	
	 }
	 else if($s>= 1903.99 && $s<= 2826.65){
	 $desconto = 7.5 / 100;
	 $resultado= $desconto*$s;
	
	}
	else if($s >= 2826.66 && $s<= 3751.05){
	$desconto = 15 / 100;
	$resultado= $desconto*$s;
	
	 }
	else if($s >= 3751.06 && $s<= 4664.68){
	$desconto = 22.5 / 100;
	 $resultado= $desconto*$s;
	 }
	 else{
	$desconto = 27.5 / 100;
	$resultado= $desconto*$s;
	 }
	 }
	
	 ?>
	
	<div class="row">
	
	 <div class="col-sm-4"></div>
		
		 <div class="col-sm-4">
			
		
		 <table class="table table-dark table-hover">
		
		<tr>
		
		<td>Salario Bruto</td>
		
		<td>Desconto</td>
		
		 <td>Resultado</td>
		
		 </tr>
		
	   <tr>
		
		 <td><?php echo $s; ?></td>
		
		<td><?php echo $desconto; ?></td>
		
		<td><?php echo $resultado; ?></td>
		
		</tr>
		
	   </table>
		
		 </div>
		
		 <div class="col-sm-4"></div>
		</div>
		<div class="col-sm-4">
		</div>

<style>
@import url('https://fonts.googleapis.com/css2?family=Carlito:ital,wght@1,700&family=Poppins:wght@200;400&family=Roboto+Condensed&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Carlito:ital,wght@1,700&family=Poppins:wght@200&family=Roboto+Condensed&display=swap');

		/* Body styles */
body {
	background-image: linear-gradient(to top,black  25%, #2a2a2a 100%);;
	background-repeat: no-repeat;
    background-size: cover;
	font-family: Arial, sans-serif;
	margin: 0;
	padding: 0;
	
}



/* Navigation styles */
nav {
	background-color: rgb(255, 255,255, 0);
	padding: 10px;
	font-family: 'Poppins', sans-serif ;
}

nav ul {
	list-style: none;
	margin-top: 25px;
	padding: 0;
	background-color: rgb(255, 255,255, 0);
	display: flex;
	justify-content: flex-end;
	float: right;
	margin-right: 5px;

}


nav li {
	display: inline-block;
	margin: 5px;
}

nav a {
	background-color: rgb(255, 255,255, 0);
	color: #fff;
	text-decoration: none;
	padding: 5px 10px;
}

nav a:hover {
	background-color: #83818100;
	color: #fff;
}


/* Main content styles */
main {
	padding: 20px;
}


.about{
	color:#fff;
	font-size: xx-large;
display: flex;
justify-content: center;
}	
.p1{
	color: white;
}

.logo{
	margin-top: -30px;
margin-right: 10px;}
h1{	
font-family: 'Roboto Condensed', sans-serif;
color: #fff;}

.form-label{
	font-family: 'Poppins', sans-serif ;
	color: #fff;
	display:flex;
	justify-content:center;


}


td{
	font-family: 'Poppins', sans-serif ;
color: #fff;
}
button{
	font-family: 'Poppins', sans-serif ;
color: #fff;
text
}

.fab {
  font-family: "Font Awesome 5 Brands";
  font-weight: 400;
}

.footer{
	position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 250px; 
        background-color: #000;
        text-align: center;
}



.footer.footer.container{
    display: grid;
    grid-template-columns: repeat(4, 1fr);
}

.contato{
	display: flex;
	justify-content: center;
}



h4{
	font-size: x-small;
}
.texto-copy{
	display: flex;
	justify-content: center;
}

.social-icons{
  display: flex;
  justify-content:center;
  margin-top:190px;
}

.social-icons a {
  display: inline-block;
  margin-right: 10px;
  color: #fcfcfc;
  font-size: 20px;
}

.social-icons a:hover {
  color: #333;
}

.social-icons i {
  line-height: 1;
}

</style>



	   <footer class="footer">
    <div class="container">
        

		<br>
		<div class="social-icons">
			
			<a href="https://www.instagram.com/moneymind.fgj/" target="_blank">
			  <i class="fab fa-instagram"></i>
			</a>
			<a href="mailto:info@example.com?&subject=&cc=&bcc=&body=moneymind.fgj@gmail.com%0A " target="_blank">
			  <i class="fas fa-envelope"></i>
			</a>
		  </div>

    </div>

   </footer>
</body>
</html>
