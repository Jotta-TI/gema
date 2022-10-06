<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/index.css">
    <title>Login</title>
</head>



<body>

    <div class="main-login">


    <div class="left-login">
        <h1>G.E.M.A <br> Gerenciador de Eventos Mediados Acadêmicos.</h1><br>
        <img src="assets/img/gema-removeb.png"  class="animação" alt="calendário" style="width: 25vw;">
    </div>

    <form action="select.php" method="post" id="form" class="right-login">

               <div class="card-login">
               <h1><img src="assets/img/1200x600wp_-_Editado.png"  class="if" alt="if">&nbspLOGIN</h1> 
              

                <div class="textfield">

                  <label for="usuario">Usuário</label>
                  <input type="text"id="usuario" name="usuario" placeholder="Usuário">
                  <i><img class="img-success" src="assets/img/success-icon.svg" alt=""></i>
                  <i><img class="img-error" src="assets/img/error-icon.svg" alt=""></i>
                    
                   <small> Error message </small>
                </div>

                <div class="textfield">

                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" placeholder="Senha">
                <i><img class="img-success" src="assets/img/success-icon.svg" alt=""></i>
                <i><img  class="img-error" src="assets/img/error-icon.svg" alt=""></i>
                    
                 <small> Error message </small>
                  
                </div>

                <button type="submit" class="btn-login">Login</button> 

                <button class="btn-cadastro"> <a href="cadastro.php">Cadastre-Se</a></button> 

                


                </div>

        
    </form>
    
    <script type="text/javascript" src="assets/js/index.js"></script>
    
</body>
</html>
