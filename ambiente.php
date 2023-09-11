<?php

  include "classes/conexao.php";
  include "classes/ambiente.php";
  
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/ambiente.css">
    
    <!--fonts-->
      
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
      
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
    
    <!--scripts-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" 
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <!-- Font Awesome -->
      <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
      <!-- Progress Bar -->
      <script src="js/progressbar.min.js"></script>
      <!-- Parallax -->
      <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
      <script src="js/scripts.js"></script>
      
      <!-- Scripts (jQuery não pode ser o slim que vem do Boostrap) -->
     
    </head>
    <body>
       
        
        <header>
            <div class="container" id="nav-container" >
                <nav class="navbar navbar-expand-lg fixed-top navbar-light">
                    <a id="logo" href="index.php" class="navbar-brand"> 
                        <img id="logo" src="img/maiara_estetica/logo2.png" alt="not found">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" 
                    aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    
                    <div class="collapse navbar-collapse justify-content-end" style="float: left;"id="navbar-links" style="margin-right: 5%;">
                        
                            <a class="nav-item nav-link "   id="home-menu" href="#">Sobre mim</a>
                            
                            
                            
                            <a class="nav-item nav-link"   id="about-menu" style="color: rgb(238, 94, 10);" href="#" >Sobre a empresa</a>
                            
                           
                            
                            <a class="nav-item nav-link "    id="services-menu"  style="color: rgb(219, 207, 32)" href="#">Ambiente e procedimentos</a>
                          
                            
                          
                          
                    
                            
                            <a class="nav-item nav-link "   style="font-size: 18px; color: rgb(90, 160, 90)" href="login.html">Login </a>
                      
                            
                    </div>
                    
                </nav>
            </div>
        </header>
     <!--sessão sobre a empresa-->
     <div id="services-area">
      <div class="container-fluid">


        <div class="row">
          <div class="col-12">
            <h1 class="main-title-ambiente" style="margin-top: 10%;">Ambiente</h1>

            <?php
              
  if (isset($_FILES["arquivo2"]) && !empty($_FILES["arquivo2"])){
                $a = new ambiente();

                $img_amb = $_FILES['arquivo2'];
                var_dump($img_amb);

              $destino = "./img/maiara_estetica/ambiente_banco/".$img_amb['name'];

              var_dump($destino);

              move_uploaded_file($img_amb["tmp_name"], $destino);

              if ($a->cadastrarAmbiente($destino) == true) {

                echo "imagem inserida";

              } else {

                echo "imagem nao inserida";
              }

            }
              
            ?>

            <div style="justify-content: left; margin-bottom: 5%;">

            <form action="ambiente.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
            <input id="file" type="file" class="form-control-file" name="arquivo2" >
        
            </div>
            <div class="form-group">
            <input type="submit" value="Adicionar" class="btn btn-success">
            </div>
            </form>
      
         </div>
          </div>
            
         

 <!--MODAL-->

 <!-- Button trigger modal -->


<!-- Modal -->



          <div class="col-md-3 project-box seo">
            <img src="img/maiara_estetica/ambiente/ambiente1 (2).jpg" class="img-fluid" alt="projeto 1">

            <div style="display: flex; align-items: center, vertical-align: center">
              <a id="excluir" class="btn btn-danger" href="http://">excluir</a>

              
              
              <input id="file" type="file" class="form-control-file" name="arquivo" >
              
            
            </div>
          </div>
          <div class="col-md-3 project-box dev">
            <img src="img/maiara_estetica/ambiente/ambiente4.jpg" class="img-fluid" alt="projeto 1" >
          </div>
          <div class="col-md-3 project-box dsg">
            <img src="img/maiara_estetica/ambiente/ambiente6.jpg" class="img-fluid" alt="projeto 1" >
          </div>
          <div class="col-md-3 project-box seo">
            <img src="img/maiara_estetica/ambiente/ambiente9.jpg" class="img-fluid" alt="projeto 1" style="  ">
          </div>
          <div class="col-md-3 project-box seo">
            <img src="img/maiara_estetica/ambiente/ambiente5.jpg" class="img-fluid" alt="projeto 1" style="  ">
          </div>
          <div class="col-md-3 project-box seo">
            <img src="img/maiara_estetica/ambiente/ambiente6.jpg" class="img-fluid" alt="projeto 1" style="  ">
          </div>
          <div class="col-md-3 project-box seo">
            <img src="img/maiara_estetica/ambiente/ambiente7.jpg" class="img-fluid" alt="projeto 1" style="  ">
          </div>
          <div class="col-md-3 project-box seo">
            <img src="img/maiara_estetica/ambiente/ambiente8.jpg" class="img-fluid" alt="projeto 1" style="  ">
          </div>
          <div class="col-md-3 project-box seo">
            <img src="img/maiara_estetica/ambiente/ambiente9.jpg" class="img-fluid" alt="projeto 1" >
          </div>
          <div class="col-md-3 project-box seo">
            <img src="img/maiara_estetica/ambiente/aimbiente10.jpg" class="img-fluid" alt="projeto 1" >
          </div>
          </div>

        </div>
     </div>

     <div id="about-area" >
      <div class="container" style="padding-bottom: 3%;">
        <div class="row"> <!--classe das linhas-->
          <div class="col-12"><!--numro de colunas-->

            <h3 class="main-title" style="padding-top: 5%;">Sobre mim</h3>
          </div>
          <div class="col-md-6" style=""><!--numro de colunas para tela de tamanha medio, define da div interna-->
            <img class="img-fluid" src="img/maiara_estetica/maiara1.png"  alt="agencia hdc"><!--img-fluid faz a imagem se adaptar ao tamanho da div-->

          </div>
          <div class="col-md-6"><!--numro de colunas para tela de tamanha medio-->
            <h4 class="about-title">Uma agencia que pensa no futuro</h4>
            <p>Nossos projetos são adptados aos propósitos dos clientes</p>
            <p>Basta uma espicificação do projetos e nossos engenheiros ja começarão a trabalhar e 
              nossos designer já começarão o layout mais atraente possível
            </p>
            <p>vej aoutro Serviços</p>
            <ul id="about-list">
              <li><i class="fa fa-check"></i>layout bom responsivo</li>
              <li><i class="fa fa-check"></i>roda em todos os dispositivos</li>

              <li><i class="fa fa-check"></i>roda com internet baixa</li>
              <li><i class="fa fa-check"></i>layout bom responsivo</li>
              <li ><i class="fa fa-check"></i>roda em todos os dispositivos</li>

            </ul>
            
          </div>

        </div>

      </div>

    </div>

    
    </body>

</html>