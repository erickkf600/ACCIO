<?php  
   include "header.php";
   include "banco.php";
?>
<!DOCTYPE html>
<html>
   <head>
      <title></title>
   </head>
   <body>
      <link rel="stylesheet" href="css/layout.css">
      <div id="myTab" class="nav-pills nav justify-content-center scrollmenu">
         <a href="perfil.php" class="tablink"><i class="fas fa-user-circle fa-lg"></i> MINHA CONTA</a>
         <a href="pedidos.php" class="tablink"><i class="fas fa-archive fa-lg"></i> MEUS PEDIDOS</a>
         <a href="problemas.php" class="tablink"><i class="fas fa-exclamation-triangle fa-lg"></i> INFORMAR PROBLEMAS</a>
         <a href="config.php" class="tablink"><i class="fas fa-cog fa-lg"></i> CONFIGURAÇÕES</a>
         <a href="destroys.php" class="tablink"><i class="fas fa-sign-out-alt fa-lg"></i> SAIR</a>
      </div>
      <!-- menu mobile -->
      <div id="myTab2" class="nav-pills nav justify-content-center scrollmenu">
         <a href="perfil.php" class="tablink"><i class="fas fa-user-circle fa-lg"></i></a>
         <a href="pedidos.php" class="tablink"><i class="fas fa-archive fa-lg"></i></a>
         <a href="problemas.php" class="tablink"><i class="fas fa-exclamation-triangle fa-lg"></i></a>
         <a href="config.php" class="tablink"><i class="fas fa-cog fa-lg"></i></a>
      </div>
      <div class="container mt-5" id="content" style="background-color: #efefef;box-shadow:0px 0px 200px #c4c4c4; padding: 20px;border-radius: 15px">
         <div class="col-md-12">
            <div id="logbox">
               <form  method="post" action="atualizarcadastro.php">
                  <?php 
                     $query = "select * from login limit 1";
                     $consulta = mysqli_query($con, $query);
                     while($f = mysqli_fetch_assoc($consulta)){
                        $id = $f['id'];
               ?>
                  <input type="hidden" name="id" value="<?php echo $id ?>">
                  <h1 class="font-weight-bold mb-5">Informações de Contato</h1>
                  <div class="input-group mb-4">
                     <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Email</span>
                     </div>
                     <input type="email" class="form-control input pass" name="email" value="<?php echo $f['email']; ?>">
                  </div>
                  <div class="input-group mb-4">
                     <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Nome</span>
                     </div>
                     <input type="text" class="form-control input pass" name="nome" value="<?php echo $f['nome']; ?>">
                  </div>
                  <div class="input-group mb-4">
                     <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Telefone Fixo</span>
                     </div>
                     <input type="number" class="form-control input pass" name="telefoneFixo" value="<?php echo $f['telefoneFixo']; ?>">
                  </div>
                  <div class="input-group mb-4">
                     <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Telefone Móvel</span>
                     </div>
                     <input type="number" class="form-control input pass" name="telefoneCel" value="<?php echo $f['telefoneCel']; ?>">
                  </div>
                  <hr>
                  <h1 class="font-weight-bold">Informações de Envio e Cobrança</h1>
                  <div class="form-row">
                     <div class="form-group col-md-10">
                        <label for="inputAddress">Endereço</label>
                        <input type="text" name="endereco" class="form-control" value="<?php echo $f['endereco']; ?>">
                     </div>
                     <div class="form-group col-md-2">
                        <label for="inputCity">Número</label>
                        <input type="number" name="numero" class="form-control" id="inputCity" value="<?php echo $f['numero']; ?>">
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="inputAddress2">Cidade</label>
                     <input name="cidade" type="text" value="<?php echo $f['cidade']; ?>" class="form-control">
                  </div>
                  <div class="form-row">
                     <div class="form-group col-md-5">
                        <label for="inputCity">Bairro</label>
                        <input name="bairro" type="text" class="form-control" value="<?php echo $f['bairro']; ?>" id="inputCity">
                     </div>
                     <div class="form-group col-md-4">
                        <label for="inputCity">Estado</label>
                        <input type="text" name="estado" value="<?php echo $f['estado']; ?>" class="form-control" id="inputCity">
                     </div>
                     <div class="form-group col-md-3">
                        <label for="inputZip">CEP</label>
                        <input type="text" name="cep" value="<?php echo $f['cep']; ?>" class="form-control" id="inputZip">
                     </div>
                  </div>
                  <hr>
                  <h1 class="font-weight-bold mb-4">Informações Pessoias</h1>
                  <div class="form-row">
                     <div class="form-group col-md-4">
                        <label for="inputCity">Usuário</label>
                        <input type="text" class="form-control" name="usuario" value="<?php echo $f['usuario']; ?>" id="inputCity">
                     </div>
                     <div class="form-group col-md-4">
                        <label for="inputCity">CPF</label>
                        <input type="text" class="form-control" name="cpf" value="<?php echo $f['cpf']; ?>" id="inputCity">
                     </div>
                     <div class="form-group col-md-4">
                        <label for="inputZip">Nascimento</label>
                        <input type="date" class="form-control" name="dataNasc" value="<?php echo $f['dataNasc']; ?>" id="inputZip">
                     </div>
                  </div>
                  <div class="text-center">
                     <input type="submit" value="Atualizar" class="inputButton">
                  </div>
                  <?php } ?>
               </form>
            </div>
         </div>
         <!--col-md-6-->
         <div class="col-md-12 mt-5">
            <div id="logbox">
               <form id="signup" method="post" action="mudasenha.php">
                  <h1 class="font-weight-bold">Mudar Senha</h1>
                  <div class="input-group mb-3">
                     <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Senha atual</span>
                     </div>
                     <input type="password" class="form-control input pass" name="email" required>
                  </div>
                  <div class="input-group mb-3">
                     <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Nova Senha</span>
                     </div>
                     <input type="password" class="form-control input pass" name="nome" required>
                  </div>
                  <div class="input-group mb-3">
                     <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Repita a Senha</span>
                     </div>
                     <input type="password" class="form-control input pass" name="telefoneFixo" required>
                  </div>
                  <div class="text-center">
                     <input type="submit" value="Atualizar Senha" class="inputButton">
                  </div>
               </form>
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