
      <!DOCTYPE html>
      <html lang="pt-br">
      
      <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Formulário</title>
      </head>
      <body>
        <div class="container">
          <div class="form-image">
            <img src="assets/img/If1-removebg-preview.png" alt="">
          </div>
        <div class="form">
          <form action="confim_cadastro.php" method="post">
          <div class="form-header">
            <div class="title">
              <h1>Confirmação de e-mail</h1>
            </div>
            
          </div>
      
          <div class="input-group">
            <div class="input-box">
              <label for="firstname"> Código de confirmação</label>
              <input id="firstname" type="text" name="cdg2" placeholder="Digite o código que recebeu do e-mail" required>
            </div>
      
            <div class="continue-button">
              <button><a href="index.php">Entrar</a></button>
            </div>
              <br>
            <div class="continue-button">
              <button type="submit">Enviar Código</button>
            </div>
      
          </div>
      
          </div>
          </form>
        </div>
        </div>
      </body>
      
      </html>

