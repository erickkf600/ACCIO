<!DOCTYPE html>
<html>
<head>
	<title>ACCION</title>
</head>
<body>
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
      <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
      <link rel="stylesheet" href="css/layout.css">
      <link rel="stylesheet" href="css/slider.css">
      <link rel="stylesheet" href="css/vitrine/docs.theme.min.css">
      <link rel="stylesheet" href="css/vitrine/owl.carousel.min.css">
      <link rel="stylesheet" href="css/vitrine/owl.theme.default.min.css">
      <link rel="stylesheet" href="css/logo/docs.theme.min.css">
      <link rel="stylesheet" href="css/logos/owl.carousel.min.css">
      <link rel="stylesheet" href="css/logos/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="js/jquery.min.js"></script>
      <script src="js/owl.carousel.js"></script> 
   </head>
   <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="rocket.png"></button>
      <nav class="navbar navbar-expand-lg navbar-danger bg-warning">
         <a href="index.php">
         <img class="navbar-brand" src="css/logo.png" alt="logo"></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span><i class="fas fa-bars"></i></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item">
               </li>
            </ul>
            <div>
               <form class="search">
                  <input type="text" name="search" placeholder="Pesquisar">
               </form>
            </div>
            <div class="user">
               <span class="traco"></span>    
                <?php
                  if (empty($_SESSION['usuario'])){
                     echo "login";
             }else{
               $nome = $_SESSION['usuario'];
               echo "$usuario";
             }
             ?>   
             <i class="fas fa-user-circle" data-toggle="modal" data-target="#myModal" href="#"></i>   
               <a  href="cadastro.php"><i class="fas fa-sign-in-alt" style="color: #000;"></i></a>
               <a  href="favoritos.php"><i class="far fa-heart" style="color: #000;"></i></a>
               <a  href="carrinho.php"><i class="fas fa-shopping-cart" style="color: #000;"></i></a>
            </div>
            <li id="respons" class="nav-item">
               <a class="btn btn-dark btn-block" data-toggle="modal" data-target="#myModal" href="">Login</a>
             </li>
            <li id="respons" class="nav-item">
               <a class="btn btn-dark btn-block" href="cadastro.php">Cadastrar-se</a>
            </li>
            <div class="pesq">
               <form>
                  <input type="text" name="search" placeholder="Pesquisar">
               </form>
            </div>
         </div>
      </nav>
         <nav id="sticky" class="navbar navbar-expand-sm bg-dark navbar-dark">
          <ul class="navbar-nav">
            <li class="nav-item">
       <li><a class="nav-link" href="#" id="navbardrop">Meus Pedidos</a></li>
       <li><a class="nav-link" href="#" id="navbardrop">Alterar Cadastro</a></li>
       </li>
 	   </ul>
     </nav>
      <footer>
      <?php
         include "footer.inc";
         ?>
     </footer>
         <script type="text/javascript" src="js/index.js"></script>
         <script type="text/javascript" src="js/logos.js"></script>
         <script type="text/javascript" src="js/vitrine.js"></script>

         <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>