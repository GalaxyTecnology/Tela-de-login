<?php
session_start();
include('verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Sistema FBR Digital</title>
    <link rel="stylesheet" href="css/stylepainel.css">
</head>
<body>  
       
        <div class="search-box">
                <input type="text" class="search-text" placeholder="Pesquisar...">
                <a href="" > <img src="/img/loupe-blue.svg" alt="Lupa" width="25px" height="25px">               
                </a>
        </div>
        <div class="cabeca"><h2 class="upper"> Olá, <?php echo $_SESSION['usuario'];?></h2>  </div>
        <input type="checkbox" id="check">
        <label for="check" id="icone"><img src="img/icone_menu.png"/></label>
            <div class="barra">	
        
	            <nav>
		            <a href=""><div class="link">Início</div></a>
		            <a href=""><div class="link">Consulta</div></a>
		            <a href=""><div class="link">Cadastro</div></a>
		            <a href=""><div class="link">Relatórios</div></a>
		            <a href="logout.php" ><div class="link">Sair</div></a>
	            </nav>	
            </div>
    
       
                
        


</body>
</html>