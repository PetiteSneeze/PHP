<?php 

   include("../src/View/cabecalho.php");

   ?>
   
   <?php 

    include("../src/View/rodape.php");

   ?>
   <h1>Excluir Categoria</h1>
   
   <form method="post" action="/categoria/deletar/<?=$resultado['id']?>">
        <div class="row">
            <div class="col">
                <label for="descricao" class="form-label">
                    Descrição:
                </label>
                <input type="text" class="form-control" 
                    name="descricao" id="descricao"
                    value="<?=$resultado['descricao']?>" disabled/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h5 class="text-denger">

                    Deseja realmente excluir registro?

                </h5>
                <button type="submit" class="btn btn-danger">
                  Excluir
                </button>
            </div>
        </div>
        </form>