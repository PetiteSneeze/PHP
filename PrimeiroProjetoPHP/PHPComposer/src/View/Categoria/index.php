<?php 

   include("../src/View/cabecalho.php");

   ?>
   <h1>Categorias Registradas</h1>
    <?php
    
    if(isset($_SESSION['gravar'])){
        if($_SESSION['gravar'])
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Registro gravado com sucesso!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
        else
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Erro ao gravar registro, verifique!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
            unset($_SESSION['gravar']);
    }

    if(isset($_SESSION['editar'])){
        if($_SESSION['editar'])
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Registro editado com sucesso!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
        else
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Erro ao editar registro, verifique!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
            unset($_SESSION['editar']);
    }

    if(isset($_SESSION['deletar'])){
        if($_SESSION['deletar'])
        echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
        Registro deletado!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
        else
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Erro ao deletar registro, verifique!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
            unset($_SESSION['deletar']);
    }
    ?>
    
        <table class="table table-striped table-hover" id="tabela">
            <thead class="table-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php

                while($c = $resultado->fetch(PDO::FETCH_ASSOC)){

                ?>
                <tr>
                    <th scope="row"><?=$c["id"]?></th>
                    <td><?=$c["descricao"]?></td>
                    <td>
                        <a href="/categoria/alterar/<?=$c["id"]?>" class="btn btn-outline-warning">Alterar</a>
                        <a href="/categoria/excluir/<?=$c["id"]?>"class="btn btn-outline-danger">Excluir</a>
                    </td>
                </tr>
               <?php } ?>
            </tbody>
            </table>




   <?php 

    include("../src/View/rodape.php");

   ?>