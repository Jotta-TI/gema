<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/principal.css">
    <link href='assets/css1/core/main.min.css' rel='stylesheet' />
    <link href='assets/css1/daygrid/main.min.css' rel='stylesheet' />
    <script src='assets/js1/core/main.min.js'></script>
    <script src='assets/js1/interaction/main.min.js'></script>
    <script src='assets/js1/daygrid/main.min.js'></script>
    <script src='assets/js1/core/locales/pt-br.js'></script>
    <script>
document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                locale: 'pt-br',
                plugins: ['interaction', 'dayGrid'],
                //defaultDate: '2019-04-12',
                editable: true,
                eventLimit: true,
                events: 'list_eventos.php',
                extraParams: function () {
                    return {
                        cachebuster: new Date().valueOf()
                    };
                }
            });
            calendar.render();
        });
    </script>
    <style>
        
        #calendar {
            max-width: 900px;
            margin: 0 auto;
            margin-top:100px;
        }
    </style>
</head>
<body>
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
        <!--<h2 ><span>Gerenciador de Eventos Mediados Acadêmicos</span> </h2>-->
         
      </div>
   </nav>
   <div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 col-lg-4 mb-5" style="background-color:rgb(255, 255, 255);height:730px;width:330px;" >
          
        <div class="col" style="background-color:#67A665;margin-top:350px;height:340px;width:310px;">
          Em construção
        </div>
        <div class="col" style="background-color:#67A665;margin-top:-650px;height:290px;width:310px;">
        Em construção
        </div>
        </div>
        <div class="col-xl-6 col-lg-4 mb-5" style="background-color:#fff">
                    
        <div id='calendar' style="background-color: #fff;"></div> 
          
        </div>
        <div class="col-sm-6 col-lg-4 mb-5" style="background-color:rgb(255, 255, 255);width:330px;">
          
        <div class="col" style="background-color:#67A665;height:655px;margin-top:35px;width:320px;">
        Em construção
        </div>
        </div>
    </div>
    </div>
<div class="container-fluid">
</div>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          
          <center>
            <img src="assets/img/1200x600wp_-_Editado.png" class="imagem">
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
