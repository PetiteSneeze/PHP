<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Formulário de Cadastro</title>
</head>
<body>
<div class="container mt-5">
        <h2 class="text-center mb-4">Cadastro</h2>
        <div class="row">
            <!-- Coluna Esquerda -->
            <div class="col-md-6">
                <form method="POST" enctype="multipart/form-data" action="envio.php">
                    <!-- Campo Nome -->
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" name="nome" class="form-control" id="nome" placeholder="Seu Nome">
                    </div>

                    <!-- Campo CPF -->
                    <div class="mb-3">
                        <label for="cpf" class="form-label">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Seu CPF">
                    </div>

                    <!-- Data de Nascimento -->
                    <div class="mb-3">
                        <label for="data-nascimento" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" name="data_nascimento" id="data_nascimento">
                    </div>

                    <!-- Sexo -->
                    <div class="mb-3">
                        <label class="form-label">Sexo</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sexo" id="sexo_masculino"  value="Masculino">
                            <label class="form-check-label" for="sexo-masculino">Masculino</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sexo" id="sexo_feminino"  value="Feminino">
                            <label class="form-check-label" for="sexo-feminino">Feminino</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="estado-civil" class="form-label">Estado Civil</label>
                        <select class="form-select" id="estado_civil"name="estado_civil">
                            <option value="solteiro">Solteiro</option>
                            <option value="casado">Casado</option>
                            <option value="divorciado">Divorciado</option>
                            <option value="viuvo">Viúvo</option>
                        </select>
                    </div>

                    <!-- Renda Mensal -->
                    <div class="mb-3">
                        <label for="renda-mensal" class="form-label">Renda Mensal</label>
                        <input type="number" class="form-control" id="renda_mensal" name="renda_mensal" placeholder="Sua Renda Mensal">
                    </div>
              
            </div>

            <!-- Coluna Direita -->
            <div class="col-md-6">
                
                    <!-- Estado Civil -->
                    

                    <!-- Endereço -->
                   
                    <div class="mb-3">
                        <label for="logradouro" class="form-label">Logradouro</label>
                        <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Seu Logradouro">
                    </div>
                    <div class="mb-3">
                        <label for="numero" class="form-label">Número</label>
                        <input type="text" class="form-control" id="numero" name="numero" placeholder="Número">
                    </div>
                    <div class="mb-3">
                        <label for="complemento" class="form-label">Complemento</label>
                        <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Complemento">
                    </div>
                    <div class="mb-3">
                        <label for="estado" class="form-label">Estado</label>
                        <input type="text" class="form-control" id="estado" name="estado" placeholder="Seu Estado">
                    </div>
                    <div class="mb-3">
                        <label for="cidade" class="form-label">Cidade</label>
                        <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Sua Cidade">
                    </div>
                        <div class="mb-3">
                            <label for="arquivo" class="form-label">
                                Selecione o arquivo:
                            </label>
                            <input type="file" class="form-control" name="arquivo"
                            id="arquivo"/>
                        </div>
                    </div>
                    <div class="text-center">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </div>
                </form>
            </div>
        </div>

        <!-- Botão de Cadastro -->
       

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
