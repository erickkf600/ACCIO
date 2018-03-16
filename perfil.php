<?php
  include "login.php";
 session_start();
?>
<!doctype html>
<html lang="pt-br">
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
      <link rel="shortcut icon" href="icone/nasa.png" type="image/x-icon" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="js/jquery.min.js"></script>
      <script src="js/owl.carousel.js"></script> 
      <title>ACCIO</title>
   </head>
   <body style="background-color: #efefef;">
      <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="rocket.png"></button>
      <nav class="navbar navbar-expand-lg navbar-danger bg-warning">
         <a href="index.php">
         <img class="navbar-brand" src="css/LOGO.png" alt="logo"></a>
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
                  <input type="search" name="search" placeholder="Pesquisar">
               </form>
            </div>
            <span id="login" class="navbar-text ml-5" style="font-size:1.2em;">
                <?php 
                if(empty($_SESSION['email']) and empty($_COOKIE['email'])){
                 ?>  
               <div class="dropdown">
            <i class="fas fa-user-circle fa-2x" data-toggle="dropdown"></i>
            <div class="dropdown-menu"> 
              <a class="dropdown-item btn-dark" data-toggle="modal" data-target="#myModal" href="#">Login</a>
                  <a class="dropdown-item btn-dark" href="cadastro.php">Cadastrar-se</a>
                  <?php 
                     }else{
                        if(isset($_SESSION['email'])){
                           $email = $_SESSION['email'];
                        }else{
                           $email = $_COOKIE['email'];
                        }
                   ?>
                  <div class="dropdown">
                     <p><?php echo $email ?> <i class='fas fa-sort-down'></i></p>
                  <div class="dropdown-menu" style="margin-left: 15%;">
                  <a class="dropdown-item btn-dark text-center" href="perfil.php#menu1">Minha Conta</a>
                  <a class="dropdown-item btn-dark text-center" href="perfil.php#menu2">Meus pedidos</a>
                  <a class="dropdown-item btn-dark text-center" href="destroys.php">Sair</a>
                  <?php 
                  }
                   ?>
            </div>
          </div>      
               </span> 

               <!-- Menu em Mobile -->
            <div class="user">  
               <a  href="perfil.php#home"><i class="fas fa-shopping-cart" style="color: #000;"></i></a>
            </div>
            </li>

               <?php              
                if (empty($_SESSION['email']) and empty($_COOKIE['email'])){ 
               ?>
              <li id="respons" class="nav-item">
                 <a class="btn btn-dark btn-block"  data-toggle="modal" data-target="#myModal" href="#">Login</a>
               </li>
              <li id="respons" class="nav-item">
                 <a class="btn btn-dark btn-block" href="cadastro.php">Cadastrar-se</a>
              </li>
            <?php 
            }else{
             ?>
            <li id="respons" class="nav-item">
               <a class="btn btn-dark btn-block" href="perfil.php#menu1">Minha Conta</a>
             </li>

            <li id="respons" class="nav-item">
               <a class="btn btn-dark btn-block" href="perfil.php#menu2">Meus pedidos</a>
            </li>

            <li id="respons" class="nav-item">
               <a class="btn btn-dark btn-block" href="destroys.php">Sair</a>
            </li>

            <?php 
            }
             ?>
            <div class="pesq">
               <form>
                  <input type="search" name="search" placeholder="Pesquisar">
               </form>
            </div>
         </div>
      </nav>
      <nav id="sticky" class="navbar navbar-expand-sm bg-dark navbar-dark">
         <ul class="navbar-nav">
            <li class="nav-item">
            <li class="nav-item dropdown">
               <a class="nav-link dropdown" href="#" id="navbardrop" data-toggle="dropdown">INFORMÁTICA</a>           
               <div class="dropdown-menu">
                  <a class="dropdown-item btn-dark" href="categorias/informatica/hardwere.php">Hardwere</a>
                  <a class="dropdown-item btn-dark" href="categorias/informatica/perifericos.php">Perifericos</a>
                  <a class="dropdown-item btn-dark" href="categorias/informatica/computadores.php">Computadores</a>
                  <a class="dropdown-item btn-dark" href="categorias/informatica/notebooks.php">Notebooks</a>
                  <a class="dropdown-item btn-dark" href="categorias/informatica/acessorios.php">Acessórios</a>
               </div>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown" href="#" id="navbardrop" data-toggle="dropdown">ELETRÔNICOS</a>           
               <div class="dropdown-menu">
                  <a class="dropdown-item btn-dark" href="categorias/eletronicos/smartphones.php">Smartphones</a>
                  <a class="dropdown-item btn-dark" href="categorias/eletronicos/smatwatches.php">Smartwatches</a>
                  <a class="dropdown-item btn-dark" href="categorias/eletronicos/drones.php">Drones</a>
                  <a class="dropdown-item btn-dark" href="categorias/eletronicos/componetes.php">Componentes</a>
               </div>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown" href="#" id="navbardrop" data-toggle="dropdown">GAMES</a>           
               <div class="dropdown-menu">
                  <a class="dropdown-item btn-dark" href="categorias/games/consoles.php">Consoles</a>
                  <a class="dropdown-item btn-dark" href="categorias/games/jogos.php">Jogos</a>
                  <a class="dropdown-item btn-dark" href="categorias/games/acessorios.php">Acessórios</a>
               </div>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown" href="#" id="navbardrop" data-toggle="dropdown">LEITURA</a>           
               <div class="dropdown-menu">
                  <a class="dropdown-item btn-dark" href="categorias/leitura/hqs.php">HQs</a>
                  <a class="dropdown-item btn-dark" href="categorias/leitura/mangas.php">Mangás</a>
                  <a class="dropdown-item btn-dark" href="categorias/leitura/livros.php">Livros</a>
                  <a class="dropdown-item btn-dark" href="categorias/leitura/ebooks.php">E-books</a>
               </div>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown" href="#" id="navbardrop" data-toggle="dropdown">VESTÚARIO</a>           
               <div class="dropdown-menu">
                  <a class="dropdown-item btn-dark" href="categorias/vestuario/masculino.php">Masculino</a>
                  <a class="dropdown-item btn-dark" href="categorias/vestuario/feminino.php">Feminino</a>
                  <a class="dropdown-item btn-dark" href="categorias/vestuario/calcados.php">Calçados</a>
                  <a class="dropdown-item btn-dark" href="categorias/vestuario/acessorios.php">Acessórios</a>
               </div>
            </li>
         </ul>
      </nav>
      <div class="menu">
         <div>
            <button class="btn btn-dark btn-lg btn-block" type="button" data-toggle="modal" data-target="#catagorias">Categorias</button>
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
      <div id="myTab" class="nav-pills nav justify-content-center scrollmenu">
          <a class="nav-link active" data-toggle="pill" href="#home">CARRINHO</a> 
          <a class="nav-link" data-toggle="pill" href="#menu1">INFORMAÇÕES DA CONTA</a>
          <a class="nav-link" data-toggle="pill" href="#menu2">MEUS PEDIDOS</a>
      </div>
                                <!-- menu mobile -->
      <div id="myTab2" class="nav-pills nav justify-content-center scrollmenu">
          <a class="nav-link active" data-toggle="pill" href="#home"><i class="fas fa-shopping-cart fa-2x"></i></a> 
          <a class="nav-link" data-toggle="pill" href="#menu1"><i class="fas fa-user-circle fa-2x"></i></a>
          <a class="nav-link" data-toggle="pill" href="#menu2"><i class="fas fa-archive fa-2x"></i></a>
      </div>

    <div class="tab-content text-center">
     <div id="home" class="container active tab-pane" style="margin-bottom: 12%;"><br>
      <h3 class="mb-5">Você Tem <?php echo "0" ?> Itens em seu Carrinho</h3>
      <a href="index.php" class="btn btn-outline-danger" style="text-decoration: none;">QUE TAL IR AS COMPRAS?
        <span class="ml-3"><i class="fas fa-shopping-bag"></i></span></a>

      <div class="container">
        <table id="cart" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th style="width:50%">PRODUTO</th>
                    <th style="width:10%">PREÇO</th>
                    <th style="width:8%">QUANTIDADE</th>
                    <th style="width:22%" class="text-center">SUBTOTAL</th>
                    <th style="width:10%">EXCLUIR</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <td data-th="Product">
                    <div class="row">

                      <div class="col-md-4 hidden-xs">
                        <img src="img/produtos/530.jpg" alt="item" class="img-fluid">
                      </div>

                        <div class="col-md-8">
                          <h6 class="text-center">Gabinete NZXT Phantom 530 - CA-PH530-W1</h6>
                        </div>

                    </td>

                    <td data-th="Preço">R$ 000.00</td>

                    <td data-th="Quantidade">
                      <input type="number" min="0" class="form-control text-center col-md-6" value="1">
                    </td>              
                    <td data-th="Subtotal" class="text-center">R$ 000.00</td>
                    <td class="actions" data-th="Exluir">
                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt fa-lg"></i></button>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                  <td colspan="4"><h5>Frete Estimado:</h5></td>
                  <td class="text-right"><b>R$ 000.00</b></td>                 
                </tr>  
                
                <tr>
                  <td colspan="4"><h5>Total:</h5></td>
                  <td class="text-right"><b>R$ 000.00</b></td>           
                </tr>

                <tr>
                  <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continuar Comprando</a></td>
                  <td colspan="2" class="hidden-sm-up"></td>
                  <td colspan="4">
                    <a href="#" onclick="window.open('https://www.paypal.com/signin?country.x=BR&locale.x=pt_BR','PayPal','  LEFT=10, WIDTH=770, HEIGHT=400');" class="btn btn-success btn-lg btn-block"">Finalizar <i class="fa fa-angle-right"></i></a>
                  </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div> 

    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Informações de sua conta</h3>
      <div class="container text-left col-md-8">
  <form method="post" action="resposta1.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Usuário</label>
      <input type="text" class="form-control" id="inputUser4" name="email" value="<?php echo "$usuario" ?>">
    </div>

    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" name="email" value="<?php echo "$email" ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" name="senha" value="<?php echo "$senha" ?>">
    </div>

    <div class="form-group col-md-6">
      <label for="inputEmail4">Nome</label>
      <input type="name" class="form-control" id="inputName4" name="nome" value="<?php echo "$nome" ?>">
    </div>

    <div class="form-group col-md-6">
      <label for="inputText4">Endereço</label>
      <input type="text" class="form-control" id="iinputText4" name="endereco" value="<?php echo "$endereco" ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputText4">CEP</label>
      <input type="text" class="form-control" id="iinputText4" name="cep" value="<?php echo "$cep" ?>">
    </div>

    <div class="form-group col-md-6">
      <label for="inputText4">Telefone Fixo</label>
      <input type="text" class="form-control" id="iinputText4" name="telresid" value="<?php echo "$telefoneFixo" ?>">
    </div>

    <div class="form-group col-md-6">
      <label for="inputText4">Celular</label>
      <input type="text" class="form-control" id="iinputText4" name="cel" value="<?php echo "$telefoneCel" ?>">
    </div>

    <div class="form-group col-md-6">
      <label  for="inputText4">CPF</label>
      <input readonly type="text" class="form-control" id="iinputText4" value="<?php echo "$cpf" ?>">
    </div>
          <?php 
        include "banco.php";
        $query = "select * from login";
        $consulta = mysqli_query($con, $query);

        while($l = mysqli_fetch_array($consulta)){
          $usuario      = $l['usuario'];
          $email        = $l['email'];
          $senha        = $l['senha'];
          $nome         = $l['nome'];
          $endereco     = $l['endereco'];
          $cep          = $l['cep'];
          $telefoneFixo = $l['telefoneFixo'];
          $telefoneCel  = $l['telefoneCel'];
          $cpf          = $l['cpf'];
          echo "<tr>
                 <td>$usuario</td>
                 <td>$email</td>
                 <td>$senha</td>
                 <td>$nome</td>
                 <td>$endereco</td>
                 <td>$cep</td>
                 <td>$telefoneFixo</td>
                 <td>$telefoneCel</td>
                 <td>$cpf</td>
                 </td>
                 </tr>";
               }
           ?>
  </div>
  </div>
  <button type="submit" class="btn btn-dark">Atualizar</button>
</form>
</div>

    <div id="menu2" class="container tab-pane fade" style="margin-bottom: 14%;"><br>
      <h3>LISTAGEM DAS SUAS ÚLTIMAS COMPRAS</h3>
      <div class="container">
        <table id="cart" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th>PEDIDO #</th>
                    <th>PRODUTO</th>
                    <th>DATA</th>
                    <th>USUÁRIO</th>
                    <th class="text-center">TOTAL DO PEDIDO</th>
                    <th>STATUS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <td><?php echo "#00000" ?></td>
                  <td><?php echo "#nomeprd" ?></td>
                  <td><?php echo "00/00/000" ?></td>
                  <td><?php echo "uuuuuuuuu" ?></td>
                  <td><?php echo "00" ?></td>
                  <td><?php echo "eeeeeeee" ?></td>
              </tr>
            </tbody>
        </table>
    </div>
    </div>
  </div>
</div>
  <hr>
   </div>  
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

