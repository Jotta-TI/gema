<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Principal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


     <style>

.modal{

        width: 300px;
    }


.modal-content{

        width: 300px;
        background-color: #9abf99;

    }

.list-group-item{

         background-color: #9abf99;
         
    }

.list-group-item:hover{

background-color: #67A665;

}

.imagem {

    width:100px ;
    height:100px ;
    border-radius:100px ;
    margin-left: 75px;

}

.container-fluid{

    background-color: #67A665;

}

.container-fluid h3{

color: #fff;
font-size:16px;

}

.container-fluid span{

color: #b2d3b1;

}

#sidebar_btn {

    
    left:1px;
    color: #fff;
    font-size: 25px;
    margin: 5px 0;
    cursor: pointer;
    transition:0.5s;
    transition-property:color;
    bottom: 8px;
    
}

.sair_btn {

text-decoration: none;
color: #fff;

}

.sair_btn:hover{


color: #fff;

}



</style>


</head>

<body style="background-image: url(assets/img/const.jpeg);">

    <nav class="navbar navbar-light shadow" style="background-color: #67A665;">
        
        <div class="container-fluid">

          <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <ion-icon name="menu-outline" id="sidebar_btn"></ion-icon>
          </button>

          <h3>G.E.M.A<span> - Gerenciador de Eventos Mediados Acadêmicos </span> </h3>

        </div>

      </nav>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          
          <center>

            <img src="assets/img/1200x600wp_-_Editado.png" class="imagem">
             <h2 style="margin-left: 60px;">Úsuario</h2>

        </center>

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          
            <ul class="list-group list-group-flush">
                <li class="list-group-item">[Em Desenvolvimento]</li>
                <li class="list-group-item">[Em Desenvolvimento]</li>
                <li class="list-group-item">[Em Desenvolvimento]</li>
                <li class="list-group-item">[Em Desenvolvimento]</li>
                <li class="list-group-item">[Em Desenvolvimento]</li>
              </ul>


              




        </div>


        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-secondary"><a href="login.html" class="sair_btn">Sair</a></button>
          
        </div>
      </div>
    </div>
  </div>


  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    
</body>
</html>