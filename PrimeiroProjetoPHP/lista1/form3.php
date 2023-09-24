<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário com Duas Colunas</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .container {
      margin-top: 20px;
    }
    .btn-limpar {
      background-color: #ffffff;
    }
    .btn-enviar {
      background-color: #007bff;
      color: #fff;
    }
  </style>
</head>
<body class="container">
  <div class="container">
  <h1 style="margin-left: 100px;">Form 09876543</h1>
    <h1 style="margin-right: 10px;">Form 2</h1>
    <form>
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="label1">Label 1</label>
                <input type="text" class="form-control" id="label1">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
              <label for="frutas">Escolha uma fruta:</label>
              <select id="frutas" name="frutas">
                <option value="maca">Maçã</option>
                <option value="laranja">Laranja</option>
                <option value="banana">Banana</option>
                <option value="uva">Uva</option>
              </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="label2">Label 2</label>
                <input type="text" class="form-control" id="label2">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
              <label for="frutas">Escolha uma opção:</label>
              <select id="frutas" name="frutas">
                  <option value="maca">...</option>
                  <option value="laranja">...</option>
                  <option value="banana">...</option>
                  <option value="uva">...</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="label3">Label 3</label>
                <input type="text" class="form-control" id="label3">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="label4">Label 4</label>
                <input type="text" class="form-control" id="label4">
               
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="label4"></label>
                <input type="text" class="form-control" id="label4">
                
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="label4"></label>
                <input type="text" class="form-control" id="label4">
                
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="label4"></label>
                <input type="text" class="form-control" id="label4">
              
            </div>
          </div>
        </div>
      
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="label5">Label 5</label>
                <input type="text" class="form-control" id="label5">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="label6">Label 6</label>
                <input type="text" class="form-control" id="label6">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
              <label for="frutas">Escolha uma opção:</label>
              <select id="frutas" name="frutas">
                  <option value="maca">...</option>
                  <option value="laranja">...</option>
                  <option value="banana">...</option>
                  <option value="uva">...</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="label8">Label 8</label>
                <input type="datetime-local" class="form-control" id="label8">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="label9">Label 9</label>
                <input type="text" class="form-control" id="label9">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="label10">Label 10</label>
                <input type="text" class="form-control" id="label10">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
              <label for="frutas">Escolha uma opção:</label>
              <select id="frutas" name="frutas">
                  <option value="maca">...</option>
                  <option value="laranja">...</option>
                  <option value="banana">...</option>
                  <option value="uva">...</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-end">
        <div class="col-md-6">
          <button type="reset"  class="btn btn-secondary" style="margin-left: 450px;">Limpar</button>
        </div>
        <div class="col-md-6">
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
      </div>
    </form>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
