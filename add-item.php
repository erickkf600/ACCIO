<?php
  include "login.php";
session_start();
  if(empty($_SESSION['email']) and empty($_COOKIE['email'])){
   header("Location:index.php"); 
 }else{
    if(isset($_SESSION['email'])){
      $email = $_SESSION['email'];
    }
    if(isset($_COOKIE['email'])){
      $email = $_COOKIE['email'];
    }
    if($email != 'adm@adm.com'){
      header("Location:index.php"); 
    }
 }
?>
    <!doctype html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
        <link rel="icon" href="/favicon.ico">
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="css/layout.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- editor de texto -->
        <script src="//cdn.ckeditor.com/4.9.0/full/ckeditor.js"></script>

        <title>ACCIO</title>
    </head>

    <body style="background-image:url(fundo2.jpg);">
        <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="rocket.png"></button>
        <a href="funcionarios.php">
            <header class="btn btn-warning" style="width: 100%;">
                <img class="logo" src="css/LOGO.png" alt="logo">
            </header>
        </a>
        <div class="container mt-5" id="funcionario">

            <h2 class="mb-4">Cadastrar Produto</h2>
            <form method="post" action="add.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="inputAddress" id="label">Título do Anúncio</label>
                    <input type="text" maxlength="43" name="titulo" class="form-control" required>
                </div>
                <div class="form-row mt-4">
                    <div class="col-md-4">
                        <label for="inputAddress" id="label">Código ID</label>
                        <input type="number" min="0" name="codigo" class="form-control" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label id="label">Categoria</label>
                        <select required name="categoria" class="form-control">
                            <option disabled selected>Selecione</option>
                            <option value="informatica">Informática</option>
                            <option value="eletronicos">Eletrônicos</option>
                            <option value="games">Games</option>
                            <option value="leitura">Leitura</option>
                            <option value="vestuario">Vestuário</option>
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label id="label">Sub-Categoria</label>
                        <select required name="subcategoria" class="form-control">
                            <option disabled selected>Selecione</option>
                            <!-- Informática -->
                            <option value="hardwere">Hardwere</option>
                            <option value="perifericos">Perifericos</option>
                            <option value="computadores">Computadores</option>
                            <option value="notebooks">Notebooks</option>
                            <option value="acessorios">Acessorios</option>

                            <!-- Eletrônicos -->
                            <option value="samartphones">Smartphones</option>
                            <option value="smartwaches">Smartwaches</option>
                            <option value="drones">Drones</option>
                            <option value="componentes">Componentes</option>

                            <!-- Games -->
                            <option value="consoles">Consoles</option>
                            <option value="jogos">Jogos</option>
                            <option value="acessorios-games">Acessórios</option>

                            <!-- Leitura -->
                            <option value="hqs">HQs</option>
                            <option value="mangas">Mangás</option>
                            <option value="livros">Livros</option>
                            <option value="ebooks">E-books</option>

                            <!-- Vestuário -->
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                            <option value="calcados">Calçados</option>
                            <option value="acessorios-vest">Acessórios</option>
                        </select>
                    </div>

                </div>

                <div class="form-row mt-4">
                    <div class="col-md-4">
                        <label for="inputAddress" id="label">Preço</label>
                        <input name="preco" type="text" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label for="inputAddress" id="label">Quantidade em Estoque</label>
                        <input name="estoque" type="number" min="0" class="form-control" required>
                    </div>
                </div>

                <label id="label">Detalhes</label>
                  <small class="form-text text-muted mb-2">Descrevra todas as caracteristicas do produto.</small>
                    <textarea rows="5" name="detalhes" id="editor1"></textarea>

                <label  id="label">Conteudo</label>
                  <small class="form-text text-muted mb-2">Descrevra os itens inclusos com o produto.</small>
                    <textarea rows="5" name="conteudo" id="editor2"></textarea>


                  <div class="col-md-4 mt-5">
                    <label for="foto">Adicionar Foto</label>
                    <input type="file" name="arquivo" id="foto" accept="image/jpeg, image/png, image/jpg"/ multiple>
                </div>

                <div class="text-center">
                    <input type="submit" value="Cadastrar Produto" class="inputButton">
                </div>
            </form>
        </div>

    <!-- EDITOR DE TEXTO -->
    <script>
        CKEDITOR.replace('editor1');
        for (var i = 0; i < brandImg.length; i++) {
            if (window.CP.shouldStopExecution(1)) {
                break;
            }
            ckEdiloop.addEventListener("click", function(el) {
                ckEdImg = '<p><img src="' + this.src + '" /></p>';
                CKEDITOR.instances['editor1'].insertHtml(ckEdImg)
            });
        }
    </script>

    <script>
        CKEDITOR.replace('editor2');
        for (var i = 0; i < brandImg.length; i++) {
            if (window.CP.shouldStopExecution(1)) {
                break;
            }
            ckEdiloop.addEventListener("click", function(el) {
                ckEdImg = '<p><img src="' + this.src + '" /></p>';
                CKEDITOR.instances['editor1'].insertHtml(ckEdImg)
            });
        }
    </script>
        <script type="text/javascript" src="js/index.js"></script>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <footer class="pt-5 mt-5" style="background: #d6d6d6;border-top: 1px solid #DDDDDD; padding-bottom: 4%;"></footer>

        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>

    </html>