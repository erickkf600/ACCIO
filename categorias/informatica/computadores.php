<?php
  include "../menu.php";
  include "../../banco.php";
               /*************PAGINAÇÃO********************/
//Verificar se está sendo passado na URL a página atual, senao é atribuido a pagina 
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;

//Selecionar todos os itens da tabela
$resultado = "select * from produto";
$iten = mysqli_query($con, $resultado);

//Contar o total de itens
$total = mysqli_num_rows($iten);

//Seta a quantidade de itens por pagina
$quantidade_pg = 9;

//calcular o número de pagina necessárias para apresentar todos os itens
$num_pagina = ceil($total/$quantidade_pg);

//Calcular o inicio da visualizacao
$incio = ($quantidade_pg*$pagina)-$quantidade_pg;

//Selecionar os cursos a serem apresentado na página
$resultado = "select * from produto limit $incio, $quantidade_pg";
$iten = mysqli_query($con, $resultado);
$total = mysqli_num_rows($iten);
?>

    <body>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color: #e5e5e5">
                <li class="breadcrumb-item"><a href="../../index.php" class="text-dark">Inicio</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-dark">Informática</a></li>
                <li class="breadcrumb-item active" aria-current="page" class="text-dark">Computadores</li>
            </ol>
        </nav>

        <div class="container mt-3">
            
            <!-- PAGINAÇÃO -->
          <ul class="pagination">
          <?php
            $voltar = $pagina - 1;
            $proximo = $pagina + 1; 
          ?>
                      <!-- VOLTAR -->
          <?php if($voltar != 0){ ?>
            <li class="page-item"><a class="page-link text-dark" href="computadores.php?pagina=<?php echo $voltar; ?>">Voltar</a>
          <?php }else{ ?> 
            <span class="page-link text-dark">Voltar</span>
          <?php } ?>
            </li>  
                  <!-- ************* -->

                  <!-- NUMERAÇÃO DA PÁGINA -->
          <?php for($i = 1; $i < $num_pagina + 1; $i++){ ?>     
            <li class="page-item"><a class="page-link text-dark" href="computadores.php?pagina=<?php echo $i; ?>"><?php echo $i ?></a></li>
          <?php } ?>
                     <!-- ************* -->
          <?php if($proximo <= $num_pagina){ ?>           
            <li class="page-item"><a class="page-link text-dark" href="computadores.php?pagina=<?php echo $proximo; ?>">proximo</a></li>
          <?php }else{ ?>
            <a class="page-link text-muted">Proximo</a>
          <?php } ?>    
          </ul>
                    <!-- FIM DA PAGINAÇÃO -->

            <div class="row d-flex justify-content-center">
                <?php 
                while($f = mysqli_fetch_array($iten)){ 
                $preco = $f['preco'];
                $preco = number_format($preco, 2, ',','.');
        ?>
                <div class="col-xs-12 col-sm-12 col-md-4 mb-5">
                    <a href="../../produto.php?id=<?php  echo $f['idprod']; ?>" id="link">
                      <div class="card">
                        <img class="card-img-top" src="../../img/produtos/<?php echo $f['img']; ?>" width="100%" alt="card image">
                        <div class="card-body">
                          <b class="card-tex"><?php echo $f['titulo']; ?></b>
                            <p class="font-weight-normal">Avista: 
                              <span class="text-center text-danger font-weight-bold">R$ <?php echo $preco ?></span></p>
                              <p class="font-italic">Ou parcele em até 6x sem juros</p>
                        </div>
                        <div class="card-footer text-center">
                          <a class="btn btn-warning" href="../../carrinho.php?id=<?php  echo $f['idprod']; ?>">Comprar</a>
                          <button type="button" class="btn btn-outline-warning">Add Carinho 
                            <span><i class="fas fa-cart-plus"></i></span>
                          </button>
                        </div>
                      </div></a> 
                </div>
                <?php } ?>
            </div>
                      <!-- PAGINAÇÃO -->
                  <ul class="pagination">
                  <?php
                    $voltar = $pagina - 1;
                    $proximo = $pagina + 1; 
                  ?>
                              <!-- VOLTAR -->
                  <?php if($voltar != 0){ ?>
                    <li class="page-item"><a class="page-link text-dark" href="computadores.php?pagina=<?php echo $voltar; ?>">Voltar</a>
                  <?php }else{ ?> 
                    <span class="page-link text-dark">Voltar</span>
                  <?php } ?>
                    </li>  
                          <!-- ************* -->

                          <!-- NUMERAÇÃO DA PÁGINA -->
                  <?php for($i = 1; $i < $num_pagina + 1; $i++){ ?>     
                    <li class="page-item"><a class="page-link text-dark" href="computadores.php?pagina=<?php echo $i; ?>"><?php echo $i ?></a></li>
                  <?php } ?>
                             <!-- ************* -->
                  <?php if($proximo <= $num_pagina){ ?>           
                    <li class="page-item"><a class="page-link text-dark" href="computadores.php?pagina=<?php echo $proximo; ?>">proximo</a></li>
                  <?php }else{ ?>
                    <a class="page-link text-muted">Proximo</a>
                  <?php } ?>    
                  </ul>
                            <!-- FIM DA PAGINAÇÃO -->
        </div>
    </body>

    <?php
  include "../footer.inc";
?>