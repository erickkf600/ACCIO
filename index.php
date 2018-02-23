<?php
  include "login.php";
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="css/layout.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <title>ACCIO</title>
  </head>
  <body>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="far fa-sort-up"></i></button>
    <nav class="navbar navbar-expand-lg navbar-danger bg-warning">
  <a href="index.php">
      <img class="navbar-brand" src="css/logo.png" alt="logo"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        </li>
    </ul>
        <div class="search">
          <form>
            <input type="text" name="search" placeholder="Pesquisar">
          </form>
        </div>

        <div class="user">
        <span class="traco"></span>    
            <i class="fas fa-user-circle" data-toggle="modal" data-target="#myModal" href="#"></i>
            <a  href="cadastro.php"><i class="fas fa-user-plus" style="color: #000;"></i></a>
            <a  href="carrinho.php"><i class="fas fa-shopping-cart" style="color: #000;"></i></a>
        </div>          

  <li id="respons" class="nav-item">
      <a class="btn outline btn-block" data-toggle="modal" data-target="#myModal" href="">Login</a>
  </li>

   <li id="respons" class="nav-item">
      <a class="btn outline btn-block" href="cadastro.php">Cadastrar-se</a>
  </li>


  <div class="pesq">
    <form>
      <input type="text" name="search" placeholder="Pesquisar">
    </form>
  </div>        
 </div>
</nav>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="categoria/celulares.php">Smartphones</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="categoria/informatica.php">Informática</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="categoria/eletronicos.php">Eletrônicos</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="categoria/games.php">Games</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="categoria/livros.php">Livros</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="categoria/moda.php">Moda</a>
    </li>
  </ul>
</nav>

<div class="menu">
  <div>
   <button class="btn btn-dark btn-lg btn-block" type="button" data-toggle="modal" data-target="#catagorias">Categoria</button>
    <div class="modal fade" id="catagorias">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

         <div class="modal-body">

          <a href="celulares.php"><button class="btn btn-default btn-lg btn-block ">Smartphones</button></a>
          <a href="informatica.php"><button class="btn btn-default btn-lg btn-block">Informática</button></a>
          <a href="eletronicos.php"><button class="btn btn-default btn-lg btn-block">Eletrônicos</button></a>
          <a href="games.php"><button class="btn btn-default btn-lg btn-block">Games</button></a>
          <a href="livros.php"><button class="btn btn-default btn-lg btn-block">Livros</button></a>
          <a href="moda.php"><button class="btn btn-default btn-lg btn-block">Moda</button></a>

        </div>
        
      </div>
    </div>
  </div>
        
  </div>
  </div>
    <div>
    <?php
      include "conteudo.php";
    ?>
</div>
</body>


<hr> 
</div>  

<footer>
  <?php
    include "footer.inc";
  ?>
</footer>

  
    <script type="text/javascript" src="js/index.js"></script>


    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="
    sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  

  </body>
</html>
