<!DOCTYPE html>
<html lang="pt-br">

<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Principal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/menu.css">


</head>


<body style="background-color:#fff;">

   <nav class="navbar navbar-light shadow fixed-top"  style="background-color: #67A665;">
        
       <div class="container-fluid">

        
          <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <ion-icon name="menu-outline" id="sidebar_btn"></ion-icon>
          </button>


          <a class="navbar-brand1" href="principal.php">
            <span>G.E.M.A</span>
          </a>

          <a class="navbar-brand">

          <span>Gerenciador de Eventos Mediados Acadêmicos</span>
          <img src="assets/img/logoGEMA.jpg" class="rounded-pill" id="logo">
          
          </a>

      </div>

   </nav>

  <div class="container">

  <div class="row">
    
 
    <div class="col-sm-4"style="background-color:#fff;margin-top:150px;" >


      <!--<div class= "acesso"><br>
      <span>Acesso rápido</span><br><br><br>
      <a href="" class="emailnome">Alterar email</a> <br><br>
      <a href="" class="senhanome">Alterar senha</a> <br><br>
      

      </div>-->

      <!--<div class= "acesso1"><br>

        <span>Acesso rápido</span><br><br><br>
        <a href="" class="emailnome">Alterar email</a> <br><br>
        <a href="" class="senhanome">Alterar senha</a> <br><br>
        
  
      </div>-->

      <div class="column">

        <div class="card">
  
          
        
        <span id="span2">Acesso rápido</span><br>
        <a href="" class="emailnome">Alterar email</a> <br>
        <a href="" class="senhanome">Alterar senha</a> <br><br>
  
        
  
        </div>
  
     
  
      </div>

      <div class="column">

        <div class="card">
  
          
        
        <span id="span2">Links úteis</span><br>
        <a href="" class="emailnome">Painel</a> <br>
        <a href="" class="eventos">Eventos no calendário</a> <br><br>
  
        
  
        </div>
  
     
  
      </div>

 
  
  
    </div>


 
    

    
    <div class="col-sm-8" style="background-color:#fff;margin-top:150px;">



    <div class="aa">



      
      <div class="column">

        <div class="card">

          
        <img src="assets/img/mic.jpeg" class="imagem1"> <br>
        <h3><b>Juliana Ferreira dos Santos Barbosa</b></h3>

        <a href="" class="editarnome">Editar perfil</a>

        </div>

        <h5>Informações do usúario</h5><br>

      </div>

       
      

      
       <span id="span1">Nome Completo:<br> 
       <span id="span1"><input type="text" name="teste" value="Juliana Barbosa" disabled=""></span></span><br><br>
       <!--<span>Juliana Ferreira dos Santos Barbosa</span><br><br>-->
       
      
        <span id="span1">Email:<br>
        <span id="span1"><input type="text" name="teste" value="julianaplay20@gmail.com" disabled=""></span></span><br></span><br>
        <!--<span>julianaplay20@gmail.com</span><br><br>-->

      
        <span id="span1">Prontuário:<br>
        <span id="span1"><input type="text" name="teste" value="gu3006834" disabled=""></span></span><br></span>
        <br> 
        <!--<span>gu3006834</span><br><br>-->

      
    

    </div>
    

    </div>


    
    <div class="col-sm-8" style="background-color:#fff;margin-top:150px;">


    </div>
      
  
    </div>

    </div>

  </div>

 

  </div> 

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-fullscreen">

      <div class="modal-content">
        
            <div class="modal-header">
          
            <center>

            <img src="assets/img/1200x600wp_-_Editado.png" class="imagem2">
            <h2 style="margin-left: 60px;" >Úsuario</h2>

            </center>

            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

                <div class="modal-body">
          
                <ul class="list-group list-group-flush">
                <li class="list-group-item"><ion-icon name="desktop-outline"></ion-icon> <span>Painel</span></li> 
                <li class="list-group-item"> <ion-icon name="calendar-outline"></ion-icon> <span>Eventos no Calendário</span></li>
                <li class="list-group-item"> <ion-icon name="settings-outline"></ion-icon><span>Processos</span></li>
                <li class="list-group-item"><ion-icon name="chatbox-outline"></ion-icon><span>Notificações</span></li>
                <li class="list-group-item"><ion-icon name="person-circle-outline"></ion-icon><span>Conta</span></li>
                </ul>

                 </div>


        <div class="modal-footer">
          <button type="button" class="btn btn-secondary"><a href="index.php" class="sair_btn">Sair</a></button>
        </div>
      </div>

    </div>
  </div>

    

</body>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</html>
