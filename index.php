<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Login</title>
</head>



<body>

    <div class="main-login">


    <div class="left-login">
        <h1>G.E.M.A <br> Gerenciador de Eventos Mediados Acadêmicos.</h1>
         <img src="assets/img/calendar.svg"  class="animação" alt="calendário">
    </div>

    <div class="right-login">

               <div class="card-login">
               <h1><img src="assets/img/1200x600wp_-_Editado.png"  class="if" alt="if">&nbspLOGIN</h1> 
              

                <div class="textfield">

                  <label for="usuario">Usuário</label>
                  <input type="text" name="usuario" placeholder="Usuário">
                
                </div>

                <div class="textfield">

                <label for="senha">Senha:</label>
                <input type="password" name="senha" placeholder="Senha">

                </div>

                <button class="btn-login"> <a href="/public_html/gema/principal.php">Login</a></button> 

                <button class="btn-cadastro"> <a href="cadastro.php">Cadastre-Se</a></button> 

                


                </div>

        
    </div>
    
    
</body>
</html>
